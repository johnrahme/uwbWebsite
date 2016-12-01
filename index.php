<?php
      include 'PHP/setup.php';
      setup("First page", "home", ""); 
     include $rootPath.'PHP/db_connect.php';
	 include $rootPath.'PHP/database.php';
     include $rootPath.'layout/header.php';
      include $rootPath.'layout/navbar.php';
     ?>
     <div class="container clear-top" style="box-shadow: 0px 0px 5px 2px #888888; background-color: #fff; padding: 18px">
     <div class="jumbotron">
        <h1>Welcome to the uwb website!</h1>
        <p><?php printFlights(); ?></p>
        <p>Do something fun by pressing the button below: </p>
         <a href = "<?php echo $baseDir; ?>/search"><button class = "btn btn-primary">Fun stuff</button></a>
      </div>

       
<!-- INSERT BODY HTML HERE END-->
<?php include $rootPath."layout/footer.php";?>
<!-- INSERT SCRIPTS HERE HERE START-->
	<script src = "<?php echo $rootPath.'js/custom/updatePositions.js';?>"></script>
	
	<script>
		getPosition("test", '<?php echo $rootPath.'PHP/Positions/latest.php';?>');
	</script

<!-- INSERT SCRIPTS HERE HERE END-->
<?php include $rootPath."layout/endHtml.php";?>