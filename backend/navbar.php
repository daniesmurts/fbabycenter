  <!-- <nav class="navbar navbar-toggleable-sm navbar-inverse bg-inverse ">

  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> 
  <a class="navbar-brand" href="home.php">Florence Baby Centre LTD</a>

  <div class="collapse navbar-collapse" id="navbar"> 
    <div class="navbar-nav mx-auto">   
          <li class="nav-item">
            <a class="nav-link welcome" href="#"> Welcome <?php echo  $_SESSION['username']; ?> !</a>
          </li>  
    </div> 
 

    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
    <img  width="60" height="60"  class="rounded-circle" src="assets/posted_images<?php echo  $_SESSION['cover']; ?>">
                                
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="logout.php">Sign out</a> 
        </div>
      </li>
    </ul> 


  </div>
</nav> -->






<nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">

                    <!-- <button type="button" id="sidebarCollapse" class="btn btn-info3">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button> -->
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">.</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">.</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">.</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="login/logout.php">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>


