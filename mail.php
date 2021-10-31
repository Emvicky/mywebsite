  <?php

   $name = $_POST[ 'name'];
   $email = $_POST[ 'email'];
   $number = $_POST[ 'number'];
   $subject = $_POST[ 'name'];
   $message = $_POST[ 'name'];

   $emailheader ="From: ".$name."<" .$email."> \ r \ n";
   $recipient = "victoriaashionyedue@gmail.com ";

   mail( $recipient . $subject . $message. $emailheader)
   or  die("Error!");

   echo'
   <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAWA GOLD MEDIA</title>
    <!--favicon icon link-->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
<div class="contents">
    <h4>Thank you for  contacting DawaGold Media <br>We advertise our customer business to unlimited reach !</h4>
         <p class="back"> Go back to the <a href="index.html" > homepage</a>.</p>
</div>
    

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>
   
   
   
   
   
   
   
   
   ';
  ?>