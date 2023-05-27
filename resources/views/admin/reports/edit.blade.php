@extends('admin.layouts.main')

@section('content')

    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 mb-3">Редактирование отзыва</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('main.index') }}">На сайт</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Главная(ЛК)</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.report.index') }}">Отзывы</a></li>
                        <li class="breadcrumb-item active">Редактировать отзыв</li>
                    </ol>
                </div><!-- /.col -->

                <div class="col-lg-12">
                    <form action="{{ route('admin.report.update', $report->id) }}" method="POST" class="col-12"  enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group w-50">
                            <label for="exampleInputFile">Аватар</label>
                            <div class="">
                                <img src="{{ asset("storage/" . $report->avatar) }}" alt="avatar" class="w-25 mb-2">
                            </div>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="avatar">
                                    <label class="custom-file-label" for="exampleInputFile">Выберите изображение</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Загрузка</span>
                                </div>
                            </div>
                            @error('avatar')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Автор</label>
                            <input type="text" name="person" value="{{ $report->person }}" class="form-control" placeholder="Введите название категории">
                            @error('title')
                            <div class="text-danger">Это поле необходимо для заполнения</div>
                            @enderror
                        </div>
                        <div class="form-group col-lg-4">
                            <label>Дата отзыва:</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input type="text" name='date' class="form-control datetimepicker-input w-25"
                                       data-target="#reservationdate" value="{{ $report->date }}" autocomplete="off">
                                    <div class=" input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>

                            </div>
                            @error('date')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        </div>
                        <div class="form-group col-12">
                            <label>Отзыв:</label>
                            <textarea name="content" id='summernote' class="col-12">{{ $report->content }}</textarea>
                            @error('content')
                            <div class="text-danger">{{ $message }}</div>
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
