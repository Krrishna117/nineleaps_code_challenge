<?php
    require_once('load_designations.php');
    require_once('load_reporting_managers.php');
    $result = getDesignations();
    $managers = getReportingManaagers();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>NINELEAPS - HomePage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/homepage.css">
</head>
<body>
  
	<nav class="navbar navbar-inverse navbarNavTag navbar-fixed-top" style="border-color: #000000;">
	  <div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span> 
	      </button>
	      <a class="navbar-brand" href="index.php"><img src="img/logo.svg" alt="company logo" class="logoClass"></a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav navbar-right navUl">
	      	<li><a href="add_user.php" class="navAnchor">Add User</a></li> 
	        <li><a href="table_view.php" class="navAnchor">Table View</a></li>
	        <li><a href="list_view.php" class="navAnchor">List View</a></li>
	        <li><a href="#" class="navAnchor">Tree View</a></li> 
	      </ul>
	    </div>
	  </div>
	</nav>

	<section class="section_class">
		<div class="container">
        <div class="row">
          <h2 style="color: #28426d; text-align: center; border-bottom: solid;">CODE CHALLENGE</h2>
        </div>
		    <div class="row" style="margin-top: 6%;">
          <div><strong style="color: #28426d; font-size: 18px;">Please select one of the following to continue...</strong></div>  
        </div>
        <div class="row" style="margin-top: 28px;">
          <div class="col-md-3">
                <a href="add_user.php" class="btn btn-block btn-lg homeAnchor" style="line-height: 2.5em;"><i class="fa fa-user-plus fa-3x" aria-hidden="true"></i> ADD USER</a>
            </div>
            <div class="col-md-3">
                <a href="table_view.php" class="btn btn-block btn-lg homeAnchor" style="line-height: 2.5em;"><i class="fa fa-table fa-3x" aria-hidden="true"></i> TABLE VIEW</a>
            </div>
            <div class="col-md-3">
                <a href="list_view.php" class="btn btn-block btn-lg homeAnchor" style="line-height: 2.5em;"><i class="fa fa-list-ul fa-3x" aria-hidden="true"></i> LIST VIEW</a>
            </div>
            <div class="col-md-3">
                <a href="#" class="btn btn-block btn-lg homeAnchor" style="line-height: 2.5em;"><i class="fa fa-tree fa-3x" aria-hidden="true"></i> TREE VIEW</a>
            </div>
        </div>
		</div>
	</section>
	<footer style="position: fixed; width: 100%; height: 85px; background-color: #28426d; padding-top: 24px; margin-top: 30px; bottom: 0;">
    <div class="row">
      <div class="col-md-5" style="margin-left: 60px;">
        <p style="color: #ffffff">Copyright © 2017 Nineleaps Technology Solutions</p>
        <p style="color: #c1c1c1"><a href="https://www.nineleaps.com/privacy-policy">Privacy Ploicy</a></p>
      </div>
      <div class="col-md-6"><a href="#"><img src="img/nineleaps-logo-footer.svg" alt="company logo" style="width: 200px; height: 35px; float: right;"></a></div>
    </div>
</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>
