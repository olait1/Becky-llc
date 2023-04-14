<main id="main">

<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container-fluid">

    <div class="row">

      <div class="col-lg-5 align-items-stretch " style='background-image: url("assets/img/77882513.webp"); background-position: center; background-size: cover; '>
        <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
         -->
      </div>

      <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

        <div class="content">
            <h2>Services</h2>
          <!-- <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto aut nihil</strong></h3> -->
          <!-- <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
          </p>
          <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p> -->
          <ul>
              
            <li><i class="bx bx-check-double"></i> Home Service</li>
            <li><i class="bx bx-check-double"></i>Workplace Delivery</li>
            <li><i class="bx bx-check-double"></i> Outdoor and Indoor Ceremonies Such as:
        <ul>
            <?php
            $services=["House Warming","Birthday Parties",
            "Bridal Shower",
            "Naming Ceremony",
            "Wedding Parties",
            "Anniversaries",
            "Society meetings",
            "Religious Meetings Etc."
        
        ];
        foreach ( $services as $key => $value) {
            # code...
     
            ?>
            <li><i class="bx bx-check"></i><?php echo $value;?></li>
          
<?php
   }
?>
        </ul>
        </li>
          </ul>
         
        </div>

      </div>

    </div>

  </div>
</section><!-- End About Section -->
