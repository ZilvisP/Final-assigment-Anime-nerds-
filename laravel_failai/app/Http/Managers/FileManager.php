<?php

namespace App\Http\Managers;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class FileManager
{
    /**
     * Store an image in different sizes and delete the old image.
     *
     * @param UploadedFile $file
     * @param string $path
     * @param array $sizes
     * @param string|null $oldFileName
     * @return string
     */
    public function storeImage(UploadedFile $file, string $path, array $sizes, ?string $oldFileName = null): string
    {
        $fileName = $this->generateFileName($file);

        foreach ($sizes as $name => $dimensions) {
            $img = Image::make($file);
            $img->fit($dimensions[0], $dimensions[1]);
            $img->save(public_path($path . '/' . $name . '/' . $fileName));
        }

        if ($oldFileName) {
            $this->deleteImage($path, $oldFileName, $sizes);
        }

        return $fileName;
    }

    /**
     * Delete an image in different sizes.
     *
     * @param string $path
     * @param string $fileName
     * @param array $sizes
     * @return void
     */
    public function deleteImage(string $path, string $fileName, array $sizes): void
    {
        foreach ($sizes as $name => $dimensions) {
            Storage::delete($path . '/' . $name . '/' . $fileName);
        }
    }

    /**
     * Generate a unique file name for an uploaded file.
     *
     * @param UploadedFile $file
     * @return string
     */
    private function generateFileName(UploadedFile $file): string
    {
        $extension = $file->getClientOriginalExtension();
        $name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $fileName = $name . '_' . time() . '.' . $extension;

        return $fileName;
    }
}
