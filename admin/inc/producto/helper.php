<?php

function crearProducto($con) {
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];
    $imagen = '';
    $descripcion = $_POST['descripcion'];

    try {
        $imagen = subirImagen();
    }catch (Exception $exception) {
        var_dump($exception);die;
    }



    $sql = "INSERT INTO productos (Nombre_de_producto, Precio_de_producto, imagen_de_producto, descripcion)
					VALUES ('$producto','$precio','$imagen','$descripcion')";
    $con->exec($sql);
}

function subirImagen() {
    $target_dir = "file_sitio/";
    $target_file = $target_dir . time() .  basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        return false;
    }

    if (file_exists($target_file)) {
        return false;
    }

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        return false;
    }

    if ($uploadOk == 0) {
        return false;
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            return $target_file;
        } else {
            return false;
        }
    }
}