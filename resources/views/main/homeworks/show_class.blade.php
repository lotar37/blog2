@extends('layouts.main')

@section('content')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Домашние задания</h1>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="{{ asset('assets/images/homeworks.jpg')}}" alt="featured image" class="w-100">
            </section>


            <section class="edica-about-faq py-2 mb-2">
                <div class="btn-group  btn-group-lg btn-group-justified col-12">
                    <a class="btn btn-outline-primary" {{ $data['class']->name == "5a" ? " active" : "" }} href="{{ route('main.homework.index') }}">ВСЕ</a>
                    @foreach($data['classes'] as $class)
                        <a class="btn btn-outline-{{$data['colors'][$class->id]}} {{ $data['class']->id == $class->id ? " active" : "" }}"
                           href="{{ route('main.homework.showClass',$class->id) }}">{{$class->name}}</a>
                    @endforeach

                </div>
            </section>
            <section class="edica-about-faq py-2 mb-5">
                <div class="row">
                    <div class="col-12">

                        <div class="accordion" id="edicaAboutFaqCollapse">
                            @foreach($workload as $s_key=>$subject)
                                <div class="card aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                                    <div class="card-header" role="tab" id="edicaAboutFaq{{ $s_key }}">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" data-parent="#edicaAboutFaqCollapse"
                                               href="#edicaAboutFaqContent{{ $s_key }}" aria-expanded="false"
                                               aria-controls="edicaAboutFaqContent{{ $s_key }}" class="collapsed">
                                                {{ $data['subjects']->find($s_key)->name }} ({{isset($homeworks[$s_key]) ? count($homeworks[$s_key][$data['class']->id]) : "0"}})
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="edicaAboutFaqContent{{ $s_key }}" class="in collapse" role="tabpanel"
                                         aria-labelledby="edicaAboutFaq{{ $s_key }}" style="">
                                        <div class="card-body">

                                                @if(isset($homeworks[$s_key]))

                                                @foreach($homeworks[$s_key][$data['class']->id] as $c_key=>$homework)
                                                    <div class="pl-3 bg-info intro-content " data-aos="fade-up" data-aos-delay="200"
                                                         id="">{!! $homework->set_for_date  !!} | {!! $homework->title  !!}  </div>
                                                    <div class=" pl-3   mb-3" style="border: #0c84ff 1px solid" data-aos="fade-up"
                                                         data-aos-delay="200">{!! $homework->content !!}  </div>

                                                @endforeach
                                                @else
                                                    <div class="bg-opacity-50 pl-3  my-3 bg-warning" data-aos="fade-up" data-aos-delay="200" id="">

                                                        По этому предмету информация о домашних заданиях отсутствует

                                                    </div>

                                                @endif

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>

        </div>

    </main>
@endsection
