<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dasboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            My Profile
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dasboard/akun') ? 'active' : '' }}" href="/dashboard/settings">
            <span data-feather="settings"></span>
            Settings
          </a>
        </li>
      </ul>
    </div>
  </nav>
  