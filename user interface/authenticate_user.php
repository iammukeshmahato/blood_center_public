<?PHP
include('conn.php');

session_start();
if (isset($_POST['submit'])){
	$email_address=$_POST['email'];
	$password=$_POST['password'];
$sql= "SELECT * FROM `user` WHERE email_address='$email_address' AND password='$password'";
$result =mysqli_query($conn,$sql);
// header('location:blood.php');
 if(mysqli_num_rows($result)>0){
        $_SESSION['loginsuccesss']=mysqli_fetch_assoc($result)[0]['id'];
        header('location:blood.php');
    }
    else{
        $_SESSION['loginerror']="invalid";
        header('location:login.php');
    }
}
?>