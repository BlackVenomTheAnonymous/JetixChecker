$(document).ready(function () {
    $('body').hide().fadeIn(1500).delay(6000);

    const correctPassword = "Jetix";

    $("#login").click(function () {
        let inputPassword = $("#username").val();

        if (inputPassword === correctPassword) {
            playsfx();
            $.redirect('../index.php', { 'un': inputPassword });
        } else {
            // Show an error message or alert if the password is incorrect
            alert("Incorrect password. Please try again.");
        }
    });
});

function playsfx() {
    var x = document.getElementById("bvsfx");
    x.play();
}