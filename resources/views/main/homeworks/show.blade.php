@extends('layouts.main')

@section('content')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Домашние задания</h1>
            <section class="edica-about-faq py-2 mb-5">
                <div class="accordion" id="reportCollapse" role="tablist" aria-multiselectable="false">
                    <div class="card" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="mb-1  "><a class="btn btn-outline-danger mr-2" href="{{ route("main.homework.index") }}">Назад</a> {{ $data['subject']->name }} - {{ $data['class']->name }}</h2>
                    </div>
                    @if(count($homeworks))
                        @foreach($homeworks as $k=>$homework)
                            <div class="pl-3 bg-danger bg-opacity-50 text-white" data-aos="fade-up" data-aos-delay="200"
                                 id="">{!! $homework->set_for_date  !!} | {!! $homework->title  !!}  </div>
                            <div class=" pl-3   mb-3" style="border: #0c84ff 1px solid" data-aos="fade-up"
                                 data-aos-delay="200">{!! $homework->content !!}  </div>
                        @endforeach
                    @else
                        <div class="bg-opacity-50 pl-3  my-3 bg-warning" data-aos="fade-up" data-aos-delay="200" id="">
                            Нет информации о домашних заданиях для {{ $data['class']->name }}
                            ({{ $data['subject']->name }})
                        </div>

                    @endif

                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>

    </main>
@endsection
