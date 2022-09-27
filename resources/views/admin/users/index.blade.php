@extends('admin.layouts.main')

@section('content')

    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 mb-3">Пользователи</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
                <div class="col-2">
                    <a class="btn btn-block btn-primary" href="{{route("admin.user.create")}}">
                                Добавить
                    </a>
                </div>

            </div><!-- /.row -->
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Название</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route("admin.user.show", $user->id) }}"><i class="fa-eye far"></i></a>
                                        <a href="{{ route("admin.user.edit", $user->id) }} " class="text-success    "><i class="ml-2 fa-pencil-alt fas"></i></a>
                                        <form action="{{route('admin.user.delete', $user->id)}}" method="post" >
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="border-0 bg-white">
                                            <i class="ml-2 fa-trash fas text-danger" role="button"></i>
                                        </button>
                                        </form>
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
