<?php
    require_once('load_designations.php');
    require_once('load_reporting_managers.php');
    $result = getDesignations();
    $managers = getReportingManaagers();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>NINELEAPS - AddUser</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">
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
		<form class="well form-horizontal" method="post"  id="add_user_form">
    
    <fieldset>

    <legend style="border-top: 1px solid #e5e5e5; !important"><center><h3><b>Employee Details Form</b></h3></center></legend><br>
    <div class="form-group">
      <label class="col-md-4 control-label">Employee Name</label>  
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="firstName" name="first_name" placeholder="First Name" class="form-control"  type="text">
        </div>
       </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label">(Optional)</label>  
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="lastName" name="last_name" placeholder="Last Name" class="form-control"  type="text">
        </div>
       </div>
    </div>

    <div class="form-group"> 
      <label class="col-md-4 control-label">Designation</label>
        <div class="col-md-4 selectContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
        <select id="emplyeeRole" name="employee_role" class="form-control">
          <option selected disabled>Employee role</option>
          <?php
          	if($result!="No Designations Found"){
          		foreach($result as $designation){ ?>
          			<option><?php echo $designation['designation_name']; ?></option>
          <?php	}
          	}else{ ?>
          		<option>CEO</option>
          <?php }
          ?>
        </select>
      </div>
    </div>
    </div>

    <div class="form-group"> 
      <label class="col-md-4 control-label">Reporting Manager</label>
        <div class="col-md-4 selectContainer">
        	<div class="input-group">
            	<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
        		<select id="reportingManager" name="reporting_manager" class="form-control selectpicker">
	          		<option selected disabled>select reporting manager</option>
	          		<?php
	          		if($managers!="No Managers Found"){
			          		foreach($managers as $manager){ ?>
			          			<option><?php 
			          			if($manager['employee_name']!=null || $manager['employee_name']!=''){
			          				echo $manager['employee_name']; 
			          			}
			          			?></option>
			          <?php }
			          	}else{ ?>
			          		<option>CEO</option>
			          	<?php }
			          ?>
        		</select>
      		</div>
    	</div>
    </div>
      
    

    <div class="form-group">
      <label class="col-md-4 control-label"></label>
      <div class="col-md-4" style="margin-top: 15px;">
        <button id="add_employee" class="btn btn-primary" name="add_user" style="margin-left: 50px;">ADD USER </button><button class="btn btn-warning" id="reset_form" style="margin-left: 60px;">RESET </button>
      </div>
    </div>

    </fieldset>

    </form>
		</div>
	</section>
	<footer style="width: 100%; height: 85px; background-color: #28426d; padding-top: 24px; margin-top: 30px; ">
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
