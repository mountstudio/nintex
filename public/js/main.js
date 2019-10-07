let right = document.querySelector('.right'),
    left = document.querySelector('.left'),
    text = document.querySelector('#text'),
    counter = true;

function hide() {
    counter = !counter
    right.style.transform = 'translateX(0)'
    left.style.transform = 'translateX(0)'
    setTimeout(show, 500)
}
function show() {
    counter ? text.innerHTML = "<img src='img/slider1.svg' class='img-fluid' style='height: 500px;' alt='rabbit'>" : text.innerHTML = "<img src='img/slider2.svg' class='img-fluid' style='height: 500px;' alt='rabbit'>";
    right.style.transform = 'translateX(100%)'
    left.style.transform = 'translateX(-100%)'
}
show();
setInterval(hide, 3000);
