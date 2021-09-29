<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap Css link  -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">

	<title><?php echo "PHP Form Input Area Start"; ?></title>
</head>
<body>
	<?php

		if (isset($_POST['st_submit'])) {
			$mark = $_POST['std_mark'];
			if(empty($mark)){
				$error = 'Mark is Requerd';
			}
			else if(!is_numeric($mark)){
				$error = 'Number must be Requerd!';
			}
			else{
				if($mark>100 or $mark<0){
					$error = 'This is not match Number!';
				}
				else if($mark >= 80){
					$success = 'A+';
				}
				else if($mark >= 70){
					$success = 'A';
				}
				else if($mark >= 60){
					$success = 'A-';
				}
				else if($mark >= 50){
					$success = 'B';
				}
				else if($mark >= 40){
					$success = 'C';
				}
				else if($mark >= 33){
					$success = 'D';
				}
				else{
					$error = "Your great is Fail!";
				}
			}
		}
	 


	 ?>

	 <div class="form_main_area_start">
	 	<div class="container">
	 		<div class="form_main_text_area">
	 			<!-- Success Message Area start  -->
				 <?php if(isset($success)): ?>
				 	<div class="text-center">
				 		<p class="btn btn-success" style="color:#fff"><?php echo 'Your great is'.' '.$success; ?></p>
				 	</div>
				 <?php endif; ?>
				 <!-- Success Message Area start  -->
				<?php if(isset($error)): ?>
				<div class=" text-center">
					<p class="btn btn-danger" style="color:#fff"><?php echo $error; ?></p>
				</div>
				<?php endif; ?>

				<form action="" method="POST">
					<div class="row">
						<div class="col-md-6 offset-md-3">
							<input class="form-control" type="text" name="std_mark" placeholder="Type Your Name">
						</div>
						<div class="col-md-6 mt-2 offset-md-3 text-end">
							<input class="btn btn-primary" type="submit" name="st_submit" value="Submit">
						</div>
					</div>
				</form>

	 		</div>
	 	</div>
	 </div>

</body>
</html>