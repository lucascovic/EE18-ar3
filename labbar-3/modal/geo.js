// Element vi använder 
const eGeoModal = document.querySelector("#geoModal");


// Jacka in Bootsrap-modal-bibliotek
var myModal = new bootstrap.Modal(eGeoModal, {
    keyboard: false
});

// Lyssna på när eGeoModal öppnas
// och byta ut texten
eGeoModal.addEventListener("show.bs.modal", function() {
    console.log("Yeay! Modal visas nu!");

    // Välj innehållet
    const eModalBody = document.querySelector(".modal-body");

    // Byt ut innehållet
    eModalBody.innerHTML = "<div class='mb-3'>"+
                            "<input type='text' class='form-control' id='anamn' placeholder='Användarnamn'>" + 
                            "<input type='passowrd' class='form-control' id='lösen' placeholder='Lösenord'>" +
                            "</div>"; 
});
