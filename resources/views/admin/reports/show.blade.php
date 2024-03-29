@extends('admin.layouts.main')

@section('content')

    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex align-items-center">
                    <h1 class="m-0 mb-3 mr-1">{{ $report->person }}</h1>
                    <a href="{{ route("admin.report.edit", $report->id) }}" class="text-success"><i class="ml-2 fa-pencil-alt fas"></i></a>

                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('main.index') }}">На сайт</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Главная(ЛК)</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.report.index') }}">Отзывы</a></li>
                        <li class="breadcrumb-item active">Страница отзыва</li>
                    </ol>
                </div><!-- /.col -->

            </div><!-- /.row -->
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td>{{ $report->id }}</td>
                                </tr>
                                <tr>
                                    <td>Название</td>
                                    <td>{{ $report->person }}</td>
                                </tr>
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
