/*
function Slider(){
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
}
/!*Text Animation*!/



Slider();



function textAnimation(){


    const text1 = $('.text1');
    const text2 = $('.text2');


    const words = [text1,text2];
    let i = 0;
    let timer;

    function typingEffect() {
        let word = words[i].split("");
        var loopTyping = function() {
            if (word.length > 0) {
                document.getElementById('word').innerHTML += word.shift();
            } else {
                deletingEffect();
                return false;
            };
            timer = setTimeout(loopTyping, 500);
        };
        loopTyping();
    };

    function deletingEffect() {
        let word = words[i].split("");
        var loopDeleting = function() {
            if (word.length > 0) {
                word.pop();
                document.getElementById('word').innerHTML = word.join("");
            } else {
                if (words.length > (i + 1)) {
                    i++;
                } else {
                    i = 0;
                };
                typingEffect();
                return false;
            };
            timer = setTimeout(loopDeleting, 200);
        };
        loopDeleting();
    };

    typingEffect();
}
textAnimation();
*/
