<?php 
 require_once'includes/common.php';
  if (!isset($_SESSION['email'])) {
 header('location: index.php');}
 ?>

<!DOCTYPE html>

<html> 
    <head>
        <title>settings</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
             
            <?php include'includes/header.php'?>
        
       
        <div class="container" id="content">
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3" id="settings-container">
                    <h1><b>Change Password</b></h1><br>
                        <form action="settings_script.php" method="POST">
                                <div class="form-group">
                                <input type="password" class="form-control" placeholder="Old password" name="old_password" id="old_password" required="true">
                                </div>
                                
                                 <div class="form-group">
                                <input type="password" class="form-control" placeholder="New password" name="new_password" id="new_password" required="true">
                                </div>
                                 <div class="form-group">
                                <input type="password" class="form-control" placeholder="Retype new password" name="retype" id="retype" required="true">
                                 </div>
                                
                            <input type="submit" value="Change" class="btn btn-primary">
                            <?php 
                            if(isset($_GET['error'])){
                            echo $_GET['error'];}?>
                                
                         </form>
                </div>
            </div> 
        </div>
        
        <div> 
      <?php include 'includes/footer.php';?>   
        </div>
    </body>
</html>

