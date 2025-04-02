<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
  <!--begin::Sidebar Brand-->
  <div class="sidebar-brand">
    <!--begin::Brand Link-->
    <a href="{{ url('/home') }}" class="brand-link">
      <!--begin::Brand Icon-->
      <i class="bi bi-file-earmark-code fs-3 me-2"></i>
      <!--end::Brand Icon-->
      <!--begin::Brand Text-->
      <span class="brand-text fw-light">CAMP - 66</span>
      <!--end::Brand Text-->
    </a>

    <!--end::Brand Link-->
  </div>
  <!--end::Sidebar Brand-->
  <!--begin::Sidebar Wrapper-->
  <div class="sidebar-wrapper">
    <nav class="mt-2">
      <!--begin::Sidebar Menu-->
      <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{ url("/home") }}" class="nav-link">
            <i class="bi bi-house-fill"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ url("/product") }}" class="nav-link">
              <i class="bi bi-bag-plus"></i>
              <p>
                Add Product
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url("/user") }}" class="nav-link">
              <i class="bi bi-person-fill-gear"></i>
              <p>
                User Edit
              </p>
            </a>
          </li>
        </ul>
        <!--end::Sidebar Menu-->
    </nav>
  </div>
  <!--end::Sidebar Wrapper-->
</aside>