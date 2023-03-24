<?php



require('connection.inc.php');
require('functions.inc.php');
isAdmin();

$sql="select * from contact_us";
$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res)>0){
$html='<table><tr><td>Name</td><td>Email</td><td>Mobile</td><td>Comment</td><td>Added on</td></tr>';


while($row=mysqli_fetch_assoc($res)){

    $html.='<tr><td>'.$row['name'].'</td><td>'.$row['email'].'</td><td>'.$row['mobile'].'</td><td>'.$row['comment'].'</td><td>'.$row['added_on'].'</td></tr>';

}

$html.= '</table>';
$file_name=date('d-m-Y');
header('Content-Type:application/xls'); 
header("Content-Disposition:attachment;filename= jkc_contact_us-$file_name.xls");

}else{
	
    header('location:contact_us.php');
}





?>