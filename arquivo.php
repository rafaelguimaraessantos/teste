<?php

chmod('/xml', 777);
$target_dir = './xml/';
$target_file = $target_dir . 'xml.xml';
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
move_uploaded_file($_FILES["xml"]["tmp_name"], $target_file);
header('Location: /view.php');