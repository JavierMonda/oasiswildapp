function mostrar(dato) {
  if (dato == "Si") {
    document.getElementById("age").style.display = "block";
    document.getElementById("conditionChild").style.display = "block";
  }
  if (dato == "No") {
    document.getElementById("age").style.display = "none";
    document.getElementById("conditionChild").style.display = "none";
  }
}