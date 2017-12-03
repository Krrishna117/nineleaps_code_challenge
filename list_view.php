<?php
    require_once('load_employee_details.php');
    $result = getRows();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>NINELEAPS - ListView</title>
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
   <div class="row">
        <div class="col-md-2"></div>
        <div class="container col-md-4"> 
          <h4 style="width: fit-content; color: #28426d; text-align: left; border-bottom: solid;">Employee Details - List View</h4>
        </div>
    </div>
    <div class="row">
   <div class="col-md-2"></div>
		<div class="container col-md-4"> 
      <ul class="list-unstyled">
		  <?php
        if($result!="No Records Found"){
          foreach ($result as $row) {
            if($row['reporting_manager']==''){ ?>
              <li style="margin-bottom: 5px;"><span style="color: #2b58a4;"><?php echo $row['employee_name'].','; ?></span><span style="padding-left: 4px; font-size: 10px;"><?php echo $row['designation']; ?></span></li>
              <?php 
                foreach ($result as $value1) {
                  if($row['employee_name'] == $value1['reporting_manager']){ ?>
                    <ul>
                      <li style="margin-left: 5px; margin-bottom: 5px;"><span style="color: #2b58a4;"><?php echo $value1['employee_name'].','; ?></span><span style="padding-left: 4px; font-size: 10px;"><?php echo $value1['designation']; ?></span></li>
                      <?php 
                        foreach ($result as $value2) {
                          if($value1['employee_name'] == $value2['reporting_manager']){ ?>
                            <ul>
                              <li style="margin-left: 5px; margin-bottom: 5px;"><span style="color: #2b58a4;"><?php echo $value2['employee_name'].','; ?></span><span style="padding-left: 4px; font-size: 10px;"><?php echo $value2['designation']; ?></span></li>
                              <?php 
                                foreach ($result as $value3) {
                                  if($value2['employee_name'] == $value3['reporting_manager']){ ?>
                                    <ul>
                                      <li style="margin-left: 5px; margin-bottom: 5px;"><span style="color: #2b58a4;"><?php echo $value3['employee_name'].','; ?></span><span style="padding-left: 4px; font-size: 10px;"><?php echo $value3['designation']; ?></span></li>
                                      <?php 
                                        foreach ($result as $value4) {
                                          if($value3['employee_name'] == $value4['reporting_manager']){ ?>
                                            <ul>
                                              <li style="margin-left: 5px; margin-bottom: 5px;"><span style="color: #2b58a4;"><?php echo $value4['employee_name'].','; ?></span><span style="padding-left: 4px; font-size: 10px;"><?php echo $value4['designation']; ?></span></li>
                                              <?php 
                                                foreach ($result as $value5) {
                                                  if($value4['employee_name'] == $value5['reporting_manager']){ ?>
                                                    <ul>
                                                      <li style="margin-left: 5px; margin-bottom: 5px;"><span style="color: #2b58a4;"><?php echo $value5['employee_name'].','; ?></span><span style="padding-left: 4px; font-size: 10px;"><?php echo $value5['designation']; ?></span></li>
                                                    </ul>
                                                <?php  }
                                                }
                                              ?>
                                            </ul>
                                        <?php  }
                                        }
                                      ?>
                                    </ul>
                                <?php  }
                                }
                              ?>
                            </ul>
                       <?php
                          }
                        }
                      ?>
                    </ul>
              <?php  }
                }
              ?>
            <?php }
          }
        }
      ?>
      </ul>
		</div>
    </div>
	</section> 
  <footer style="width: 100%; height: 85px; background-color: #28426d; padding-top: 24px; margin-top: 33%; ">
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
