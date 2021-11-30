<?php
$connection=mysqli_connect('localhost','root','','ourcoaching');
if(!$connection){
    echo "Unable to connect to server!";
}

if(isset($_POST['signup'])){
    $fname=$_POST['first_name'];
    $lname=$_POST['last_name'];
    $name=$fname." ".$lname;
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $cpass=$_POST['confirm_password'];
    if($pass==$cpass){
        $password=$pass;
    }
else{
    echo "You have entered wrong password!";
}
$insert_query="INSERT INTO student_registration(`Name`,`Email`,`Password`) VALUES ('$name','$email','$password')";
if(mysqli_query($connection,$insert_query)){
    echo "<script>alert('Successfully Registered.')</script>";
    echo "<script>location.href='StudentSignIn.html'</script>";
    // header('location:./SignIn.html');
}
else{
    echo "<script>alert('Error Occured!')</script>";
}

}
?>