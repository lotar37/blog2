@extends('teacher.layouts.main')

@section('content')

    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 mb-3">Домашние задания</h1>
                    <h4 class="m-0 mb-3">{{ $data['subjects']->find($data['subject']->id)->name }}({{ $data['classes']->find($data['school_class']->id)->name }})</h4>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('teacher.main.index') }}">Главная</a></li>
                        <li class="breadcrumb-item active">Посты</li>
                    </ol>
                </div><!-- /.col -->
                <div class="col-2">
                    <a class="btn btn-block btn-outline-primary" href="{{ route("teacher.homework.create",[$data["subject"]->id, $data["school_class"]->id]) }}">
                                Новое домашнее задание
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
                                    <th>ID</th>
                                    <th>Тема</th>
                                    <th>На дату</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($homeworks as $homework)
                                <tr>
                                    <td>{{ $homework->id }}</td>
                                    <td>{{ $homework->title }}</td>
                                    <td>{{ $homework->set_for_date }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route("teacher.homework.edit", $homework->id) }} " class="text-success    "><i class="ml-2 fa-pencil-alt fas"></i></a>
                                        <form action="{{route('teacher.homework.delete', $homework->id)}}" method="post" >
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="border-0 bg-white">
                                            <i class="ml-2 fa-trash fas text-danger" role="button"></i>
                                        </button>
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
