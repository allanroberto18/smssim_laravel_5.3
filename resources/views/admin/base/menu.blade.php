<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="header">Navegação</li>
            <li>
                <a href="{{ route('admin.home') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>Usuários</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-list-ul"></i> Listar/Pesquisar
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.users.create') }}">
                            <i class="fa fa-plus"></i> Novo Registro
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-archive"></i>
                    <span>Produtos/Serviços</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ route('admin.services.index') }}">
                            <i class="fa fa-list-ul"></i> Listar/Pesquisar
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.services.create') }}">
                            <i class="fa fa-plus"></i> Novo Registro
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-money"></i>
                    <span>Contratos</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ route('admin.contracts.index') }}">
                            <i class="fa fa-list-ul"></i> Listar/Pesquisar
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.contracts.create') }}">
                            <i class="fa fa-plus"></i> Novo Registro
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out"></i> <span>Sair</span>
                </a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>