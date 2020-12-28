<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--material-icons-->
    <!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
    <!--font-awesome-icon-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

            <script src="jquery-3.5.1.js"></script> 


    <link rel="stylesheet" href="style.css">
    <title>Speak Up</title>
</head>
<body>
<nav class="nav-wrapper purple">
<div class="container">
      <a href="#" class="brand-logo" > SpeakUp. </a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

      <ul class="right hide-on-med-and-down menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="service.html">Services</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="team.html">Our Team</a></li>
      </ul>
    <ul class="sidenav purple" id="mobile-demo">

      <li><a href="index.php" class="white-text">Home</a></li>
      <li><a href="about.html" class="white-text">About</a></li>
      <li><a href="service.html" class="white-text">Services</a></li>
      <li><a href="contact.php" class="white-text">Contact Us</a></li>
      <li><a href="team.html"  class="white-text">Our Team</a></li>
    </ul>
    </div>
    </nav>

<section id="contacts">
<h4 class="center">Contact Us</h4>
<h4 class="center purple-text">__________</h4>
 <form method="POST" action ='action.php'>
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
      <label for ="phoneno">Phone No</label>
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
          <textarea id="textarea1" class="materialize-textarea" name="message"></textarea>
          <label for="textarea1">Message</label>
        </div>
      </div>
    </div>

</h5>
</div>
<div class="container purple-text center">
  <p id="sumi"></p>
</div>

<div class="container center">
  <input type="submit" name="submit" value="submit" class="waves-effect waves-light btn purple">
  <!-- <a href='#' class="waves-effect waves-light btn purple">Contact us</a> -->
</div>
</div>
</section>
 </form>



<br>
<footer class="page-footer purple">
 

      <div class="footer-copyright">
           <div class="container">
           &copy;Fight Against Rape | Designed by PearlsAfrica Team-8
           <a class="grey-text text-lighten-4 right" href="#!"></a>
             <div class="ins">
                  <a href="#"><i class="fab fa-facebook"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-youtube"></i></a>
       </div>
           </div>
         </div>
       </footer>
     


 
<script>
    $(document).ready(function(){
     $('.sidenav').sidenav();
  
  });
  </script>
  <script>
  /*let form = document.getElementByTagName('form')[0];
  form.addEventListener('submit', (e) => {
    e.preventDefault();
    alert("submitted")
  });*/
  $('form').on('submit', function(){
    //alert('submitted');
    document.getElementById('sumi').innerHTML ="Submitted.Thank you.";

  });
</script>

<script>
         $(document).ready(function(){
          $('.sidenav').sidenav();
});
      </script>

  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <!--jquery-->
  <script src="//code.tidio.co/0tvvgfewzghszonp8qn2eb0tzuugvo25.js" async></script>
  
  
  
  <script src='team.js'></script>
  </body>
  </html>




