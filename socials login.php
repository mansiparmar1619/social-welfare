<?php
$name=$_POST['name'];
$address=$_POST['address'];
$pin=$_POST['pin'];
$tel=$_POST['tel'];
$gen_type=$_POST['gen_type'];
$email=$_POST['email'];
$connection=mysqli_connect('localhost','root','','socials');
 $query = "INSERT INTO LOGIN(Name,Address,Pincode,Telephone,email,Gender) 
 VALUES('$name','$address',$pin,$tel,'$email','$gen_type')";
$result=mysqli_query($connection,$query);
if($result){
    header('Location:donation.html');
}
else{
    echo 'error';
}
?>
