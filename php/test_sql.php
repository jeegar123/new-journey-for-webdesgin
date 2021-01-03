<?php
$conn = new mysqli("localhost", "root", "", "books");


if ($conn->connect_errno) {
    exit();
} else {
    echo "connected sucessfully";

    $sql = "INSERT INTO BOOKS(TITLE,AUTHOR,PRICE,STOCK,COVERPAGE,PENDINGSTOCK) VALUES(?,?,?,?,?,?)";
    
    $statment = $conn->prepare($sql);
    $statment->bind_param("ssiisi",$title,$auth,$price,$stock,$coverpage,$pendingstock);

    $title = "Php Whole in 2 book";
    $auth = "dsd ds";
    $price = 400;
    $stock = 1;
    $coverpage="MY Text";
    $pendingstock =10;

    if($statment->execute()){
        echo "Record Insterted Succefully";
    }else{
        echo "Failed To Insert!!";
    }

    


}
