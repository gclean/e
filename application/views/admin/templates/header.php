<header class="main-header">
  <!-- Logo -->
  <a href="<?= base_url() ?>admin" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>GC</b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Go</b>Clean</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Messages: style can be found in dropdown.less-->

        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <?php if (isset($_SESSION['username'])) { ?>
              <img src="<?= base_url('assets/back/') ?>dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Hi, <?= ($_SESSION['username']) ?></span>
          </a>
        <li><a href="<?= base_url() ?>admin/login/auth/logout">Logout </a></li>
      <?php } else { ?>
        <li><a href="<?= base_url(); ?>admin/login/auth/index">Log In </a></li>
      <?php } ?>
      </li>
      <!-- Control Sidebar Toggle Button -->

      </ul>
    </div>
  </nav>
</header>