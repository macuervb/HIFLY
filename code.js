function openyoutubelink(url) {
    window.open(url,'_blank').focus();
  }

  // Event listener para el formulario de login
document.getElementById('loginForm').addEventListener('submit', function(event) {
  event.preventDefault(); // Evita que el formulario recargue la página

  const username = document.getElementById('username').value;
  const password = document.getElementById('password').value;

  // Aquí puedes reemplazar con la lógica real de validación (API, etc.)
  if (username === 'Admin' && password === 'password123') {
      // Redirigir al home si las credenciales son correctas
      window.location.href = 'home.html';
  } else {
      // Mostrar mensaje de error si las credenciales son incorrectas
      document.getElementById('error').style.display = 'block';
  }
});

