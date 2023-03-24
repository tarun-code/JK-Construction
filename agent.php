<?php require('top.php');

$resAgent=mysqli_query($con,"select * from agent where status='1' ");

?>


<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate pb-0 text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i
                                class="fa fa-chevron-right"></i></a></span> <span>Agent <i
                            class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-3 bread">Agents</h1>
            </div>
        </div>
    </div>
</section>




<section class="ftco-section ftco-agent">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Agents</span>
                <h2 class="mb-4">Our Agents</h2>
            </div>
        </div>
        <?php if(mysqli_num_rows($resAgent)>0){?>
        <div class="row">
            <?php while($rowAgent=mysqli_fetch_assoc($resAgent)){?>
            <div class="col-md-3 ftco-animate">
                <div class="agent">
                    <div class="img">
                        <img src="<?php echo AGENT_SITE_PATH.$rowAgent['image']?>" class="img-fluid" alt="image">
                        <div class="desc">
                            <h3><a href=""><?php echo $rowAgent['name']?></a></h3>
                            <p class="h-info"><span class="location"><?php echo $rowAgent['location']?></span>
                                <!-- <span class="details">10
                                    Properties</span> -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <?php } ?>

        </div>

        <?php } ?>
    </div>
</section>



<?php require('footer.php')?>