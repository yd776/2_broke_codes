<!DOCTYPE html>
<html lang = "eng">
	<head>
		<title>Health Center Patient Record Management System</title>
		<meta charset = "utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel = "shortcut icon" href = "../images/logo.png" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/jquery.dataTables.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/customize.css" />
	</head>
<body>
	<div class = "navbar navbar-default navbar-fixed-top">
		<img src = "../images/logo.png" style = "float:left;" height = "55px" /><label class = "navbar-brand">Health Center Patient Record Management System - Victorias City</label>
						<ul class = "nav navbar-right">	
				<li class = "dropdown">
					<a class = "user dropdown-toggle" data-toggle = "dropdown" href = "#">
						<span class = "glyphicon glyphicon-user"></span>
						Staff Portal						<b class = "caret"></b>
					</a>
				<ul class = "dropdown-menu">
					<li>
						<a class = "me" href = "logout.php"><i class = "glyphicon glyphicon-log-out"></i> Logout</a>
					</li>
				</ul>
				</li>
			</ul>
	</div>
	<div id = "sidebar">
			<ul id = "menu" class = "nav menu">
				<li><a href = "home.php"><i class = "glyphicon glyphicon-home"></i> Dashboard</a></li>
				<li><a href = ""><i class = "glyphicon glyphicon-cog"></i> Accounts</a>
					<ul>
						<li><a href = "admin.php"><i class = "glyphicon glyphicon-cog"></i> Administrator</a></li>
						<li><a href = "user.php"><i class = "glyphicon glyphicon-cog"></i> User</a></li>
					</ul>
				</li>
				<li><li><a href = "patient.php"><i class = "glyphicon glyphicon-user"></i> Patient</a></li></li>
				<li><a href = ""><i class = "glyphicon glyphicon-folder-close"></i> Sections</a>
					<ul>
						<li><a href = "fecalysis.php"><i class = "glyphicon glyphicon-folder-open"></i> Fecalysis</a></li>
						<li><a href = "maternity.php"><i class = "glyphicon glyphicon-folder-open"></i> Maternity</a></li>
						<li><a href = "hematology.php"><i class = "glyphicon glyphicon-folder-open"></i> Hematology</a></li>
						<li><a href = "dental.php"><i class = "glyphicon glyphicon-folder-open"></i> Dental</a></li>
						<li><a href = "xray.php"><i class = "glyphicon glyphicon-folder-open"></i> Xray</a></li>
						<li><a href = "rehabilitation.php"><i class = "glyphicon glyphicon-folder-open"></i> Rehabilitation</a></li>
						<li><a href = "sputum.php"><i class = "glyphicon glyphicon-folder-open"></i> Sputum</a></li>
						<li><a href = "urinalysis.php"><i class = "glyphicon glyphicon-folder-open"></i> Urinalysis</a></li>
					</ul>
				</li>
			</ul>
	</div>
	<div id = "content">
		<br />
		<br />
		<br />
		<div style = "display:none;" id = "add_itr" class = "panel panel-success">	
			<div class = "panel-heading">
				<label>ADD PATIENT INFORMATION</label>
				<button id = "hide_itr" style = "float:right; margin-top:-4px;" class = "btn btn-sm btn-danger"><span class = "glyphicon glyphicon-remove"></span> CLOSE</button>
			</div>
			<div class = "panel-body">
				<form id = "form_dental" method = "POST" enctype = "multipart/form-data">
					<div style = "float:left;" class = "form-inline">
						<label for = "itr_no">ITR No:</label>
						<input class = "form-control" size = "3" min = "0" type = "number" name = "itr_no">
					</div>
					<div style = "float:right;" class = "form-inline">
						<label for = "family_no">Family no:</label>
						<input class = "form-control" placeholder = "(Optional)" size = "5" type = "text" name = "family_no">
					</div>
					<br />
					<br />
					<br />
					<div class = "form-inline">
						<label for = "firstname">Firstname:</label>
						<input class = "form-control" name = "firstname" type = "text" required = "required">
						&nbsp;&nbsp;&nbsp;
						<label for = "middlename">Middle Name:</label>
						<input class = "form-control" name = "middlename" placeholder = "(Optional)" type = "text">
						&nbsp;&nbsp;&nbsp;
						<label for = "lastname">Lastname:</label>
						<input class = "form-control" name = "lastname" type = "text" required = "required">
					</div>
					<br />
					<div class = "form-group">
						<label for = "birthdate" style = "float:left;">Birthdate:</label>
						<br style = "clear:both;" />
						<select name = "month" style = "width:15%; float:left;" class = "form-control" required = "required">
							<option value = "">Select a month</option>
							<option value = "01">January</option>
							<option value = "02">February</option>
							<option value = "03">March</option>
							<option value = "04">April</option>
							<option value = "05">May</option>
							<option value = "06">June</option>
							<option value = "07">July</option>
							<option value = "08">August</option>
							<option value = "09">September</option>
							<option value = "10">October</option>
							<option value = "11">November</option>
							<option value = "12">December</option>
						</select>
						<select name = "day" class = "form-control" style = "width:13%; float:left;" required = "required">
							<option value = "">Select a day</option>
							<option value = "01">01</option>
							<option value = "02">02</option>
							<option value = "03">03</option>
							<option value = "04">04</option>
							<option value = "05">05</option>
							<option value = "06">06</option>
							<option value = "07">07</option>
							<option value = "08">08</option>
							<option value = "09">09</option>	
							<option value = '10'>10</option><option value = '11'>11</option><option value = '12'>12</option><option value = '13'>13</option><option value = '14'>14</option><option value = '15'>15</option><option value = '16'>16</option><option value = '17'>17</option><option value = '18'>18</option><option value = '19'>19</option><option value = '20'>20</option><option value = '21'>21</option><option value = '22'>22</option><option value = '23'>23</option><option value = '24'>24</option><option value = '25'>25</option><option value = '26'>26</option><option value = '27'>27</option><option value = '28'>28</option><option value = '29'>29</option><option value = '30'>30</option><option value = '31'>31</option>						</select>
						<select name = "year" class = "form-control" style = "width:13%; float:left;" required = "required">
							<option value = "">Select a year</option>
							<br />
<b>Warning</b>:  Use of undefined constant Y - assumed 'Y' (this will throw an Error in a future version of PHP) in <b>C:\xampp\htdocs\onlinehealthcare\admin\patient.php</b> on line <b>137</b><br />
<option value = '2022'>2022</option><option value = '2021'>2021</option><option value = '2020'>2020</option><option value = '2019'>2019</option><option value = '2018'>2018</option><option value = '2017'>2017</option><option value = '2016'>2016</option><option value = '2015'>2015</option><option value = '2014'>2014</option><option value = '2013'>2013</option><option value = '2012'>2012</option><option value = '2011'>2011</option><option value = '2010'>2010</option><option value = '2009'>2009</option><option value = '2008'>2008</option><option value = '2007'>2007</option><option value = '2006'>2006</option><option value = '2005'>2005</option><option value = '2004'>2004</option><option value = '2003'>2003</option><option value = '2002'>2002</option><option value = '2001'>2001</option><option value = '2000'>2000</option><option value = '1999'>1999</option><option value = '1998'>1998</option><option value = '1997'>1997</option><option value = '1996'>1996</option><option value = '1995'>1995</option><option value = '1994'>1994</option><option value = '1993'>1993</option><option value = '1992'>1992</option><option value = '1991'>1991</option><option value = '1990'>1990</option><option value = '1989'>1989</option><option value = '1988'>1988</option><option value = '1987'>1987</option><option value = '1986'>1986</option><option value = '1985'>1985</option><option value = '1984'>1984</option><option value = '1983'>1983</option><option value = '1982'>1982</option><option value = '1981'>1981</option><option value = '1980'>1980</option><option value = '1979'>1979</option><option value = '1978'>1978</option><option value = '1977'>1977</option><option value = '1976'>1976</option><option value = '1975'>1975</option><option value = '1974'>1974</option><option value = '1973'>1973</option><option value = '1972'>1972</option><option value = '1971'>1971</option><option value = '1970'>1970</option><option value = '1969'>1969</option><option value = '1968'>1968</option><option value = '1967'>1967</option><option value = '1966'>1966</option><option value = '1965'>1965</option>						</select>
						<br style = "clear:both;"/>
						<br />
						<label for = "phil_health_no">Phil Health no:</label>
						<input name = "phil_health_no" placeholder = "(if any)" class = "form-control" type = "text">
						<br />
						<label for = "address">Address:</label>
						<input class = "form-control" name = "address" type = "text" required = "required">
						<br />
						<label for = "age">Age:</label>
						<input class = "form-control" style = "width:20%;" min = "0" max = "999" name = "age" type = "number">
						<br />
						<label for = "civil_status">Civil Status:</label>
						<select style = "width:22%;" class = "form-control" name = "civil_status" required = "required">
							<option value = "">--Please select an option--</option>
							<option value = "Single">Single</option>
							<option value = "Married">Married</option>
						</select>
						<br />
						<label for = "gender">Gender:</label>
						<select style = "width:22%;" class = "form-control" name = "gender" required = "required">
							<option value = "">--Please select an option--</option>
							<option value = "Male">Male</option>
							<option value = "Female">Female</option>
						</select>
					</div>
					<br />
					<div class = "form-inline">
						<label for = "bp">BP:</label>
						<input class = "form-control" name = "bp" type = "text"  required = "required">
						&nbsp;&nbsp;&nbsp;
						<label for = "temp">TEMP:</label>
						<input class = "form-control" name = "temp" type = "number" max = "999" min = "0" size = "15" required = "required"><label>&deg;C</label>
						&nbsp;&nbsp;&nbsp;
						<label for = "pr">PR:</label>
						<input class = "form-control" name = "pr" type = "text"  required = "required">
						<br />
						<br />
						<label for = "rr">RR:</label>
						<input class = "form-control" name = "rr" type = "text"  required = "required">
						&nbsp;&nbsp;&nbsp;
						<label for = "wt">WT :</label>
						<input class = "form-control" name = "wt" style = "width:10%;" type = "number"  required = "required"><label>kg</label>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<label for = "ht">HT :</label>
						<input class = "form-control" name = "ht" style = "margin-right:10px;" type = "text"  required = "required">
					</div>
					<br />
					<div class = "form-inline">
						<button class = "btn btn-primary" name = "save_patient"><span class = "glyphicon glyphicon-save"></span> SAVE</button>
					</div>
				</form>
			</div>	
		</div>	
				<div class = "panel panel-primary">
			<div class = "panel-heading">
				<label>PATIENTS LIST</Label>
			</div>
			<div class = "panel-body">
				<button id = "show_itr" class = "btn btn-info"><span class = "glyphicon glyphicon-plus"></span> ADD PATIENT</button>
				<br />
				<br />
				<table id = "table" class = "display" width = "100%" cellspacing = "0">
					<thead>
						<tr>
							<th>ITR No</th>
							<th>Name</th>
							<th>Birthdate</th>
							<th>Age</th>
							<th>Address</th>
							<th>Civil Status</th>
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
							<td><center><a href = "complaints.php?id=19&lastname=Lodh" class = "btn btn-sm btn-info">Complaints <span class = "badge">1</span></a> 
							<a href = "edit_patient.php?id=19&lastname=Lodh" class = "btn btn-sm btn-warning"><span class = "glyphicon glyphicon-pencil"></span> Update</a></center></td>
						</tr>
										</tbody>
					</table>
			</div>
		</div>
	</div>
	<div id = "footer">
		<label class = "footer-title">&copy; Copyright Health Center Patient Record Management System 2015</label>
	</div>
<script src = "../js/bootstrap.js"></script>
<script src = "../js/jquery.min.js"></script>
<script src = "../js/dropdown.js"></script>
<script src = "../js/sidebar.js"></script>
<script src = "../js/jquery.dataTables.js"></script>
<script src = "../js/custom.js"></script>
<script type = "text/javascript">
	$(document).ready(function() {
		$('#table').DataTable();
		$('#table1').DataTable();
	});
	
</script>
<script type = "text/javascript">
    $(document).ready(function() {
        function disableBack() { window.history.forward() }

        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });
</script>	
</body>
</html>