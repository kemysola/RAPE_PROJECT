<?php

$conn = mysqli_connect("localhost","root","","rapeproject");
if(!$conn){
    echo "connection error:";
};


    if(isset($_POST['submit'])){
        $image = mysqli_real_escape_string($conn, $_POST['image']);
        $firstname = mysqli_real_escape_string($conn, $_POST['name']);
        $story = mysqli_real_escape_string($conn, $_POST['story']);
        


        $image = $_FILES['image']['name'];

        //image file directory
        $target = "image/".basename($image);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      
          
      

        $sql = "INSERT INTO `admin`(image,name, story) VALUES('$image','$name', '$story')";
       

       

        	// save to db and check
			if(mysqli_query($conn, $sql)){
				// success
                header('Location: index.php');
                echo "success";
			} else {
				echo 'error: '. mysqli_error($conn);
			}
            
           
    
        };

    };   
   
?>

<section class="container grey-text">
		<h2 class="center">Admin</h2>
		<form action="admin.php" method="POST" enctype="multipart/form-data">
			<label>name</label>
			<input type="text" name="name"  class="validate">
	<br>
	<br>
			<label>Story</label>
			<input type="text" name="story"  class="validate">
	<br>
	<br>
			<div class = "row">
				<div class="col s12">
					<input type="file" name="image">
				</div>
			</div>	
<br>
			<div class="center">
				<input type="submit" name="submit" value="submit">
			</div>
		</form>
</section>