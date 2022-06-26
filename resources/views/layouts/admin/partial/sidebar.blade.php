<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="@route('admin.dashboard')">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-category" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Category</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-category" class="nav-content collapse " data-bs-parent="#sidebar-category">
          <li>
            <a href="@route('admin.category.index')">
              <i class="bi bi-circle"></i><span>List Of Category</span>
            </a>
          </li>
          <li>
            <a href="@route('admin.category.create')">
              <i class="bi bi-circle"></i><span>Create Of Category</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->



      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-division" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Division</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-division" class="nav-content collapse " data-bs-parent="#sidebar-division">
          <li>
            <a href="@route('admin.location.division')">
              <i class="bi bi-circle"></i><span>List Of Division</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-district" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Districts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-district" class="nav-content collapse " data-bs-parent="#sidebar-district">
          <li>
            <a href="@route('admin.location.districts')">
              <i class="bi bi-circle"></i><span>List Of Districts</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-Property" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Property</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-Property" class="nav-content collapse " data-bs-parent="#sidebar-Property">
          <li>
            <a href="@route('admin.property.index')">
              <i class="bi bi-circle"></i><span>List Of Property</span>
            </a>
          </li>

          <li>
            <a href="@route('admin.property.create')">
              <i class="bi bi-circle"></i><span>Create Of Property</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-contact" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Contacts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-contact" class="nav-content collapse " data-bs-parent="#sidebar-contact">
          <li>
            <a href="@route('admin.contact')">
              <i class="bi bi-circle"></i><span>List Of Contacts</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-logut" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Logout</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-logut" class="nav-content collapse " data-bs-parent="#sidebar-logut">
          <li>
            <a href="@route('admin.logout')">
              <i class="bi bi-circle"></i><span>List Of Logout</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->
    </ul>

  </aside>
