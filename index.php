<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP send mail</title>
</head>
<body>
<div class="container">
    <h2>Contact Form</h2>
       
    <form action="sendmail.php" method="POST">
        <label for="firstName">First Name</label>
        <input type="text" name="firstName" placeholder="First name" required>
 
        <label for="lastName">Last Name</label>
        <input type="text" name="lastName" placeholder="Nhập họ và tên...lastName" required>

        <label for="email">Email</label>
        <input type="text"  name="email" placeholder="Email" required>
 
        <label for="message">Message</label>
        <textarea  name="message" cols="50" rows="10" placeholder="Message" required></textarea>
 
        <input type="submit" value="Submit">
    </form>
</div>
</body>
</html>