@extends('admin.layouts.main')

@section('content')

    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 mb-3">Страницы</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}"><i class="nav-icon fas fa-home"></i></a></li>
                        <li class="breadcrumb-item active">Посты</li>

                </div><!-- /.col -->
                <div class="col-2">
                    <a class="btn btn-block btn-outline-secondary" href="{{route("admin.page.create")}}">
                                Добавить
                    </a>
                </div>

            </div><!-- /.row -->
            <div class="row">
                <div class="w-100">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>В меню</th>
                                    <th>Название страницы</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($pages as $page)
                                <tr>
{{--                                    <td>{{ $page->id }}</td>--}}
                                    <td>{{ $page->content }}</td>
                                    <td><a href="{{ route("main.".$page->route_name) }}">{{ $page->title }}</a></td>
                                    <td class="d-flex">
                                        <a href="{{ route("main.".$page->route_name) }}" class="btn btn-outline-secondary mr-1">Перейти</a>
                                        <a href="{{ route("admin.page.edit", $page->id) }}" class="btn btn-outline-secondary">Изменить</a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
