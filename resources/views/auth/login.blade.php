<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Inicio Sesion</title>
    <!-- Enlazar el archivo CSS -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <!-- Enlazar el archivo JavaScript -->
    <script src="script.js" defer></script>
</head>
<body>
    <!-- Sección principal -->
    <section>
        <!-- Contenedor del formulario -->
        <div class="form-box">
            <div class="form-value">
                <!-- Formulario de inicio de sesión -->
                <form id="loginForm" action="">
                    @csrf
                    <h2>GENESIS</h2>
                    <!-- Campo de entrada para el correo electrónico -->
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" required>
                        <label for="">Email</label>
                    </div>
                    <!-- Campo de entrada para la contraseña -->
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" required>
                        <label for="">Password</label>
                    </div>
                    <!-- Opción para mostrar la contraseña -->
                    <div class="forget">
                        <label for=""><input type="checkbox" id="showPassword">Mostrar Contaseña <a href="#">Olvido su contraseña</a></label>
                    </div>
                    <!-- Mensaje de error -->
                    <div id="error-message" style="color: rgb(255, 0, 0);"></div>
                    <!-- Botón para enviar el formulario -->
                    <button type="submit">Inicia Sesión</button>
                    <!-- Sección de registro y enlaces -->
                    <div class="register">
                        <p>No tengo Cuenta <a href="#"> Regístrate</a> </p>
                        <a href="http://localhost/ginecologia/public/index"> Volver al sitio Web sin iniciar sesión</a>
                        <p><a href="AcercaDeNosotros.html">Acerca de Nosotros</a></p>
                    </div>
                </form>
            </div>
        </div>
        <!-- Mensaje de bloqueo después degit status
             varios intentos -->
        <div id="blockMessage">
            <p>Hizo varios intentos, inténtelo nuevamente después de un día</p>
        </div>
    </section>
    
    <!-- Incluir los iconos de Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
