@extends('admin.layouts.main')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 mb-3">Корректирование нагрузки</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">На сайт</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.userSubjectClass.index') }}">Нагрузка</a></li>
                            <li class="breadcrumb-item">Корректирование нагрузки</li>
                         </ol>
                    </div><!-- /.col -->

                    <div class="col-12">
                        <form action="{{ route("admin.userSubjectClass.update") }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group  w-50">
                                <label>Учитель: {{ $data['user']->name }}</label>
                                <input type="hidden" name="user_id" value="{{ $data['user']->id }}">

                                @error('user_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group  w-50">
                                <label>Предмет: {{ $data['subject']->name }}</label>
                                <input type="hidden" name="subject_id" value="{{ $data['subject']->id }}">
                                @error('subject_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group w-50" data-select2-id="95">
                                <label>Классы</label>
                                <select name="classes_ids[]" class="select2bs4 select2-hidden-accessible" multiple="" data-placeholder="Выберите классы" style="width: 100%;" data-select2-id="23" tabindex="-1" aria-hidden="true">

                                    @foreach($data['classes'] as $class)
                                    <option data-select2-id="v{{ $class->id }}" value="{{ $class->id }}"
                                    {{ in_array($class->id, $classes) ? ' selected' : '' }}
                                    >{{ $class->name }}</option>
                                    @endforeach
                                </select>
                                @error('classes_ids')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                            </div>


                            <div class="form-group">
                                <input type="submit" class="btn btn-outline-primary" value="Изменить">
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
