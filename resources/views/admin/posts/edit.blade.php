@extends('admin.layouts.main')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 mb-3">Редактирование мероприятия</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">На сайт</a></li>
                            <li class="breadcrumb-item"><a href="{{ route("admin.post.index") }}">Мероприятия</a></li>
                            <li class="breadcrumb-item active">{{ $post->title }}</li>
                        </ol>
                    </div><!-- /.col -->

                    <div class="col-12">
                        <form action="{{ route("admin.post.update", $post->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group w-50">
                                <label for="exampleInputEmail1">Название</label>
                                <input type="text" name="title" class="form-control"
                                       placeholder="Введите заголовок" value="{{ $post->title }}">
                                @error('title')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <div class="row">
                                    <div class="col">
                                        <label>Дата мероприятия:</label>
                                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                            <input type="text" name="date"  value="{{ $post->date }}" class="form-control datetimepicker-input" data-target="#reservationdate">
                                            <div class="input-group-append"   data-target="#reservationdate" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col w-25">
                                        <label>Время мероприятия:</label>
                                        <input type="text" name="time" class="form-control"
                                               placeholder="Введите время мероприятия" value="{{ $post->time }}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-12">
                                <label>Краткое описание:</label>
                                <textarea id="summernote" name="content" class="col-12">{{ $post->content }}</textarea>
                                @error('content')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group w-50" >
                                <label for="exampleInputFile">Превью</label>
                                <div class="">
                                    <img src="{{ asset("storage/" . $post->preview_image) }}" alt="preview_image" class="w-25 mb-2">
                                </div>
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
                                <label for="exampleInputFile">Главное изображение</label>
                                <div class="">
                                    <img src="{{ asset("storage/" . $post->main_image) }}" alt="main_image" class="w-25 mb-2">
                                </div>
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
                            <div class="form-group  w-50">
                                <label>Выбирите категорию</label>
                                <select class="form-control" name="category_id">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id  }}"
                                            {{ $category->id == $post->category_id ? ' selected' : '' }}
                                        >{{ $category->title }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group w-50" data-select2-id="95">
                                <label>Тэги</label>
                                <select name="tag_ids[]" class="select2bs4 select2-hidden-accessible" multiple="" data-placeholder="Выберите тэги" style="width: 100%;" data-select2-id="23" tabindex="-1" aria-hidden="true">

                                    @foreach($tags as $tag)
                                        <option data-select2-id="v{{ $tag->id }}" value="{{ $tag->id }}"
                                            {{ is_array($post->tags->pluck('id')->toArray()) && in_array($tag->id, $post->tags->pluck('id')->toArray()) ? ' selected' : '' }}
                                        >{{ $tag->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <label>Отчет о мероприятии:</label>
                                <textarea id="summernote2" name="report" class="col-12">{{ $post->report }}</textarea>
                                @error('report')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" name='mainpage' class="custom-control-input" id="mainpage" {{ $post->mainpage ? ' checked' : '' }}>
                                    <label class="custom-control-label" for="mainpage">На главную карусель</label>
                                </div>
                            </div>
                            <div class="form-group w-50" id="mainpage_image">
                                <label for="exampleInputFile">Изображение главной карусели (высота-ширина: 6х4)</label>
                                @if(isset($post->mainpage_image))
                                <div class="">
                                    <img src="{{ asset("storage/" . $post->mainpage_image) }}" alt="mainpage_image" class="w-25 mb-2">
                                </div>
                                @endif
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
                                <label>Текст для карусели:</label>
                                <textarea name="mainpage_text" class="col-6">{{ $post->mainpage_text }}</textarea>
                                @error('mainpage_text')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group w-50"   id="inside_link">
                                <label for="inside_link">Внутренняя ссылка</label>
                                <input type="text" name="inside_link" class="form-control"
                                       placeholder="Введите Route name" value="{{ $post->inside_link }}">
                                @error('inside_link')
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
