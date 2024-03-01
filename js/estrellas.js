let stars = document.querySelectorAll('.estrella');

stars.forEach(function (star, index) {
    star.addEventListener('click', function () {
        for (var i = 0; i < star.id; i++){
            stars[i].classList.replace('fa-regular', 'fa-solid');
        }

        for (var i = star.id; i < stars.length; i++) {
            stars[i].classList.replace('fa-solid', 'fa-regular');
        }
    });

    star.addEventListener('keydown', function () {
        if(event.keyCode === 13){
            for (var i = 0; i < star.id; i++){
                stars[i].classList.replace('fa-regular', 'fa-solid');
            }
    
            for (var i = star.id; i < stars.length; i++) {
                stars[i].classList.replace('fa-solid', 'fa-regular');
            }
        }
    });
});