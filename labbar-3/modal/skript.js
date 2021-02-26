console.log(document.documentElement.lang);

// Element vi använder
const eGdprModal = document.querySelector("#gdprModal");

// Starta modal
var myModal = new bootstrap.Modal(eGdprModal,{
    keyboard: false
});

// Skriv GDPR-varning för rätt språk
if (document.documentElement.lang == "sv") {
    myModal.show();
}