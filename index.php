<?php
      include 'PHP/setup.php';
      setup("First page", "home", ""); 
      //include $rootPath.'PHP/db_connect.php';
      //$baseDir = "/public_html";
      //For server
      //$baseDir = "/~jorahme";
     include $rootPath.'layout/header.php';
    ?>
    
    
      <!-- Static navbar -->
    <?php
      include $rootPath.'layout/navbar.php';
     ?>
     <div class="container clear-top" style="box-shadow: 0px 0px 5px 2px #888888; background-color: #fff; padding: 18px">
     <div class="jumbotron">
        <h1>Welcome to the uwb website!</h1>
        <p>This website will surely blow your mind big time!</p>
        <p>Do something fun by pressing the button below: </p>
         <a href = "<?php echo $baseDir; ?>/search"><button class = "btn btn-primary">Fun stuff</button></a>
      </div>

       
    <?php 
    include $rootPath."layout/footer.php";
    ?>
    <?php include $rootPath."layout/endHtml.php" ?>