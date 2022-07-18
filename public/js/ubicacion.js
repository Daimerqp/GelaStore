let pais;

function mosOcu(e) {
    pais = document.getElementById("pais").value;
    if (pais == "CO") {
        document.getElementById("extra").style.display = ''; // Muestra
    } else {
        document.getElementById("extra").style.display = 'none'; // Oculta
    }
}
