<?php

$resGallery=mysqli_query($con,"select * from gallery where status='1' ");

?>









<section class="ftco-section ftco-no-pt mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading">Gallery</span>
                <h2 class="mb-2">Our Gallery</h2>
            </div>
        </div>
        <?php if(mysqli_num_rows($resGallery)>0){?>
        <div class="row">
            <?php while($rowGallery=mysqli_fetch_assoc($resGallery)){?>
            <div class="col-md-4">

                <spam class="search-place img"
                    style="background-image: url('<?php echo GALLERY_SITE_PATH.$rowGallery['image']?>');">
                    <div class="desc">
                        <!-- <h3><span>Raipur</span></h3>
                        <span>24 Properties</span> -->
                    </div>
                </spam>

            </div>
            <?php } ?>
        </div>
        <?php } ?>
    </div>
</section>