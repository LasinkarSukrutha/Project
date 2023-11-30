<!DOCTYPE html>
<html>
<head>
	<title>Image Upload Using PHP</title>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			min-height: 100vh;
		}
	</style>
</head>
<body>
	<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
     <form action="Upload1.php"
           method="post"
           enctype="multipart/form-data">

           <input type="file" 
                  name="my_image"><br><br>
		   <label>Your Name:<input type="uploader_name" name="uploader_name"><br><br>
		   <label>Description:<input type="description" name="description"><br><br>
           <input type="submit" 
                  name="submit"
                  value="Upload">

     </form>
</body>
</html>