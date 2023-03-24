<?php 
ob_start();
require('top.php');

if(isset($_GET['id'])){
	$product_id=mysqli_real_escape_string($con,$_GET['id']);
	if($product_id>0){
		$get_product=get_product($con,'','',$product_id);
	}else{
		?>
<script>
window.location.href = 'index.php';
</script>
<?php
	}
	
	$resMultipleImages=mysqli_query($con,"select product_images from product_images where product_id='$product_id'");
	$multipleImages=[];
	if(mysqli_num_rows($resMultipleImages)>0){
		while($rowMultipleImages=mysqli_fetch_assoc($resMultipleImages)){
			$multipleImages[]=$rowMultipleImages['product_images'];
		}
	}
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
                                class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a
                            href="categories.php?id=<?php echo $get_product['0']['categories_id']?>"><?php echo $get_product['0']['categories']?><i
                                class="fa fa-chevron-right"></i></a></span>
                    <span>Property Details<i class="fa fa-chevron-right"></i></span>
                </p>
                <h1 class="mb-3 bread"><?php echo $get_product['0']['name']?></h1>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section ftco-property-details">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="property-details">

                    <div class="img" id="img_tab-1">
                        <!-- <a href="https://vimeo.com/45830194"
                            class="img-video popup-vimeo d-flex align-items-center justify-content-center">
                            <span class="fa fa-play"></span>
                        </a> -->
                        <img width="" data-origin="<?php echo PRODUCT_IMAGE_SITE_PATH.$get_product['0']['image']?>"
                            src="<?php echo PRODUCT_IMAGE_SITE_PATH.$get_product['0']['image']?>">
                    </div>
                    <?php if(isset($multipleImages[0])){?>
                    <div id="multiple_images">
                        <?php
											foreach($multipleImages as $list){
			echo "<img src='".PRODUCT_MULTIPLE_IMAGE_SITE_PATH.$list."' onclick=showMultipleImage('".PRODUCT_MULTIPLE_IMAGE_SITE_PATH.$list."')>";
											}
											?>

                    </div>
                    <?php } ?>

                    <div class="text">
                        <span class="subheading"><?php echo $get_product['0']['location']?></span>
                        <h2><?php echo $get_product['0']['name']?></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 pills">
                <div class="bd-example bd-example-tabs">
                    <div class="d-flex">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                            <li class="nav-item">
                                <a class="nav-link active" id="pills-description-tab" data-toggle="pill"
                                    href="#pills-description" role="tab" aria-controls="pills-description"
                                    aria-expanded="true">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill"
                                    href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer"
                                    aria-expanded="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review"
                                    role="tab" aria-controls="pills-review" aria-expanded="true">Contact Now</a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-description" role="tabpanel"
                            aria-labelledby="pills-description-tab">
                            <div class="row">
                                <div class="col-md-4">
                                    <ul class="features">
                                        <li class="check"><span class="fa fa-check-circle"></span> Project Size :
                                            <?php echo $get_product['0']['project_size']?>
                                            SQ FT
                                        </li>
                                        <li class="check"><span class="fa fa-check-circle"></span>Project Type :
                                            <?php echo $get_product['0']['project_type']?></li>
                                        <li class="check"><span class="fa fa-check-circle"></span>Price : &#8377;
                                            <?php echo $get_product['0']['mrp']?></li>
                                        <li class="check"><span class="fa fa-check-circle"></span>Location :
                                            <?php echo $get_product['0']['location']?></li>
                                        <li class="check"><span class="fa fa-check-circle"></span>Price Per Sqft.
                                            (Avg.) : &#8377;
                                            <?php echo $get_product['0']['pricesq']?></li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul class="features">
                                        <li class="check"><span class="fa fa-check-circle"></span>Project Amenities :
                                            <?php echo $get_product['0']['project_ameneties']?></li>
                                        <li class="check"><span class="fa fa-check-circle"></span>RERA :
                                            <?php echo $get_product['0']['rera']?></li>
                                        <!-- <li class="check"><span class="fa fa-check-circle"></span>Water</li> -->
                                        <li class="check"><span class="fa fa-check-circle"></span>categories :
                                            <?php echo $get_product['0']['categories']?></li>
                                        <li class="check"><span class="fa fa-check-circle"></span>RERA No. :
                                            <?php echo $get_product['0']['rera_no']?></li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul class="features">
                                        <li class="check"><span class="fa fa-check-circle"></span>Construction Status :
                                            <?php echo $get_product['0']['construction_status']?></li>

                                        <!-- <li class="check"><span class="fa fa-check-circle"></span>Water</li> -->
                                        <li class="check"><span class="fa fa-check-circle"></span>Possession Starts :
                                            <?php echo $get_product['0']['possession_start']?>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel"
                            aria-labelledby="pills-manufacturer-tab">
                            <p><?php echo $get_product['0']['short_desc']?></p>
                            <p> <?php echo $get_product['0']['description']?></p>
                        </div>

                        <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
                            <div class="row">
                                <div class="col-md-7">
                                    <h3 class="head">Please Contact Us For More Details</h3>
                                    <form action="#" class="bg-light p-5 contact-form" method="post">
                                        <div class="form-group">
                                            <input type="text" id="name" name="name" class="form-control"
                                                placeholder="Your Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" id="email" name="email" class="form-control"
                                                placeholder="Your Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="mobile" id="mobile" name="mobile" class="form-control"
                                                placeholder="Your Phone">
                                        </div>

                                        <div class="form-group">
                                            <textarea name="message" id="message" cols="30" rows="7"
                                                class="form-control" placeholder="Message"></textarea>
                                        </div>
                                        <div>
                                            <strong>
                                                <span id="contact_submit" class="sucess_msg "></span>
                                                <span id="contact_error" class="danger_msg "></span>
                                            </strong>
                                        </div>
                                        <div class="form-group">
                                            <a onclick="send_message()" class="btn btn-primary py-3 px-5">Send
                                                Message</a>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






<?php
		//unset($_COOKIE['recently_viewed']);
		if(isset($_COOKIE['recently_viewed'])){
			$arrRecentView=unserialize($_COOKIE['recently_viewed']);
			$countRecentView=count($arrRecentView);
			$countStartRecentView=$countRecentView-4;
			if($countStartRecentView>4){
				$arrRecentView=array_slice($arrRecentView,$countStartRecentView,4);
			}
			$recentViewId=implode(",",$arrRecentView);
			$res=mysqli_query($con,"select * from product where id IN ($recentViewId) and status=1");
			
		?>



<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading">What we offer</span>
                <h2 class="mb-2">Recently Viewed Properties</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-properties owl-carousel">
                    <?php while($list=mysqli_fetch_assoc($res)){?>

                    <div class="item">
                        <div class="property-wrap ftco-animate">
                            <a href="product.php?id=<?php echo $list['id']?>" class="img"
                                style="background-image: url('<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>');">
                                <div class="rent-sale">
                                    <span class="sale"><?php echo $list['project_type']?></span>
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

<?php 
			$arrRec=unserialize($_COOKIE['recently_viewed']);
			if(($key=array_search($product_id,$arrRec))!==false){
				unset($arrRec[$key]);
			}
			$arrRec[]=$product_id;
		}else{
			$arrRec[]=$product_id;
		}
		setcookie('recently_viewed',serialize($arrRec),time()+60*60*24*365);
		?>


<script>
function showMultipleImage(im) {
    jQuery('#img_tab-1').html("<img src='" + im + "' data-origin='" + im + "'/>");

}
</script>


<script>
function send_message() {

    jQuery('#contact_submit').html('');
    jQuery('#contact_error').html('');

    var name = jQuery(" #name").val();
    var email = jQuery("#email").val();
    var mobile = jQuery("#mobile").val();
    var
        message = jQuery("#message").val();
    var is_error = '';
    if (name == "") {
        jQuery('#contact_error').html('Please Enter Name');
        is_error = 'yes';
    } else if (email == "") {
        jQuery('#contact_error').html('Please Enter Email');
        is_error = 'yes';
    } else if (mobile == "") {
        jQuery('#contact_error').html('Please Enter Mobile');
        is_error = 'yes';
    } else if (message == "") {
        jQuery('#contact_error').html('Please Enter Message');
        is_error = 'yes';
    }
    if (is_error == '') {
        jQuery.ajax({
            url: 'contact_send.php',
            type: 'post',
            data: 'name=' + name + '&email=' + email +
                '&mobile=' + mobile + '&message=' + message,
            success: function(result) {
                result = result.trim();
                if (result == 'message_send') {
                    jQuery('#contact_submit').html('Thankyou..Your Query Submitted');
                    jQuery("#name").val('');
                    jQuery("#email").val('');
                    jQuery("#mobile").val('');
                    jQuery("#message").val('');
                } else {
                    jQuery('#contact_submit').html('');
                    jQuery('#contact_error').html('Oops!! Somthing Went Wrong Please Try After Some Time.');
                    jQuery("#name").val('');
                    jQuery("#email").val('');
                    jQuery("#mobile").val('');
                    jQuery("#message").val('');
                }
            }
        });
    }
}
</script>










<?php 
require('footer.php');
ob_flush();
?>