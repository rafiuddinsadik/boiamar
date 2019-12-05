<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.dashboard')}}" class="brand-link">
        <img src="{{asset('adminComponents/img/admin_logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Boi Amar | Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('adminComponents/img/admin_avatar.png')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{route('admin.dashboard')}}" class="d-block">{{auth()->user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">Main</li>
                <li class="nav-item">
                    <a href="{{route('admin.dashboard')}}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.books')}}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Books
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.posts')}}" class="nav-link">
                        <i class="nav-icon fas fa-sticky-note"></i>
                        <p>
                            Posts
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.authors')}}" class="nav-link">
                        <i class="nav-icon fas fa-pen"></i>
                        <p>
                            Authors
                        </p>
                    </a>
                </li>
                <li class="nav-header">Utilities</li>
                <li class="nav-item">
                    <a href="{{route('categories')}}" class="nav-link">
                        <i class="nav-icon fas fa-list-alt"></i>
                        <p>
                            Categories
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link disabled">
                        <i class="nav-icon fas fa-list-alt"></i>
                        <p>
                            Sub Categories
                        </p>
                    </a>
                </li>
                <li class="nav-header">Management</li>
                <li class="nav-item">
                    <a href="{{route('admin.users')}}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Admins
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<style>
    a.disabled {
        pointer-events: none;
        cursor: default;
    }
</style>