/*************************************/
/*           Inställningar           */
/*************************************/
// Hitta element på sidan
const canvas = document.querySelector("canvas");

// Ställ in storlek på canvas
canvas.width = 800;
canvas.height = 600;

// Starta canvas rit-api
var ctx = canvas.getContext("2d");

/*************************************/
/*          Globala variabler        */
/*************************************/
var karta = [
    [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
];

/*************************************/
/*           Objekt som syns         */
/*************************************/
var piga = {

}

var monster = {

}



/*************************************/
/*           Animationsloopen        */
/*************************************/

function loopen() {
    ctx.clearRect(0, 0, 800, 600);

    ritaPiga();

    requestAnimationFrame(loopen);
}
loopen();

/*************************************/
/*           Funktioner              */
/*************************************/
// Rita ut nyckelpigan
function ritaPiga() {
    ctx.drawImage(piga.bild, piga.x, piga.y, 50, 50);
}

/*************************************/
/*           Interaktion             */
/*************************************/
window.addEventListener("keypress", function(e) { // e-> vilken tangent som trycks ned
    switch (e.code) {
        case "KeyS":
            piga.y++;
            break;
        case "KeyW":
            piga.y--;
            break;
        case "KeyA":
            piga.x--;
            break;
        case "KeyD":
            piga.x++;
            break;
    
        default:
            break;
    }
});