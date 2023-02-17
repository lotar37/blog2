@extends('admin.layouts.main')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 mb-3">Добавление страницы</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->

                    <div class="col-12">
                        <form action="{{ route("admin.page.store") }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group w-50">
                                <label for="exampleInputEmail1">Название в меню</label>
                                <input type="text" name="content" class="form-control"
                                       placeholder="Введите заголовок стариницы" value="{{ old('content') }}">
                                @error('content')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <label for="exampleInputEmail1">Заголовок</label>
                                <input type="text" name="title" class="form-control"
                                       placeholder="Введите заголовок стариницы" value="{{ old('title') }}">
                                @error('title')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <label for="exampleInputEmail1">Подзаголовок</label>
                                <input type="text" name="subtitle" class="form-control"
                                       placeholder="Введите подзаголовок(не обязательно)" value="{{ old('subtitle') }}">
                                @error('subtitle')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group w-100">
                                <label for="exampleInputFile">Добавить картинку</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="main_image">
                                        <label class="custom-file-label" for="exampleInputFile">Выберите изображение</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузка</span>
                                    </div>
                                </div>
                                @error('main_image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-12">
                                <label>Текст страницы:</label>
                                <textarea id="summernote" name="long_content" class="col-12">{{ old('long_content') }}</textarea>
                                @error('long_content')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group w-50">
                                <label for="exampleInputEmail1">Rout name</label>
                                <input type="text" name="route_name" class="form-control"
                                       placeholder="route name" value="{{ old('route_name') }}">
                                @error('route_name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Добавить">
                            </div>
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
