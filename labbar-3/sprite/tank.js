/*****************************************/
/*             Inställningar             */
/*****************************************/
// Hitta element på sidan
const canvas = document.querySelector("canvas");

// Ställ in storlek på canvas
canvas.width = 800;
canvas.height = 600;

// Starta canvar rit-api
var ctx = canvas.getContext("2d");


/*****************************************/
/*         Innan loopen startar          */
/*****************************************/
//Ladda in grafiken 
var tank = new Image();
tank.src = "./bilder/randomsprite.png";
// Hur lång tid varje bild är på canvas
var tankRutor = [0, 0, 0, 0 , 0,  1, 1, 1, 1, 1,   2, 2, 2, 2, 3, 3, 3, 4, 4, 4, 5, 5, 5,5, 5, 6, 6, 6 ,6,6 ];
var i = 0;
// För att rita tanken
function ritaTank() {
    ctx.drawImage(tank, 108 * tankRutor[i], 0, 108, 140, 100, 100, 100, 100);

    // Hoppa till nästa
    i++;
    if (i > tankRutor.length -1) {
        i = 0;
    }
}


/*****************************************/
/*             Animationsloopen          */
/*****************************************/

function loopen() {
    ctx.clearRect(0, 0, 800, 600);

    ritaTank();

    requestAnimationFrame(loopen);
}
loopen();