$(document).ready(function () {
    // Add a delete confirmation modal before allowing the user to delete the book
    $("#delete-book").click((e) => {
        e.preventDefault();
        $('#confirmation-modal').modal('show');
    });

    // Delete the book after the user has confirmed the deletion in the delete book modal
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
