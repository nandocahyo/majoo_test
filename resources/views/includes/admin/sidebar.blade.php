   <!-- Sidebar -->
   <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
  <div class="sidebar-brand-text mx-3">Majoo Store</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Order Manajemen
</div>

<!-- Nav Item - Grooming Order -->
<li class="nav-item {{ Request::path() === 'admin/order' ? 'active' : ''}}">
  <a class="nav-link" href="{{ route('order.index') }}">
    <i class="fas fa-fw fa-shopping-cart"></i>
    <span>Order Management</span></a>
</li>


<!-- Nav Item - Pet Boarding Order -->
<li class="nav-item {{ Request::path() === 'admin/product' ? 'active' : ''}}">
  <a class="nav-link" href="{{ route('product.index') }}">
    <i class="fas fa-fw fa-box"></i>
    <span>Product Management</span></a>
</li>



<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->