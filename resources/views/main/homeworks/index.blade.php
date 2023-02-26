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

                <button class="btn btn-outline-primary">5a</button>
                <button class="btn btn-outline-success ">6a</button>
                <button class="btn btn-outline-warning ">7a</button>
                <button class="btn btn-outline-success ">8a</button>
                <button class="btn btn-outline-danger ">9a</button>
                <button class="btn btn-outline-secondary ">10a</button>
                <button class="btn btn-outline-primary ">11a</button>

                </div>
                </section>
            <section edica-about-faq py-2 mb-5>
                <div class="row">
                    <div class="col-6">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            @foreach($workload as $s_key=>$subject)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading{{ $s_key }}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $s_key }}" aria-expanded="false" aria-controls="flush-collapse{{ $s_key }}">
                                        {{ $data['subjects']->find($s_key)->name }}
                                    </button>
                                </h2>
                                <div id="flush-collapse{{ $s_key }}" class="accordion-collapse collapse" aria-labelledby="flush-heading{{ $s_key }}" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="btn-group  btn-group-md btn-group-justified col-6">
                                            @foreach($subject as $c_key=>$class)


                                                <button class="btn btn-outline-primary">{{ $data['classes']->find($c_key)->name }}</button>



                                            @endforeach
                                        </div>

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
