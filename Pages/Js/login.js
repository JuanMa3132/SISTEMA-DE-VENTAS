function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password");
    var eyeIcon = document.getElementById("eye-icon");
  
    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      eyeIcon.src = "Recursos/ojo-abierto.png"; // Cambia la fuente a un ícono de ojo abierto
    } else {
      passwordInput.type = "password";
      eyeIcon.src = "Recursos/mostrar.png"; // Cambia la fuente a un ícono de ojo cerrado
    }
  }

  
  
  