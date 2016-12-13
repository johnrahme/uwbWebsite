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
        <h2>Welcome to our Ultra wide band project!</h2>
        <p id = "currentPos"></p>
        <p>Below you can see the current run live </p>
        <!-- <a href = "<?php echo $baseDir; ?>/search"><button class = "btn btn-primary">Fun stuff</button></a>-->
      </div>
         <div id="imageContainer" align = "middle">
             <img id="dot" style="position: absolute; width: 40px; height:40px;" src="<?php echo $rootPath.'img/personIcon.png'?>" class="img-responsive" alt="Cinque Terre" >
             <img id="image" align="middle" class="img-responsive" alt="Loading current run">
         </div>
    </div>

       
<!-- INSERT BODY HTML HERE END-->
<?php include $rootPath."layout/footer.php";?>
<!-- INSERT SCRIPTS HERE HERE START-->
	<script src = "<?php echo $rootPath.'js/custom/updatePositions.js';?>"></script>
	
	<script>

        setInterval(updatePosition, 200);


        function updatePosition() {
            getPosition("test", '<?php echo $rootPath.'PHP/Positions/latest.php';?>');
        }

	</script

<!-- INSERT SCRIPTS HERE HERE END-->
<?php include $rootPath."layout/endHtml.php";?>