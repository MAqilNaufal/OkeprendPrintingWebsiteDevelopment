<?php
//include head
include('header.php');
?>

<body>
  <!-- Section 1 -->  
    <!--Navbar-->
    <?php
    //include navbar
    include('template/_navbar.php');
    ?>
    <!--Akhir Navbar-->
    
    
    <!--About OkePrend-->
    <?php
    //include About OkePrend
    include('template/_about-OkePrend.php');
    ?>
    <!--Akhir About OkePrend-->
  <!-- Akhir Section 1 -->

  <!-- Section 2 -->
    <!--why okeprend-->
    <?php
    //include why okeprend
    include('template/_why-OkePrend.php');
    ?>
    <!--Akhir why okeprend-->

    <!--Testimoni-->
    <div class="container">
      <div class="aboutus">       
        <div class="testimonial break">
          <?php
          //include testimoni
          include('template/_testimoni.php');
          ?>
        </div>
      </div>
    </div>
  <!-- Akhir Section 2 -->

  <!-- Section 7 (footer) -->
    <?php
    //include footer
    include('footer.php');
    ?>
  <!-- Akhir Section 7 (footer) -->

  <script src="main.js"></script>
</body>

