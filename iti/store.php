<?php

include("db.php");

if ($_SERVER['REQUEST_METHOD'] === "POST" && $_POST['checktext'] === "Sh68Sa") {
    // $skill = $_POST['skill'];
// unset($_POST['skill']);
// $data = implode(";", $_POST);
// $skills = implode(";", $skill);
// file_put_contents('emp_data.txt', $data . "\n", FILE_APPEND);
// file_put_contents('emp_skills.txt', $skills . "\n", FILE_APPEND);
    $first_name = preg_replace('/\s+/', '', $_POST['first_name']);
    $last_name = preg_replace('/\s+/', '', $_POST['last_name']);
    $gender = $_POST['gender'];
    $birthdate = $_POST['birthdate'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];
    $superssn = $_POST['superssn'];
    $depart = $_POST['department'];
    $img = $_FILES['img']['name'];
    if (is_string($first_name) && is_string($last_name) && is_string($address) && !empty($salary) && !empty($superssn) && !empty($depart) && !empty($first_name) && !empty($last_name) && !empty($address)) {
        move_uploaded_file($_FILES['img']['tmp_name'], ("imgs/" . $_FILES["img"]["name"]));
        $statment = $pdo->prepare("INSERT INTO employee (FNAME,LNAME,GENDER,BDATE,`ADDRESS`,SALARY,SUPERSSN,DNO,img) VALUES(?,?,?,?,?,?,?,?,?)");
        $statment->execute(array(
            $first_name,
            $last_name,
            $gender,
            $birthdate,
            $address,
            $salary,
            $superssn,
            $depart,
            $img
        ));
        header("Location:done.php");
    } else {
        header("Location:registration.php");
    }
} else {
    header("Location:registration.php");
}
