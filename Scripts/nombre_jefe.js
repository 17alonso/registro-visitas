function seleciona_jefe(e) {
    var nit =  e.target.selectedOptions[0].getAttribute("nombre_jefe")
    document.getElementById("jefe_visitante").value = nit;
}