<?php

namespace App\Http\Managers;

namespace App\Http\Managers;

use App\Models\User;
use Illuminate\Http\UploadedFile;

class UserManager
{
    /**
     * Update the user's avatar image.
     *
     * @param User $user
     * @param UploadedFile|null $file
     * @return void
     */
    public function updateAvatar(User $user, ?UploadedFile $file): void
    {
        if ($file) {
            $fileManager = new FileManager();
            $path = 'uploads/avatars';
            $sizes = [
                'default' => [100, 100],
                'large' => [200, 200],
            ];

            $oldFileName = $user->avatar_image;
            $fileName = $fileManager->storeImage($file, $path, $sizes, $oldFileName);

            $user->avatar_image = $fileName;
        }

        $user->save();
    }
}
