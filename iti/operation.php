<?php

include("db.php");

if($_SERVER["REQUEST_METHOD"]== "POST" ){
    $ssn = $_POST['ssn'];
    $first_name = preg_replace('/\s+/','',$_POST['first_name']);
    $last_name = preg_replace('/\s+/','',$_POST['last_name']);
    $gender = $_POST['gender'];
    $birthdate = $_POST['birthdate'];
    $address =$_POST['address'] ;
    $salary = $_POST['salary'];
    $superssn = $_POST['superssn'];
    $depart = $_POST['department'];
    $img = $_FILES['img']['name'];

    if (is_string($first_name) && is_string($last_name) && is_string($address) && !empty($salary) && !empty($superssn) && !empty($depart) && !empty($first_name) && !empty($last_name) && !empty($address)) {

        move_uploaded_file($_FILES['img']['tmp_name'], ("imgs/" . $_FILES["img"]["name"]));
        $statment = $pdo->prepare("UPDATE employee SET  FNAME=? ,LNAME=?,GENDER=?,BDATE=?,`ADDRESS`=?,SALARY=?,SUPERSSN=?,DNO=?,img=? WHERE SSN= ?  ");
        $statment->execute(array(
            $first_name,
            $last_name,
            $gender,
            $birthdate,
            $address,
            $salary,
            $superssn,
            $depart,
            $img,
            $ssn
        ));
        header("Location:done.php");
    }
    else{
        header("Location:operation.php?ssn=". $_POST['ssn']."&action=edit"."");

    }
    }else if($_GET['action']==="delete"){
        $statment = $pdo->prepare("DELETE FROM employee WHERE SSN= ? ");
        $statment->execute([$_GET['ssn']]);
        header("Location:done.php");
    }
    
    $statment = $pdo->prepare("SELECT * FROM employee WHERE SSN=?");
    $statment->execute([$_GET['ssn']]);
    $data = $statment->fetchObject();
    
    $ssn = $data->SSN;
    $firstname = $data->FNAME;
    $lastname = $data->LNAME;
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
        <title>Registration</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    
    <div class="container mt-5">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" class="border p-4" enctype="multipart/form-data">
            <input type="hidden" name="ssn" value="<?php echo $ssn ?>">
            <div class="row mb-2">
                <label for="first_name" class="col-sm-1 col-form-label">First Name</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" id="first_name" name="first_name"
                    value="<?php echo $firstname ?>" required>
                </div>
            </div>
            
            <div class="row mb-2">
                <label for="last_name" class="col-sm-1 col-form-label">Last Name</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" id="last_name" name="last_name"
                    value="<?php echo $lastname ?>" required>
                </div>
            </div>
            
            <div class="row mb-2">
                <label class="col-sm-1 col-form-label">Gender</label>
                <div class="col-sm-11">
                    
                    
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="m" 
                        <?php if ($gender == 'm') {echo "checked" ;}?> required>
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="f" 
                        <?php if ($gender == 'f') { echo "checked";} ?>>
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                </div>
            </div>
            
            <div class="row mb-2">
                <label for="birthdate" class="col-sm-1 col-form-label">Birth Date</label>
                <div class="col-sm-11">
                    <input type="date" class="form-control" id="birthdate" name="birthdate" value="<?php echo $birthdate ?>"
                    required>
                </div>
            </div>
            
            
            <div class="row mb-2">
                <label for="address" class="col-sm-1 col-form-label">Address</label>
                <div class="col-sm-11">
                    <textarea class="form-control" id="address" name="address" rows="3" required><?php echo $address ?></textarea>
                </div>
            </div>
            
            
            <div class="row mb-2">
                <label for="salary" class="col-sm-1 col-form-label">Salary</label>
                <div class="col-sm-11">
                    <input type="integer" class="form-control" id="salary" name="salary" value="<?php echo $salary ?>" required>
                </div>
            </div>
            
            <div class="row mb-2">
                <label for="superssn" class="col-sm-1 col-form-label">SuperSSN</label>
                <div class="col-sm-11">
                    <select class="form-select" id="superssn" name="superssn"  required>
                        <option value="" disabled selected>Select your SuperSSN</option>
                        <option value="223344" <?php if ($superssn == 223344) { echo "selected"; } ?>>223344</option>
                        <option value="321654" <?php if ($superssn == 321654) { echo "selected"; } ?>>321654</option>
                        <option value="512463" <?php if ($superssn == 512463) { echo "selected"; } ?>>512463</option>
                        <option value="968574" <?php if ($superssn == 968574) { echo "selected"; } ?>>968574</option>
                    </select>
                </div>
            </div>
            
            
            <div class="row mb-2">
                <label for="department" class="col-sm-1 col-form-label">department</label>
                <div class="col-sm-11">
                    <select class="form-select" id="department" name="department" required>
                        <option value="" disabled selected>Select your department</option>
                        <option value="10" 
                        <?php if ($dno == 10) {
                            echo "selected";
                        } ?>>10</option>
                        <option value="20"  <?php if ($dno == 20) {
                            echo "selected";
                        } ?>>20</option>
                        <option value="30"  <?php if ($dno == 30) {
                            echo "selected";
                        } ?>>30</option>
                    </select>
                </div>
            </div>
            
            
            <div class="row mb-2">
                <label for="img" class="col-sm-1 col-form-label">Choose your photo</label>
                <div class="col-sm-11">
                    <input type="file" class="form-control" id="img" name="img" value="<?php echo $picture ?>" required>
                </div>
            </div>
            
            <div class="row mb-2">
                <div class="col-sm-11 offset-sm-1">
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <input type="reset" class="btn btn-secondary" value="Reset">
                </div>
            </div>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
