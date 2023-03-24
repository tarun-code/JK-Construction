<?php



require('connection.inc.php');
require('functions.inc.php');
isAdmin();

$sql="select * from users";
$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res)>0){
$html='<table><tr><td>Email</td><td>Added on</td></tr>';


while($row=mysqli_fetch_assoc($res)){

    $html.='<tr><td>'.$row['email'].'</td><td>'.$row['added_on'].'</td></tr>';

}

$html.= '</table>';
$file_name=date('d-m-Y');
header('Content-Type:application/xls'); 
header("Content-Disposition:attachment;filename= jkc_Newsletter-$file_name.xls");

}else{
	
    header('location:users.php');
}





?>