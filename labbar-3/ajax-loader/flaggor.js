// Välj ut elemten 
const eKnapp = document.querySelector("button");
const eGrid = document.querySelector(".grid-6");

// När man klickar på knappen
eKnapp.addEventListener("click", function() {
   
    fetch("./ajax/skicka-flaggor.php")
    .then(response=> response.text())
    .then(data => {
        
        eGrid.innerHTML += data;
    })
})