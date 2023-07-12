<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>curd application -- create user</title>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
</head>
<body>
    <div class= "navbar navbar-dark bg-dark">
    <div class ="container">
        <a href="#" class="navbar-brand">CRUD APPLICATION</a>
    </div>
    </div>
    <div class ="container"style ="padding-top: 10px;">
        <h3>CREATE USER</h3>
        <hr>
        <form method ='post' name="create user" action="<?php echo base_url().'index.php/user/create/';?>">
        <div class = "row">
            <div class="col-md-6">
                <div class = "form-group">
                    <label for="name">NAME</label>
                    <input type="text" name ="name" value ="<?php echo set_value('name');?>" class ="form-control">
                    <?php echo form_error('name');?>
                </div>
                <div class = "form-group">
                    <label for="email">EMAIL</label>
                    <input type="text" name ="email" value ="<?php echo set_value('email');?>" class ="form-control">
                    <?php echo form_error('email');?>
                </div>
                <div class ="form-group">
                    <button class="btn btn primary">CREATE</button>
                    <a href="<?php echo base_url().'index.php/user/index';?>" class="btn-secondary btn" >CANCEL</a>
                </div>
            </div>
            </form>
        </div>
  </div>

    
</body>
</html>