$(document).ready(function () {
    let newBookId = null;
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
                newBookId = response.book_id
                console.log(response)
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

    $("#add-more-book").click((e) =>{
        $("#create-book").trigger("reset");
        $('#success-modal').modal('hide');
        $('#uploaded-image').hide();
    });
    $("#view-book").click((e) =>{
        window.location.replace(`/books/${newBookId}`);
    });

    $("#book-cover").change((e) =>{
        let reader = new FileReader();
        reader.onload = (e) =>{
            $('#uploaded-image').attr('src', e.target.result)
        };
        
        reader.readAsDataURL(e.originalEvent.srcElement.files[0]);
        $("#preview-section").show()
    });
})
