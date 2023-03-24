<?php 

$resAgent=mysqli_query($con,"select * from agent where status='1' ");

?>






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