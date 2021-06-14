<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Digi x - Internship Assessment</title>
  <meta name="description" content="The HTML5 Herald" />
  <meta name="author" content="Digi-X Internship Committee" />

  <link rel="stylesheet" href="style.css?v=1.0" />
  <link rel="stylesheet" href="custom.css?v=1.0" />

	</head>
<body>
    <div class="top-wrapper">
        <img src="https://assets.website-files.com/5cd4f29af95bc7d8af794e0e/5cfe060171000aa66754447a_n-digi-x-logo-white-yellow-standard.svg" alt="digi-x logo" height="70" />
        <h1>Digi X - Internship Assessment</h1>
    </div>

    <div class="instruction-wrapper">
        <h2>What you need to do?</h2>
        <h3 style="margin-top:31px;">Using this HTML template, create a page that can:</h3>
        <ol>
            <li><b class="yellow">Upload</b> a zip file - containing 5 images (Cats, or Dogs, or even Pokemons)</li>
            <li>after uploading, <b class="yellow">Extract</b> the zip to get the images </li>
            <li><b class="yellow">Display</b> the images on this page</li>
        </ol>

        <h2 style="margin-top:51px;">The rules?</h2>
        <ol>
            <li>May use <b class="yellow">any programming language/script</b>. The simplest the better *wink*</li>
            <li><b class="yellow">Best if this project could be hosted</b></li>
            <li><b class="yellow">If you are not hosting</b>, please provide a video as proof (GDrive video link is ok)</li>
            <li><b class="yellow">Submit your code</b> by pushing to your own github account, and share the link with us</li>
        </ol>
    </div>
	
	<nav class="navbar navbar-default">
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Simple Extract Zip Image</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<form method="POST" enctype="multipart/form-data">
			<label>Please Select Zip File</label>
			<br />
			<input id="zip_file" type="file" name="zip_file"/>
			<br />
			<button type="button" id="btn_zip" name="btn_zip" class="btn btn-primary">Upload</button>
		</form>
		<div id="result"></div>
	</div>
</body>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/script.js">	</script>
</html>