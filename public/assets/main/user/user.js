$(document).ready(function() {

    $('#register-user').click(function (){
        var firstname = $('#firstname').val();
        var lastname = $('#lastname').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var passwordConfirm = $('#password-confirm').val();
        var agreeTerms = $('#agreeTerms');

        if(firstname !== "" && /^[a-zA-Z ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ]+$/.test(firstname)){
            $('#firstname').removeClass('is-invalid');
            $('#firstname').addClass('is-valid');
            $('#error-register-firstname').text('');

            if(lastname !== "" && /^[a-zA-Z ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ]+$/.test(lastname)){
                $('#lastname').removeClass('is-invalid');
                $('#lastname').addClass('is-valid');
                $('#error-register-lastname').text('');

                if(email !== "" && /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/.test(email)){
                    $('#email').removeClass('is-invalid');
                    $('#email').addClass('is-valid');
                    $('#error-register-email').text('');

                    if(password !== "" && /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/.test(password) ){
                        $('#password').removeClass('is-invalid');
                        $('#password').addClass('is-valid');
                        $('#error-register-password').text('');

                        if(passwordConfirm === password ){
                            $('#password-confirm').removeClass('is-invalid');
                            $('#password-confirm').addClass('is-valid');
                            $('#error-register-password-confirm').text('');

                            if(agreeTerms.is(':checked') ){
                                $('#agreeTerms').removeClass('is-invalid');
                                $('#agreeTerms').addClass('is-valid');
                                $('#error-register-agreeTerms').text('');

                                $('#form-register').submit();


                            }else{
                                $('#agreeTerms').addClass('is-invalid');
                                $('#agreeTerms').removeClass('is-valid');
                                $('#error-register-agreeTerms').text('Your should agree to our terms and condition!');
                            }

                        }else{
                            $('#password-confirm').addClass('is-invalid');
                            $('#password-confirm').removeClass('is-valid');
                            $('#error-register-password-confirm').text('Your passwords must be identical!');
                        }

                    }else{
                        $('#password').addClass('is-invalid');
                        $('#password').removeClass('is-valid');
                        $('#error-register-password').text('Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character');
                    }

                }else{
                    $('#email').addClass('is-invalid');
                    $('#email').removeClass('is-valid');
                    $('#error-register-email').text('Your email address is not valid!');
                }

            }else{
                $('#lastname').addClass('is-invalid');
                $('#lastname').removeClass('is-valid');
                $('#error-register-lastname').text('Last Name is not valid!');
            }

        }else{
            $('#firstname').addClass('is-invalid');
            $('#firstname').removeClass('is-valid');
            $('#error-register-firstname').text('First Name is not valid!');
        }









        /*

        let check = checkAllValid();
        console.log(check.valueOf());
        if (check === true){
            console.log("ok 2");

            $('#form-register').submit();
        }*/

    });


    $('#agreeTerms').change(function (){
        var agreeTerms = $('#agreeTerms');

        if (agreeTerms.is(':checked')){
            $('#agreeTerms').removeClass('is-invalid');
            $('#error-register-agreeTerms').text('');
        }
        else {
            $('#agreeTerms').addClass('is-invalid');
            $('#error-register-agreeTerms').text('Your should agree to our terms and condition!');
        }
    });
/*
    function checkAllValid() {
        if ($('#firstname').hasClass('is-valid') &&
            $('#lastname').hasClass('is-valid') &&
            $('#email').hasClass('is-valid') &&
            $('#password').hasClass('is-valid') &&
            $('#password-confirm').hasClass('is-valid') &&
            $('#agreeTerms').hasClass('is-valid')) {

            console.log('check ok');
            return true;

        }
    }
*/

});

