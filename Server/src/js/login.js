// var signUpButton = $('#signUp');
// var signInButton = $('#signIn');
// var container = $('#container');

// $('h1').click(function() {
//     $('#container').toggleClass("right-panel-active");
// });
$(document).ready(function() {
    $('#signUp').on('click', function() {
        $('#container').addClass("right-panel-active");
    });
    
    $('#signIn').click(() => {
        $('#container').removeClass("right-panel-active");
    });
});