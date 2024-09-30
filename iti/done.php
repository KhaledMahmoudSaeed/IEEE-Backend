<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <?php
    include("db.php");
    $statment = $pdo->prepare("SELECT * FROM employee");
    $statment->execute();
    $views = $statment->fetchAll();

    echo "
<table border='1' cellpadding='10' cellspacing='0' style='width: 100%; border-collapse: collapse; text-align: center;'>
<thead style='background-color:gray'>
<tr>
<th style='padding: 10px;'>Employ Number</th>
<th style='padding: 10px;'>Name</th>
<th style='padding: 10px;'>Gender</th>
<th style='padding: 10px;'>Birth Date</th>
<th style='padding: 10px;'>Address</th>
<th style='padding: 10px;'>Salary</th>
<th style='padding: 10px;'>Superssn</th>
<th style='padding: 10px;'>Department</th>
<th style='padding: 10px;'>actions</th>
</tr>
</thead>
<tbody>
";
    foreach ($views as $data) {
        $ssn = $data["SSN"];
        $first_name = $data['FNAME'];
        $last_name = $data['LNAME'];
        $gender = $data['GENDER'];
        $bd = $data['BDATE'];
        $address = $data['ADDRESS'];
        $salary = $data['SALARY'];
        $superssn = $data['SUPERSSN'] ? $data['SUPERSSN'] : 'None';
        $depart = $data['DNO'] ? $data['DNO'] : 'None';

        #f9f9f9
        echo "
    <tr style='background-color: #ffffff;'>
    <td style='padding: 10px;'><big>$ssn</big></td>
    <td style='padding: 10px;'>$first_name $last_name</td>
    <td style='padding: 10px;'>$gender</td>
    <td style='padding: 10px;'> $bd</td>
    <td style='padding: 10px;'> $address</td>
    <td style='padding: 10px;'> $salary</td>
    <td style='padding: 10px;'> $superssn </td>
    <td style='padding: 10px;'>$depart</td>
    <td style='padding: 10px;'>
<a href='show.php?ssn=$ssn&action=show' title='Read'><i class='fa-solid fa-eye' style='color: blue;'></i></a>
<a href='operation.php?ssn=$ssn&action=edit' title='Update'><i class='fa-regular fa-pen-to-square' style='color: green;'></i></a>
<a href='operation.php?ssn=$ssn&action=delete' title='Delete'><i class='fa-solid fa-trash' style='color: red;'></i></a>

    </td>
    </tr>
    ";
    }


    // from POST global variable
// $first_name = $data['first_name'];
// $last_name = $data['last_name'];
// $address = $data['address'];
// $country = $data['country'];
// $gender = $data['gender'];
// $skill1 = isset($data['skill1']) ? $data['skill1'] : null;
// $skill2 = isset($data['skill2']) ? $data['skill2'] : null;
// $skill3 = isset($data['skill3']) ? $data['skill3'] : null;
// $skill4 = isset($data['skill4']) ? $data['skill4'] : null;
// $username = $data['username'];
// $password = $data['password'];
// $checktext = $data['checktext'];
// $depart = $data['depart'];
    




    // from files
//     $emp_data = file('emp_data.txt');
//     $skills = file('emp_skills.txt');
//     $i = 0;
    
    //     echo "
// <table border='1' cellpadding='10' cellspacing='0' style='width: 100%; border-collapse: collapse; text-align: center;'>
//     <thead>
//         <tr style='background-color: #4CAF50; color: white;'>
//             <th style='padding: 10px;'>Employ Number</th>
//             <th style='padding: 10px;'>Name</th>
//             <th style='padding: 10px;'>Address</th>
//             <th style='padding: 10px;'>Skills</th>
//             <th style='padding: 10px;'>Department</th>
//             <th style='padding: 10px;'>Actions</th>
//         </tr>
//     </thead>
//     <tbody>
// ";
    
    //     foreach ($emp_data as $data) {
//         $data = explode(";", $data);
    
    //         $first_name = $data[0];
//         $last_name = $data[1];
//         $address = $data[2];
//         $depart = $data[7];
    
    //         $skill = explode(";", $skills[$i]);
//         $skill[0] = isset($skill[0]) ? $skill[0] : null;
//         $skill[1] = isset($skill[1]) ? $skill[1] : null;
//         $skill[2] = isset($skill[2]) ? $skill[2] : null;
//         $skill[3] = isset($skill[3]) ? $skill[3] : null;
//         ++$i;
    
    //         $rowColor = ($i % 2 == 0) ? '#ffffff' : '#f9f9f9';
    
    //     if ($gender == "male") {
//         $gender = "Mr";
//     } else {
//         $gender = "Mrs";
//     };
//     echo "
//     Employ Number = <big>$i</big> <br> 
//     <h1> Thanks $gender. $first_name $last_name</h1> 
//     <h4>Please Reviev Your Information</h4>
//     Name :$first_name  $last_name  <br> <br> <br> 
//     Address :$address  <br> <br> <br> 
//     Skills : " . printskill($skill[0]) . printskill($skill[1]) . printskill($skill[2]) . printskill($skill[3]) . "  <br> <br> <br> 
//     Department : $depart <hr>";
    
    //         echo "
//     <tr style='background-color: $rowColor;'>
//         <td style='padding: 10px;'><big>$i</big></td>
//         <td style='padding: 10px;'>$first_name $last_name</td>
//         <td style='padding: 10px;'>$address</td>
//         <td style='padding: 10px;'>" . printskill($skill[0]) . " " . printskill($skill[1]) . " " . printskill($skill[2]) . " " . printskill($skill[3]) . "</td>
//         <td style='padding: 10px;'>$depart</td>
//         <td style='padding: 10px;'>
//             <a href='#' title='Create'><i class='fas fa-plus' style='color: green;'></i></a> 
//             <a href='#' title='Read'><i class='fas fa-eye' style='color: blue;'></i></a> 
//             <a href='#' title='Update'><i class='fas fa-edit' style='color: orange;'></i></a> 
//             <a href='#' title='Delete'><i class='fas fa-trash' style='color: red;'></i></a>
//         </td>
//     </tr>
//     ";
//     }
    
    //     echo "</tbody></table>";
//     function printskill($skill)
//     {
//         if ($skill != null) {
//             return $skill . " ";
//         }
//         ;
//     }
    ?>


</body>

</html>