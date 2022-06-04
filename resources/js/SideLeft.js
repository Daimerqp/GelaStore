function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.getElementById("titulo").style.marginLeft = "250px";
    document.getElementById("slideshow").style.marginLeft ="250px";
}

function closeNav() {
    document.getElementById("mySidebar").style.width = "0"; 
    document.getElementById("main").style.marginLeft= "0";
    document.getElementById("titulo").style.marginLeft= "0";
    document.getElementById("slideshow").style.marginLeft= "0";
}