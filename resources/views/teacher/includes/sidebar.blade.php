<aside class="main-sidebar sidebar-dark-primary elevation-4">


    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{ route("teacher.main.index") }}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>{{$data['user']}}</p>
                </a>
            </li>
            @foreach($data['workload'] as $s_key=>$subject)
                <li class="nav-item">
                    <a href="" class="nav-link  {{$data['subject']["id"] == $s_key? " bg-success text-white bg-opacity-25" : ""}}">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>{{ $data['subjects']->find($s_key)->name}}</p>
                    </a>
                </li>

                @foreach($subject as $c_key=>$homework)
                    <li class="nav-item">
                        <a href="{{ route("teacher.homework.index", [$data['subjects']->find($s_key)->id, $data['classes']->find($homework["class_id"])->id]) }}" class="nav-link">
                            <i class="nav-icon fas fa-child fa-thin {{ (($data['school_class']['id'] == $homework['class_id']) and ($data['subject']['id'] == $homework['subject_id'])) ? ' text-success text-bold' : '' }}"></i>
                            <p class="{{ (($data['school_class']['id'] == $homework['class_id']) and ($data['subject']['id'] == $homework['subject_id'])) ? ' text-success text-bold' : '' }}">{{ $data['classes']->find($homework["class_id"])->name}}
                                </p>
                        </a>
                    </li>

                @endforeach
            @endforeach
        </ul>
    </div>

    <!-- /.sidebar -->
</aside>
