$("#submit").click(function(e){
    e.preventDefault();
    var password = $('#password').val();
    var email = $('#email').val();
    var message = $('#message');
    if(email === '' || password === ''){
        message.text('fields empty');
        return;
    }
    if (!(/^(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/).test(email)){
        message.text('Invalid Email');
    }else {
        $.ajax({
            method: "POST",
            url: "",
            data: {
                email: email,
                password: password
            }
        }).done(function(data) {
            if(data === 'success'){
                window.location = '/codeigniter';
            }else {
                message.html(data);
            }
        }).fail(function() {
            message.text('Error! Please Try Again')
        });
    }
});