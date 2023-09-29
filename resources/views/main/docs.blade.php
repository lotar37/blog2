@extends('layouts.main')

@section('content')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Документы</h1>
            <div class="breadcrumb">
                <a href="/" class="breadcrumb-item">Главная</a>
                <a href="#" class="breadcrumb-item  active">Документы</a>
            </div>
            <section class="featured-posts-section mt-2 pb-5 mb-5">
                <div class="table table-striped">

                    @foreach($docs as $doc)
                        <div class="row mb-2 pb-2" style="border-bottom:1px solid lightgrey;">
                        <div class="col-md-8 fetured-doc blog-doc" data-aos="fade-right">
                            <div class="blog-doc-thumbnail-wrapper">
                                <i class="nav-icon fa-lite fas far fa-file-pdf mr-2 text-danger"></i>
                                {{ $doc->description }}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="{{  asset("storage/" . $doc->doc) }}" class="btn btn-outline-secondary mr-2" download>Загрузить</a>
                            <a href="{{  asset("storage/" . $doc->doc) }}" class="btn btn-outline-secondary mr-2">Открыть</a>
                        </div>
                </div>
                    @endforeach

                </div>
            </section>

        </div>

    </main>
@endsection
