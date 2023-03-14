@extends('admin.layouts.main')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 mb-3">Добавление отзыва</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('main.index') }}">На сайт</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Главная(Админ)</a>
                            </li>
                        </ol>
                    </div><!-- /.col -->

                    <div class="col-12">
                        <form action="{{ route("admin.report.store") }}" method="post" >
                            @csrf
                            <div class="form-group col-4">
                                <label for="exampleInputEmail1">Автор</label>
                                <input type="text" name="person" class="form-control"
                                       placeholder="Введите автора отзыва" value="{{ old('person') }}">
                                @error('person')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-4">
                                <label>Дата отзыва:</label>
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input type="text" name='date' class="form-control datetimepicker-input w-25"
                                           data-target="#reservationdate" value="{{ old('date') }}>
                                    <div class=" input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>

                                </div>
                                @error('date')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        <div class="form-group col-12">
                            <textarea  name="content" class="col-12">{{ old('content') }}</textarea>
                            @error('content')
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
