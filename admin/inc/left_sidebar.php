

<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <!-- <li class="nav-item nav-category">Controls</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="notice-control.php" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">Notice</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="">Basic Elements</a></li>
              </ul>
            </div>
          </li> -->
          
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#Control" aria-expanded="false" aria-controls="Control">
              <i class="menu-icon mdi mdi-plus-circle-outline"></i>
              <span class="menu-title">Notice</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="Control">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="notice-add.php">Add Notice</a></li>
                <li class="nav-item"> <a class="nav-link" href="notice-list.php">Notice List</a></li>
              </ul>
            </div>
          </li>
          
           <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#OurTeam" aria-expanded="false" aria-controls="OurTeam">
              <i class="menu-icon mdi mdi-plus-circle-outline"></i>
              <span class="menu-title">Our Team</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="OurTeam">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="team-add.php">Add Employee</a></li>
                <li class="nav-item"> <a class="nav-link" href="team-list.php">Employee List</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#Citizen" aria-expanded="false" aria-controls="Citizen">
              <i class="menu-icon mdi mdi-plus-circle-outline"></i>
              <span class="menu-title">Gallary</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="Citizen">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="gallary-add.php">Add Gallary</a></li>
                <li class="nav-item"> <a class="nav-link" href="gallary-list.php">Full Gallary</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#Principal" aria-expanded="false" aria-controls="Principal">
              <i class="menu-icon mdi mdi-plus-circle-outline"></i>
              <span class="menu-title">Principal</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="Principal">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="">Add Principal</a></li>
                <li class="nav-item"> <a class="nav-link" href="">Principal List</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#Trade" aria-expanded="false" aria-controls="Trade">
              <i class="menu-icon mdi mdi-plus-circle-outline"></i>
              <span class="menu-title">Trade</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="Trade">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="">Add Trade</a></li>
                <li class="nav-item"> <a class="nav-link" href="">Trade List</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item nav-category">Setting</li>
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="menu-icon mdi mdi-settings"></i>
              <span class="menu-title">Settings</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?sign_out=<?php echo $Admin; ?>">
              <i class="menu-icon mdi mdi-logout"></i>
              <span class="menu-title">Log Out</span>
            </a>
          </li>
        </ul>
      </nav>