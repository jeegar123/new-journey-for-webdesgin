<?php
// 1 D array
// wihout key
$traninnes = array(1, 2, 3, 4, 5);

// var_dump($traninnes);
// echo "$traninnes[0]\n";
// echo gettype($traninnes);

echo "\n";
// with keys
$students = [
    1 => "Ms Dhoni",
    2 => "Rohit Sharama",
    3 => "Virat Kholi"
];
// echo "$students[1]\n";
// echo gettype($students)."\n";

// 2d array

$students_marks = [
    "php" =>  [
        $students[1] => 80,
        $students[2] => 100,
        $students[3] => 82,
    ],
    "javascript" => [
        $students[1] => 90,
        $students[2] => 81,
        $students[3] => 82,
    ],
    "html" => [
        $students[1] => 100,
        $students[2] => 100,
        $students[3] => 100,
    ],
    "css" => [
        $students[1] => 20,
        $students[2] => 10,
        $students[3] => 10,
    ]
];
    //  reading student 3 css marks
    // echo "Marks of $students[3] in  css :".$students_marks["css"][$students[3]]."\n";

// var_dump($students_marks);

// Array operations

// add into array

// adding student to array

// on basis of last value of key
// echo "adding value to array\n";
$students[]="Mr India";

// iterate whole array
foreach($students as $key => $value){
    // echo $key." =>".$value."\n";
}


// echo "Remove value from array\n";
unset($students[4]); // value at 4 is removed
// unset($students);    // whole array removed
// iterate whole array
foreach($students as $key => $value){
    // echo $key." =>".$value."\n";
}

//   if we remove the element from array and having keys then it not synchronous manner it will asycnchronous
/*
    eg key 1=>1, 2=>2, 3=>3, 4 =>4
    remove key 3
    then key 1=>1, 2=>2, 4 =>4 but we have to index also
    so we have to use re index it

*/
$temp=$students;

foreach($temp as $key => $value){
    unset($temp[$key]);
}

$temp[]="Mr Nobody";

foreach($temp as $key => $value){
//    echo "$key => $value";
}
echo "\n";

$temp=array_values($temp);


foreach($temp as $key => $value){
    // echo "$key => $value";
 }
 
//  echo "\nupdate array value at 0\n";
$temp[0]="php";
foreach($temp as $key => $value){
    // echo "$key => $value";
 }