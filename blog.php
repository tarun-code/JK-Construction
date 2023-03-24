<?php require('top.php');

$resBlog=mysqli_query($con,"select * from blog where status='1' ");


?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate pb-0 text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i
                                class="fa fa-chevron-right"></i></a></span> <span>Blog <i
                            class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-3 bread">Blog</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Blog</span>
                <h2 class="mb-4">Our Blog</h2>
            </div>
        </div>
        <?php if(mysqli_num_rows($resBlog)>0){?>
        <div class="row d-flex">
            <?php while($rowBlog=mysqli_fetch_assoc($resBlog)){
                  $timestamp = $rowBlog['added_on'];
                  
                  ?>

            <div class="col-md-3 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <div class="text">
                        <spam class="block-20 img"
                            style="background-image: url('<?php echo BLOG_SITE_PATH.$rowBlog['image']?>');">
                        </spam>
                        <div class="meta mb-3">
                            <div><a href="#"><?php echo date('d M  Y     h:m:s' , strtotime($timestamp)); ?></a></div>
                            <div><a href="#"><?php echo $rowBlog['name']?></a></div>
                            <!-- <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div> -->
                        </div>

                        <h3 class="heading">
                            <a href="#"><?php echo $rowBlog['description']?></a>
                        </h3>

                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <?php } ?>
        <!-- <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div> -->
    </div>
</section>

<?php require('footer.php')?>