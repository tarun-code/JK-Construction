<?php
function pr($arr){
	echo '<pre>';
	print_r($arr);
}

function prx($arr){
	echo '<pre>';
	print_r($arr);
	die();
}

function get_safe_value($con,$str){
	if($str!=''){
		$str=trim($str);
		return mysqli_real_escape_string($con,$str);
	}
}


// function get_safe_value($con,$location){
// 	if($location!=''){
// 		$location=trim($location);
// 		return mysqli_real_escape_string($con,$location);
// 	}
// }







function get_product($con,$limit='',$cat_id='',$product_id='',$search_str='',$property_type='',$location='',$search_price='',$sort_order='',$is_best_seller='',$sub_categories=''){
	$sql="select product.*,categories.categories from product,categories where product.status=1 ";
	if($cat_id!=''){
		$sql.=" and product.categories_id=$cat_id ";
	}
	if($product_id!=''){
		$sql.=" and product.id=$product_id ";
	}
	if($sub_categories!=''){
		$sql.=" and product.sub_categories_id=$sub_categories ";
	}
	if($is_best_seller!=''){
		$sql.=" and product.best_seller=1 ";
	}
	$sql.=" and product.categories_id=categories.id ";






	if($search_str!=''){
		$sql.=" and (product.name like '%$search_str%' or product.description like '%$search_str%' or product.short_desc like '%$search_str%'  or product.project_type like '%$search_str%'  or product.project_ameneties like '%$search_str%'  or product.location like '%$search_str%' ) ";
	
	}

	if($property_type=='Residence' or $property_type=='Office'  or $property_type=='Rent'  or $property_type=='Sale'  or $property_type=='Commercial' ){
		 $sql.=" and (product.project_type like '%$property_type%' ) ";
	}

	
	if($location!=''){
		$sql.=" and (product.location like '%$location%' ) ";
	}
	

	if($search_price!=''){
		if($search_price == 1){
	    	$sql.= " and  (product.mrp >= 5000 and product.mrp <= 50000)";
		}
		elseif($search_price == 2){
			$sql.= " and  (product.mrp >= 50000 and product.mrp <= 100000)";
		}
	
		elseif($search_price == 3){
			$sql.= " and  (product.mrp >= 100000 and product.mrp <= 200000)";
		}
	
		elseif($search_price == 4){
			$sql.= " and  (product.mrp >= 200000)";
		}
	}
	








	if($sort_order!=''){
		$sql.=$sort_order;
	}else{
		$sql.=" order by product.id desc ";
	}
	if($limit!=''){
		$sql.=" limit $limit";
	}
	//echo $sql;
	$res=mysqli_query($con,$sql);
	 $data=array();
	while($row=mysqli_fetch_assoc($res)){
		$data[]=$row;
	}
	return $data;

}


?>