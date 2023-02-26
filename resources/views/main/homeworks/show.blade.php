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

                <button class="btn btn-primary active">5a</button>
                <button class="btn btn-success ">6a</button>
                <button class="btn btn-warning ">7a</button>
                <button class="btn btn-info ">8a</button>
                <button class="btn btn-danger ">9a</button>
                <button class="btn btn-secondary ">10a</button>
                <button class="btn btn-primary ">11a</button>

                </div>
                </section>
            <section class="edica-about-faq py-2 mb-5">
                <div class="accordion" id="reportCollapse" role="tablist" aria-multiselectable="false">
                    <div class="card" data-aos="fade-up" data-aos-delay="200">
                        @foreach($workload as $s_key=>$subject)
                        <div class="card-header" role="tab" id="subject{{ $s_key }}">


                                <a data-toggle="collapse" data-parent="#reportCollapse" href="#reportContent{{ $s_key }}" aria-expanded="true" aria-controls="reportContent{{ $s_key }}">
                                    <h2 class="mb-0"> {{ $data['subjects']->find($s_key)->name }} </h2>
                                </a>

                        </div>
                            @foreach($subject as $c_key=>$class)
                        <div id="reportContent{{$s_key }}" class="collapse in" role="tabpanel" aria-labelledby="report{{ $s_key }}">
                            <div class="card-body">
                                <h4>{{ $data['classes']->find($c_key)->name }}</h4>
                                @if(isset($homeworks[$s_key][$c_key]))
                                    @foreach($homeworks[$s_key][$c_key] as $k=>$homework)
                                        <div class="bg-opacity-50 bg-light pl-3  mb-1 accordion" id="homework{{ $s_key."_".$c_key }}">{!! $homework->set_for_date  !!} | {!! $homework->title  !!}  </div>
                                        <div class=" pl-3 accordion-item" style="border: #0c84ff 1px solid" data-parent="#homework{{ $s_key."_".$c_key }}">{!! $homework->content !!}  </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        @endforeach
                        @endforeach
                    </div>
                </div>
            </section>

        </div>

    </main>
@endsection
