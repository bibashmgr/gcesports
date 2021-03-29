// ----------------------------------- //
// animated text for first-section part //
// ----------------------------------- //

const texts = [
    "LIVE: Kathmandu Mayor’s Cup 2021 – Tribhuwan Army Club vs Kathmandu Mayor’s XI",
    "Gary Phillips Becomes New Head Coach of Women’s Football Team!",
    "Nepal Selects Preliminary Squad of 32 for ICC WC League 2!",
    "Nepal to Play Bilateral T20I Series Against Qatar!",
    "Eight Nepali Cricketers Register for IPL 2021 Player Auction!"
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

// gallery section
// image slider 
// auto navigation function

let counter = 1;
setInterval(autoNav,5000);

function autoNav(){
    document.getElementById('radio'+counter).checked = true;
    counter++;
    if(counter > 5){
        counter = 1;
    }
}