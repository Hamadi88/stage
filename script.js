var acc = document.getElementsByClassName("accordion");
var i;
    /*Action couleur  lors de la selection*/
for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");

    /* Action accordion pour afficher ou cacher le texte */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
} 