<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
  <div class="sidebar-brand-icon">
    <i class="fas fa-home"></i>
  </div>
  <div class="sidebar-brand-text mx-3">MSI-KOST</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<?php if($menu == 'profil'): ?>
<li class="nav-item active">
  <a class="nav-link" href="<?= base_url('admin/settingsprofil'); ?>">
    <i class="fas fa-fw fa-user"></i>
    <span>Profil</span></a>
</li>
<?php else: ?>
    <li class="nav-item">
  <a class="nav-link" href="<?= base_url('admin/settingsprofil'); ?>">
    <i class="fas fa-fw fa-user"></i>
    <span>Profil</span></a>
</li>
<?php endif; ?>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Pengaturan
</div>


<?php if($menu == 'info_kost'): ?>
<!-- Nav Item - Tables -->
<li class="nav-item active">
  <a class="nav-link" href="<?= base_url('admin/settingsinfokost'); ?>">
    <i class="fas fa-fw fa-home"></i>
    <span>Informasi Kost</span></a>
</li>
<?php else: ?>
<li class="nav-item">
  <a class="nav-link" href="<?= base_url('admin/settingsinfokost'); ?>">
    <i class="fas fa-fw fa-home"></i>
    <span>Informasi Kost</span></a>
</li>
<?php endif; ?>

<?php if($menu == 'rubah_pass'): ?>
<li class="nav-item active">
  <a class="nav-link" href="<?= base_url('admin/settingspassword'); ?>">
    <i class="fas fa-fw fa-key"></i>
    <span>Rubah Password</span></a>
</li>
<?php else : ?>
<li class="nav-item">
  <a class="nav-link" href="<?= base_url('admin/settingspassword'); ?>">
    <i class="fas fa-fw fa-key"></i>
    <span>Rubah Password</span></a>
</li>
<?php endif; ?>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
  <a class="nav-link" href="<?= base_url('admin'); ?>">
    <i class="fas fa-fw fa-arrow-circle-left"></i>
    <span>Kembali ke Dashboard</span></a>
</li>

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->