@extends('admin.layouts.main')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                        <h1 class="m-0 mb-3">{{ $data['subject']->name }} для перешедших в {{ $data['class']->name }} класс</h1>

                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">На сайт</a></li>
                            <li class="breadcrumb-item active">{{ $data['subject']->name }} : {{ $data['class']->name }}</li>
                        </ol>
                    </div><!-- /.col -->

                    <div class="col-12">
                        <form action="{{ route("admin.summer_reading.update", $data['class']->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group w-50">
                                <div class="row">
                                    <div class="col">
{{--                                        <label>Тема</label>:</label>--}}
                                <input type="hidden" name="title" class="form-control"
                                       placeholder="Введите тему" value="{{ $data['subject']->name }}">

                                    </div>
                                    @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="col">

                                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                            <input type="hidden" name="set_for_date"  value="{{ isset($homework) ? $homework->set_for_date : $data['date'] }}" class="form-control datetimepicker-input" data-target="#reservationdate">
{{--                                            <div class="input-group-append"   data-target="#reservationdate" data-toggle="datetimepicker">--}}
{{--                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>--}}
{{--                                            </div>--}}

                                        </div>
                                    </div>

                                </div>


                                @error('date')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                                <input type="hidden" name="subject_id" value="{{ $data['subject']->id }}">
                            <input type="hidden" name="class_id" value="{{ $data['class']->id }}">
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id  }}">
                            @error('subject_id')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            @error('class_id')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror


                            <div class="form-group col-12">
                                <label>Список литературы:</label>
                                <textarea id="summernote" name="content" class="col-12" style="height: 100px">{{ isset($homework) ? $homework->content : "" }}</textarea>
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
