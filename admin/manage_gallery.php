<?php
ob_start();
require('top.inc.php');
isAdmin();
$name='';

$image='';
$added_on='';
$msg='';

$image_required='required';
if(isset($_GET['id']) && $_GET['id']!=''){
	$id=get_safe_value($con,$_GET['id']);
	$image_required='';
	$res=mysqli_query($con,"select * from gallery where id='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		
		$image=$row['image'];
		$added_on=$row['added_on'];
	
		
		
	}else{
		header('location:gallery.php');
		die();
	}
}

if(isset($_POST['submit'])){
	

	
	
	if(isset($_GET['id']) && $_GET['id']==0){
		if($_FILES['image']['type']!='image/png' && $_FILES['image']['type']!='image/jpg' && $_FILES['image']['type']!='image/jpeg'){
			$msg="Please select only png,jpg and jpeg image formate";
		}
	}else{
		if($_FILES['image']['type']!=''){
				if($_FILES['image']['type']!='image/png' && $_FILES['image']['type']!='image/jpg' && $_FILES['image']['type']!='image/jpeg'){
				$msg="Please select only png,jpg and jpeg image formate";
			}
		}
	}
	
	$msg="";
	
	if($msg==''){
		if(isset($_GET['id']) && $_GET['id']!=''){
			if($_FILES['image']['name']!=''){
				$image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
				move_uploaded_file($_FILES['image']['tmp_name'],GALLERY_SERVER_PATH.$image);
				mysqli_query($con,"update gallery set  `image`='$image'  where id='$id'");
			}else{
				mysqli_query($con,"update gallery set `image`='$image'  where id='$id'");
			}
		}else{
			$image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
			move_uploaded_file($_FILES['image']['tmp_name'],GALLERY_SERVER_PATH.$image);
			mysqli_query($con,"insert into gallery (image,status) values('$image','1')");
		}
		header('location:gallery.php');
		die();
	}
}
?>
<div class="content pb-0">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><strong>Gallery</strong><small> Form</small></div>
                    <form method="post" enctype="multipart/form-data">
                        <div class="card-body card-block">

                            <div class="form-group">
                                <label for="Image" class=" form-control-label">Image</label>
                                <input type="file" name="image" placeholder="Enter Image" class="form-control"
                                    <?php echo  $image_required?> value="<?php echo $image?>">
                                <?php
										if($image!=''){
echo "<a target='_blank' href='".GALLERY_SITE_PATH.$image."'><img width='150px' src='".GALLERY_SITE_PATH.$image."'/></a>";
										}
										?>
                            </div>



                            <button id="payment-button" name="submit" type="submit"
                                class="btn btn-lg btn-info btn-block">
                                <span id="payment-button-amount">Submit</span>
                            </button>
                            <div class="field_error"><?php echo $msg?></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require('footer.inc.php');
ob_end_flush();
?>