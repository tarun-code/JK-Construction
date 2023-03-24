<?php
session_start();
$con=mysqli_connect("localhost:3307","root","","jkc");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].' /jkc/');
define('SITE_PATH','http://127.0.0.1/jkc/');



define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');

define('PRODUCT_MULTIPLE_IMAGE_SERVER_PATH',SERVER_PATH.'media/product_images/');
define('PRODUCT_MULTIPLE_IMAGE_SITE_PATH',SITE_PATH.'media/product_images/');

define('BANNER_SERVER_PATH',SERVER_PATH.'media/banner/');
define('BANNER_SITE_PATH',SITE_PATH.'media/banner/');



define('BLOG_SERVER_PATH',SERVER_PATH.'media/blog/');
define('BLOG_SITE_PATH',SITE_PATH.'media/blog/');

define('AGENT_SERVER_PATH',SERVER_PATH.'media/agent/');
define('AGENT_SITE_PATH',SITE_PATH.'media/agent/');

define('TESTIMONIAL_SERVER_PATH',SERVER_PATH.'media/testimonial/');
define('TESTIMONIAL_SITE_PATH',SITE_PATH.'media/testimonial/');

define('GALLERY_SERVER_PATH',SERVER_PATH.'media/gallery/');
define('GALLERY_SITE_PATH',SITE_PATH.'media/gallery/');

define('CITY_SERVER_PATH',SERVER_PATH.'media/city/');
define('CITY_SITE_PATH',SITE_PATH.'media/city/');





















?>