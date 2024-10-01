function openyoutubelink(url) {
    window.open(url,'_blank').focus();
  }

  // Event listener para el formulario de login
document.getElementById('loginForm').addEventListener('submit', function(event) {
  event.preventDefault(); // Evita que el formulario recargue la página

  const username = document.getElementById('username').value;
  const password = document.getElementById('password').value;

  // Aquí puedes reemplazar con la lógica real de validación (API, etc.)
  if (username === 'Admin' && password === '12345') {
      // Redirigir al home si las credenciales son correctas
      window.location.href = 'Index.html';
  } else {
      // Mostrar mensaje de error si las credenciales son incorrectas
      document.getElementById('error').style.display = 'block';
  }
});



// Obtener elementos del DOM
var modal = document.getElementById("miModal");
var img = document.getElementById("roma-img");
var cerrar = document.getElementsByClassName("cerrar")[0];

// Cuando el usuario hace clic en la imagen, se muestra el modal
img.onclick = function() {
    modal.style.display = "block";
}

// Cuando el usuario hace clic en la 'x', se cierra el modal
cerrar.onclick = function() {
    modal.style.display = "none";
}

// Cuando el usuario hace clic fuera del contenido del modal, se cierra
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

