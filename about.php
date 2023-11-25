<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sobre</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>Sobre</h3>
   <p> <a href="home.php">Tela Inicial</a> / Sobre </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
      <img src="images/channels.jpg" alt="IMG">
      </div>

      <div class="content">
         <h3>Por que escolher Simao Tech Services?</h3>
         <p>Nós trazemos soluções para todo tipo de problema da Tecnologia do Android e do computador</p>
         <p>Desde o desbloqueio de rede, remoção de conta google, formatação, venda de firmwares, e muito mais...</p>
         <a href="contact.php" class="btn">Fale connosco</a>
      </div>

   </div>

</section>


<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>