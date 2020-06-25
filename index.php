<?php
$mysqli = new mysqli("localhost", "root", "", "guseducation");
if ($mysqli->connect_error)
{
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>
  <style type="text/css">
  	.ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active, a.ui-button:active, .ui-button:active, .ui-button.ui-state-active:hover {
    border: 1px solid #fff;
    background: #fff;
    font-weight: normal;
    color: #000;
}
.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default, .ui-button, html .ui-button.ui-state-disabled:hover, html .ui-button.ui-state-disabled:active {
    border: 1px solid #fff;
    background: #fff;
    font-weight: normal;
    color: #454545;
}
  </style>
</head>
<body>

<div class="container">	
		<img src="banner.jpg" style="width: 100%">
<div class="col-lg-12" style="background:#f0f0f0">
	<h3>Enquiries</h3>
<div id="accordion">
	<?php
	$query = $mysqli->query("SELECT first_name,last_name,email,comment,datetime FROM enquiries ORDER BY id DESC");
	if($mysqli->affected_rows >0){
		while($rows = $query->fetch_assoc()){?>
			<h2><b>Enquiry : <?=$rows['first_name']." ".$rows['last_name']?></b></h2>
			<div>
				<p><?=$rows['comment']?></p>
			</div>

		<?php
	}

	}
	?>
<br/>
</div>
</div>
</div>
</body>
</html>
















