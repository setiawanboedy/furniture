    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="{{ request()->is('suplier') ? 'active' : '' }}">
                        <a href="{{ route('suplier-dashboard') }}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
