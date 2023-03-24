<?php 

$resTestimonial=mysqli_query($con,"select * from testimonials where status='1' ");

?>




<section class="ftco-section testimony-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Testimonial</span>
                <h2 class="mb-3">Happy Clients</h2>
            </div>
        </div>

        <div class="row ftco-animate">

            <div class="col-md-12">
                <?php if(mysqli_num_rows($resTestimonial)>0){?>
                <div class="carousel-testimony owl-carousel">

                    <?php while($rowTestimonial=mysqli_fetch_assoc($resTestimonial)){?>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <span class="fa fa-quote-left"></span>
                                <p class="mb-4"><?php echo $rowTestimonial['comment']?></p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img"
                                        style="background-image: url('<?php echo TESTIMONIAL_SITE_PATH.$rowTestimonial['image']?>')">
                                    </div>
                                    <div class="pl-3">
                                        <p class="name"><?php echo $rowTestimonial['name']?></p>
                                        <span class="position"><?php echo $rowTestimonial['profession']?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                </div>
                <?php } ?>
            </div>

        </div>

    </div>
</section>