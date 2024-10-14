const about_btn = document.getElementById("about_btn");
const start_btn = document.getElementById("start_btn");

about_btn.addEventListener('click', function(event) {
    window.location.href = "https://www.google.com/";
});

start_btn.addEventListener('click', function(event) {
    window.location.replace('./login.php');
});