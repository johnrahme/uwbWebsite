

<!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Uwb location tracking</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li <?php if($active == "home"){?>class="active"<?php } ?> ><a href="<?php echo $baseDir;?>">Home</a></li>
              <li <?php if($active == "runs"){?>class="active"<?php } ?> ><a href="<?php echo $baseDir;?>/runs">Runs</a></li>
              <li <?php if($active == "contact"){?>class="active"<?php } ?> ><a href="#" data-toggle="modal" data-target="#myModal">Contact</a>
                <!-- Button trigger modal --></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>