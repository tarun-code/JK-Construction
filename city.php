<?php 

$resCity =mysqli_query($con,"select * from city  ");

?>



<section class="ftco-section ftco-no-pt">

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading">Properties</span>
                <h2 class="mb-2">Properties in this Cities</h2>
            </div>
        </div>
        <?php if(mysqli_num_rows($resCity)>0){?>
        <div class="row">
            <?php while($rowCity=mysqli_fetch_assoc($resCity)){?>
            <div class="col-md-4">

                <spam class="search-place img"
                    style="background-image: url('<?php echo CITY_SITE_PATH.$rowCity['image']?>');">
                    <div class="desc">
                        <h3><span><?php echo $rowCity['name']?></span></h3>
                        <!-- <span>24 Properties</span> -->
                    </div>
                </spam>

            </div>
            <?php } ?>
        </div>
        <?php } ?>
    </div>

</section>