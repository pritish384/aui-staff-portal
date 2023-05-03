<?php

  if ($currentPage == 'index.php') {
    $index_navlink = 'nav-link active';
  }else{
    $index_navlink = 'nav-link';
  }

  if ($currentPage == 'casino.php') {
    $casino_navlink = 'nav-link active';
    $casino_navitem = 'nav-item menu-open';
  }else{
    $casino_navlink = 'nav-link';
    $casino_navitem = 'nav-item';
  }


?> 
 
 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a class="brand-link">
      <img src="https://images-ext-1.discordapp.net/external/KBqZkpjDeMredqOw2f0_F2OZvKeXdxm_TYCME2BYBHE/%3Fsize%3D1024/https/cdn.discordapp.com/avatars/1068531863469174876/1ae299e0049d3c9da8780f2f14af9fe8.webp?width=320&height=320" alt="AUI logo" class="brand-image" style="opacity: .8">
      <span class="brand-text font-weight-light">Among Us India</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo $avatar_url?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $name;?>#<?php echo $discriminator;?> </a>
        </div>
      </div>
      



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.php" class="<?php echo $index_navlink ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms (Coming soon)
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advanced Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Validation</p>
                </a>
              </li>
            </ul>
          </li>

           <li class="<?php echo $casino_navitem ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-robot"></i>
              <p>
                Bots
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="<?php echo $casino_navitem ?>">
                <a href="#" class="<?php echo $casino_navlink ?>">
                  <p>Casino Bot
                  <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="casino.php"  class="nav-link">
                      <p>General</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="casinoincome.php" class="nav-link">
                      <p>Income</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="casinoroleincome.php" class="nav-link">
                      <p>Role Income</p>
                    </a>
                </ul>
              </li>
            </ul>
          </li>

  
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
