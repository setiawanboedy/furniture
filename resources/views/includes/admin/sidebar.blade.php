    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="{{ request()->is('admin') ? 'active' : '' }}">
                        <a href="{{ route('dashboard') }}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="{{ request()->is('admin/product') ? 'active' : '' }}">
                        <a href="{{ route('product.index') }}"><i class="menu-icon fa fa-home"></i>Produk </a>
                    </li>
                    <li class="{{ request()->is('admin/gallery') ? 'active' : '' }}">
                        <a href="{{ route('gallery.index') }}"><i class="menu-icon fa fa-picture-o"></i>Galeri </a>
                    </li>
                    <li class="{{ request()->is('admin/transaction') ? 'active' : '' }}">
                        <a href="{{ route('transaction.index') }}"><i class="menu-icon fa fa-money"></i>Transaksi </a>
                    </li>
                    <li class="{{ request()->is('admin/suplier-admin') ? 'active' : '' }}">
                        <a href="{{ route('suplier-admin.index') }}"><i class="menu-icon fa fa-file-text-o"></i>Laporan </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
