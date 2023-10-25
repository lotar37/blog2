@extends('teacher.layouts.main')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 mb-3">Редактирование ДЗ</h1>
                        <h4 class="m-0 mb-3">{{ $data['subject']->name }}({{ $data['school_class']->name }})</h4>

                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">На сайт</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('teacher.main.index') }}">Главная ЛК</a></li>
                            <li class="breadcrumb-item active">Редактирование ДЗ</li>
                        </ol>
                    </div><!-- /.col -->

                    <div class="col-12">
                        <form action="{{ route("teacher.homework.update", $homework->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group w-50">
                                <div class="row">
                                    <div class="col">
                                        <label>Тема</label>:</label>
                                <input type="text" name="title" class="form-control"
                                       placeholder="Введите тему" value="{{ $homework->title }}">

                                    </div>
                                    <div class="col">
                                        <label>На дату</label>:</label>
                                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                            <input type="text" name="set_for_date"  value="{{ $homework->set_for_date }}" class="form-control datetimepicker-input" data-target="#reservationdate">
                                            <div class="input-group-append"   data-target="#reservationdate" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>

                                        </div>
                                    </div>

                                </div>


                                @error('title')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                                <input type="hidden" name="subject_id" value="{{ $homework->subject_id }}">
                            <input type="hidden" name="class_id" value="{{ $homework->class_id }}">
                            <input type="hidden" name="user_id" value="{{ $homework->user_id  }}">
                            @error('subject_id')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            @error('class_id')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror


                            <div class="form-group col-12">
                                <label>Содержание:</label>
                                <textarea id="summernote" name="content" class="col-12">{{ $homework->content }}</textarea>
                                @error('content')
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
