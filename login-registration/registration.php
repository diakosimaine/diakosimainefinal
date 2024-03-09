<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        if (isset($_POST["submit"])) {
            $lastname = $_POST["lastname"];
            $firstname = $_POST["firstname"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $passwordRepeat = $_POST["repeat_password"];
            $address = $_POST["address"];
            $country = $_POST["country"];
            $province = $_POST["province"];
            $city = $_POST["city"];
            $barangay = $_POST["barangay"];
            $contact_number = $_POST["contact_number"];
        
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        
            $errors = array();
        
            if (empty($lastname) || empty($firstname) || empty($email) || empty($password) || empty($passwordRepeat) || empty($address) || empty($country) || empty($province) || empty($city) || empty($barangay) || empty($contact_number)) {
                array_push($errors, "All Fields Are Required");
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($errors, "Email is not valid");
            }
            if (strlen($password) < 8) {
                array_push($errors, "Password must be at least 8 characters long");
            }
            if ($password !== $passwordRepeat) {
                array_push($errors, "Password does not match");
            }
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $rowCount = mysqli_num_rows($result);
            if ($rowCount>0) {
                array_push($errors, "Email already exists!");
            }
            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    echo "<div class='alert alert-danger'>$error</div>";
                }
            } else {
                require_once "database.php";
                $sql = "INSERT INTO users (last_name, first_name, email, password, address, country, province, city, barangay, contact_number) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
                if ($prepareStmt) {
                    mysqli_stmt_bind_param($stmt, "ssssssssss", $lastname, $firstname, $email, $passwordHash, $address, $country, $province, $city, $barangay, $contact_number);
                    mysqli_stmt_execute($stmt);
                    echo "<div class='alert alert-success'>You are registered successfully.</div>";
                } else {
                    die("Something went wrong");
                }
            }
        }
        ?>
        <form action="registration.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="lastname" placeholder="Last Name:">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="firstname" placeholder="First Name:">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password:">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="blk/lot" placeholder="Blk/lot:">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="country" placeholder="Country:">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="province" placeholder="Province:">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="city" placeholder="City:">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="barangay" placeholder="Barangay:">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="contact_number" placeholder="Contact Number:">
            </div>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Register" name="submit">
            </div>
        </form>
        <div>
            
            <a href="login.php" class="btn btn-secondary">Back to Login</a>
        </div>
    </div>
</body>
</html>