@extends('admin.layouts.main')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 mb-3">Добавление документа</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Главная ЛК</a></li>
                            <li class="breadcrumb-item"><a href="{{ route("admin.doc.index") }}">Документы</a></li>
                            <li class="breadcrumb-item"><a href="{{ route("main.docs") }}">Документы на сайте</a></li>
                            <li class="breadcrumb-item active">Добавление документа</li>
                        </ol>
                    </div><!-- /.col -->

                    <div class="col-12">
                        <form action="{{ route("admin.doc.store") }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group col-12">
                                <label>Описание документа:</label>
                                <textarea id="summernottte" name="description" class="col-12">{{ old('description') }}</textarea>
                                @error('description')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group w-50">
                                <label for="exampleInputFile">Добавить документ</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="doc">
                                        <label class="custom-file-label" for="exampleInputFile">Выберите документ</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузка</span>
                                    </div>
                                </div>
                                @error('doc')
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
