 <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
    
    <a class="navbar-brand "><img src="<?php echo base_url('/assets/logo_wiShoes_putih.png') ?>" style="width: 15%;height: 10%;"></a>
    <button class="btn btn-link btn-sm text-white order-1 order-sm-0 " id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    

    <!-- Navbar -->
    <ul class="navbar-nav">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          
          <a class="dropdown-item" href="#"><?php echo $_SESSION['email'] ?></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo site_url('/CheckLogin/logout') ?>">Logout</a>
        </div>
      </li>
    </ul>

  </nav>