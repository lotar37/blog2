@extends('admin.layouts.main')

@section('content')

    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 mb-3">Редактирование пары</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('main.index') }}">На сайт</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Главная(ЛК)</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.answer.index') }}">ЧАВО</a></li>
                        <li class="breadcrumb-item active">Редактировать пару</li>
                    </ol>
                </div><!-- /.col -->
                <div class="col-12">
                    <form action="{{ route("admin.answer.update", $answer->id) }}" method="post"  enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="form-group col-12">
                            <label for="exampleInputEmail1">Вопрос</label>
                            <input type="text" name="question" class="form-control"
                                   placeholder="Введите название кружка" value="{{ $answer->question }}">
                            @error('question')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group col-12">
                            <label for="exampleInputEmail1">Ответ</label>
                            <textarea  name="answer" class="col-12">{{ $answer->answer }}</textarea>
                            @error('answer')
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
