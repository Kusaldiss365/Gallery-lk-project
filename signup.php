<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="signup.css">
    <title>Login</title>
</head>


<body>

    <div class="signuppage">
    <h1>Sign up</h1>
    <div class="content">
        <form action="Reg.php" method="post">
            <p>First name : <input type="text" placeholder="Enter first name" class="firstname" name="firstname" required></p>
            <p>Last name : <input type="text" placeholder="Enter last name" class="lastname" name="lastname" required ></p>
            <p>Phone number : <input type="text" placeholder="Enter phone number" class="phonenumber" name="phonenumber" required></p>
            <p>Email : <input type="email" placeholder="@gmail.com" class="email" name="email" required ></p>
            <p>Password : <input type="password" placeholder="Enter Password" class="password" name="password" required ></p>
            <p>Re-enter Password : <input type="password" placeholder="Enter Password" class="password" name="repassword" required ></p>
            <input type="submit" value="Register">
            <a href="#" class="needhelp">Need Help?</a>
        </form>
    </div>
    </div>

</body>
</html>