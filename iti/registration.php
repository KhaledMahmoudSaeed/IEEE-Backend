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
        <form action="store.php" method="POST" class="border p-4" enctype="multipart/form-data">
            <div class="row mb-2">
                <label for="first_name" class="col-sm-1 col-form-label">First Name</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" id="first_name" name="first_name" required>
                </div>
            </div>

            <div class="row mb-2">
                <label for="last_name" class="col-sm-1 col-form-label">Last Name</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                </div>
            </div>

            <div class="row mb-2">
                <label class="col-sm-1 col-form-label">Gender</label>
                <div class="col-sm-11">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="m" required>
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="f">
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                </div>
            </div>

            <div class="row mb-2">
                <label for="birthdate" class="col-sm-1 col-form-label">Birth Date</label>
                <div class="col-sm-11">
                    <input type="date" class="form-control" id="birthdate" name="birthdate" required>
                </div>
            </div>


            <div class="row mb-2">
                <label for="address" class="col-sm-1 col-form-label">Address</label>
                <div class="col-sm-11">
                    <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                </div>
            </div>

            <div class="row mb-2">
                <label for="country" class="col-sm-1 col-form-label">Country</label>
                <div class="col-sm-11">
                    <select class="form-select" id="country" name="country" required>
                        <option value="" disabled selected>Select your country</option>
                        <option value="Egypt">Egypt</option>
                        <option value="Germany">Germany</option>
                        <option value="England">England</option>
                        <option value="Russia">Russia</option>
                    </select>
                </div>
            </div>

            <!-- 
            <div class="row mb-2">
                <label class="col-sm-1 col-form-label">Skills</label>
                <div class="col-sm-11">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="skill[]" id="php" value="php">
                        <label class="form-check-label" for="php">PHP</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="skill[]" id="j2se" value="j2se">
                        <label class="form-check-label" for="j2se">J2SE</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="skill[]" id="mysql" value="mysql">
                        <label class="form-check-label" for="mysql">MySQL</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="skill[]" id="postgresql"
                            value="postgresql">
                        <label class="form-check-label" for="postgresql">PostgreSQL</label>
                    </div>
                </div>
            </div> -->

            <!-- <div class="row mb-2">
                <label for="username" class="col-sm-1 col-form-label">Username</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
            </div>

            <div class="row mb-2">
                <label for="password" class="col-sm-1 col-form-label">Password</label>
                <div class="col-sm-11">
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
            </div> -->

            <div class="row mb-2">
                <label for="salary" class="col-sm-1 col-form-label">Salary</label>
                <div class="col-sm-11">
                    <input type="integer" class="form-control" id="salary" name="salary" required>
                </div>
            </div>

            <div class="row mb-2">
                <label for="superssn" class="col-sm-1 col-form-label">SuperSSN</label>
                <div class="col-sm-11">
                    <select class="form-select" id="superssn" name="superssn" required>
                        <option value="" disabled selected>Select your SuperSSN</option>
                        <option value="223344">223344</option>
                        <option value="321654">321654</option>
                        <option value="512463">512463</option>
                        <option value="968574">968574</option>
                    </select>
                </div>
            </div>


            <div class="row mb-2">
                <label for="department" class="col-sm-1 col-form-label">department</label>
                <div class="col-sm-11">
                    <select class="form-select" id="department" name="department" required>
                        <option value="" disabled selected>Select your department</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="30">30</option>
                    </select>
                </div>
            </div>


            <div class="row mb-2">
                <label for="img" class="col-sm-1 col-form-label">Choose your photo</label>
                <div class="col-sm-11">
                    <input type="file" class="form-control" id="img" name="img" required>
                </div>
            </div>

            <div class="row mb-2">
                <label for="checktext" class="col-sm-1 col-form-label">Code: Sh68Sa</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" id="checktext" name="checktext" required>
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