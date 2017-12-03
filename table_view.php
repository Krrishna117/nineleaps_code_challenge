<?php
    require_once('load_employee_details.php');
    $result = getRows();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>NINELEAPS - TableView</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
          <h4 style="width: fit-content; color: #28426d; text-align: left; margin-left: 14px; border-bottom: solid;">Employee Details - Table View</h4>
    </div>
		  <table class="table table-bordered table-hover table-striped table-inverse" style="text-align: center;">
      <!-- <table class="table"> -->
    <thead class="thead-dark" style="background-color: #28426d;">
      <tr>
        <th style="text-align: center; color: #ffffff;">S.No</th>
        <th style="text-align: center; color: #ffffff;">Employee Name</th>
        <th style="text-align: center; color: #ffffff;">Designation</th>
        <th style="text-align: center; color: #ffffff;">Reporting Manager</th>
      </tr>
    </thead>
    <tbody>
    <?php
    if($result!="No Records Found"){
      foreach($result as $row){ ?>
          <tr>
            <td><?php echo $row['s_no']; ?></td>
            <td><?php echo $row['employee_name']; ?></td>
            <td><?php echo $row['designation']; ?></td>
            <td><?php 
            if($row['reporting_manager']!=null)
              echo $row['reporting_manager'];
            else
              echo "---";
             ?></td>
          </tr>
   <?php
     }
      }
    ?>
    </tbody>
  </table>
		</div>
	</section> 
  <footer style="width: 100%; height: 85px; background-color: #28426d; padding-top: 24px;">
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
</body>
</html>
