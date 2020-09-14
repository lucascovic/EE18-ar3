/* Element vi arbetar med */
const elementRutaTal1 = document.querySelector("#tal1")
const elementRutaTal2 = document.querySelector("#tal2")
const elementKnappPlus = document.querySelector("#plus")
const elementKnappMinus = document.querySelector("#minus")
const elementKnappGånger = document.querySelector("#gånger")
const elementKnappDividera = document.querySelector("#dividera")
const elementResultat = document.querySelector("#resultat")

/* Lyssna på om man klickar på + knappen */
elementKnappPlus.addEventListener("click", summera)

function summera() {
    /* Läs av tal1 och tal2 */
    var tal1 = Number(elementRutaTal1.value);
    var tal2 = Number(elementRutaTal2.value);
    /* Räkna ut summa = tal2 + tal 2 */
    var summa = tal1 + tal2;
    /* Skriver ut svaret i resultatrutan */
    elementResultat.value = summa;
}

/* Lyssna på om man klickar på - knappen */
elementKnappMinus.addEventListener("click",subtraktion)

function subtraktion() {
    /* Läs av tal1 och tal2 */
    var tal1 = Number(elementRutaTal1.value);
    var tal2 = Number(elementRutaTal2.value);
    /* Räkna ut summa = tal2 - tal 2 */
    var summa = tal1 - tal2;
    /* Skriver ut svaret i resultatrutan */
    elementResultat.value = summa;
}

/* Lyssna på om man klickar på / knappen */
elementKnappDividera.addEventListener("click", division)

function division() {
    /* Läs av tal1 och tal2 */
    var tal1 = Number(elementRutaTal1.value);
    var tal2 = Number(elementRutaTal2.value);
    /* Räkna ut summa = tal1 / tal2 */
    var summa = tal1 / tal2;
    /* Skriver ut svaret i resultatrutan */
    elementResultat.value = summa;
}

/* Lyssna på om man klickar på * knappen */
elementKnappGånger.addEventListener("click", gånger)

function gånger() {
    /* Läs av tal1 och tal2 */
    var tal1 = Number(elementRutaTal1.value);
    var tal2 = Number(elementRutaTal2.value);
    /* Räkna ut summa = tal1 * tal 2 */
    var summa = tal1 * tal2;
    /* Skriver ut svaret i resultatrutan */
    elementResultat.value = summa;
}