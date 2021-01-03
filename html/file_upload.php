<?php

    $file =$_FILES['myfile'];

if ($file['error']==0) {
        move_uploaded_file($file['tmp_name'],"./db/".$file['name']);
    echo "file uploaded";
}else{
    echo "file not uploaded";
}
