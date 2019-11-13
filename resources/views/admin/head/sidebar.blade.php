<nav class="sidebar">
  <div class="sidebar-header">
    <a href="{{ route('trade.home') }}" class="sidebar-brand">
      SA<span>A</span>
    </a>
    <div class="sidebar-toggler not-active">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="sidebar-body">
    <ul class="nav">
      <li class="nav-item nav-category">Main</li>
      <li class="nav-item">
        <a href="{{ route('trade.dashboard') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item nav-category">Users</li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#all" role="button" aria-expanded="false" aria-controls="emails">
          <i class="link-icon" data-feather="users"></i>
          <span class="link-title">All Users</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="all">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ route('all.users') }}" class="nav-link">List</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('add.users') }}" class="nav-link">Add</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a href="{{ route('activeUsers.index') }}" class="nav-link">
          <i class="link-icon" data-feather="user-plus"></i>
          <span class="link-title">Active Users</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('unsubcribed.index') }}" class="nav-link">
          <i class="link-icon" data-feather="user-minus"></i>
          <span class="link-title">InActive Users</span>
        </a>
      </li>
      <li class="nav-item nav-category">Subscribers</li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="link-icon" data-feather="align-justify"></i>
          <span class="link-title">Active Subscribers</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('unpaid.index') }}" class="nav-link">
          <i class="link-icon" data-feather="edit-2"></i>
          <span class="link-title">Inactive Subscribers</span>
        </a>
      </li>

      <li class="nav-item nav-category">QR Code</li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="link-icon" data-feather="slack"></i>
          <span class="link-title">View QR</span>
        </a>
      </li>
      <li class="nav-item nav-category">Admin</li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="link-icon" data-feather="align-justify"></i>
          <span class="link-title">List</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="link-icon" data-feather="edit-2"></i>
          <span class="link-title">Add</span>
        </a>
      </li>

      <li class="nav-item nav-category">Docs</li>
      <li class="nav-item">
        <a href="https://www.nobleui.com/html/documentation/docs.html" target="_blank" class="nav-link">
          <i class="link-icon" data-feather="hash"></i>
          <span class="link-title">Documentation</span>
        </a>
      </li>
    </ul>
  </div>
</nav>
