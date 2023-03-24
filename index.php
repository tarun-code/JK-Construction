<?php 
require('top.php');

$resBanner=mysqli_query($con,"select * from banner where status='1' order by order_no asc");

?>








<!-- <section class="hero-wrap" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center">
            <div class="col-lg-7 col-md-6 ftco-animate d-flex align-items-end">
                <div class="text">
                    <h1 class="mb-4">Find Perfect <br>House From Your Area.</h1>
                    <p style="font-size: 18px;">From as low as 20 A small river named Duden flows by their place
                        and supplies it with the necessary regelialia.</p>
                    <p><a href="contact.php" class="btn btn-primary py-3 px-4">Contact Now</a></p>
                </div>
            </div>
        </div>
    </div>
</section> -->


<section class="hero-wrap " style=" background-position: 50% 141.057px;" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <?php if(mysqli_num_rows($resBanner)>0){?>
    <div id="slider" class="sl-slider-wrapper">

        <div class="sl-slider">
            <?php while($rowBanner=mysqli_fetch_assoc($resBanner)){?>
            <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25"
                data-slice1-scale="2" data-slice2-scale="2">
                <div class="sl-slide-inner">
                    <div class=" bg-img "
                        style="background-image: url('<?php echo BANNER_SITE_PATH.$rowBanner['image']?>');"></div>
                    <h2><a href="#" class=""><?php echo $rowBanner['heading1']?></a></h2>
                    <blockquote>
                        <p class="location"><span
                                class="glyphicon glyphicon-map-marker"></span><?php echo $rowBanner['heading2']?>
                        </p>

                        <cite> <?php
										if($rowBanner['btn_txt'] !='' && $rowBanner['btn_link']!=''){
											?>
                            <div class="">
                                <a href="<?php echo $rowBanner['btn_link']?>"><?php echo $rowBanner['btn_txt']?></a>
                            </div>
                            <?php
										}
										?>
                        </cite>
                    </blockquote>
                </div>
            </div>
            <?php } ?>

        </div><!-- /sl-slider -->



        <!-- <nav id="nav-dots" class="nav-dots">
            <span class="nav-dot-current"></span>

            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>


        </nav> -->




    </div><!-- /slider-wrapper -->
    <?php } ?>


</section>







<section class="ftco-section ftco-no-pb ftco-no-pt search-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="search-wrap-1 ftco-animate p-4">
                    <form action="search.php" method="get" class="search-property-1">
                        <div class="row">
                            <div class="col-lg align-items-end">
                                <div class="form-group">
                                    <label for="#">Keyword</label>
                                    <div class="form-field">
                                        <div class="icon"><span class="fa fa-search"></span></div>
                                        <input type="text" name="str" class="form-control" placeholder="Enter Keyword">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg align-items-end">
                                <div class="form-group">
                                    <label for="#">Property Type</label>
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                            <select name="property_type" id="" class="form-control">
                                                <option id="display">Property Type</option>
                                                <option id="display" value="Residence">Residence</option>
                                                <option id="display" value="Office">Office</option>
                                                <option id="display" value="Rent">Rent</option>
                                                <option id="display" value="Sale">Sale</option>
                                                <option id="display" value="Commercial">Commercial</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg align-items-end">
                                <div class="form-group">
                                    <label for="#">Location</label>
                                    <div class="form-field">
                                        <div class="icon"><span class="fa fa-search"></span></div>
                                        <input type="text" name="location" class="form-control" placeholder="Location">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg align-items-end">
                                <div class="form-group">
                                    <label for="#">Price Limit</label>
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                            <select name="search_price" id="" class="form-control">
                                                <option id="display">Price</option>
                                                <option id="display" value="1"> &#8377; 5000 - &#8377; 50,000</option>
                                                <option id="display" value="2"> &#8377; 50,000 - &#8377; 100,000
                                                </option>
                                                <option id="display" value="3"> &#8377; 100,000 - &#8377; 200,000
                                                </option>
                                                <option id="display" value="4"> &#8377; 200,000 - above</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg align-self-end">
                                <div class="form-group">
                                    <div class="form-field">
                                        <input type="submit" value="Search" class="form-control btn btn-primary">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="ftco-section ftco-no-pb ftco-no-pt bg-primary">
    <div class="container">
        <div class="row d-flex no-gutters">
            <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                <div class="media block-6 services services-bg d-block text-center px-4 py-5">
                    <div class="icon d-flex justify-content-center align-items-center"><span
                            class="flaticon-business"></span></div>
                    <div class="media-body py-md-4">
                        <h3>Trusted by Thousands</h3>
                        <p> Our team of PROFESSIONALS has been working together for well.
                            Our agents,attorneys and mortgage brokers maintain constant flawless communication which
                            ensures high
                            level of reliability. As a valuable addition to our team we frequently do the services.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                <div class="media block-6 services services-bg services-darken d-block text-center px-4 py-5">
                    <div class="icon d-flex justify-content-center align-items-center"><span
                            class="flaticon-home"></span></div>
                    <div class="media-body py-md-4">
                        <h3>Wide Range of Properties</h3>
                        <p>
                            From Residential to Commercial & Industrial, we offer diverse range of properties.
                            JK CONSTRUCTION is aimed at making property dealing easy, convenient and quick. Great
                            properties are hand-picked by Investors very soon and we make your journey of
                            finding-Property smooth and fair..</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                <div class="media block-6 services services-bg services-lighten d-block text-center px-4 py-5">
                    <div class="icon d-flex justify-content-center align-items-center"><span
                            class="flaticon-stats"></span></div>
                    <div class="media-body py-md-4">
                        <h3>Financing Made Easy</h3>
                        <p>Applying for a home loan is an exciting first step in your journey to owning your dream home.
                            This need not be overwhelming with our step-by-step guide to the home loan procedure. While
                            there may be minor differences from one lender to another. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                <div class="media block-6 services services-bg d-block text-center px-4 py-5">
                    <div class="icon d-flex justify-content-center align-items-center"><span
                            class="flaticon-quarantine"></span></div>
                    <div class="media-body py-md-4">
                        <h3>Locked in Pricing</h3>
                        <p> We take pricing your home very seriously and in-dept analysis of all of the
                            unique features of your property and the existing market conditions we will expertly advise
                            you on a pricing strategy that creates a clear path towards your goal of a successful home
                            sale.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading">What we offer</span>
                <h2 class="mb-2"> Properties</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-properties owl-carousel">
                    <?php
							$get_product=get_product($con,);
							foreach($get_product as $list){
							?>

                    <div class="item">
                        <div class="property-wrap ftco-animate">
                            <a href="product.php?id=<?php echo $list['id']?>" class="img"
                                style="background-image: url('<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>');">
                                <div class="rent-sale">
                                    <span class="rent"><?php echo $list['project_type']?></span>
                                </div>
                                <p class="price"><span class="orig-price"> &#8377; <?php echo $list['mrp']?><small>
                                        </small></span></p>
                            </a>
                            <div class="text">
                                <ul class="property_list">
                                    <li><span class="flaticon-"></span><?php echo $list['project_ameneties']?></li>

                                    <li><span class="flaticon-"></span> &#8377; <?php echo $list['pricesq']?> Sqft.
                                    </li>
                                    <!-- <li><span class="flaticon-"></span>2</li> -->
                                </ul>
                                <h3><a href="product.php?id=<?php echo $list['id']?>"><?php echo $list['name']?></a>
                                </h3>
                                <span class="location"><?php echo $list['location']?></span> <br>
                                <span class="flaticon-"><?php echo $list['construction_status']?></span>
                                <a href="product.php?id=<?php echo $list['id']?>"
                                    class="d-flex align-items-center justify-content-center btn-custom">
                                    <span class="fa fa-link"></span>
                                </a>

                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading">What we offer</span>
                <h2 class="mb-2">Featured Properties</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-properties owl-carousel">
                    <?php
							$get_product=get_product($con,'','','','','','','','','yes');
							foreach($get_product as $list){
							?>
                    <div class="item">
                        <div class="property-wrap ftco-animate">
                            <a href="product.php?id=<?php echo $list['id']?>" class="img"
                                style="background-image: url('<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>');">
                                <div class="rent-sale">
                                    <span class="rent"><?php echo $list['project_type']?></span>
                                </div>
                                <p class="price"><span class="orig-price"> &#8377; <?php echo $list['mrp']?><small>
                                        </small></span></p>
                            </a>
                            <div class="text">
                                <ul class="property_list">
                                    <!-- <li><span class="flaticon"></span>3</li> -->
                                    <li><span class="flaticon"></span><?php echo $list['project_ameneties']?></li>
                                    <li><span class="flaticon"></span> &#8377; <?php echo $list['pricesq']?> Sqft.</li>
                                </ul>
                                <h3><a href="product.php?id=<?php echo $list['id']?>"><?php echo $list['name']?></a>
                                </h3>
                                <span class="location"><?php echo $list['location']?></span> <br>
                                <span class="flaticon-"><?php echo $list['construction_status']?></span>
                                <a href="product.php?id=<?php echo $list['id']?>"
                                    class="d-flex align-items-center justify-content-center btn-custom">
                                    <span class="fa fa-link"></span>
                                </a>
                                <!-- <div class="list-team d-flex align-items-center mt-2 pt-2 border-top">
                                    <div class="d-flex align-items-center">
                                        <div class="img" style="background-image: url(images/person_1.jpg);"></div>
                                        <h3 class="ml-2">Tarun</h3>
                                    </div>
                                    <span class="text-right">2 weeks ago</span>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require('about_home.php')?>

<?php require('agent_home.php')?>




<section class="ftco-section services-section bg-darken">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center heading-section heading-section-white ftco-animate">
                <span class="subheading">Work flow</span>
                <h2 class="mb-3">How it works</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services services-2">
                    <div class="media-body py-md-4 text-center">
                        <div class="icon mb-1 d-flex align-items-center justify-content-center"><span>01</span>
                            <img src="images/blob.svg" alt="">
                        </div>
                        <h3>Evaluate Property</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services services-2">
                    <div class="media-body py-md-4 text-center">
                        <div class="icon mb-1 d-flex align-items-center justify-content-center"><span>02</span>
                            <img src="images/blob.svg" alt="">
                        </div>
                        <h3>Meet Your Agent</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services services-2">
                    <div class="media-body py-md-4 text-center">
                        <div class="icon mb-1 d-flex align-items-center justify-content-center"><span>03</span>
                            <img src="images/blob.svg" alt="">
                        </div>
                        <h3>Close the Deal</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services services-2">
                    <div class="media-body py-md-4 text-center">
                        <div class="icon mb-1 d-flex align-items-center justify-content-center"><span>04</span>
                            <img src="images/blob.svg" alt="">
                        </div>
                        <h3>Have Your Property</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center heading-section ftco-animate mb-5">
                <span class="subheading">Services</span>
                <h2 class="mb-3">Special Services</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                <div class="media block-6 services d-block text-center px-3 pb-4">
                    <div class="icon d-flex justify-content-center align-items-center"><span
                            class="flaticon-home-repair"></span></div>
                    <div class="media-body py-md-4">
                        <h3>Development</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                <div class="media block-6 services d-block text-center px-3 pb-4">
                    <div class="icon d-flex justify-content-center align-items-center"><span
                            class="flaticon-sales"></span></div>
                    <div class="media-body py-md-4">
                        <h3>Sales Marketing</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                <div class="media block-6 services d-block text-center px-3 pb-4">
                    <div class="icon d-flex justify-content-center align-items-center"><span
                            class="flaticon-bank"></span></div>
                    <div class="media-body py-md-4">
                        <h3>Brokerage</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                <div class="media block-6 services d-block text-center px-3 pb-4">
                    <div class="icon d-flex justify-content-center align-items-center"><span
                            class="flaticon-team"></span></div>
                    <div class="media-body py-md-4">
                        <h3>Property Management</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                <div class="media block-6 services d-block text-center px-3 pb-4">
                    <div class="icon d-flex justify-content-center align-items-center"><span
                            class="flaticon-home-repair"></span></div>
                    <div class="media-body py-md-4">
                        <h3>Development</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                <div class="media block-6 services d-block text-center px-3 pb-4">
                    <div class="icon d-flex justify-content-center align-items-center"><span
                            class="flaticon-sales"></span></div>
                    <div class="media-body py-md-4">
                        <h3>Sales Marketing</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                <div class="media block-6 services d-block text-center px-3 pb-4">
                    <div class="icon d-flex justify-content-center align-items-center"><span
                            class="flaticon-bank"></span></div>
                    <div class="media-body py-md-4">
                        <h3>Brokerage</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                <div class="media block-6 services d-block text-center px-3 pb-4">
                    <div class="icon d-flex justify-content-center align-items-center"><span
                            class="flaticon-team"></span></div>
                    <div class="media-body py-md-4">
                        <h3>Property Management</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






<?php require('gallery_home.php')?>

<?php require('blog_home.php')?>


<?php require('contact_home.php')?>


<?php require('footer.php')?>