@extends('admin.layouts.main')

@section('content')

    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 mb-3">Добавление пользователя</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->

                <div class="col-12">
                    <form action="{{ route("admin.user.store") }}" method="post" class="col-4">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Имя</label>
                            <input type="text" name="name" class="form-control" placeholder="Введите имя пользователя">
                            @error('name')
                            <div class="text-danger">Это поле необходимо для заполнения</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">email</label>
                            <input type="text" name="email"  class="form-control" placeholder="Введите email">
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Пароль</label>
                            <input type="text" name="password"  class="form-control" placeholder="Введите пароль">
                            @error('password')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <input type="submit" class="btn btn-primary" value="Добавить">
                    </form>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
