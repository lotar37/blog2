@extends('admin.layouts.main')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 mb-3">Добавление мероприятия</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Главная ЛК</a></li>
                            <li class="breadcrumb-item active">Добавление мероприятия</li>
                        </ol>
                    </div><!-- /.col -->

                    <div class="col-12">
                        <form action="{{ route("admin.post.store") }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group w-50">
                                <label for="exampleInputEmail1">Название</label>
                                <input type="text" name="title" class="form-control"
                                       placeholder="Введите название мероприятия" value="{{ old('title') }}">
                                @error('title')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group w-50">
                                <div class="row">
                                    <div class="col">
                                        <label>Дата мероприятия:</label>
                                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                            <input type="text" name="date"  value="{{ old('date') }}" class="form-control datetimepicker-input" data-target="#reservationdate">
                                            <div class="input-group-append"   data-target="#reservationdate" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col w-25">
                                        <label>Время мероприятия:</label>
                                        <input type="text" name="time" class="form-control"
                                               placeholder="Введите время мероприятия" value="{{ old('time') }}">
                                        </div>
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <label>Краткое описание:</label>
                                <textarea id="summernote" name="content" class="col-12">{{ old('content') }}</textarea>
                                @error('content')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group w-50" >
                                <label for="exampleInputFile">Добавить превью</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="preview_image">
                                        <label class="custom-file-label" for="exampleInputFile">Выберите изображение</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузка</span>
                                    </div>
                                </div>
                                @error('preview_image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <label for="exampleInputFile">Добавить главное изображение</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="main_image">
                                        <label class="custom-file-label" for="exampleInputFile">Выберите изображение</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузка</span>
                                    </div>
                                </div>
                                @error('main_image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group row w-50">
                                <div class="col w-50">
                                <label>Выбирите категорию</label>
                                <select class="form-control" name="category_id">

                                    @foreach($categories as $category)
                                        <option value="{{ $category->id  }}"
                                        {{ $category->id == old('category_id') ? ' selected' : '' }}
                                        >{{ $category->title }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </div>
                                <div class="col w-50">
                                    <label>Привязать к проекту</label>
                                    <select class="form-control" name="project_id">
                                        <option value="0"></option>
                                        @foreach($projects as $project)
                                            <option value="{{ $project->id  }}"
                                                {{ $project->id == old('project_id') ? ' selected' : '' }}
                                            >{{ $project->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('project_id')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                </div>
                            </div>
                            <div class="form-group w-50" data-select2-id="95">
                                <label>Тэги</label>
                                <select name="tag_ids[]" class="select2bs4 select2-hidden-accessible" multiple="" data-placeholder="Выберите тэги" style="width: 100%;" data-select2-id="23" tabindex="-1" aria-hidden="true">

                                    @foreach($tags as $tag)
                                    <option data-select2-id="v{{ $tag->id }}" value="{{ $tag->id }}"
                                    {{ is_array(old('tag_ids')) && in_array($tag->id, old('tag_ids')) ? ' selected' : '' }}
                                    >{{ $tag->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <label>Отчет о мероприятии:</label>
                                <textarea id="summernote2" name="report" class="col-12">{{ old('report') }}</textarea>
                                @error('content')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" name='mainpage' class="custom-control-input" id="mainpage">
                                    <label class="custom-control-label" for="mainpage">На главную карусель</label>
                                </div>
                            </div>
                            <div class="form-group w-50" id="mainpage_image">
                                <label for="exampleInputFile">Изображение главной карусели (высота-ширина: 6х4)</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="mainpage_image">
                                        <label class="custom-file-label" for="exampleInputFile">Выберите изображение</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузка</span>
                                    </div>
                                </div>
                                @error('main_image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group w-50"  id="mainpage_text" >
                                <label for="mainpage_text">Текст для карусели:</label>
                                <textarea name="mainpage_text" class="form-control" placeholder="Введите текст сообщения на карусели">
                                    {{ old('mainpage_text') }}</textarea>
                                @error('mainpage_text')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group w-50"   id="inside_link">
                                <label for="inside_link">Внутренняя ссылка</label>
                                <input type="text" name="inside_link" class="form-control" class="col-6"
                                       placeholder="Введите Route name" value="{{ old('inside_link') }}">
                                @error('inside_link')
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
