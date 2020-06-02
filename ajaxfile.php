<?php
include 'config.php';


if(isset($_POST) & !empty($_POST))
{
	$tag = mysqli_real_escape_string($conn, $_POST['tag']);
	$sql = "select * from tags where tagsss = '$tag'";
	
	$result = mysqli_query($conn,$sql);
	
	
	$count = mysqli_num_rows($result);
	
	
	if($count>0)
	{
	echo '<div  style="color:green;"><b>'.$tag.'</b> is a Tag </div>';
			
	}
	else
	{
		
		echo '<div style="color:red;"><b>'.$tag.'</b> is not a Tag </div>';
	}
}

?>
