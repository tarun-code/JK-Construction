<?php 
require('top.php');
$str=mysqli_real_escape_string($con,$_GET['str']);
$property_type=mysqli_real_escape_string($con,$_GET['property_type']);
$location=mysqli_real_escape_string($con,$_GET['location']);
$search_price=mysqli_real_escape_string($con,$_GET['search_price']);
if($str!='' or $property_type!='' or  $location!='' or  $search_price!='' ){
	$get_product=get_product($con,'','','',$str,$property_type ,$location ,$search_price,'','','' );
}else{
	?>
<script>
window.location.href = 'index.php';
</script>
<?php
}	

?>



<!-- banner -->
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate pb-0 text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i
                                class="fa fa-chevron-right"></i></a></span> <span>Search <i
                            class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-3 bread"><?php echo $str?></h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <?php if(count($get_product)>0){?>
        <div class="row justify-content-center">

            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading">What we offer</span>
                <h2 class="mb-2"> Properties</h2>
            </div>
        </div>

        <div class="row ftco-animate">

            <div class="col-md-12">

                <div class="carousel-properties owl-carousel ">
                    <?php
										foreach($get_product as $list){
										?>
                    <div class="item">
                        <div class="property-wrap ftco-animate">
                            <a href="product.php?id=<?php echo $list['id']?>" class="img"
                                style="background-image: url('<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>');">
                                <div class="rent-sale">
                                    <span class="sale"><?php echo $list['project_type']?></span>
                                </div>
                                <p class="price"><span class="orig-price"> &#8377; <?php echo $list['mrp']?></span></p>
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
    <?php } else { 
						echo "Data not found";
					} ?>
</section>



<?php require('footer.php')?>