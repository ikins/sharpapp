<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-teal elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url(); ?>" class="brand-link brand-link-nav">
      <img src="<?= base_url(); ?>assets/images/AdminLTELogo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">id.sharp</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?= base_url(); ?>feedback" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Feedback
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url(); ?>game" class="nav-link">
              <i class="nav-icon fas fa-list-ul"></i>
              <p>
                Game
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url(); ?>visitor-product" class="nav-link">
              <i class="nav-icon fas fa-list-ol"></i>
              <p>
                Visitor Product
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url(); ?>visitor-buy" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Visitor Buy
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url(); ?>visitor-event-live" class="nav-link">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>
                Visitor Event & Live Shopee
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Visitor
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url(); ?>visitor-daily" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Visitor Daily</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url(); ?>visitor-daily-history" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Visitor Daily History</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>