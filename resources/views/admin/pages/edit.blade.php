@extends('admin.layouts.main')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 mb-3">Редактирование страницы</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->

                    <div class="col-12">
                        <form action="{{ route("admin.page.update", $page->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group w-50">
                                <label for="exampleInputEmail1">Название в меню</label>
                                <input type="text" name="content" class="form-control" disabled
                                       placeholder="Название страницы в главном меню" value="{{ $page->content }}">
                                @error('content')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <label for="exampleInputEmail1">Заголовок</label>
                                <input type="text" name="title" class="form-control"
                                       placeholder="Введите заголовок" value="{{ $page->title }}">
                                @error('title')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <label for="exampleInputEmail1">Подзаголовок</label>
                                <input type="text" name="subtitle" class="form-control"
                                       placeholder="Введите подзаголовок" value="{{ $page->subtitle }}">
                                @error('subtitle')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group w-100">
                                <label for="exampleInputFile">Главное изображение</label>
                                <div class="">
                                    <img src="{{ asset("storage/" . $page->main_image) }}" alt="main_image" class="w-75 mb-2">
                                </div>
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
                                <textarea id="summernote" name="long_content" class="col-12">{{ $page->long_content }}</textarea>
                                @error('long_content')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>




                            <div class="form-group w-50">
                                <label for="exampleInputEmail1">Route name</label>
                                <input type="text" name="route_name" class="form-control "
                                       placeholder="route name" value="{{ $page->route_name }}">
                                @error('route_name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                             <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Сохранить">
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
