<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/header.php");?>
</head>
<body>

<?php include("includes/navigation.php");?>
<?php include("includes/banner.php");?>

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-6 mx-auto">
				<form>
					<div class="form-group">
    				<label for="formGroupExampleInput">Name</label>
    				<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name">
  				</div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Email address</label>
				    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
				  </div>

				  <div class="form-group">
				    <label for="exampleFormControlTextarea1">Message</label>
				    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
				  </div>
					<button type="submit" class="btn btn-block btn-lg btn-primary mt-5">Submit Your Message</button>
				</form>
			</div>
		</div>
	</div>
</section>


<?php include("includes/footer.php");?>

</body>
</html>
