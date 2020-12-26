<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--material-icons-->
    <!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
    <!--font-awesome-icon-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

            <script src="jquery-3.5.1.js"></script> 


    <!--<link rel="stylesheet" href="style.css">-->

    <title>Speak Up</title>
    
</head>
<body>
  <header>
    <div class="navbar-fixed">
    <nav class="navbar nav-wrapper purple">
      <div class='max-width'>
      <a href="#" class="brand-logo" > SpeakUp. </a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

      <ul class="right hide-on-med-and-down menu">
    
            <li><a href="index.php">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contacts">Contact Us</a></li>
            <li><a href="team.html">Our Team</a></li>
            <li><a href="#feedback">Feedback</a></li>
        </ul>
        <ul class="sidenav purple" id="mobile-demo">
          <li><a href="#home" class="white-text">Home</a></li>
            <li><a href="#about" class="white-text">About</a></li>
            <li><a href="#services" class="white-text">Services</a></li>
            <li><a href="#contacts" class="white-text">Contacts</a></li>
            <li><a href="#feedback"class="white-text">Feedback</a></li>
        </ul>
    </div>
  </nav>
</div>
</header>
<section id="contacts">
<h4 class="center">Contact Us</h4>
<h4 class="center purple-text">__________</h4>



 <form method="POST" action ='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>'>
  <div class="container">
    <div class="row">
      <div class="col s12">
      <div class="container">
      <div class="input-field col s6">
      <i class="material-icons prefix">person</i>

      <input type="text" name="firstname" required>
      <label for="firstname">First Name</label>
    </div>
    <div class="input-field col s6">
      <i class="material-icons prefix">person</i>

      <input type="text" name="lastname" required>
      <label for ="last name">Last Name</label>
    </div>
  </div>
</div>
</div>
<div class="row">
  <div class="col s12">
    <div class="container">
    <div class="input-field col s6">
      <i class="material-icons prefix">email</i>

      <input type="email" name="email" required>
      <label for="email">Email</label>
    </div>
    <div class="input-field col s6">
                <i class="material-icons prefix">phone</i>

      <input type="text" name="phonenumber" required>
      <label for ="phoneno">Phone Number</label>
  </div>
</div>
</div>
</div>
<div class="row">
  <div class="col s12">
    <div class="container">
      <div class="input-field s12">
       <i class="material-icons prefix">location_on</i>

        <input type="text" name="address" required>
        <label for ="address">Address</label>
      </div>
    </div>
  </div>
</div>

  
      <div class="container">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">message</i>
          <textarea id="textarea1" class="materialize-textarea" name="message" required=""></textarea>
          <label for="textarea1">Message</label>
        </div>
      </div>
    </div>

</h5>
</div>

<div class="container center">
  <input type="submit" name="submit" value="submit" class="waves-effect waves-light btn purple">
  <!-- <a href='#' class="waves-effect waves-light btn purple">Contact us</a> -->
</div>
</div>
</section>
 </form>
<div class='center purple-text'>
<?php
if(isset($_POST['submit'])){
  echo '<p>Thank You!!!</p>';
}
?>
</div>


<br>





