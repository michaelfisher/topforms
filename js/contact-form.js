$(document).ready(function () {
    $("#contact-form").validate({
        rules: {
            name: {
                minlength: 2,
                required: true
            },
            email: {
                required: true,
                email: true
            },
            message: {
                minlength: 2,
                required: true
            }
        },
        highlight: function(element, errorClass) {
            $(element).closest(".form-group").addClass("has-error");
        },
        success: function (element) {
            $(element).closest(".form-group").removeClass("has-error");
        },
        errorPlacement: function(error, element) {
            error.insertAfter(element);
        },
        errorElement: "em",
        errorClass: "help-block"
    });
    $("input#submit").click(function(){
        if($("#contact-form").valid()) {
            $.ajax({
                type: "POST",
                url: "scripts/contact-form.php",
                data: $("#contact-form").serialize(),
                success: function(msg){
                    $("#contact-form")[0].reset();
                    $("#submit-status").html(msg)
                    $("#submit-status").fadeIn().delay(3000).fadeOut();
                },
                error: function(msg){
                    $("#submit-status").html(msg)
                    $("#submit-status").fadeIn().delay(3000).fadeOut();
                }
            });
        }
        return false;
    });
    $("#contact").on("hidden.bs.modal", function(){
        $("#contact-form").validate().resetForm();
        $(".form-group").removeClass("has-error");
        $("#submit-status").empty();
    });
});