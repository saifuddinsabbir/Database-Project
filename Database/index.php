<?php
session_start();
if(!isset($_SESSION["user_id"])){
	header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">

<style>

	* {
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	text-decoration: none;
	color: black;
}
/** 
body {
	background-image: linear-gradient(to bottom, rgba(180, 214, 193,1.0), rgba(180, 214, 193,0.6), rgba(180, 214, 193, 0.1));
	background-repeat: no-repeat;
}
**/
h3, .third p, th, td {
	font-family: "kalpurush";
}
h3 {
	font-size: 26px;
	margin: 10px 0;
}
.third p {
	font-size: 14px;
	line-height: 1.2;
	font-weight: 700;
}
.container {
	width: 100%;
	display: flex;
	flex-direction: column;
}

.logo {
	width: 200px;
	height: 140px;
	float: left;
}
#uni-logo {
	width: 95px;
	padding-top: 16px;
	padding-left: 20px;
}
.menu {
	display: flex;
	flex-direction: row;
	align-items: center;
}
.user {
	margin: 10px;
	display: flex;
	flex-direction: column;
	cursor: pointer;
}
.help {
	margin: 10px;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	cursor: pointer;
}
.logout {
	margin: 10px;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	cursor: pointer;
}
.aa {
	width: 40px;
}

.first {
	width: 100%;
	display: flex;
	flex-direction: row;
	justify-content: space-between;
	background-color: rgb(162, 169, 194);
}

.second {
	padding-left: 20px;
	display: flex;
	flex-direction: column;
	background-color: rgb(179, 183, 199);
}
.third {
	padding-left: 20px;
	background-color: rgb(205, 208, 221);
}

.forth {
	padding-left: 20px;
	background-color: rgb(224, 226, 235);
}

.departments {
	display: flex;
	flex-direction: row;
	flex-wrap: wrap;
	/*justify-content: center;*/

}
.department {
	display: flex;
	flex-direction: row;
	width: 230px;
	margin-right: 10px;
}
.img {
	width: 80px;
	height: 80px;
	border-radius: 5px;
	background-color: transparent;
	margin-bottom: 10px;
	padding: 5px;
}
.box {
	width: 150px;
	height: 80px;
	padding: 2px 8px;
}
.dept-icon {
	width: 70px;
}

.table-box {
	width: 80%;
	height: auto;
	background-color: #f1f1f1;
	margin-bottom: 10px;
	border: 2px solid black;
}
table {
	width: 95%;
	margin: 15px auto;
	border-collapse: collapse;
}
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
tr:nth-child(even) {
  background-color: #dddddd;
}

@media screen and (max-width: 480px) {
  .logo {
	height: 120px;
	width: 90px;
}
  #uni-logo {
  	width: 80px;
  }
  .department {
  	width: 165px;
  }
  .img {
  	width: 60px;
  	height: 60px;
  }
  .dept-icon {
  	width: 50px;
  }
  .box {
  	height: 60px;
  	padding: 2px 2px 2px 5px;
  	font-size: 10px;
  }
  .user, .help, .logout {
  	font-size: 14px;
  }
  .aa {
  	width: 30px;
  }
  p {
  	font-size: 12px;
  }
}

</style>

	<title> Dashboard </title>
</head>

<body>
<div class="container">
	<div class="first">
		<div class="logo">
			<img src="image/ctguv.png" id="uni-logo" alt="logo">
		</div>
		<div class="menu">
			<a href="#profile">
			<div class="user">
			<p>Name</p>
			<p>Email</p>
			</div>
			</a>
			<a href="#help">
			<div class="help">
			<img src="image/support.png" class="aa" alt="support">
			<p>Help</p>
			</div>
			</a>
			<a href="logout.php">
			<div class="logout">
			<img src="image/logout.png" class="aa" alt="logout">
			<p>Log Out</p>
			</div>
			</a>
		</div>
	</div>
	<div class="second">
		<h3>NOC এর জন্য আবেদন ফর্ম</h3>
		<div class="img">
		<a href="application_form.php">
		<img src="image/form.png" alt="form" class="dept-icon">
		</a>
		</div>
	</div>
	<div class="third">
		 <h3>বিভাগ/কেন্দ্র/দপ্তর</h3>
		 <div class="departments">
		 	<div class="department">
		 		<div class="img">
		 			<img src="image/school.png" class="dept-icon">
		 		</div>
		 		<div class="box">
		 				<p>সভাপতি, কম্পিউটার সায়েন্স এন্ড ইঞ্জিনিয়ারিং বিভাগ, <br/> চ. বি.</p>
		 		</div>
		 	</div>
		 	<div class="department">
		 		<div class="img">
		 			<img src="image/school.png" class="dept-icon">
		 		</div>
		 		<div class="box">
		 				<p>হিসাব নিয়ামক, <br/> চ. বি.</p>
		 		</div>
		 	</div>
		 	<div class="department">
		 		<div class="img">
		 			<img src="image/school.png" class="dept-icon">
		 		</div>
		 		<div class="box">
		 				<p>গ্রন্থাগারিক, <br/> চ.বি.</p>
		 		</div>
		 	</div>
		 	<div class="department">
		 		<div class="img">
		 			<img src="image/school.png" class="dept-icon">
		 		</div>
		 		<div class="box">
		 				<p>কলেজ পরিদর্শক, <br/> চ. বি.</p>
		 		</div>
		 	</div>
		 	<div class="department">
		 		<div class="img">
		 			<img src="image/school.png" class="dept-icon">
		 		</div>
		 		<div class="box">
		 				<p>পরীক্ষা নিয়ন্ত্রক, <br/> চ. বি. </p>
		 		</div>
		 	</div>
		 	<div class="department">
		 		<div class="img">
		 			<img src="image/school.png" class="dept-icon">
		 		</div>
		 		<div class="box">
		 				<p>প্রধান প্রকৌশলী, <br/> চ. বি. </p>
		 		</div>
		 	</div>
		 	<div class="department">
		 		<div class="img">
		 			<img src="image/school.png" class="dept-icon">
		 		</div>
		 		<div class="box">
		 				<p>পরিচালক, পরিকল্পনা ও উন্নয়ন দপ্তর <br/> চ. বি. </p>
		 		</div>
		 	</div>
		 	<div class="department">
		 		<div class="img">
		 			<img src="image/school.png" class="dept-icon">
		 		</div>
		 		<div class="box">
		 				<p>উপ রেজিস্ট্রার <br/> (শিক্ষক সেল) রেজিস্ট্রার অফিস, <br/> চ. বি.</p>
		 		</div>
		 	</div>
		 	<div class="department">
		 		<div class="img">
		 			<img src="image/school.png" class="dept-icon">
		 		</div>
		 		<div class="box">
		 				<p>চীফ মেডিকেল অফিসার, <br/> চ. বি. </p>
		 		</div>
		 	</div>
		 	<div class="department">
		 		<div class="img">
		 			<img src="image/school.png" class="dept-icon">
		 		</div>
		 		<div class="box">
		 				<p>ডেপুটি রেজিস্ট্রার <br/> (একাডেমিক শাখা) রেজিস্ট্রার অফিস, <br/> চ. বি.</p>
		 		</div>
		 	</div>
		 	<div class="department">
		 		<div class="img">
		 			<img src="image/school.png" class="dept-icon">
		 		</div>
		 		<div class="box">
		 				<p>ডেপুটি রেজিস্ট্রার <br/> (গৃহ ঋণ শাখা),  রেজিস্ট্রার অফিস, <br/> চ. বি.</p>
		 		</div>
		 	</div>
		 	<div class="department">
		 		<div class="img">
		 			<img src="image/school.png" class="dept-icon">
		 		</div>
		 		<div class="box">
		 				<p>ডেপুটি রেজিস্ট্রার <br/> (গোপনীয় শাখা) রেজিস্ট্রার অফিস, <br/> চ. বি.</p>
		 		</div>
		 	</div>
		 </div>
	</div>
	<div class="forth">
		<h3>জরুরী বার্তা</h3>
		<div class="table-box">
			<table>
				<thead>
					<tr>
						<th>বিভাগ/কেন্দ্র/দপ্তর</th>
						<th>সমস্যা/অভিযোগ</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>