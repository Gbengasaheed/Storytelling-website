<?php
if(isset($_POST['submit'])){
	$file = $_FILES['file'];

	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];


	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('jpg', 'jpeg', 'png', 'pdf', 'docx',);//which files you want to allow in the website

	if (in_array($fileActualExt, $allowed)){
		if($fileError === 0){
			if($fileSize < 1000000){
				$fileNameNew = uniqid('', true).".".$fileActualExt;
				$fileDestination = 'uploads/'.$fileNameNew; //for the new file with the same name not overide the previous file
				move_uploaded_file($fileTmpName, $fileDestination);
				header("location: uploadstory.php?uploadsuccess");

				echo "Your file Uploaded successfully!";

			}else{
				echo "Your file is too big!";
			}

		}else{
			echo "There was an error uploading your file!";
		}

	}else{
		echo "You cannot upload files of this type!";

	}


}