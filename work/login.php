<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
 <style type="text/css">
 	.navbar-fixed-left {
  width: 200px;
  position: fixed;
  border-radius: 0;
  height: 100%;
}

.navbar-fixed-left .navbar-nav > li {
  float: none;  /* Cancel default li float: left */
  width: 139px;
}

.navbar-fixed-left + .container {
  padding-left: 160px;
}

/* On using dropdown menu (To right shift popuped) */
 </style>
</head>
<body>
 <div class="navbar navbar-inverse navbar-fixed-left">
  <a class="navbar-brand" href="#">ParkZan</a>
  <ul class="nav navbar-nav">
   
   <li><a href="#">ข้อมูล</a></li>
   <li><a href="#">รายชื่อนักเรียน</a></li>
   <li><a href="#">เกรด</a></li>
   <li><a href="#">ตั่งค่า</a></li>
  </ul>
</div>
<div class="container">
 <div class="row">
   <h2>Left side Navigation bar (Fixed)</h2>
   
   <p>Left side Navigation</p>
 </div>
</div>
</body>
</html>