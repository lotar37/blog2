@extends('layouts.main')

@section('content')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" >Домашние задания</h1>
            <section class="edica-about-faq py-2 mb-5">
                <div class="accordion" id="reportCollapse" role="tablist" aria-multiselectable="false">
                    <div class="card" data-aos-delay="200">
                        <h2 class="mb-1  font-weight-light"><a class="btn btn-outline-success mr-2" href="{{ route("main.homework.index") }}">Назад</a>{{ $data['class']->name }}: {{ $data['subject']->name }} </h2>
                    </div>
                    @if(count($homeworks))
                        @php $c = 1; @endphp
                        @foreach($homeworks as $k=>$homework)
                            <div class="mb-2 pt-2" style="border:1px solid #89c7a4; border-radius: 16px 0  16px 0   ;">
                            <div class="px-3 pt-2 pb-1 bg-opacity-50 border-1 bg-gradient-gray" data-aos="fade-left" data-aos-delay="{{ $c*300 }}"
                                 id=""><h4>{!! $homework->set_for_date  !!} | {!! $homework->title  !!} </h4> </div>
                            <div class=" pl-3   mb-3" data-aos="fade-left"
                                 data-aos-delay="{{ $c*300 }}">{!! $homework->content !!}  </div>
                            </div>
                            @php $c++; @endphp
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
