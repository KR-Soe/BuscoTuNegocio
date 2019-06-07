<?php
    include("controller.php");
    session_start();
    // if($varsesion == null || $varsesion = ''){
    //     echo '<center><h1><font color="red">Inicie sesion para continuar</font></h1></center>';
    //     header("Refresh: 2; url=index.php");
    //     die();
    // }
    $rut = $_POST['rut'];
    $name = $_POST['name'];
    $rubro = $_POST['rubro'];
    $comune = $_POST['comune'];
    $address = $_POST['address'];
    $tag = $_POST['tag'];
    $varsesion = $_SESSION['user'];
    $estado = 0;

    $image = file_get_contents($_FILES['image']['tmp_name']);
    $userId = $_SESSION['id'];
    $target_dir = "./uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);

    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        header("Location:profile.php");
    } else {
        echo "<center><h1>File is not an image.</h1></center>";
        $uploadOk = 0;
    }

    $imageLocation = $target_file;

    $stmt = $mysqli->prepare("INSERT INTO negocio VALUES('', ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param('ssssiiiiis', $rut, $name, $address, $imageLocation, $estado, $rubro, $comune, $userId, $tag, $varsesion);
    echo ($userId);
    $stmt->execute();
?>