<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <head>
        <title>Register here</title>
    </head>
    <body>
        <?php
        require('conn.php');
        if(isset($_REQUEST['username'])) {
            $firstname=stripslashes($_REQUEST['firsrtname']);
            $firstname=mysqli_real_escape_string($connect, $firstname);
            $lastname=stripslashes($_REQUEST['lastname']);
            $lastname=mysqli_real_escape_string($connect, $lastname);
            $username=stripslashes($_REQUEST['username']);
            $username=mysqli_real_escape_string($connect, $username);
            $email=stripslashes($_REQUEST['email']);
            $email=mysqli_real_escape_string($connect, $email);
            $password=stripslashes($_REQUEST['password']);
            $password=mysqli_real_escape_string($connect, $password);
            $passwordconfirm=stripslashes($_REQUEST['passwordconfirm']);
            $passwordconfirm=mysqli_real_escape_string($connect, $passwordconfirm);
            $age=stripslashes($_REQUEST['age']);
            $age=mysqli_real_escape_string($connect, $age);
            $trn_date=date("Y-m-d H:i:s");
            $query="INSERT into 'xssocialsite' (firstname, lastname, username, password, passwordconfirm, email, age, gradeandsection, trn_date) values ('$firstname', '$lastname', '$username', '$password', '$passwordconfirm', '$email', '$age', '$gradeandsection', '$trn_date')";
            $result=mysqli_query($connect, $query);
            if($result){
                echo "<div class="form"><h2>You are registered successfully</h2><br/>Click here to <a href="login.php">Login</a></div>";
            } 
        } else {
            ?>
        <div class="form">
            <form>
                <input type="text" id="firstname" placeholder="first name here" maxlength="40" required><br/>
                <input type="text" id="lastname" placeholder="last name here" maxlength="40" required><br/>
                <input type="text" id="email" placeholder="enter your email here" required><br/>
                <input type="text" id="username" placeholder="your username here" required><br/>
                <input type="number" id="age" placeholder="age" maxlength="2" required><br/>
                <input type="password" id="password" placeholder="enter your passcode here" required><br/>
                <input type="password" id="passwordconfirm" placeholder="passcode confirmation" required><br/>
                <input type="submit" name="submit" value="Register">
            </form>
        </div>
        <?php } ?>
    </body>
</html>
