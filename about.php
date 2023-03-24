<?php require('top.php');

$resAbout =mysqli_query($con,"select * from about  ");

?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate pb-0 text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i
                                class="fa fa-chevron-right"></i></a></span> <span>About <i
                            class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-3 bread">About</h1>
            </div>
        </div>
    </div>
</section>





<section class="ftco-section ftco-no-pb ftco-no-pt mt-5">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">About</span>
                <h2 class="mb-4">About Us</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 order-md-last d-flex align-items-stretch">
                <div class="img w-100 img-2 mr-md-2" style="background-image: url(images/about.jpg);"></div>
                <div class="img w-100 img-2 ml-md-2" style="background-image: url(images/about-2.jpg);"></div>
            </div>
            <div class="col-md-5 wrap-about py-md-5 ftco-animate">
                <div class="heading-section pr-md-5">
                    <h2 class="mb-4">JK CONSTRUCTION</h2>

                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It
                        is a
                        paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it
                        would have
                        been rewritten a thousand times and everything that was left from its origin would be the word
                        "and" and
                        the Little Blind Text should turn around and return to its own, safe country. But nothing the
                        copy said
                        could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her,
                        made her
                        drunk with Longe and Parole and dragged her into their agency, where they abused her for their.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-counter img" id="section-counter">
    <?php if(mysqli_num_rows($resAbout)>0){?>
    <div class="container">
        <?php $rowAbout=mysqli_fetch_assoc($resAbout) ?>
        <div class="row pt-md-5">
            <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 py-5 mb-4">
                    <div class="text text-border d-flex align-items-center">
                        <strong class="number" data-number="<?php echo $rowAbout['area_population']?>">0</strong>
                        <span>Area <br>Population</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 py-5 mb-4">
                    <div class="text text-border d-flex align-items-center">
                        <strong class="number" data-number="<?php echo $rowAbout['total_properties']?>">0</strong>
                        <span>Total <br>Properties</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 py-5 mb-4">
                    <div class="text text-border d-flex align-items-center">
                        <strong class="number" data-number="<?php echo $rowAbout['average_house']?>">0</strong>
                        <span>Average <br>House</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 py-5 mb-4">
                    <div class="text d-flex align-items-center">
                        <strong class="number" data-number="<?php echo $rowAbout['total_branches']?>">0</strong>
                        <span>Total <br>Branches</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php } ?>
</section>

<?php require('city.php')?>
<?php require('testimonials.php')?>

<?php require('footer.php')?>