
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>personal information</title>
    <link rel="stylesheet" href="style.css">
    <style>
     
    </style>
</head>
<body>
    <div class="cotainer">
        <form action="process.php" method="post">
            <h1>personal information</h1>
            <label for="firstname">firstname:</label>
            <input type="text" name="firstname" value=""placeholder="enter your first name" required><br>
            <label for="lastname">lastname:</label>
            <input type="text" name="lastname" value="" placeholder="enter your last name" required><br>
            <label for="email">email:</label>
            <input type="email" name="email" value="" placeholder="enter your  email" required><br>
            <label for="address">address:</label>
            <input type="text" name="address" value=""placeholder="enter your  address"required><br>
            <label for="password">password:</label>
            <input type="password" name="password" value=""placeholder="enter your password"required><br>
            <label for="phonenumber">phone number:</label>
            <input type="number"  name="number" value=""placeholder="enter your phone number"required><br>
            <label for="dob">date of birth:</label>
            <input type="date" name="date" value=""  placeholder="enter your date of birth"required><br>
            <label for="gender">gender:</label><br>
            <input type="radio" name="gender" value="male"required>male<br>
            <input type="radio" name="gender" value="female"required>female<br>
            <button type="submit" name="submit">submit</button>
        </form>
    </div>
</body>
</html>
