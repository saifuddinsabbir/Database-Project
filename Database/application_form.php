<!DOCTYPE html>
<html>
<head>
	
<style>
body, container {
	font-family: Arial, Helvetica, sans-serif;
	background-image: linear-gradient(to bottom, #ced0d4b7, #dfdfdf, #ffffff);
}

* {box-sizing: border-box;}

input[type=text],input[type=number], input[type=mail], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  border-radius: 10px 10px 10px 10px;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {

	width: 90px;
	background: none repeat scroll 0 0 black;
	border-radius: 10px 10px 10px 10px;
	border-style: solid;
	border-width: 1px;
	box-shadow: 1px 1px 3px #333333;
	height: 33px;
	cursor: pointer;
	text-align: center;
	/* display: block; */
	color: white;
	text-transform: uppercase;
	font-weight: 600;
	margin: 10px 0;
	transition: 0.5s;
}

input[type=submit]:hover {
  background-color: white;
  color: black;
}

input[type=reset] {
  float: right;
  clear: both;
}

input[type=reset] {
	width: 90px;
	box-shadow: 1px 1px 3px #333333;
  	background-color: white;
 	border: 10px;
  	height: 33px;
	border-radius: 10px 10px 10px 10px;
	color: black; 
 	text-transform: uppercase;
  	font-weight: 600;
  	margin: 10px 0;
  	cursor: pointer;
  	transition: 0.5s;
}

input[type=reset]:hover, input[type=reset]:focus {
  color: black;
}

input[type=reset]:active {
  background-color: black;
  color: white;
  outline: 10px 10px 10px 10px;
}

input[type=radio] {
  border-radius: 80%;
  width: 16px;
  height: 16px;
  border: 2px solid #999;
  transition: 0.2s all linear;
  margin-right: 5px;
  position: relative;
  top: 4px;
}

.container {
	border-radius: 10px 10px 10px 10px;
	background-image: linear-gradient(to bottom, #ced0d4b7, #dfdfdf, #ffffff );
	padding: 20px;
}

.col-25 {
  float: left;
  width: 18%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 82%;
  margin-top: 6px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

legend {
	background-color: #333333;
	background-image: linear-gradient(to bottom, green, rgb(15, 148, 44),rgb(24, 195, 61));
	color: white;
	box-shadow: 1px 1px 3px #333333;
	padding: 5px 10px;
}

fieldset {
	border-radius: 10px 10px 10px 10px;
	background-image: linear-gradient(to bottom, #f6f6f6, #ffffff, #fffdfd );
  box-shadow: 1px 1px 3px #333333;	
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>

<body>
	<div id="container" class="container">            
		
		<div class="form" style="width:800px; margin:0 auto;">
			<fieldset>
				<legend><strong>Form Fields</strong></legend>
				<form method="POST" action="store.php" id="form">

				<div class="row">
     				<div class="col-25">
        				<label for="name">Name</label>
      				</div>
      				<div class="col-75">
        				<input type="text" id="name" name="name">
      				</div>
    			</div>

				<div class="row">
     				<div class="col-25">
        				<label for="designation">Designation</><br/>
      				</div>
      				<div class="col-75">
					    <select name="designation" id="designation">
							<option value="">-- Select Option --</option>
							<option value="Professor">Professor</option>
							<option value="Assosiate Professor">Assosiate Professor</option>
							<option value="Assistant Professor">Assistant Professor</option>
							<option value="Lecturer">Lecturer</option>
						</select>
					</div>
    			</div>

				<div class="row">
     				<div class="col-25">
					 	<label for="working_unit">Working Unit</label><br/>
      				</div>
      				<div class="col-75">
					  <select name="working_unit" id="working_unit">
							<option value="">-- Select Option --</option>
							<option value="Office">Office</option>
							<option value="Hall">Hall</option>
							<option value="Department">Department</option>
							<option value="Institute">Institute</option>
						</select>
					</div>
    			</div>

				<div class="row">
     				<div class="col-25">
					 <label for="permanent">Permanent</label><br/>
      				</div>
      				<div class="col-75">
        				<input type="radio" name="permanent" value="Yes">Yes</>
						<input type="radio" name="permanent" value="No">No</input>
					</div>
    			</div>

				<div class="row">
     				<div class="col-25">
					 	<label for="national_id">National Id</label><br/>
      				</div>
      				<div class="col-75">
					  <input type="number" name="national_id" id="national_id"/>
      				</div>
    			</div>

				<div class="row">
     				<div class="col-25">
					 <label for="number">Contact Number</label><br/>
      				</div>
      				<div class="col-75">
					  <input type="number" name="number" id="number"/>
      				</div>
    			</div>

				<div class="row">
     				<div class="col-25">
					 	<label for="mail">Email</label><br/>	
      				</div>
      				<div class="col-75">
					  	<input type="mail" name="mail" id="mail"/>
      				</div>
    			</div>

				<div class="row">
     				<div class="col-25">
					 	<label for="spouse_name">Spouse Name</label><br/>	
      				</div>
      				<div class="col-75">
					  <input type="text" name="spouse_name" id="spouse_name"/>
      				</div>
    			</div>

				<div class="row">
     				<div class="col-25">
						<label for="child_1_name">Child Name 1</label><br/>
      				</div>
      				<div class="col-75">
					  <input type="text" name="child_1_name" id="child_1_name"/>
      				</div>
    			</div>

				<div class="row">
     				<div class="col-25">
					 <label for="chile_2_name">Child Name 2</label><br/>
      				</div>
      				<div class="col-75">
					  <input type="text" name="chile_2_name" id="chile_2_name"/>	
      				</div>
    			</div>

				<div class="row">
     				<div class="col-25">
					 	<label for="noc_version">NOC Version Number</label><br/>	
      				</div>
      				<div class="col-75">
					  	<input type="text" name="noc_version" id="noc_version"/>	
      				</div>
    			</div>

				<div class="row">
     				<div class="col-25">
					 	<label for="relation">Spouse Relation</label><br/>	
      				</div>
      				<div class="col-75">
					  	<input type="radio" name="relation" value="Husband">Husband</input>
						<input type="radio" name="relation" value="Wife">Wife</input>	
      				</div>
    			</div>

				<div class="row">
     				<div class="col-25">
					 	<label>Chile 1 Gender</label><br/>	
      				</div>
      				<div class="col-75">
					  	<input type="radio" name="child_1" value="Male">Male</input>
						<input type="radio" name="child_1" value="Female">Female</input>
						<input type="radio" name="child_1" value="Other">Other</input>
      				</div>
    			</div>

				<div class="row">
     				<div class="col-25">
					 	<label>Chile 2 Gender</label><br/>	
      				</div>
      				<div class="col-75">
					  	<input type="radio" name="child_2" value="Male">Male</input>
						<input type="radio" name="child_2" value="Female">Female</input>
						<input type="radio" name="child_2" value="Other">Other</input>
      				</div>
    			</div>

				<div class="row">
     				<div class="col-25">
					   	<label for="child_1_age">Child 1 Age</label><br/>	
      				</div>
      				<div class="col-75">
					 	 <input type="number" name="child_1_age" id="child_1_age"/>	
      				</div>
    			</div>

				<div class="row">
     				<div class="col-25">
					 	<label for="child_2_age">Child 2 Age</label><br/>
      				</div>
      				<div class="col-75">
					 	<input type="number" name="child_2_age" id="child_2_age"/>
      				</div>
    			</div>

				<div class="row">
     				<div class="col-25">
					 	<label for="image">Image</label><br/>
      				</div>
      				<div class="col-75">
					 	<input type="file" name="image" id="image"/>
      				</div>
    			</div>

     			<div>
					<input type="submit" class="submit" name="submit" id="submit" value="Submit"/>    <input type="reset" class="reset" name="reset" value="Reset"/> </pre>	
      			</div>

				<form>

			</fieldset>

		</div>
	</div>

	<a href="index.php" id="footer">Back to home</a>

</body>
</html>