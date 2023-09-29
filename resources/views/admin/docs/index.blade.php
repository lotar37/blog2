@extends('admin.layouts.main')

@section('content')

    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 mb-3">Документы</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">На сайт</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Главная ЛК</a></li>
                        <li class="breadcrumb-item"><a href="{{ route("main.docs") }}">Документы на сайте</a></li>
                        <li class="breadcrumb-item active">Документы</li>
                    </ol>
                </div><!-- /.col -->
                <div class="col-2">
                    <a class="btn btn-block btn-primary" href="{{route("admin.doc.create")}}">
                                Добавить
                    </a>
                </div>

            </div><!-- /.row -->
            <div class="row">
                <div class="w-75">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>

                                    <th>Название</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($docs as $doc)
                                <tr>
                                    <td>{{ $doc->description }}</td>
                                     <td class="d-flex">
                                        <a href="{{ route("admin.doc.edit", $doc->id) }} " class="btn btn-outline-secondary mr-1">Изменить</a>
                                        <form action="{{route('admin.doc.delete', $doc->id)}}" method="post" >
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-secondary">Удалить</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
