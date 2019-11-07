$(document).ready(function () {

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
