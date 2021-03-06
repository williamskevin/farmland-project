<!DOCTYPE html>

<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../public/css/bootstrap.css" rel="stylesheet"/>
        <link href="../public/css/styles.css" rel="stylesheet"/>
        <link rel="stylesheet" href="../public/css/font-awesome.css">                
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <?php 
          if(isset($css))
            echo '<link rel="stylesheet" href="'.$css.'"'. "/>";          
        ?>

        <?php if (isset($title)): ?>
            <title>Farmland-<?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Farmland</title>
        <?php endif ?>

        <script src="../public/js/jquery-1.10.2.min.js"></script>
        <script src="../public/js/bootstrap.min.js"></script>
        <?php 
          if(isset($script))
          {
              echo '<script type="text/javascript" src="'.$script.'"'. "</script>"; 
          }
        ?>
        <script src="../public/js/scripts.js"></script>
       

        <style type="text/css">
            #profile_pic
            {
                padding:5px;
                border-radius: 10px;
                cursor: pointer;
            }
        </style>
    </head>

    <body>  
            <?php
                $sql = "SELECT profile_picture FROM users WHERE user_id = ? LIMIT 1";
                $rows = query($sql,$_SESSION["id"]);

                if($rows[0] != null)
                {
                    $pp = $rows[0]["profile_picture"];
                }                              
                else
                    $pp = "img/profilePics/chappie.jpg";
            ?>           
            <nav class="navbar navbar-default navbar-static-top">
              <div class="container-fluid">
                <div class="navbar-header">
                  <a class="navbar-brand" href="../public/index.php">Dashboard</a>
                </div>
                <ul class="nav navbar-nav">
                  <li class="active"><a href="#">Home</a></li>
                  <li><a href="#">Page 1</a></li>
                  <li><a href="../public/sell.php">Sell</a></li>
                </ul>
                <form class="navbar-form navbar-left">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                  </div>
                  <button type="submit" class="btn btn-info">Submit</button>
                </form>
                <ul class="nav navbar-nav navbar-right">   
                  <li class="dropdown" style="padding:0px">                    
                    <img id = "profile_pic" src=<?php echo "'../public/".$pp."'"; ?> height="50px" width="70px" class="dropdown-toggle" data-toggle="dropdown" />
                    <ul class="dropdown-menu">                      
                      <li><a href="../public/profile.php"><img src="../public/img/user.png" height="25px" width="25px"><span>  View Profile</span></a></li>
                      <li><a href="#">Page 1-3</a></li>
                      <li><a href="../public/logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                    </ul>
                  </li>                 
                </ul>
              </div>
            </nav>

    <div class="container-fluid">
        <div class="row">