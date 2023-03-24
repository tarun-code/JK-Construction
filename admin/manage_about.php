<?php
ob_start();
require('top.inc.php');
isAdmin();
$area_population='';

$total_properties='';
$average_house='';
$total_branches='';
$msg='';


if(isset($_GET['id']) && $_GET['id']!=''){
	$id=get_safe_value($con,$_GET['id']);
	
	$res=mysqli_query($con,"select * from about where id='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		$area_population=$row['area_population'];
		$total_properties=$row['total_properties'];
		$average_house=$row['average_house'];
		$total_branches=$row['total_branches'];
		
		
	}else{
		header('location:about.php');
		die();
	}
}

if(isset($_POST['submit'])){
	$area_population=get_safe_value($con,$_POST['area_population']);
	$total_properties=get_safe_value($con,$_POST['total_properties']);
	$average_house=get_safe_value($con,$_POST['average_house']);
	$total_branches=get_safe_value($con,$_POST['total_branches']);
	
	
	$msg="";
	
	if($msg==''){
		if(isset($_GET['id']) && $_GET['id']!=''){
		
			
				mysqli_query($con,"update about set  `area_population`='$area_population',`total_properties`='$total_properties',`average_house`='$average_house',`total_branches`='$total_branches' where id='$id'");
			
				
			
		}else{
		
			mysqli_query($con,"insert into about (area_population,total_properties,average_house,total_branches) values('$area_population','$total_properties','$average_house','$total_branches')");
		}
        
		header('location:about.php');
		die();
	}
}
?>
<div class="content pb-0">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><strong>Counting</strong><small> Form</small></div>
                    <form method="post" enctype="multipart/form-data">
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label for="Area Population" class=" form-control-label">Area Population</label>
                                <input type="text" name="area_population" placeholder="Enter Area Population"
                                    class="form-control" required value="<?php echo $area_population?>">
                            </div>
                            <div class="form-group">
                                <label for="Total Properties" class=" form-control-label">Total Properties</label>
                                <input type="text" name="total_properties" placeholder="Enter Total Properties"
                                    class="form-control" required value="<?php echo $total_properties?>">
                            </div>

                            <div class="form-group">
                                <label for="Average House" class=" form-control-label">Average House</label>
                                <input type="text" name="average_house" placeholder="Enter Average House"
                                    class="form-control" required value="<?php echo $average_house?>">
                            </div>

                            <div class="form-group">
                                <label for="Total Branches" class=" form-control-label">Total Branches</label>
                                <input type="text" name="total_branches" placeholder="Enter Total Branches"
                                    class="form-control" required value="<?php echo $total_branches?>">
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