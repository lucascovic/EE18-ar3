/* Koppla upp canvas */
const eCanvas = document.querySelector("canvas");
var ctx = eCanvas.getContext("2d");
eCanvas.width = 800;
eCanvas.height = 800;


/* Element vi använder */
const eBokstav = document.querySelector("#bokstav");
const eKnapp = document.querySelector("button");
const eResultat = document.querySelector("#resultat");


/* Slumpa fram huvudstad (196) */
var stader = [
    "Abu Dhabi",
    "Abuja",
    "Accra",
    "Addis Abeba",
    "Alger",
    "Amman",
    "Amsterdam",
    "Andorra la Vella",
    "Ankara",
    "Antananarivo",
    "Apia",
    "Asjchabad",
    "Asmara",
    "Astana",
    "Asuncion",
    "Aten",
    "Bagdad",
    "Baku",
    "Bamako",
    "Bandar Seri Begawan",
    "Bangkok",
    "Bangui",
    "Banjul",
    "Basseterre",
    "Beirut",
    "Belgrad",
    "Belmopan",
    "Berlin",
    "Bern",
    "Bisjkek",
    "Bissau",
    "Bogota",
    "Brasilia",
    "Bratislava",
    "Brazzaville",
    "Bridgetown",
    "Bryssel",
    "Budapest",
    "Buenos Aires",
    "Bukarest",
    "Canberra",
    "Caracas",
    "Castries",
    "Chisinau",
    "Colombo",
    "Conakry",
    "Dakar",
    "Damaskus",
    "Dhaka",
    "Dili",
    "Djibouti",
    "Dodoma",
    "Doha",
    "Dublin",
    "Dusjanbe",
    "Funafuti",
    "Freetown",
    "Gaborone",
    "Georgetown",
    "Gitega",
    "Guatemala City",
    "Hanoi",
    "Harare",
    "Havanna",
    "Helsingfors",
    "Honiara",
    "Islamabad",
    "Jakarta",
    "Jerevan",
    "Jerusalem",
    "Juba",
    "Kabul",
    "Kairo",
    "Kampala",
    "Katmandu",
    "Khartoum",
    "Kiev",
    "Kigali",
    "Kingston",
    "Kingstown",
    "Kinshasa",
    "Kuala Lumpur",
    "Kuwait",
    "Köpenhamn",
    "Libreville",
    "Lilongwe",
    "Lima",
    "Lissabon",
    "Ljubljana",
    "Lome",
    "London",
    "Luanda",
    "Lusaka",
    "Luxemburg",
    "Madrid",
    "Majuro",
    "Malabo",
    "Male",
    "Managua",
    "Manama",
    "Manila",
    "Maputo",
    "Maseru",
    "Mbabane",
    "Mexico City",
    "Minsk",
    "Mogadishu",
    "Monaco",
    "Monrovia",
    "Montevideo",
    "Moroni",
    "Moskva",
    "Muskat",
    "N'Djamena",
    "Nairobi",
    "Nassau",
    "Naypyidaw",
    "New Delhi",
    "Ngerulmud",
    "Niamey",
    "Nicosia",
    "Nouakchott",
    "Nukualofa",
    "Nuuk",
    "Oslo",
    "Ottawa",
    "Ouagadougou",
    "Palikir",
    "Panama City",
    "Paramaribo",
    "Paris",
    "Peking",
    "Phnom Penh",
    "Podgorica",
    "Port Louis",
    "Port Moresby",
    "Port of Spain",
    "Port-au-Prince",
    "Porto-Novo",
    "Port Vila",
    "Prag",
    "Praia",
    "Pretoria",
    "Pristina",
    "Pyongyang",
    "Quito",
    "Rabat",
    "Reykjavik",
    "Riga",
    "Riyadh",
    "Rom",
    "Roseau",
    "Saint George's",
    "Saint Johns",
    "San Jose",
    "San Marino",
    "San Salvador",
    "Sanaa",
    "Santiago de Chile",
    "Santo Domingo",
    "São Tome",
    "Sarajevo",
    "Seoul",
    "Singapore",
    "Skopje",
    "Sofia",
    "Stockholm",
    "Sucre",
    "Suva",
    "Taipei",
    "Tallinn",
    "Tarawa",
    "Tasjkent",
    "Tbilisi",
    "Tegucigalpa",
    "Teheran",
    "Thimphu",
    "Tirana",
    "Tokyo",
    "Torshamn",
    "Tripoli",
    "Tunis",
    "Ulan Bator",
    "Vaduz",
    "Valletta",
    "Vatikanstaden",
    "Victoria",
    "Vientiane",
    "Vilnius",
    "Warszawa",
    "Washington DC",
    "Wellington",
    "Wien",
    "Windhoek",
    "Yamoussoukro",
    "Yaounde",
    "Zagreb"
];
/* Slumpa fram index */
var index = Math.floor(Math.random() * stader.length);
console.log(index);

/* Plocka ut staden */
var slumpStad = stader[index];
console.log(slumpStad);

/* Variable för att lagra felgissningar */
var fel = 0;

/* 2. Läs av använders gissning */
eKnapp.addEventListener("click", function () {
    var gissning = eBokstav.value;
    console.log(gissning);

    var resultat = "";
    /* Fyll resultatet med "_" */
    for (var i = 0; i < slumpStad.length; i++) {   
        resultat += "_ ";
    } 

    var rättGissat = false
    for (var i = 0; i < slumpStad.length; i++) {
        console.log(i, slumpStad[i]);

        /* Gör om alla till små bokstäver */
        var slumpBokstav = slumpStad[i].toLowerCase();

        /* Kolla om gisning finns i staden */
        if (gissning == slumpBokstav) {
            console.log("Bokstav hittad", gissning);
            resultat += gissning + " ";
            rättGissat = true;
        } 
    }


    /* Räkna upp felen */
    if (!rättGissat) {
        fel++;
        console.log("Antal felgissningar", fel);

    }
    /* Skriv ut resultatet */
    eResultat.value = resultat;

    /* Rita ut hänga gubbe om det blev fel */
    /* Första steget rita marken */
    if (fel == 1) {
        ctx.moveTo(200, 30);
        ctx.lineTo(450, 30);
        ctx.stroke();
    }

    /* Fel 2 */
    if (fel == 2) {
        ctx.moveTo(400, 30);
        ctx.lineTo(400, 70);
        ctx.stroke();
    }

    /* Fel 3 */
    if (fel == 3) {
        ctx.moveTo(430, 100);
        ctx.arc(400, 100, 30, 0, 2 * Math.PI);
        ctx.stroke();
    }

    /* Fel 4 */
    if (fel == 4) {
        ctx.moveTo(400, 130);
        ctx.lineTo(400, 250);
        ctx.stroke();
    }
    /* Fel 5 */
    if (fel == 5) {
        ctx.moveTo(400, 150);
        ctx.lineTo(450, 200);
        ctx.stroke();
    }
    /* Sjunde felet */
    if (fel == 7) {
        ctx.moveTo(400, 150);
        ctx.lineTo(450, 200);
        ctx.stroke();
    }
    /* Åttonde felet */
    if (fel == 8) {
        ctx.moveTo(400, 150);
        ctx.lineTo(350, 200);
        ctx.stroke();
    }
    /* Nionde felet */
    if (fel == 9) {
        ctx.moveTo(400, 250);
        ctx.lineTo(450, 350);
        ctx.stroke();
    }

    if (fel == 10) {
        ctx.moveTo(400, 250);
        ctx.lineTo(350, 350);
        ctx.stroke();
        ctx.font = " bold 60px sans-serif";
        ctx.fillText("Game Over!", 100, 100);
    }
})