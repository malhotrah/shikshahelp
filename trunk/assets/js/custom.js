/**
 * Created with JetBrains PhpStorm.
 * User: Hitanshu
 * Date: 3/2/13
 * Time: 6:43 PM
 * To change this template use File | Settings | File Templates.
 */

/** Contact Form **/

$(document).ready(function () {

    $("#cname").keypress(function () {
        if ($.trim( $("#cname").val() ) != "")
            $(".name-error .error").remove();

    });
$("#cemail").keypress(function () {
    if ($.trim( $("#cemail").val() ) != "")
    $(".email-error .error").remove();

    });
$("#cphone").keypress(function () {
    if ($.trim( $("#cphone").val() ) != "")
    $(".phone-error .error").remove();

    });
$("#ccomment").keypress(function () {
    if ($.trim( $("#ccomment").val() ) != "")
    $(".message-error .error").remove();

    });

$('#contact-form-id').submit(function () {

    $('.error').remove();
    var hasError = false;
    $('.requiredField').each(function () {
    if (jQuery.trim($(this).val()) == '') {
    var labelText = $(this).prev('label').text();
    $(this).parent().append('<div class="error span11 margin-0">Must enter ' + labelText + '</div>');
    $(this).addClass('inputError');
    hasError = true;
    } else if ($(this).hasClass('email')) {
    var emailReg = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
if (!emailReg.test(jQuery.trim($(this).val()))) {
    var labelText = $(this).prev('label').text();
    $(this).parent().append('<div class="error span11">Invalid ' + labelText + '</div>');
    $(this).addClass('inputError');
    hasError = true;
    }} else if ($(this).hasClass('number')){
    var phoneReg= /^[0-9-+]+$/;
    if (!phoneReg.test(jQuery.trim($(this).val()))) {
    var labelText = $(this).prev('label').text();
    $(this).parent().append('<div class="error span11 margin-0">Invalid ' + labelText + '</div>');
    $(this).addClass('inputError');
    hasError = true;
    }
}else if ($(this).hasClass('character')){
    var nameReg= /^[a-zA-Z\s]+$/;
    if (!nameReg.test(jQuery.trim($(this).val()))) {
    var labelText = $(this).prev('label').text();
    $(this).parent().append('<div class="error span11 margin-0">Invalid ' + labelText + '</div>');
    $(this).addClass('inputError');
    hasError = true;
    }
}

});
if (!hasError) {
    $('#contact-form-id input.submit').fadeOut('normal', function () {
        $(this).parent().append('');

    });
$('#contact-form').hide();
$('#contact-loading').show();
var formInput = $(this).serialize();
$.post($(this).attr('action'), formInput, function (data) {
    $('#contact-form-id').slideUp("fast", function () {

        $('#contact-loading').addClass('success').addClass('contact_success').html('Thanks for contacting us! Our team will soon get back to you.');
    });
});

}

return false;

});

});
