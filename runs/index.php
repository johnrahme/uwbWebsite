<?php
      include "../PHP/setup.php";
      //Setup title, active and number of subfolders
      setup("Runs", "runs","../");
      include $rootPath.'PHP/db_connect.php';
	  include $rootPath.'PHP/database.php';
     include $rootPath.'layout/header.php';
     include $rootPath.'layout/navbar.php';
?>
<!-- INSERT BODY HTML HERE START-->
<div class="container clear-top" style="box-shadow: 0px 0px 5px 2px #888888; background-color: #fff; padding: 18px">
    <h1>Select your run to the right</h1>
    <div class = "row">
        <div class = "col-md-8">
            <div class = "panel panel-default">
                <div class = "panel-body">
                    <div id="imageContainer" align = "middle">
                        <div id="dot" style="position: absolute; width: 20px; height:20px;background-color: #000000"></div>
                        <img id="image" align="middle" src="https://s-media-cache-ak0.pinimg.com/564x/d9/cd/60/d9cd60c5a7687ff39fb226b55f1dbb1f.jpg" class="img-responsive" alt="Cinque Terre">
                    </div>
                    <button type="button" onclick="startRun()" class = "btn btn-success">Start</button>
                    <button type="button" onclick="stopRun()" class = "btn btn-danger">Stop</button>
                </div>
            </div>
        </div>
        <div class = "col-md-4">
            <div class="panel panel-default">
                <div class="panel-body" style="padding-top: 0">
                    <div class="page-header">
                        <h4 class="text-center">Latest runs</h4>
                    </div>
                    <div class="list-group">
                        <a href="http://alumn.futf.se/event/1" class="list-group-item">
                            <div class="list-group-item-heading">
                                <h4>Latest run</h4>
                                <small>2015-03-02 At 04:01</small>
                            </div>
                            <p>Siggesalen</p>
                            <p id = "test">test</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- INSERT BODY HTML HERE END-->
<?php include $rootPath."layout/footer.php";?>
<!-- INSERT SCRIPTS HERE HERE START-->
<script src = "<?php echo $rootPath.'js/custom/runRecent.js';?>"></script>
<script>
    setSelected(1);
    getSession(20, '<?php echo $rootPath.'PHP/Positions/getSession.php';?>');
</script>

<!-- INSERT SCRIPTS HERE HERE END-->
<?php include $rootPath."layout/endHtml.php";?>