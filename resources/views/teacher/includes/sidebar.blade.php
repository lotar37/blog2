<aside class="main-sidebar sidebar-dark-primary elevation-4">


    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{ route("admin.main.index") }}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>Главная</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>{{ $data['postsCount'] }}</p>
                </a>
            </li>
            @foreach($data['workload'] as $s_key=>$subject)
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>{{ $data['subjects'][$s_key]["name"]}}</p>
                    </a>
                </li>
                @foreach($subject as $c_key=>$classes)
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="nav-icon fas fa-home"></i>
                            <p>{{ $data['classes'][$c_key]["name"]}}</p>
                        </a>
                    </li>

                @endforeach
            @endforeach
        </ul>
    </div>

    <!-- /.sidebar -->
</aside>
