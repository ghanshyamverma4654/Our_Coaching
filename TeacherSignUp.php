<?php
$connection=mysqli_connect('localhost','root','','teacher_registration');
if(!$connection){
    echo "Unable to connect to server!";
}

if(isset($_POST['Submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $name=$fname." ".$lname;
    $phone=$_POST['number'];
    $email=$_POST['email'];
    $center=$_POST['ins_name'];
    $add=$_POST['address'];
    $dis=$_POST['district'];
    $state=$_POST['state'];
    $zip=$_POST['zip'];
    $country=$_POST['country'];
    $address=$add." ".$dis." ".$state." ".$zip." ".$country;
    $pass=$_POST['pass'];
    $cpass=$_POST['c_pass'];
    if($pass==$cpass){
        $password=$pass;
    }
else{
    echo "You have entered wrong password!";
}
$query="INSERT INTO teacher(`Name`,`Phone`,`Email`,`CentreName`,`Address`,`Password`) VALUES ('$name','$phone','$email','$center','$address','$password')";
if(mysqli_query($connection,$query)){
    echo "<script>alert('Successfully Registered.')</script>";
    echo "<script>location.href='index.html'</script>";
    // header('location:./TeacherSignUp.html');
}
else{
    echo "<script>alert('Error Occured!')</script>";
}

}
?>