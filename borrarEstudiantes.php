<?php
require_once("config.php");

$record = new Config();

if (isset($_GET['id']) && isset($_GET["req"])) {
    if ($_GET["req"]=="delete") {
        $record -> setID($_GET['id']);
        $record -> delete();
        echo "<script>alert('Datos borrados correctamente');document.location='estudiantes.php'</script>";
    }
}

?>