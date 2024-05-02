<?php 

$conection = mysqli_connect("localhost", "root", "", "plantas");

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];


$query = "INSERT INTO `usuario`(`nombre`, `email`, `contraseña`) 
          VALUES ('$nombre','$email','$contraseña')";


$execute = mysqli_query($conection, $query);

if ($execute) {
    echo '
        <script>
            window.location = "registro.html";
        </script>
    ';
} else {
    echo  '
        <script>
            alert("Try again, user not saved");
            window.location = "registro.html";
        </script>
    ';
}

mysqli_close($conection);
?>