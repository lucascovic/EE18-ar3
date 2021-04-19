// Element vi använder
const canvas = document.querySelector("canvas");

// Ställ in storlek på canvas
canvas.width = 600;
canvas.height = 500;

// Slå på rit-api
var ctx = canvas.getContext("2d");


// Figur objektet
var figur = {
    x: 25,
    y: 25,
    rotation: 0,
    bild: new Image()
}
figur.bild.src = "../nyckelpiga.png";

// Rita figuren
function ritaFigur() {
    ctx.save(); 
    ctx.translate(figur.x, figur.y);
    ctx.rotate(figur.rotation / 180 * Math.PI);
    ctx.drawImage(figur.bild, -25, -25, 50, 50);
    ctx.restore();
}

// Animationsloopen
function loopen() {
    ctx.clearRect(0, 0, 600, 500);
    // rita ut figuren
    ritaFigur();
    
    requestAnimationFrame(loopen);
}

// Starta loopen
loopen();

// Lyssna på piltangenter
window.addEventListener("keypress", function(e) {

    switch (e.code) {
        case "KeyS": // nedåt
                figur.y += 50;
                figur.rotation = 180;
            break;
        case "KeyW": // uppåt
                figur.y -= 50;
                figur.rotation = 0;
            break;
        case "KeyA": // vänster
            figur.x -= 50;    
            figur.rotation = 270;
           
            break;
        case "KeyD": // höger
            figur.x += 50;  
            figur.rotation = 90;    
            break;

        default:
            break;
    }
    console.log("Kolumn : " + (figur.x - 25) / 50 + ", rad : " + (figur.y - 25) / 50);
});