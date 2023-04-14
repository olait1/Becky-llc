
    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container">

        <div class="section-title">
          <h2>Check our tasty <span>Menu</span></h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters" >
              <?php
              $categories=["ALL","PASTRIES","MEAL","SIDEMEAL","SWALLOW"];
              foreach ($categories as $key => $value) {
                # code...
              ?>

              <li data-filter="*" name="menuL" value="<?php echo $value;?>" class="">

              
                <?php 
echo $value;
              ?></li>
              
              <?php
  }
              ?>
            </ul>
          </div>
        </div>

        <div class="row menu-container">
<?php


$conn = new mysqli("localhost", "root", "","becky");

  # code...
  $food = $_GET['menuL'];
  

if ($food=="ALL") {
  # code...
  for ($i=0; $i < count($categories); $i++) { 
    # code...
  $cat=$categories[$i];
  $sql = "SELECT * FROM category";
  $result = $conn->query($sql);
  }
}else {
  for ($i=0; $i < count($categories); $i++) { 
    # code...
  $cat=$categories[$i];
  $sql = "SELECT * FROM category WHERE fca='$food'";
  $result = $conn->query($sql);
  }
}


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

?>
          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a href="#"><?php echo $row['name'];?></a><span><?php echo $row['price'];?></span>
            </div>
            <div class="menu-ingredients">
            <?php echo $row['decs'];?>
            </div>
          </div>

          <?php 
}}

//header("location:index.php?#menu");
          ?>
        </div>

      </div>
    </section><!-- End Menu Section -->
<script type="text/javascript" src="script.js"></script>