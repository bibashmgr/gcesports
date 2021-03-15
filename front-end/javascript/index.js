// ------------- //
// animated text //
// ------------- //

const texts = [
    "Welcome to GCES",
    "Hello, How you doing?",
    "Check this site to be updated about GCES sport meets event",
    "Hope you find this site interactive",
    "Thank you, DO VISIT TO STAY UPADTED!"
]

const txt = document.getElementById("animated-text");
let index = 0;

window.onload = animatedText();

function animatedText(){
    if(index == 4){
        index = 0;
    }else {
        index++;
    }
    txt.innerHTML = texts[index];
    setTimeout(animatedText,5000);
}