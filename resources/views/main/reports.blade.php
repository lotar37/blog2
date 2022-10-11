@extends('layouts.main')

@section('content')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Отзывы</h1>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="{{ asset('assets/images/report.jpg')}}" alt="featured image" class="w-100">
            </section>
            <section class="edica-about-faq py-5 mb-5">
                <h2 class="faq-title" data-aos="fade-up">Отзывы наших учеников и их родителей</h2>
                <div class="accordion" id="reportCollapse" role="tablist" aria-multiselectable="true">
                    <div class="card" data-aos="fade-up" data-aos-delay="200">
                        @foreach($reports as $report)
                        <div class="card-header" role="tab" id="report{{ $report->id }}">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" data-parent="#reportCollapse" href="#reportContent{{ $report->id }}" aria-expanded="true" aria-controls="reportContent{{ $report->id }}">
                                    {{$report->person}}, {{$report->date}}
                                </a>
                            </h5>
                        </div>
                        <div id="reportContent{{ $report->id }}" class="collapse in" role="tabpanel" aria-labelledby="report{{ $report->id }}">
                            <div class="card-body">
                                {!! $report->content !!}
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>

        </div>

    </main>
@endsection
