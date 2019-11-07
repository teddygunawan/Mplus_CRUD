$(document).ready(function () {
    let newBookId = null;

    // Create an ajax request to the backend to post the new book data. If there is error, display that error. Otherwise,
    // Show a modal indicating the successful request and ask if they wish to add more book or be redirected to the added book.
    $("#create-book").submit((e) => {
        e.preventDefault();
        $("#errors").empty();
        $("#error-section").hide();
        let formData = new FormData(document.querySelector('form'));

        $.ajax({
            url: '/books',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            success:  (response) => {

                $('#success-modal').modal('show');
                newBookId = response.book_id;
            },
            error: (response) =>{
                $("#error-section").show();
                response = JSON.parse(response.responseText)
                for (var key in response.errors){
                    $("#errors").append(`<li> ${response.errors[key]}</li>`);
                }
            }
        });
    });

    // Clean the form as user wish to add new book
    $("#add-more-book").click((e) =>{
        $("#create-book").trigger("reset");
        $('#success-modal').modal('hide');
        $('#uploaded-image').hide();
    });

    // Redirect user to the newly added book
    $("#view-book").click((e) =>{
        window.location.replace(`/books/${newBookId}`);
    });

    // Detect Changes in the file input, if the user uploaded an image, try to display that image as preview.
    $("#book-cover").change((e) =>{
        let reader = new FileReader();
        reader.onload = (e) =>{
            $('#uploaded-image').attr('src', e.target.result)
        };
        
        reader.readAsDataURL(e.originalEvent.srcElement.files[0]);
        $("#preview-section").show()
    });
})
