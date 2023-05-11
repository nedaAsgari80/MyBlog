/* -------------------------------------------------------------------
 * Plugin Name           : Niwax - Php Ajax Modern Contact Form
 * Author Name           : Rajesh Doot
 * File Name             : main.js
------------------------------------------------------------------- */

(function ($) {
    "use strict";

$(document).ready(function() {
    // validate form on keyup and submit
    $("#contactform").validate({
        rules: {
            fullname: "required",
            mobile_number: {
                required: true,
                digits: true,
                /*minlength: 10,
                maxlength: 10,*/ 
            },
            interested_in: "required",
            email: {
                required: true,
                email: true
            },
            your_location: "required",
            skype_whatsapp_no: "required",
            description: "required",
            agree: "required"
        },
        // form error message (notify your visitor about their mistake)
        messages: {
            fullname: "لطفا نام خود را وارد کنید",
            mobile_number: {
                required: "لطفا یک شماره تلفن همراه معتبر وارد کنید",
                digits: "فقط اعداد مجاز 0-9 هستند",
               /* minlength: "حداقل 10 عدد",
                maxlength: "نه بیشتر از 10 عدد"*/
            },
            email: "لطفا یک آدرس ایمیل معتبر وارد کنید",
            interested_in: "لطفا علاقه خود را انتخاب کنید",
            agree: "لطفا شرایط و ضوابط را بپذیرید",
            your_location: "لطفا مکان خود را وارد کنید",
            skype_whatsapp_no: "لطفا شماره اسکایپ/واتساپ را وارد کنید.",
            description: "لطفا در مورد پروژه خود توضیح دهید"
        },
        errorPlacement: function(error, element) {
            var newelement = element.next('label').next('div');
            newelement.html(error);
        },
        submitHandler: function() {
            $(':input[type="submit"]').prop('disabled', true);
            $('.loader').addClass('loader-icon');
            let formData = new FormData($('#contactform')[0]);
            $.ajax({
                url: "phpmailer/email/send.php",
                type: "POST",
                dataType: 'json',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                success: function(result) {
                    console.log(result);
                    if (result.success) {
                        Swal.fire({
                            title: 'موفق!',
                            text: result.message,
                            icon: 'success',
                            confirmButtonText: 'ممنون'
                        })
                        $("#contactform")[0].reset();
                    } else {
                        Swal.fire({
                            title: 'خطا!',
                            text: result.message,
                            icon: 'error',
                            confirmButtonText: 'باشه'
                        });
                    }
                    $('.loader').removeClass('loader-icon');
                    $(':input[type="submit"]').prop('disabled', false);
                },
                error: function(msg) {
                    console.log('error', msg);
                    $('.loader').removeClass('loader-icon');
                    $(':input[type="submit"]').prop('disabled', false);
                    Swal.fire({
                        title: 'خطا!',
                        text: 'اوه! خطایی رخ داد. لطفا بعدا امتحان نمایید.',
                        icon: 'error',
                        confirmButtonText: 'باشه'
                    });
                }
            });
        }
    });

    $('.floating-input, .floating-select, .ctminpt').on('focusout', function() {
        $(this).valid();
    });
});


// end of js
})(jQuery);