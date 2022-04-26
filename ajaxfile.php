<?php
include "dbConfig.php";

$userid = 0;
if(isset($_POST['userid'])){
   $id = mysqli_real_escape_string($db,$_POST['userid']);
}
$sql = "select * from products where id=".$id;
$result = mysqli_query($db,$sql);

$response = "<table border='0' width='100%'>";
while( $row = mysqli_fetch_array($result) ){
 $id = $row['id'];
 $name = $row['name'];
 $price = $row['price'];
 $desc = $row['desc'];
//  $city = $row['city'];
//  $email = $row['email'];
 
 $response .= "<tr>";
 $response .= "<td>Product Name : </td><td>".$name."</td>";
 $response .= "</tr>";

 $response .= "<tr>";
 $response .= "<td>Price : </td><td>".$price."</td>";
 $response .= "</tr>";

 $response .= "<tr>";
 $response .= "<td>Description : </td><td>".$desc."</td>";
 $response .= "</tr>";

//  $response .= "<tr>";
//  $response .= "<td>City : </td><td>".$city."</td>";
//  $response .= "</tr>";

//  $response .= "<tr>"; 
//  $response .= "<td>Email : </td><td>".$email."</td>"; 
//  $response .= "</tr>";

}
$response .= "</table>";

echo $response;
exit;