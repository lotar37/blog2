<aside class="main-sidebar sidebar-dark-primary elevation-4">


    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->




            <li class="nav-item {{ strpos(Route::currentRouteName(),"summer_reading") > 0 ? "menu-is-opening menu-open" : "" }}">
                <a href="#" class="nav-link">
                    <i class="nav-icon far fas fa-book-open text-warning"></i>
                    <p class="text-warning">
                        Читать летом
{{--                        <span class="left badge badge-danger ml-1">New</span>--}}
                        <i class="fas fa-angle-left right text-warning"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview" style="{{ strpos(Route::currentRouteName(),"summer_reading") > 0 ? "inline" : "display: none;" }}">
                    @foreach($class_db as $class)
                    <li class="nav-item">
                        <a href="{{ route("admin.summer_reading.edit",$class->id) }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Класс {{ $class->name }}</p>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </li>
            <li class="nav-item">
                <a href="{{ route("admin.main.index") }}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>Главная</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route("admin.user.index") }}" class="nav-link">
                    {{--                    <i class="nav-icon fas fa-message-plus fa-solid"></i>--}}
                    <i class="nav-icon  fas  fa-users"></i>
                    <p>Пользователи</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route("admin.post.index") }}" class="nav-link">
                    {{--                    <i class="nav-icon fas fa-message-plus fa-solid"></i>--}}
                    <i class="nav-icon  far  fa-clipboard"></i>
                    <p>Новости</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route("admin.category.index") }}" class="nav-link">
                    <i class="nav-icon far fa-list-alt"></i>
                    <p>Категории</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route("admin.subject.index") }}" class="nav-link">
                    <i class="nav-icon fas fa-graduation-cap"></i>
                    <p>Предметы</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route("admin.tag.index") }}" class="nav-link">
                    <i class="nav-icon fas fa-tags"></i>
                    <p>Тэги</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route("admin.report.index") }}" class="nav-link">

                    <i class="nav-icon fas fa-user-plus"></i>
                    <p>Отзывы</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route("admin.page.index") }}" class="nav-link">
                    <i class="nav-icon fas far fa-sitemap"></i>
                    <p>Страницы сайта</p>
{{--                   <span class="right badge badge-danger">New</span>--}}
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route("admin.answer.index") }}" class="nav-link">
                    <i class="nav-icon fas far fa-question"></i>

                    <p>ЧАВО</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route("admin.circle.index") }}" class="nav-link">
                    <i class="nav-icon fas far fa-record-vinyl"></i>

                    <p>Кружки</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route("admin.project.index") }}" class="nav-link">
                    <i class="nav-icon fas far fa-project-diagram"></i>

                    <p>Проекты</p><span class="right badge badge-danger">New</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route("admin.doc.index") }}" class="nav-link">
                    <i class="nav-icon fas far fa-file"></i>

                    <p>Документы</p><span class="right badge badge-danger">New</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route("admin.userSubjectClass.index") }}" class="nav-link">
                    <i class="nav-icon fas far fa-briefcase"></i>

                    <p>Нагрузка учителей</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route("admin.view.count") }}" class="nav-link">
                    <i class="nav-icon fas far fa-briefcase"></i>

                    <p>Обновить просмотры({{ $visit_counts }})</p>
                </a>
            </li>

        </ul>
    </div>
    <!-- /.sidebar -->
</aside>
