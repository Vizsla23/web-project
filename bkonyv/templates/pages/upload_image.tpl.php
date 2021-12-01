<?php if (isset($_SESSION['userid'])) { ?>
<?php	
include_once("belep.php");
session_start();
$error = '';
if(isset($_POST["upload_image"]) && $_SESSION["userid"]) {
	$title=$_POST["title"];
	$description=$_POST["description"];
	$fk_uid=$_SESSION["userid"];
	$image=$_FILES["image"]["name"];
	if ($_FILES["image"]["type"]=="image/gif"
	|| $_FILES["image"]["type"]=="image/jpeg"
	|| $_FILES["image"]["type"]=="image/pjpeg"
	|| $_FILES["image"]["type"]=="image/png"
	&& $_FILES["image"]["size"] < 20000) {
		if ($_FILES["image"]["error"]>0)	{
			echo "Error:".$_FILES["image"]["error"];
		} else {
			$i=1;
			$success = false;
			$new_image_name=$image;
			while(!$success) {
				if (file_exists("uploads/".$new_image_name)) {
					$i++;
					$new_image_name="$i".$image;
				} else {
					$success=true;
				}
			}
			move_uploaded_file($_FILES["uploaded_file"]["tmp_name"],"uploads/".$new_image_name);				
			$insert_sql = "INSERT INTO gallery(id, user_id, image_title, image_description, image_name) 
				VALUES('', '". $_SESSION["userid"]."', '".$title."', '".$description."', '".$image_name."')";
			mysqli_query($conn, $insert_sql) or die("database error: ". mysqli_error($conn));				
		}
	} else {
		$error = "Please upload valid image file";
	}  
<?php } ?>