@extends('admin.layouts.main')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 mb-3">Нагрузка</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Главная</a></li>
                            <li class="breadcrumb-item active">Нагрузка</li>
                        </ol>
                    </div><!-- /.col -->
                    <div class="col-2">
                        <a class="btn btn-block btn-outline-primary" href="{{route("admin.userSubjectClass.create")}}">
                            Добавить
                        </a>
                    </div>

                </div><!-- /.row -->


                <!-- /.card-header -->


                <div class="row bg-secondary p-2">
                    <div class="col-4">Учитель</div>
                    <div class="col-8">Нагрузка</div>

                </div>
                @foreach($data as $kt=>$subjs)
                    <div class="row  my-1 border-bottom">

                        <div class="col-4">{{ $teachers->find($kt)->name }}</div>
                        <div class="col-8">
                            @foreach($subjs as $ks=>$sclasses)
                                <div class="row">
                                    <div class="col">{{ $subjects->find($ks)->name }}</div>
                                    <div class="col">|
                                        @foreach($sclasses as $class_id)
                                            {{ $classes->find($class_id)->name." | " }}
                                        @endforeach
                                    </div>
                                    <div class="col d-flex">
                                        <a href="{{ route("admin.userSubjectClass.edit", [ $kt, $ks]) }} "
                                           class="btn btn-outline-secondary mr-1 mb-1">Изменить</a>
                                        <form action="{{route('admin.userSubjectClass.delete',[ $kt, $ks])}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-outline-secondary">Удалить
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach


                        </div>

                    </div>
                @endforeach

                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

@endsection
