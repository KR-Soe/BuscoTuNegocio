<?php
    include("controller.php");
    session_start();
    // if($varsesion == null || $varsesion = ''){
    //     echo '<center><h1><font color="red">Inicie sesion para continuar</font></h1></center>';
    //     header("Refresh: 2; url=index.php");
    //     die();
    // }

    $name = $_POST['name'];
    $rubro = $_POST['rubro'];
    $comune = $_POST['comune'];
    $address = $_POST['address'];
    $tag = $_POST['tag'];
    $varsesion = $_SESSION['user'];

    // $image_name = $_FILES['image']['name'];
    // $type = $_FILES['image']['type'];
    $image = file_get_contents($_FILES['image']['tmp_name']);



    $target_dir = "./uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);

    // echo(basename($_FILES["image"]["name"]));

    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    $imageLocation = $target_file;


    $stmt = $mysqli->prepare("INSERT INTO negocio VALUES('', ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param('sssssss', $name, $rubro, $comune, $address, $imageLocation, $tag, $varsesion);
    $stmt->execute();
?>