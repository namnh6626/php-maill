<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Send mail</title>
</head>
<?php 




?>
<body>
    <?php
        if(isset($_POST['email']) && isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['message'])){

            $to = 'namngo6626@gmail.com';
            $subject = 'Message from '.$_POST['email'];
            $message = 'Name:'.$_POST['firstName']. ' ' . $_POST['lastName']  . 
                        'Email:' . $_POST['email'] . 
                        'Message: ' . $_POST['message'];
            $header = 'From: namngo6626@gmail.com';
            $result = mail($to, $subject, $message, $header); 
            if($result){
                echo '<span class="message">We will contact you soon!</span>';
                echo '<a href="index.php">Back</a>';
            }else{
                echo '<span class="err">Some thing went wrong!</span>';
                echo '<a href="index.php">Back</a>';

            }
        }else{
            echo '<span class="err">You must fill in this form</span>';
            echo '<a href="index.php">Back</a>';


        }
    ?>
</body>
</html>