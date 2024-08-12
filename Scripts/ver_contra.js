var pass = document.getElementById("contra"),
      icono = document.querySelector(".icono");

icono.addEventListener("click", e => {
    if(contra.type === "password")  {
        contra.type = "text";
        icono.classList.remove('fa-eye');
        icono.classList.add('fa-eye-slash');
    }else{
        contra.type = "password";
        icono.classList.remove('fa-eye-slash');
        icono.classList.add('fa-eye');
    }
});