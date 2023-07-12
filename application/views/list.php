<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>curd application --  View user</title>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
</head>
<body>
    <div class= "navbar navbar-dark bg-dark">
    <div class ="container">
        <a href="#" class="navbar-brand">CRUD APPLICATION</a>
    </div>
    </div>
    <div class ="container"style ="padding-top: 10px;">
<div class ="row">
    <div class ="col-md-12" >
        <?php 
        $success = $this->session->userdata('success');
        if($success != ""){
        ?>
        <div class= "alert alert-success"><?php echo $success; ?></div>
        <?php
        
        }?>
         <?php 
        $failure = $this->session->userdata('failure');
        if($failure != ""){
        ?>
        <div class= "alert alert-success"><?php echo $failure;?></div>
        <?php
        
        }?>
    </div>
    <div class ="col-md-8">
        <div class="row">
            <div class="col-6"><h3>VIEW USERS</h3></div>
            <div class="col-6 text-right">
                <a href="<?php echo base_url().'index.php/user/create'?>" class= "btn btn-primary">CREATE</a>
            </div>
        </div>

    </div>
</div>        
        <hr>
        <div class = "row">
          <div class ="col-md-8">
            <table class = "table table-striped">
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>edit</th>
                    <th>delete</th>
                </tr>
              
                    <?php if(!empty ($user)){
                        foreach($user as $user){?>
                            
                     <tr>
                    <td><?php echo $user ['user_id']?></td>
                    <td><?php echo $user ['name']?></td>
                    <td><?php echo $user ['email']?></td>
                    <td>    
                        <a href="<?php echo  base_url().'index.php/user/edit/'.$user['user_id']?>" class = "btn btn-primary">edit</a>
                    </td>
                    <td>
                        <a href="<?php echo base_url().'index.php/user/delete/'.$user['user_id']?>" class = "btn btn-danger">delete</a>
                    </td>
                </tr>
                <?php } } else { ?>
                    <tr>
                        <td colspan="5"> RECORD NOT FOUND </td>
                    </tr>

                    <?php } ?>
            </table>
          </div>
            </div>

    
</body>
</html>