@extends('admin.layouts.main')

@section('content')

    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 mb-3">Редактирование пользователя</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->

                <div class="col-12">
                    <form action="{{ route('admin.user.update', $user->id) }}" method="POST" class="col-4">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="exampleInputEmail1">Название</label>
                            <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Введите название категории">
                            @error('name')
                            <div class="text-danger">Это поле необходимо для заполнения</div>
                            @enderror
                        </div>
                        <input type="submit" class="btn btn-primary" value="Обновить">
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
