<!DOCTYPE html>
<html lang = "en">
	<head>	
		<title>Health Center Patient Record Management System</title>
		<meta charset = "UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel = "shortcut icon" href = "images/logo.png" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/jquery.dataTables.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/customize.css" />
	</head>
	<body>
	<div class = "navbar navbar-default navbar-fixed-top">
		<img src = "images/logo.png" style = "float:left;" height = "55px"><label class = "navbar-brand">Health Center Patient Record Management System - Victorias City</label>
		<ul class = "nav navbar-right">	
				<li class = "dropdown">
					<a class = "user dropdown-toggle" data-toggle = "dropdown" href = "#">
						<span class = "glyphicon glyphicon-user"></span>
						Namit Lodh						<b class = "caret"></b>
					</a>
				<ul class = "dropdown-menu">
					<li>
						<a class = "me" href = "logout.php"><span class = "glyphicon glyphicon-log-out"></span> Logout</a>
					</li>
				</ul>
				</li>
			</ul>
	</div>
	<br />
	<br />
	<br />
	<div class = "well">
		<div class = "panel panel-warning">
			<div class = "panel-heading">
				<center><label>URINALYSIS</label></center>
			</div>
		</div>	
		<a href = "view_urinalysis_record.php" id = "d_record" style = "float:right; margin-right:10px;" class = "btn btn-success"><span class = "glyphicon glyphicon-book"></span> URINALYSIS RECORD</a>
		<br />
		<br />
		<div class = "panel panel-primary">
			<div class = "panel-heading">
				<h4>INDIVIDUAL TREATMENT RECORD</h4>
			</div>
		</div>
		<br />
		<table id = "table" class = "display" cellspacing = "0" >
			<thead>
				<tr>
					<th>ITR No</th>
					<th>Name</th>
					<th>Birthdate</th>
					<th>Age</th>
					<th>Address</th>
					<th>Civil Status</th>
					<th>Gender</th>
					<th><center>Action</center></th>
				</tr>
			</thead>
			<tbody>
							<tr>
					<td>19</td>
					<td>Namit Lodh</td>
					<td>05/15/2002</td>
					<td>19</td>
					<td>SRM HOSTEL</td>
					<td>Single</td>
					<td>Male</td>
					<td>
						<center>
							<a href = "view_urinalysis.php?itr_no=19"class = "btn btn-sm btn-info"><span class = "glyphicon glyphicon-search"></span> VIEW DETAIL</a> 
						</center>
					</td>
				</tr>
				
			</tbody>
		</table>
	</div>
	<div id = "footer">
		<label class = "footer-title">&copy; Copyright Health Center Patient Record Management System 2015</label>
	</div>
	</body>
		<script src = "js/bootstrap.js"></script>
<script src = "js/jquery.min.js"></script>
<script src = "js/dropdown.js"></script>
<script src = "js/sidebar.js"></script>
<script src = "js/jquery.dataTables.js"></script>
<script src = "js/custom.js"></script>
<script src="js/jquery-ui.js"></script>
<script type = "text/javascript">
	$(document).ready(function() {
		$('#table').DataTable();
	} );
</script>
<script type = "text/javascript">
    $(document).ready(function() {
        function disableBack() { window.history.forward() }

        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });
</script>	</html>