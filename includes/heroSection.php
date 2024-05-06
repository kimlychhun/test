<?php
  $result = dbSelect('tbl_slideshow','*',"enable='1'","order by ssorder asc");
  $num = mysqli_num_rows($result);
?>


<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <?php
      $i=0;
      while($row = mysqli_fetch_array($result))
      {
    ?>
    <div class="carousel-item <?=($i==0?'active':'')?>" >
      <div class="hero">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-lg-5">
              <div class="intro-excerpt">
                <h1><?=$row['title']?></h1>
                <!-- <span class="d-block">Design Studio</span> -->
                <h3 class="mb-4"><?=$row['subtitle']?></h3>
                <p><?=$row['text']?></p>
                <p><a href="<?=$row['link']?>" class="btn btn-secondary me-2">Shop Now</a><a href="#" class="btn btn-white-outline">Explore</a></p>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="hero-img-wrap">
                <img src="images/<?=$row['img']?>" style="z-index: 1;" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
      $i++;
      }
    ?>

    <!-- Additional Carousel Items -->
    <!-- <div class="carousel-item active">
      <div class="hero">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-lg-5">
              <div class="intro-excerpt">
                <h1>Stylish Furniture <span class="d-block">Collection</span></h1>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla accumsan leo ut lacus varius, et eleifend felis volutpat.</p>
                <p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#" class="btn btn-white-outline">Explore</a></p>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="hero-img-wrap">
			  <img src="images/blacksofa.png" style="z-index: 1;" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <!-- Add more carousel items as needed -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
