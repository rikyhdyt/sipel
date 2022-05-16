 <!-- Nav Item - Dashboard -->
 <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('home')?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Beranda</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu
      </div>
      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-database"></i>
          <span>Manajemen Data</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menu</h6>
            <a class="collapse-item" href="<?php echo site_url('komoditi')?>">Komoditi</a>
            <a class="collapse-item" href="<?php echo site_url('mitra')?>">Mitra</a>
            <a class="collapse-item" href="<?php echo site_url('gudang')?>">Gudang</a>
            <a class="collapse-item" href="<?php echo site_url('operator')?>">Operator</a>
          </div>
        </div>
      </li>
      
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo site_url('pesanan')?>">
          <i class="fas fa-fw fa-cart-plus"></i>
          <span>Penjualan</span></a>
      </li>

      <li class="nav-item  active ">
        <a class="nav-link" href="<?php echo site_url('nota')?>">
          <i class="fas fa-fw fa-file"></i>
          <span>Nota</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('rekap')?>">
          <i class="fas fa-fw fa-book"></i>
          <span>Rekap</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>