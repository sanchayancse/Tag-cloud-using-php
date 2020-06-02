<?php
// Database Connectionn
include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tag Cloud</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<div class="container">
<h1 align="center"><b><u>Tag Cloud</u> </b></h1>
<div class="table-responsive col-md-4">
  <h2>Tags</h2>
  

  <table class="table table-bordered" id="table"  >
    <thead>
      <tr>
               <th>Tag Name</th>
        
      </tr>
    </thead>
	<?php 
	// Fetch all tags from database
$newquery = mysqli_query($conn,"select * from tags");

while ($row1 = mysqli_fetch_array($newquery)) {


?>
    <tbody>
      <tr>
      
        <td><?php echo  $row1['tagsss'];?></td>
      
      </tr>
     <?php
}
?>
    </tbody>
  </table>
  
  <!-- Adding Tags Manually -->
  <h2>Add Tags</h2>
  
  <form action="#" method="POST">
	<input type="text" name="addtag" placeholder="Enter Tag">
	<button type="submit" name="submit">Add</button>
</form>  
  

</div>
 <!-- Show Messages From Database -->

<div class="table-responsive col-md-6">
  <h2>Messages</h2>
  <table>
     <tr>
       <td>
         <input type='text' class="tags" name="tag" id="myInput" placeholder='Search by tags'>
         <div id="uname_response" ></div>
       </td>
  
     </tr>
   </table>
<br>
<br>
  <table class="table table-bordered " id="msgtable">
    <thead>
      <tr>
        <th>Id</th>
        <th>Messages</th>
        
      </tr>
    </thead>
	<?php 
	// Fetch All messages from database
$newquery = mysqli_query($conn,"select * from messages");

while ($row1 = mysqli_fetch_array($newquery)) {


?>
    <tbody>
      <tr>
        <td><?php echo  $row1['id'];?></td>
        <td><?php echo  $row1['message'];?></td>
      
      </tr>
     <?php
}
?>
    </tbody>
  </table>

</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
	  
    var value = $(this).val().toLowerCase();
    $("#msgtable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
  
});


$(document).ready(function(){

   $(".tags").keyup(function(){

      var tag = $(this).val().trim();

      if(tag != ''){

         $.ajax({
            url: 'ajaxfile.php',
            type: 'post',
            data: {tag: tag},
            success: function(response){

                $('#uname_response').html(response);
             }
			
         });
      }else{
         $("#uname_response").html("");
		  
      }

    });

 });


</script>

<script>


</script>

</body>
</html>

<!-- Query for Adding Tags into database-->
<?php
if(isset($_POST['submit'])){

$addtag=$_POST['addtag'];



$query="insert into tags(tagsss)
        values (LOWER('$addtag'))";
		$run=mysqli_query($conn,$query);
		
		
		if($run)
		{
		
		echo "<script>
         setTimeout(function(){
            window.location.href = 'index.php';
         }, 5000);
      </script>" ;
		}
		else
		{
		echo "error:".mysqli_error($conn);
		}
		
		
	
	
		}
		?>


<?php

// Fetch Data from database tabel
 $sql = mysqli_query($conn, "SELECT * FROM messages");

   while($row = mysqli_fetch_array($sql)) {
   $keywords[] = $row['message'];
}

// Find all posible tokens (tags) and store into a variable ## tags ##
$tags = array();
 
foreach($keywords as $keyword)
        {
        $words = explode(" ",$keyword);
		
        foreach($words as $word)
                {
                $word = strtolower($word);
				
                if (isset($tags[$word]))
                        {
                        $tags[$word] += 1;
                        }
                else
                        {
                        $tags[$word] = 1;
                        }
                }
        }


    
		
		
		
		
		echo "<br> <br>";echo "<br> <br>";
	// filter tags which are more than 5 times or greater than 4
		$more_than_four = array_filter($tags,function($data){
			return $data >=5;
		});	
		
	
		echo "<br> <br>";echo "<br> <br>";
		foreach($more_than_four as $key=>$value)
        {
        $value += 15;
        //echo "<span style=\"font-size: {$value}px\">$key</span> ";
		
		$k[]=$key;
		$v[]=$value;
		}
		echo "<br> <br>";echo "<br> <br>";
		

foreach($more_than_four as $newtag=>$count){
	
$sql = "INSERT INTO tags (tagsss,tag_count) VALUES ('$newtag','$count')";
$exe = mysqli_query($conn,$sql);

}
	echo "<br> <br>";echo "<br> <br>";
		

?>


