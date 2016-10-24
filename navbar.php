<?php
require 'connection.php';
ob_start(); 
@session_start();
?>
<script>
   $(document).ready(function(){
   if ($(window).width()>992) {
    (function($){ $('#logo').show();
      var $navbar= $('#nav'),
      y_pos =$navbar.offset().top,
      height = $navbar.height();
      $(document).scroll(function(){
        var scrollTop =$(this).scrollTop();
        if (scrollTop>y_pos){$('#logo').hide();$navbar.addClass("navbar-fixed");$('.brand-logo').show(); $('.hide-on-med-and-down').addClass('right'); 
      }
      else if(scrollTop<=y_pos){$('#logo').show();$navbar.removeClass("navbar-fixed"); $('.brand-logo').hide(); $('.hide-on-med-and-down').removeClass('right'); 
      
    }
      });
     
    })(jQuery, undefined); }
    else{$('#logo').remove(); $('.brand-logo').show();
    $('#nav').addClass("navbar-fixed")}
     $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
       constrain_width: false, 
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: true, // Displays dropdown below the button
      alignment: 'left' // Displays dropdown with edge aligned to the left of button
    });


  });

  
  
</script>

<style>  @media only screen and (max-width: 992px){
    nav .brand-logo {
      left: 87%;
      -webkit-transform: translateX(-50%);
    }
    #switch{
      display: none;
    }
  }
 
@media only screen and (max-width: 600px){
    nav .brand-logo {
      top: -10px;
      left:80%;
    }
  }
  @media only screen and (max-width: 400px){
    nav .brand-logo {
      top: -10px;
      left:75%;
    }
  }
  @media only screen and (max-width: 330px){
    nav .brand-logo {
      top: -10px;
      left:70%;
    }
  }

.dropdown-content li {
  text-align: center !important;
}
  </style>
  <div class="row" id="logo" style="background-color: white; margin-bottom: 0px; "><div class="col l12 m12 s12 center-align"><img style=" width:200px;" src="img/logo/sac_logo.png">
    


  
   </div><div id="switch"><?php
  if (@$_SESSION['email']) {
          $query="SELECT name FROM users WHERE email='".$_SESSION["email"]."'";

          if( $query_run = mysqli_query($connection, $query) ){
            
            $row = mysqli_fetch_assoc($query_run);
            $name = $row['name'];

              echo "<a class='dropdown-button ' href='#' data-activates='dropdown1' style='position: absolute;right: 10px;top:  width: auto; margin-top: 10px;font-size: 20px;'><i class='material-icons' style='font-size: 40px;position:relative;top:10px;'>perm_identity</i>".$name."</a>
  <ul id='dropdown1' class='dropdown-content' style='position: relative;margin-top: 10px;'>
    <li><a href='home.php'><i class='material-icons' style='position: relative;top: 5px;padding-right: 5px'>home</i>Home</a></li>
    <li class='divider'></li>
    <li><a href='logout.php'><i class='material-icons' style='position: relative;top: 5px;padding-right: 5px'>power_settings_new</i>LogOut</a></li>
  </ul>";
            }
  } else {
    echo '<div style="position: absolute;top: 10px;right: 10px;"><a href="aam.php"><i class="material-icons" style="font-size: 40px;position: relative;top: 7px;">perm_identity</i>Login</a><a href="signup.php"><i class="material-icons" style="font-size: 40px;position: relative;top: 12px;">add</i>Register</a></div>';
  }
        
     ?></div></div>

<div  class="white" id="nav" style="margin-top: 0px;">
  <ul id="events" class="dropdown-content" style="min-width: 200px;">
    <li><a href="aam.php">Annual Alumni Meet</a></li>
    <li><a href="sam.php">Student Alumni Meet</a></li>
    <li><a href="guestlecture.php">Guest Lectures</a></li>
    <li><a href="leadershipsummit.php">Leadership Summit</a></li>
    <li><a href="alvida.php">Alvida</a></li>
  </ul>
  <ul id="initiatives" class="dropdown-content" style="min-width: 200px;">
    <li><a href="mentorship.php">Mentorship Program</a></li>
    <li><a href="imprint.php">My Imprint</a></li>
  </ul>
  <ul id="publications" class="dropdown-content" style="min-width: 200px;">
    <li><a href="yearbook.php">Yearbook</a></li>
    <li><a href="yoy.php">Yearnings of Yore</a></li>
  </ul>
  <ul id="sponsors" class="dropdown-content" style="min-width: 200px;">
    <li><a href="sponsors2016.php">2016</a></li>
    <li><a href="sponsors2015.php">2015</a></li>
    <li><a href="sponsors2014.php">2014</a></li>
    <li><a href="sponsors2013.php">2013</a></li>
    <li><a href="sponsors2012.php">2012</a></li>
  </ul>
  <nav>
    <div class="nav-wrapper white">
      <a href="index.php" class="brand-logo" style="display: none;"><img src="img/logo/sac_logo.png" width="180" height="70"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <div class="row">
      <ul class="hide-on-med-and-down _textcolor center-align">
        <li class="col l2"><a href="index.php">Home</a></li>
        <li class="col l2"><a href="#!" class="dropdown-button" data-activates="events">Events</a></li>
        <li class="col l2"><a id="drop1" class="dropdown-button" href="#!" data-activates="initiatives">Initiatives</a></li>
        <li class="col l2"><a id="drop2" class="dropdown-button" href="#!" data-activates="publications">Publications</a></li>
        <li class="col l2"><a href="team.php">The&nbspTeam</a></li>
        <li class="col l2"><a id="drop3" class="dropdown-button" href="#!" data-activates="sponsors">Sponsors</a></li>
        <li></li>
</ul> </div>


      <ul id="mobile-demo" class="side-nav">
        <li><a href="index.php">Home</a></li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li>
              <a class="collapsible-header">Events<i class="mdi-navigation-arrow-drop-down"></i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="aam.php">Annual Alumni Meet</a></li>
                  <li><a href="sam.php">Student Alumni Meet</a></li>
                  <li><a href="guestlecture.php">Guest Lectures</a></li>
                  <li><a href="leadershipsummit.php">Leadership Summit</a></li>
                  <li><a href="alvida.php">Alvida</a></li>
                </ul>
    </div></li></ul></li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li>
              <a class="collapsible-header">Initiatives<i class="mdi-navigation-arrow-drop-down"></i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="mentorship.php">Mentorship Program</a></li>
                  <li><a href="imprint.php">My Imprint</a></li>

                </ul>
              </div></li></ul></li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li>
              <a class="collapsible-header">Publications<i class="mdi-navigation-arrow-drop-down"></i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="yearbook.php">Yearbook</a></li>
                  <li><a href="yoy.php">Yearnings of Yore</a></li>

                </ul>
              </div></li></ul></li>


        <li><a href="#!">The Team</a></li>
       <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li>
              <a class="collapsible-header">Our Sponsors<i class="mdi-navigation-arrow-drop-down"></i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="sponsors2016.php">2016</a></li>
    <li><a href="sponsors2015.php">2015</a></li>
    <li><a href="sponsors2014.php">2014</a></li>
    <li><a href="sponsors2013.php">2013</a></li>
    <li><a href="sponsors2012.php">2012</a></li>

                </ul>

              </div></li></ul></li>
              <?php
  if (@$_SESSION['email']) {
          $query="SELECT name FROM users WHERE email='".$_SESSION["email"]."'";

          if( $query_run = mysqli_query($connection, $query) ){
            
            $row = mysqli_fetch_assoc($query_run);
            $name = $row['name'];

              echo '        
          <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li>
              <a class="collapsible-header">'.$name.'<i class="mdi-navigation-arrow-drop-down"></i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="home.php">Home</a></li>
                  <li><a href="logout.php">LogOut</a></li>

                </ul>
              </div></li></ul></li>';
            }
  } else {
    echo '<li><a href="aam.php">Login</a></li><li><a href="signup.php">Register</a></li>';
  }
        
     ?>





      </ul>


  </nav>
</div>