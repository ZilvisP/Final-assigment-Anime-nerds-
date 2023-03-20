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
                <div>
                    <div>
                        <img src="${animeData.cover_image}" alt="${animeData.title}">
                    </div>
                    <div>
                        <p>${animeData.title}</p>
                        <p>${animeData.rating} / 10</p>
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
                <div>
                    <div>
                        <img src="${animeData.cover_image}" alt="${animeData.title}">
                    </div>
                    <div>
                        <p>${animeData.title}</p>
                        <p>${animeData.rating} / 10</p>
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
                <div>
                    <div>
                        <img src="${mangaData.cover_image}" alt="${mangaData.title}">
                    </div>
                    <div>
                        <p>${mangaData.title}</p>
                        <p>${mangaData.rating} / 10</p>
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
            <div>
                <div>
                    <img src="${mangaData.cover_image}" alt="${mangaData.title}">
                </div>
                <div>
                    <p>${mangaData.title}</p>
                    <p>${mangaData.rating} / 10</p>
                </div>
            </div>
        `;
        }
        $('#new_manga').html(mangaHtml);
    }).fail(function (data) {
        console.log(data);
    });
})
