<?php
require('connection.inc.php');
require('functions.inc.php');


$cat_res=mysqli_query($con,"select * from categories where status=1 order by categories asc");
$cat_arr=array();
while($row=mysqli_fetch_assoc($cat_res)){
	$cat_arr[]=$row;	
}

$script_name=$_SERVER['SCRIPT_NAME'];
$script_name_arr=explode('/',$script_name);
$mypage=$script_name_arr[count($script_name_arr)-1];

$meta_title="JK Construction";
$meta_desc="JK Construction";
$meta_keyword="JK Construction";
$meta_url=SITE_PATH;
$meta_image="";
if($mypage=='product.php'){
	$product_id=get_safe_value($con,$_GET['id']);
	$product_meta=mysqli_fetch_assoc(mysqli_query($con,"select * from product where id='$product_id'"));
	$meta_title=$product_meta['meta_title'];
	$meta_desc=$product_meta['meta_desc'];
	$meta_keyword=$product_meta['meta_keyword'];
	$meta_url=SITE_PATH."product.php?id=".$product_id;
	$meta_image=PRODUCT_IMAGE_SITE_PATH.$product_meta['image'];
}if($mypage=='contact.php'){
	$meta_title='Contact Us';
}if($mypage=='gallery.php'){
	$meta_title='Gallery';
}if($mypage=='about.php'){
	$meta_title='About Us';
}if($mypage=='agent.php'){
	$meta_title='Agent';
}if($mypage=='blog.php'){
	$meta_title='Blog';
}if($mypage=='services.php'){
	$meta_title='Service';
}

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $meta_title?></title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="<?php echo $meta_desc?>">
    <meta name="keywords" content="<?php echo $meta_keyword?>">


    <meta property="og:title" content="<?php echo $meta_title?>" />
    <meta property="og:image" content="<?php echo $meta_image?>" />
    <meta property="og:url" content="<?php echo $meta_url?>" />
    <meta property="og:site_name" content="<?php echo SITE_PATH?>" />

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>




    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom.css">





</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">LOGO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item "><a href="index.php" class="nav-link">Home</a></li>




                    <?php
					foreach($cat_arr as $list){
					?>
                    <div class="dropdown nav-item ">
                        <a href="categories.php?id=<?php echo $list['id']?>" class="dropbtn nav-link dropdown-toggle">
                            <?php echo $list['categories']?></a>

                        <?php
					$cat_id=$list['id'];
					$sub_cat_res=mysqli_query($con,"select * from sub_categories where status='1' and categories_id='$cat_id'");
					if(mysqli_num_rows($sub_cat_res)>0){
					?>

                        <div class="dropdown-content">
                            <?php
					while($sub_cat_rows=mysqli_fetch_assoc($sub_cat_res)){
					echo '<li><a href="categories.php?id='.$list['id'].'&sub_categories='.$sub_cat_rows['id'].'">'.$sub_cat_rows['sub_categories'].'</a></li>
					';
					}
					?>

                        </div>
                        <?php } ?>
                    </div>
                    <?php
					}
					?>



                    <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="agent.php" class="nav-link">Agent</a></li>
                    <li class="nav-item"><a href="Services.php" class="nav-link">Services</a></li>
                    <li class="nav-item "><a href="gallery.php" class="nav-link">Gallery</a></li>

                    <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->