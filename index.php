<!DOCTYPE html>
<html>
	<head>
		<title>Ajax Uploader</title>

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>		
		<script type="text/javascript" src="form.js"></script>
		<script type="text/javascript" src="main.js"></script>
	</head>
	<body>
		<div class="container-main">
			<h1>Ajax Image Uploader</h1>
			<p>Uploading Your Image Till now..</p>
			<div class="result"></div>

			<div id="result">
				<div class="alert alert-success" role="alert">
					<strong><i class="fa fa-check" aria-hidden="true"></i> Well done!</strong> 
					Image Successfully Deleted.
				</div>
			</div>

			<div id="saved">
				<div class="alert alert-success" role="alert">
					<strong><i class="fa fa-check" aria-hidden="true"></i> Success!</strong> 
					Image Successfully Saved.
				</div>
			</div>

			<form action="upload.php" method="POST" id="uploadForm" enctype="multipart/form-data" autocomplete="off">
				<div class="buttons">
					<label class="btn btn-outline-primary" style="width: 75%;">
					    Browse <input type="file" required hidden name="file" id="file">
					</label><br>
					<input type="submit" style="width: 50%;" name="submit" class="btn btn-success" value="Upload">
				</div>
			</form>
			
			<div class="progress">
			  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
			</div>
			
			<div class="img"></div>

		</div>
	</body>
</html>
