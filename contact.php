<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Latest compiled JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<title>Contact Page</title>
</head>
<body>
	<?php require 'includes/_nav.php'; ?>
   <div class="container">

  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method='post'>

  	  <div class="mb-3 mt-3">
	    <label for="name" class="form-label">Name:</label>
	    <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
	  </div>

	  <div class="mb-3 mt-3">
	    <label for="email" class="form-label">Email:</label>
	    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
	  </div>
	  
	 <label for="comment">Message:</label>

     <textarea class="form-control" rows="5" id="comment" name="msg" style="margin-top: 10px;"></textarea>
      <br>
	  <button type="submit" class="btn btn-primary">Send</button>

  </form>

</div>
 

     <?php require 'includes/_footer.php'; ?>


</body>
</html>

<?php 

  if($_SERVER['REQUEST_METHOD'] == 'POST'){

  	$name = $_POST['name'];

  	$email = $_POST['email'];

  	$msg = $_POST['msg'];



		$to = "kiki@email.com";

		$subject = "My subject";


		$headers = "From: $email" 

		mail($to,$subject,$msg,$headers);


  }


?>