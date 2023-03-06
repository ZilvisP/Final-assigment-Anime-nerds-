$(document).ready(function () {
    $.ajax({
        url: "/api/popular_anime",
        type: "GET"
    }).done(function (data) {
        let anime = data.data;
        let animeHtml = '';
        for (let i = 0; i < anime.length; i++) {
            let animeData = anime[i];
            animeHtml += `
                <div class="flex flex-col justify-between items-center">
                    <div class="flex justify-center items-center">
                        <img src="${animeData.cover_image}" alt="${animeData.title}" class="w-40 h-40">
                    </div>
                    <div class="flex flex-col justify-center items-center">
                        <p class="font-medium text-base leading-4 text-gray-800 dark:text-white">${animeData.title}</p>
                        <p class="font-normal text-sm leading-3 text-gray-600 dark:text-gray-300">${animeData.rating} / 10</p>
                    </div>
                </div>
            `;
        }
        $('#popular_anime').html(animeHtml);
    }).fail(function (data) {
        console.log(data);
    });

    $.ajax({
        url: "/api/new_anime",
        type: "GET"
    }).done(function (data) {
        let anime = data.data;
        let animeHtml = '';
        for (let i = 0; i < anime.length; i++) {
            let animeData = anime[i];
            animeHtml += `
                <div class="flex flex-col justify-between items-center">
                    <div class="flex justify-center items-center">
                        <img src="${animeData.cover_image}" alt="${animeData.title}" class="w-40 h-40">
                    </div>
                    <div class="flex flex-col justify-center items-center">
                        <p class="font-medium text-base leading-4 text-gray-800 dark:text-white">${animeData.title}</p>
                        <p class="font-normal text-sm leading-3 text-gray-600 dark:text-gray-300">${animeData.rating} / 10</p>
                    </div>
                </div>
            `;
        }
        $('#new_anime').html(animeHtml);
    }).fail(function (data) {
        console.log(data);
    });

    $.ajax({
        url: "/api/popular_manga",
        type: "GET"
    }).done(function (data) {
        let manga = data.data;
        let mangaHtml = '';
        for (let i = 0; i < manga.length; i++) {
            let mangaData = manga[i];
            mangaHtml += `
                <div class="flex flex-col justify-between items-center">
                    <div class="flex justify-center items-center">
                        <img src="${mangaData.cover_image}" alt="${mangaData.title}" class="w-40 h-40">
                    </div>
                    <div class="flex flex-col justify-center items-center">
                        <p class="font-medium text-base leading-4 text-gray-800 dark:text-white">${mangaData.title}</p>
                        <p class="font-normal text-sm leading-3 text-gray-600 dark:text-gray-300">${mangaData.rating} / 10</p>
                    </div>
                </div>
            `;
        }
        $('#popular_manga').html(mangaHtml);
    }).fail(function (data) {
        console.log(data);
    });

    $.ajax({
        url: "/api/new_manga",
        type: "GET"
    }).done(function (data) {
        let manga = data.data;
        let mangaHtml = '';
        for (let i = 0; i < manga.length; i++) {
            let mangaData = manga[i];
            mangaHtml += `
            <div class="flex flex-col justify-between items-center">
                <div class="flex justify-center items-center">
                    <img src="${mangaData.cover_image}" alt="${mangaData.title}" class="w-40 h-40">
                </div>
                <div class="flex flex-col justify-center items-center">
                    <p class="font-medium text-base leading-4 text-gray-800 dark:text-white">${mangaData.title}</p>
                    <p class="font-normal text-sm leading-3 text-gray-600 dark:text-gray-300">${mangaData.rating} / 10</p>
                </div>
            </div>
        `;
        }
        $('#new_manga').html(mangaHtml);
    }).fail(function (data) {
        console.log(data);
    });
})
