const voornaam = document.getElementById("vnaam");
const achternaam = document.getElementById("anaam");
const email = document.getElementById("mail");
const straatnaam = document.getElementById("snaam");
const huisnummer = document.getElementById("hnummer");
const postcode = document.getElementById("pcode");
const woonplaats = document.getElementById("wplaats");
const telefoonnummer = document.getElementById("tnummer");

//onclick check
function bababoey() {
    if(voornaam.value.length == "" || achternaam.value.length == "" || email.value.length == "" || straatnaam.value.length == "" || huisnummer.value.length == "" || postcode.value.length == "" || woonplaats.value.length == "" || telefoonnummer.value.length === "") {
        alert("voer alle gegevens correct in!");
    }
}

//redirect van button bestellen en anuleren
document.getElementById("bestelID").onclick = function () {
    location.href = "bedanktpagina.html";
};

document.getElementById("anuleerID").onclick = function () {
    location.href = "index.php";
};



