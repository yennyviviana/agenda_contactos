function toggleFormVisibility() {
  var formulario = document.getElementById("formulario");
  if (formulario.style.display === "none" || formulario.style.display === "") {
    formulario.style.display = "block";
  } else {
    formulario.style.display = "none";
  }
}
