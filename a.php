<?php
$con=mysqli_connect("localhost", "root", "", "movietheatredb");

if(!$con){
	echo "DB not Connected...";
}
else{
$result=mysqli_query($con, "Select * from tbl_registration");
if($result>0){
$xml = new DOMDocument("1.0");

// It will format the output in xml format otherwise
// the output will be in a single row
$xml->formatOutput=true;
$fitness=$xml->createElement("Customers");
$xml->appendChild($fitness);
while($row=mysqli_fetch_array($result)){
	$user=$xml->createElement("Customer");
	$fitness->appendChild($user);
	
	$uid=$xml->createElement("uid", $row['user_id']);
	$user->appendChild($uid);
	
	$uname=$xml->createElement("uname", $row['name']);
	$user->appendChild($uname);
	
	$email=$xml->createElement("email", $row['email']);
	$user->appendChild($email);
	
	$password=$xml->createElement("phone", $row['phone']);
	$user->appendChild($password);
	
	$role=$xml->createElement("age", $row['age']);
	$user->appendChild($role);
	
	$pic=$xml->createElement("gender", $row['gender']);
	$user->appendChild($pic);
	
}
echo "<xmp>".$xml->saveXML()."</xmp>";
$xml->save("report.xml");
}
else{
	echo "error";
}
}
?>
