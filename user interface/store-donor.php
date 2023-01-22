<?PHP
session_start();
include('conn.php');
if (isset($_POST['submit'])) {
	$user_id = $_SESSION['loginsuccesss'];
	$name = $_POST['name'];
	$address = $_POST['address'];
	$gender = $_POST['gender'];
	$contact_number = $_POST['contact_number'];
	$weight = $_POST['weight'];
	$blood_group = $_POST['blood_group'];
	$age = $_POST['age'];
	$diseases = $_POST['diseases'];
	$blood_test_report = $_POST['blood_test_report'];
	$rules = $_POST['rule'];

	$sql = "INSERT INTO `donors_information` (`user`,`name`, `address`, `contact_number`, `gender`, `weight`, `age`,`blood_group`, `diseases`, `blood_test_report`, `rules` ) VALUES ('$user_id',$name','$address','$contact_number', '$gender','$weight','$age','$blood_group','$diseases','$blood_test_report','$rules')";
	// var_dump($sql);
	$res = mysqli_query($conn, $sql);
	// if($res){
	// 	$_SESSION['status'] = "Account Created Successfully";
	// header('location:blood.php');
	// }
	// else{
	// 	echo("sdhc;kj");
	// }
	header('location:blood.php');

}
