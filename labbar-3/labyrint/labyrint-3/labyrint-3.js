/*************************************/
/*           Inställningar           */
/*************************************/
// Hitta element på sidan
const canvas = document.querySelector("canvas");
const ePoints= document.querySelector("p");

// Ställ in storlek på canvas
canvas.width = 800;
canvas.height = 600;

// Starta canvas rit-api
var ctx = canvas.getContext("2d");

/*************************************/
/*          Globala variabler        */
/*************************************/
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

/*************************************/
/*           Objekt som syns         */
/*************************************/
var figur = {
    rad: 0,
    kolumn: 0,
    poäng: 0,
    rotation: 0,
    bild: new Image()
};

figur.bild.src = "../bilder/unnamed.png";

var mynt = {
    rad:0,
    kolumn: 0,
    bild: new Image()
}
mynt.bild.src = "../bilder/mynt.png";
var mynt2 = {
    rad:0,
    kolumn: 0,
    bild: new Image()
}
mynt2.bild.src = "../bilder/mynt.png";
var monster = {
    rad: 0,
    kolumn: 0,
    bild: new Image()
}
monster.bild.src = "../bilder/zookeeper.png";
 
/*************************************/
/*           Kod som körs före       */
/*************************************/
spawna(mynt);
spawna(mynt2);
spawna(monster);

/*************************************/
/*           Animationsloopen        */
/*************************************/

function loopen() {
    ctx.clearRect(0, 0, 800, 600);

    // Rita kartan
    ritaKartan();
    // Rita Figur
    ritaFigur();
    // Rita mynt
    ritaMynt(mynt);
    ritaMynt(mynt2);

    //Plocka poäng
    plockaPoäng(mynt);
    plockaPoäng(mynt2);

    ritaMonster();
    requestAnimationFrame(loopen);
}
loopen();

/*************************************/
/*           Funktioner              */
/*************************************/

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
// Rita ut ett mynt
function ritaMynt(mynt) {
    ctx.drawImage(mynt.bild, mynt.kolumn * 50, mynt.rad * 50, 50, 50);
}


function ritaMonster() {
    ctx.drawImage(monster.bild, monster.kolumn * 50, monster.rad * 50, 50 ,50);
}
function spawna(mynt) {
    // Loop
    while(true){
        mynt.rad = Math.floor(Math.random() * 12),
        mynt.kolumn = Math.floor(Math.random() * 16);

        // Avbryt när mynt är på en nolla
        if (karta[mynt.rad][mynt.kolumn] == 0) {
            break
        }
        
    }
}

// Träffa mynt, få poäng
function plockaPoäng(mynt) {
    // Om apa och mynt är på samma ruta
    if (figur.rad == mynt.rad && figur.kolumn == mynt.kolumn) {
        // Öka poäng
        figur.poäng ++;
        ePoints.textContent = figur.poäng;
        // Spawna om mynt
        spawna(mynt);
        spawna(monster);
    }
}

/*************************************/
/*           Interaktion             */
/*************************************/
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