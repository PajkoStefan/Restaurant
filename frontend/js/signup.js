if(window.location.href.includes("signup=success")) {
    var goLogin = document.getElementById('loginreview');
    console.log(goLogin);
    goLogin.addEventListener('click', (event) => {
        otherPage('./home.php');
    });
}
else{
    pointerPage('review');
}