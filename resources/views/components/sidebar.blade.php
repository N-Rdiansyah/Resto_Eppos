<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Dashboard Resto</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html"> Eposs - Resto</a>
        </div>
        <ul class="sidebar-menu">

            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ url('dashboard-general-dashboard') }}">General Dashboard</a>
                    </li>
                </ul>

                <ul class="sidebar-menu">
                    <a href="#" class="nav-link has-dropdown">
                        <i class="fas fa-fire"></i><span>Users</span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="nav-link" href="{{ route('user.index') }}">All Users</a>
                        </li>
            </li>
        </ul>

        <ul class="sidebar-menu">
            <a href="#" class="nav-link has-dropdown">
                <i class="fas fa-fire"></i><span>Product</span></a>
            <ul class="dropdown-menu">
                <li>
                    <a class="nav-link" href="{{ route('products.index') }}">All Products</a>
                </li>
                </li>
            </ul>

            <ul class="sidebar-menu">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-fire"></i><span>Category</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('categories.index') }}">All Category</a>
                    </li>
                    </li>
                </ul>


    </aside>
</div>
