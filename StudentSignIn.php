<?php
$name = $_POST['username'];
$pwd = $_POST['password'];
//echo "$name and $pwd";
$connection=mysqli_connect('localhost','root','','ourcoaching');
if (!$connection){
    echo "<script>alert('data base not connected')</script>";
}
if (isset($_POST['submit'])) {

    // session_start();
    // if (isset($_SESSION['username'])) {
    //     echo $_SESSION['username'];
    //     echo "<script>.location.href='patient.html'</script>";
    //     echo "<a href='logout.php'><input type='button' value='logout' name='logout'></a>";
    // } else {

        $read_query = "SELECT * from student_registration";
        $data = mysqli_query($connection, $read_query);
        if (mysqli_num_rows($data) > 0) {
            while ($row = mysqli_fetch_array($data)) {
                if ($row['Email'] == $name && $row['Password'] == $pwd) {
                    // $_SESSION['username']=$row['Email'];

                    echo "<script>alert('Logged In Successfully.')</script>";
                    echo "<script>location.href='index.html'</script>";
                    //header("location:patient.html");
                } else {
                    echo "<script>alert('Invalid Username or Password!!')</script>)";
                    echo "<script>location.href='StudentSignIn.html'</script>";


                }
            }

        }
    // }
}

