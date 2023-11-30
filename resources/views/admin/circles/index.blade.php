@extends('admin.layouts.main')

@section('content')

    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 mb-3">Кружки</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('main.index') }}">На сайт</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('main.circles') }}">На сайте кружки</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Главная</a></li>
                        <li class="breadcrumb-item active">Кружки</li>
                    </ol>
                </div><!-- /.col -->
                <div class="col-2">
                    <a class="btn btn-block btn-primary" href="{{route("admin.circle.create")}}">
                                Добавить
                    </a>
                </div>

            </div><!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover w-100">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Картинка</th>
                                    <th>Название</th>
                                    <th>Видео</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($circles as $circle)
                                <tr >
                                    <td>{{ $circle->id }}</td>
                                    <td ><img src="{{ asset("storage/".$circle->avatar)}}" style="height: 100px;border-radius: 30%" alt=""></td>
                                    <td class="w-50"><a href="{{ route("admin.circle.edit", $circle->id) }}" class='text-muted text-xl' title="Изменить">{{ $circle->name }}</a></td>
                                    @if($circle->video_link)
                                    <td class="w-25"><a href="{{ $circle->video_link }}">Ссылка на видео</a></td>
                                    @else
                                        <td class="text-danger">Видео нет</td>

                                    @endif
                                    <td  class="d-flex w-25">

                                        <a href="{{ route("admin.circle.edit", $circle->id) }} " class="btn btn-outline-secondary mr-2">Изменить</a>
                                        <form action="{{route('admin.circle.delete', $circle->id)}}" method="post" >
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-secondary" >Удалить</button>
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
