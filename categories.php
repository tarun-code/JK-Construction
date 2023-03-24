<?php 
require('top.php');

if(!isset($_GET['id']) && $_GET['id']!=''){
	?>
<script>
window.location.href = 'index.php';
</script>
<?php
}

$cat_id=mysqli_real_escape_string($con,$_GET['id']);

$sub_categories='';
if(isset($_GET['sub_categories'])){
	$sub_categories=mysqli_real_escape_string($con,$_GET['sub_categories']);
}
$price_high_selected="";
$price_low_selected="";
$new_selected="";
$old_selected="";
$sort_order="";
if(isset($_GET['sort'])){
	$sort=mysqli_real_escape_string($con,$_GET['sort']);
	if($sort=="price_high"){
		$sort_order=" order by product.mrp desc ";
		$price_high_selected="selected";	
	}if($sort=="price_low"){
		$sort_order=" order by product.mrp asc ";
		$price_low_selected="selected";
	}if($sort=="new"){
		$sort_order=" order by product.id desc ";
		$new_selected="selected";
	}if($sort=="old"){
		$sort_order=" order by product.id asc ";
		$old_selected="selected";
	}

}

if($cat_id>0){
	$get_product=get_product($con,'',$cat_id,'','','','','',$sort_order,'',$sub_categories);
}else{
	?>
<script>
window.location.href = 'index.php';
</script>
<?php
}										
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate pb-0 text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i
                                class="fa fa-chevron-right"></i></a></span>
                    <span>Properties <i class="fa fa-chevron-right"></i></span>
                <h1 class="mb-3 bread">Properties</h1>
                </p>

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
        <div class="htc__grid__top mb-5">
            <div class="htc__select__option">
                <select class="ht__select" onchange="sort_product_drop('<?php echo $cat_id?>','<?php echo SITE_PATH?>')"
                    id="sort_product_id">
                    <option value="">Default sorting</option>
                    <option value="price_low" <?php echo $price_low_selected?>>Sort by price low to hight
                    </option>
                    <option value="price_high" <?php echo $price_high_selected?>>Sort by price high to low
                    </option>
                    <option value="new" <?php echo $new_selected?>>Sort by new first</option>
                    <option value="old" <?php echo $old_selected?>>Sort by old first</option>
                </select>
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