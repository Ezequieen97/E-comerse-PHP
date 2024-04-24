<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro</title>
    
    <!-- Agregar meta etiquetas para descripción y palabras clave -->
    <meta name="description" content="Página de login y registro para Programacion III Programa 1 PHP base de datos">
    <meta name="keywords" content="login, registro, Programacion III, PHP, base de datos">

    <!-- Enlazar la fuente Roboto desde Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Enlazar el archivo de estilos CSS -->
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
    <!-- -->
    <?php
    include("conexion.php"); // Incluye el archivo de conexión
    
    $conexion = new Conexion();
    $conn = $conexion->conectar(); // Establece la conexión
    
    if ($conn) {
        // La conexión se estableció correctamente
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $usuario = $_POST['usuario'];
            $contrasena = $_POST['contrasena'];
    
            // Verificar si los campos están vacíos
            if (empty($usuario) || empty($contrasena)) {
                echo "Por favor, completa todos los campos.";
                
            } else {
                // Verificar la longitud mínima de usuario y contraseña
                if (strlen($usuario) < 4 || strlen($contrasena) < 4) {
                    echo "El usuario y la contraseña deben tener almenos al menos 4 caracteres.";
                } else {
                    // Consulta SQL para verificar las credenciales del usuario
                    $sql = "SELECT * FROM USUARIO WHERE Nombre_usuario = ? AND Contrasena = ?";
                    $stmt = $conn->prepare($sql);
                    $stmt->bindParam(1, $usuario);
                    $stmt->bindParam(2, $contrasena);
                    $stmt->execute();

    
                    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    
                    if ($resultado) {
                        // Inicio de sesión exitoso
                        $mensaje = "Inicio de sesión exitoso. Bienvenido, " . $resultado['Nombre_Usuario'];
                        header("Location: inicio.php");
                        exit;

                    } else {
                        // Credenciales incorrectas
                        $mensaje = "Usuario o contraseña incorrectos.";
                    }                       
                }
            }
        }
    } else {
        // Error de conexión a la base de datos
        echo "Error al conectar a la base de datos.";
    }
    ?>
    <script>
    // Definir la variable mensaje desde PHP
    var mensaje = "<?php echo $mensaje; ?>";

    // Verificar si el mensaje no está vacío y mostrar la alerta
    if (mensaje.trim() !== '') {
        alert(mensaje);
    }
    </script>







    <h1 class="Titutlo" >Login y Registro - Programacion III Programa 1 PHP base de datos</h1>
<main>
    
    <div class="contenedor_todo">
        <div class="Caja_de_atras">
            <div class="Caja_de_atras-login">
                <h3>¿Ya tienes una cuenta?</h3>
                <p>Inicia sesión para entrar en la página</p>
                <button id="btn_iniciar-sesion">Iniciar Sesión</button>
            </div>
            <div class="Caja_de_atras-register">
                <h3>¿Aún no tienes una cuenta?</h3>
                <p><strong>Regístrate para que puedas iniciar sesión</strong></p>
                <button id="btn_registrarse"><strong>Registrarse</strong></button>
            </div>
        </div>

        <!--                Formulario de Login y registro                  -->
        <div class="contenedor_login-register">
            <!--Login-->
            <form action="index.php" method="POST" class="formulario_login">
                <h2>Iniciar Sesión</h2>
                <input type="text" name="usuario" placeholder="Usuario">
                <input type="password" name="contrasena" placeholder="Contraseña">
                <button type="submit" class="Boton_Login">Entrar</button>
            </form>


            <!--Registro-->
            <form action="" class="formulario_register">
                <h2>Registrarse</h2>
                <input type="text" placeholder="Nombre" required>
                <input type="text" placeholder="Apellido">
                <input type="text" placeholder="Correo Electrónico" required>
                <input type="text" placeholder="Usuario" required>
                <input type="password" placeholder="Contraseña" required>
                <button class="Boton_Login">Registrarse</button>
            </form>
        </div>
    </div>
</main>

<script src="assets/js/script.js"></script>
</body>
</html>
