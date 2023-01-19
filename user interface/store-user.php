<?PHP
include('conn.php');
if(isset($_POST['submit'])){
	$first_name= $_POST['fname'];
	$last_name= $_POST['lname'];
	$email_address= $_POST['email'];
	$phone_number= $_POST['phone_number'];
	$password= $_POST['password'];
	$profile_pic= $_POST['profile_picture'];

	$sql="INSERT INTO user VALUES('$first_name','$last_name','$email_address', '$phone_number','$password','$profile_pic')";
	$res=mysqli_query($conn,$sql);
}
else{
	echo "NIASDJ";
}
// if (mysqli_query($conn, $sql)) {
//         echo "New record created successfully";
//     } else {
//         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//     }
?>