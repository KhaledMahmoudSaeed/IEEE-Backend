<?php

include("db.php");

if (!is_numeric($_GET['ssn'])) {
    die("Invalid SSN.");
}

$statment = $pdo->prepare("SELECT * FROM employee WHERE SSN=?");
$statment->execute([$_GET['ssn']]);
$data = $statment->fetchObject();

$name = $data->FNAME . " " . $data->LNAME;
$gender = $data->GENDER;
$birthdate = $data->BDATE;
$address = $data->ADDRESS;
$salary = $data->SALARY;
$superssn = $data->SUPERSSN;
$dno = $data->DNO;
$picture = $data->img;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Card</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #2c2c2c;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .profile-pic {
            border-radius: 50%;
            width: 200px;
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <div class="card text-center p-4 shadow" style="width: 20rem;">
        <img src="imgs/<?php echo $picture; ?>" class="profile-pic mx-auto d-block mb-3" alt="Employee Image">
        <h2 class="card-title"><?php echo $name; ?></h2>
        <p class="card-text"><strong>Gender:</strong> <?php echo $gender; ?></p>
        <p class="card-text"><strong>Birthdate:</strong> <?php echo $birthdate; ?></p>
        <p class="card-text"><strong>Address:</strong> <?php echo $address; ?></p>
        <p class="card-text"><strong>Salary:</strong> <?php echo $salary; ?></p>
        <p class="card-text"><strong>Supervisor SSN:</strong> <?php echo $superssn; ?></p>
        <p class="card-text"><strong>Department Number:</strong> <?php echo $dno; ?></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>