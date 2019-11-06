$(document).ready(function () {
    $("#delete-book").click((e) => {
        e.preventDefault();
        $('#confirmation-modal').modal('show');
    });
    $("#delete").click(e => {
        deleteUrl = $("#delete-book").attr('href');
        console.log(deleteUrl)
        $.ajax({
            url: deleteUrl,
            type: 'delete',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            contentType: false,
            processData: false,
            success: (response) => {
                window.location.replace('/books');
            }
        });
    })
})
