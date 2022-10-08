<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="/">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="/reviews">
      <i class="bi bi-menu-button-wide"></i><span>Reviews</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ url('reviews') }}">
          <i class="bi bi-circle"></i><span>All</span>
        </a>
      </li>
      <li>
        <a href="{{ url('reviews?publ=yes') }}">
          <i class="bi bi-circle"></i><span>Published</span>
        </a>
      </li>
      <li>
        <a href="{{ url('reviews?publ=no') }}">
          <i class="bi bi-circle"></i><span>Unpublished</span>
        </a>
      </li>
    </ul>
  </li>
  
  <li class="nav-item">
    <a class="nav-link " href="/customers">
      <i class="bi bi-grid"></i>
      <span>Customers</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link " href="/products">
      <i class="bi bi-grid"></i>
      <span>Products</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link " href="/settings">
      <i class="bi bi-grid"></i>
      <span>Settings</span>
    </a>
  </li>

</ul>

</aside><!-- End Sidebar-->
