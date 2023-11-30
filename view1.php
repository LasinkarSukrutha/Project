<?php $conn=  mysqli_connect('localhost','root','','upload');?>
<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
			min-height: 100vh;
		}
		.alb {
			width: 200px;
			height: 200px;
			padding: 5px;
		}
		.alb img {
			width: 100%;
			height: 100%;
		}
		a {
			text-decoration: none;
			color: black;
		}
	</style>
</head>
<body>
     <a href="UploadImage.php">&#8592;</a>
     <?php 
          $sql = "SELECT * FROM upload_table ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($upload_table = mysqli_fetch_assoc($res)) {  ?>

             <div class="alb">
             	<img src="img/<?=$upload_table['image']?>"><br>
                Uploaded By..<?=$upload_table['uploader_name'];?><br>
                DESCRIPTION : <?=$upload_table['description']; ?><br><br> 
             </div>

    <?php } }?>
</body>
</html>