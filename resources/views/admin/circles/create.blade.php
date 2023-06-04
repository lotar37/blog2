@extends('admin.layouts.main')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 mb-3">Добавление кружка</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('main.index') }}">На сайт</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Главная(ЛК)</a>
                            <li class="breadcrumb-item"><a href="{{ route('admin.circle.index') }}">Кружки</a></li>
                            <li class="breadcrumb-item active">Добавить кружок</li>

                        </ol>
                    </div><!-- /.col -->

                    <div class="col-12">
                        <form action="{{ route("admin.circle.store") }}" method="post"  enctype="multipart/form-data">
                            @csrf
                            <div class="form-group w-50">
                                <label for="exampleInputFile">Аватар</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="avatar">
                                        <label class="custom-file-label" >Выберите изображение</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузка</span>
                                    </div>
                                </div>
                                @error('avatar')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-4">
                                <label for="exampleInputEmail1">Название</label>
                                <input type="text" name="name" class="form-control"
                                       placeholder="Введите название кружка" value="{{ old('name') }}">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-4">
                                <label for="exampleInputEmail1">Ссылка на видео</label>
                                <input type="text" name="video_link" class="form-control"
                                       placeholder="Введите ссылку на видео" value="{{ old('video_link') }}">
                                @error('video_link')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        <div class="form-group col-12">
                            <textarea  name="description" class="col-12">{{ old('description') }}</textarea>
                            @error('description')
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
