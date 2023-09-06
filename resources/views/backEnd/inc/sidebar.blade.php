<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Academic Session</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('academic-session.create')}}">
              <i class="bi bi-circle"></i><span>Add New Session</span>
            </a>
          </li>

          <li>
            <a href="{{route('academic-session.index')}}">
              <i class="bi bi-circle"></i><span>Session List</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#course-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Course</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="course-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('course.create')}}">
              <i class="bi bi-circle"></i><span>Add New Course</span>
            </a>
          </li>

          <li>
            <a href="{{route('course.index')}}">
              <i class="bi bi-circle"></i><span>Course List</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#academic-year-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Academic Year</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="academic-year-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('academic-year.create')}}">
              <i class="bi bi-circle"></i><span>Add New Academic Year</span>
            </a>
          </li>

          <li>
            <a href="{{route('academic-year.index')}}">
              <i class="bi bi-circle"></i><span>Academic Year List</span>
            </a>
          </li>
        </ul>
      </li>

    </ul>

  </aside>