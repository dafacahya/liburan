$(document).ready(function() {
    $('#showPassword').click(function() {
        var passwordInput = $('#password');
        var passwordFieldType = passwordInput.attr('type');
        if (passwordFieldType === 'password') {
            passwordInput.attr('type', 'text');
            $(this).html('Hide');
        } else {
            passwordInput.attr('type', 'password');
            $(this).html('Show');
        }
    });

    $('#showRepeatPassword').click(function() {
        var repeatPasswordInput = $('#repeat_password');
        var repeatPasswordFieldType = repeatPasswordInput.attr('type');
        if (repeatPasswordFieldType === 'password') {
            repeatPasswordInput.attr('type', 'text');
            $(this).html('Hide');
        } else {
            repeatPasswordInput.attr('type', 'password');
            $(this).html('Show');
        }
    });
});