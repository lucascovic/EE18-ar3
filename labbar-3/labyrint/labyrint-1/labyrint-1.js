// Element vi använder
const canvas = document.querySelector("canvas");
const ePoints= document.querySelector("p");

// Ställ in storlek på canvas
canvas.width = 800;
canvas.height = 600;

// Slå på rit-api
var ctx = canvas.getContext("2d");

// Skapa kartan
var karta = [
    [0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
    [1, 0, 1, 1, 0, 1, 1, 0, 1, 1, 0, 1, 0, 1, 0, 1],
    [1, 0, 1, 1, 0, 1, 1, 0, 1, 1, 0, 1, 0, 1, 0, 1],
    [1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 1],
    [1, 0, 1, 1, 0, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 1],
    [1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 1],
    [1, 0, 0, 0, 0, 1, 1, 1, 1, 1, 0, 1, 1, 1, 0, 1],
    [1, 1, 1, 1, 0, 0, 0, 1, 1, 1, 0, 0, 0, 1, 0, 1],
    [1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 1, 1, 1, 0, 1],
    [1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
    [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1]

];

// Figur objektet
var figur = {
    rad: 0,
    kolumn: 0,
    poäng: 0,
    rotation: 0,
    bild: new Image()
}

figur.bild.src = "../unnamed.png";

var zookeeper = {
    rad:0,
    kolumn: 0,
    bild: new Image()
}
zookeeper.bild.src = "../zookeeper.png";
// Rita kartan
function ritaKartan() {
    // Loopa igenom raderna
    for (var rad = 0; rad < 12; rad++) {
        // Loopa igenom arrayen
        for (var kolumn = 0; kolumn < 16; kolumn++) {

            // Om "1" rita ut en kloss
            if (karta[rad][kolumn] == 1) {
                ctx.fillRect(kolumn * 50, rad * 50, 50, 50)
            }
        }
    }


}
// Rita figuren
function ritaFigur() {
    ctx.save(); 
    ctx.translate(figur.kolumn * 50 + 25, figur.rad * 50 + 25);
    /* ctx.rotate(figur.rotation / 180 * Math.PI); */
    ctx.drawImage(figur.bild, -25, -25, 50, 50);
    ctx.restore();
}
function ritaZookeeper() {
    ctx.drawImage(zookeeper.bild, zookeeper.kolumn * 50, zookeeper.rad * 50, 50, 50);
}
function spawnaZookeeper() {
    // Loop
    while(true){
        zookeeper.rad = Math.floor(Math.random() * 12),
        zookeeper.kolumn = Math.floor(Math.random() * 16);

        // Avbryt när zookeeper är på en nolla
        if (karta[zookeeper.rad][zookeeper.kolumn] == 0) {
            break
        }
    }
}
// Träffa zookeeper, få poäng
function plockaPoäng() {
    // Om apa och zookeeper är på samma ruta
    if (figur.rad == zookeeper.rad && figur.kolumn == zookeeper.kolumn) {
        // Öka poäng
        figur.poäng ++;
        ePoints.textContent = figur.poäng;
        // Spawna om zookeeper
        spawnaZookeeper();
    }
}
spawnaZookeeper();


// Animationsloopen
function loopen() {
    ctx.clearRect(0, 0, 800, 600);

    // Rita kartan
    ritaKartan();
    // Rita Figur
    ritaFigur();
    // Rita zookeeper
    ritaZookeeper();

    //Krocka med zookeper få poäng
    plockaPoäng();
    




    requestAnimationFrame(loopen);
}

// Starta loopen
loopen();
// Lyssna på piltangenter
window.addEventListener("keypress", function(e) {

    switch (e.code) {
        case "KeyS": // nedåt
                if (karta[figur.rad + 1][figur.kolumn] == 0) {
                    // Isåfall flytta ner
                    figur.rad++;
                }
                figur.rotation = 180;
            break;
        case "KeyW": // uppåt
        if (karta[figur.rad - 1][figur.kolumn] == 0) {
            // Isåfall flytta ner
            figur.rad--;
        }
                figur.rotation = 0;
            break;
        case "KeyA": // vänster
        if (karta[figur.rad][figur.kolumn - 1] == 0) {
            // Isåfall flytta ner
            figur.kolumn--;
        }    
            figur.rotation = 270;
           
            break;
        case "KeyD": // höger
        if (karta[figur.rad][figur.kolumn + 1] == 0) {
            // Isåfall flytta ner
            figur.kolumn++;
        } 
            figur.rotation = 90;    
            break;

        default:
            break;
    }
    console.log("Kolumn : " + figur.kolumn  + ", rad : " + figur.rad);
});