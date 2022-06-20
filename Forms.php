<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms</title>
</head>
<body>
<h2>STUDENT REGISTRATION FORM</h2><br>
<form action="sendto.php"method="post">
    <label for="firstname">FirstName</label>
    <input type="text"id="firstname"name="fname"><br>
    <label for="lastname">LastName</label>
    <input type="text"id="lastname"name="lname"><br>
    <label for="email">Email</label>
    <input type="text"id="email"name="email"><br>
    <label for="age">Age</label>
    <input type="number"id="age"name="age"><br>
    <input type="submit"value="Register"><br>
</form>
</body>
</html>