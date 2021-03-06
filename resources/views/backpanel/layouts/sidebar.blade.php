<div class="sidebar" data-color="purple" data-background-color="white">
    <div class="logo">
        <a href="#" class="simple-text logo-mini">
            CT
        </a>
        <a href="#" class="simple-text logo-normal">
            Admin
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('backpanel.dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('backpanel/category*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('category.index') }}">
                    <i class="material-icons">all_inbox</i>
                    <p>Categories</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('backpanel/post*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('post.index') }}">
                    <i class="material-icons">article</i>
                    <p>Posts</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('backpanel/role*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('role.index') }}">
                    <i class="material-icons">group_work</i>
                    <p>Roles</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('backpanel/user*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('user.index') }}">
                    <i class="material-icons">face</i>
                    <p>Users</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('backpanel/permission*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('permission.index') }}">
                    <i class="material-icons">lock</i>
                    <p>Permission</p>
                </a>
            </li>
            <!-- your sidebar here -->
        </ul>
    </div>
</div>
