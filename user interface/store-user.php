<?PHP
include('conn.php');
if (isset($_POST['submit'])) {
	$first_name = $_POST['fname'];
	$last_name = $_POST['lname'];
	$email_address = $_POST['email'];
	$phone_number = $_POST['phone_number'];
	$password = $_POST['password'];
	// $profile_pic = $_POST['profile_picture'];


		$target_dir = "./uploads/";
		$target_file = $target_dir . basename($_FILES["profile_picture"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		// if(isset($_POST["submit"])) {
		  $check = getimagesize($_FILES["profile_picture"]["tmp_name"]);
		  if($check !== false) {
		    echo "File is an image - " . $check["mime"] . ".";
		    $uploadOk = 1;
		  } else {
		    echo "File is not an image.";
		    $uploadOk = 0;
		  }
		}

		// Check if file already exists
		if (file_exists($target_file)) {
		  echo "Sorry, file already exists.";
		  $uploadOk = 0;
		}

		// Check file size
		if ($_FILES["profile_picture"]["size"] > 500000) {
		  echo "Sorry, your file is too large.";
		  $uploadOk = 0;
		}

		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		  $uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		  echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		  if (move_uploaded_file($_FILES["v"]["tmp_name"], $target_file)) {
		    echo "The file ". htmlspecialchars( basename( $_FILES["profile_picture"]["name"])). " has been uploaded.";
		  } else {
		    echo "Sorry, there was an error uploading your file.";
		  }
	$sql = "INSERT INTO `user` (`first_name`, `last_name`, `email_address`, `phone_number`, `password`, `profile_pic`) VALUES ('$first_name','$last_name','$email_address', '$phone_number','$password','$target_file')";
	$res = mysqli_query($conn, $sql);
	header('location:login.php');
}
