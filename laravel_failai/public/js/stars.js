
    // jQuery code to handle the rating selection and submission
    $(document).ready(function () {
    $('.stars i').click(function () {
        $(this).addClass('fas').removeClass('far').prevAll().addClass('fas').removeClass('far');
        $(this).nextAll().addClass('far').removeClass('fas');

        let rating = $(this).data('rating');
        let mediaId = $(this).parent('.stars').data('mediaid');
        let mediaType = $(this).parent('.stars').data('mediatype');


        $.ajax({
            url: '/' + mediaType + '/' + mediaId + '/rating',
            type: 'PUT',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {rating: rating},
            success: function (response) {
                console.log('atsakymo zinute ' + response.message);
            },
            error: function (xhr) {
                console.log('klaidos zinute' + xhr.responseText);
            }
        });
    });
});
