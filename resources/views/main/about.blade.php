@extends('layouts.main')

@section('content')
    <main class="mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 mx-auto pt-5">
                    <h1 class="edica-page-title"  data-aos="fade-up">О нас</h1>
                    <div class="breadcrumb"  data-aos="fade-up" >
                        <a href="/" class="breadcrumb-item">Главная</a>
                        <a href="#" class="breadcrumb-item  active">О нас</a>
                    </div>

                    <section class="edica-about-intro pt-lg-5">
                        <div class="row pt-lg-5">
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="150">
                                <h2 class="intro-title pb-3 pb-md-0 mb-4 mb-md-0">Знакомьтесь, гимназия «Радонеж»! <span></span></h2>
                            </div>
                            <div class="col-md-6 intro-content" data-aos="fade-left" data-aos-delay="150">

                                <p><span class="first-letter">П</span>ервая православная общеобразовательная школа в постсоветской России.
                                    Основана в 1990 году Православным братством «Радонеж» по благословению святейшего
                                    Патриарха Московского и всея Руси Алексия II. Со дня своего основания была ориентирована на детей из
                                    православных семей, родители которых хотели бы дать им классическое образование и православное
                                    воспитание. </p>
                            </div>
                        </div>
                    </section>
                    <section class="edica-about-vision py-5">
                        <div class="row">
                            <div class="col-md-6 d-flex flex-column justify-content-center">
                                <h5 class="vision-title" data-aos="fade-right">Наша миссия</h5>
                                <p class="vision-text" data-aos="fade-right">В своей работе и образовательной программе Гимназия «Радонеж» соединяет лучшие традиции Российского образования с высшими достижениями современной педагогики, проверенные временем образовательные методики с разумным индивидуальным подходом, ориентирована на присвоение детьми высоких образцов отечественной и мировой культуры. </p>
                            </div>
                            <div class="col-md-6 pb-3 pb-md-0 mb-4 mb-md-0" data-aos="fade-left" data-aos-delay="200">
                                <img src="{{ asset('assets/images/about.jpg?v=1')}} " alt="vision" class="img-fluid2" style="width:100%">
                            </div>
                        </div>
                    </section>
                    <section class="edica-about-vision py-5">
                        <div class="row">
                            <div class="col-md-6 pb-3 pb-md-0 mb-4 mb-md-0" data-aos="fade-right" data-aos-delay="200">
                                <img src="{{ asset('assets/images/about2.jpg?v=1')}}" alt="vision" class="img-fluid2"  style="width:100%">
                            </div>
                            <div class="col-md-6 d-flex flex-column justify-content-center">
                                <h5 class="vision-title" data-aos="fade-left">Углублённо </h5>
                                <p class="vision-text" data-aos="fade-left">
                                    изучаются предметы гуманитарного цикла:
                                    изучаются история,
                                    литература,
                                    история искусств,
                                    Закон Божий,
                                    риторика.
                                    Дополнительные модули: сценическая речь, логика, история философии, спецкурсы по истории.




                                </p>
                            </div>
                        </div>
                    </section>
                    <section class="edica-about-counter py-5 d-md-flex justify-content-between" id="counter" data-aos="fade-up">
                        <div class="counter-card mb-3 pb-1 pb-md-0 mb-md-0">
                            <h3 class="counter-count"><span class="count" data-count="50">1990</span></h3>
                            <p class="count-label">Год основания</p>
                        </div>
                        <div class="counter-card mb-3 pb-1 pb-md-0 mb-md-0">
                            <h3 class="counter-count"><span class="count" data-count="10">17</span>0</h3>
                            <p class="count-label">Обучающихся</p>
                        </div>
                        <div class="counter-card mb-3 pb-1 pb-md-0 mb-md-0">
                            <h3 class="counter-count">85%</h3>
                            <p class="count-label">Поступление в ВУЗ</p>
                        </div>
{{--                        <div class="counter-card mb-3 pb-1 pb-md-0 mb-md-0">--}}
{{--                            <h3 class="counter-count"><span class="count" data-count="15">0</span>K+</h3>--}}
{{--                            <p class="count-label">Pro User</p>--}}
{{--                        </div>--}}
{{--                        <div class="counter-card mb-3 pb-1 pb-md-0 mb-md-0">--}}
{{--                            <h3 class="counter-count"><span class="count" data-count="8">0</span>K+</h3>--}}
{{--                            <p class="count-label">Reviews</p>--}}
{{--                        </div>--}}
                    </section>
                    <section class="edica-about-goal py-5 mb-5">
                        <div class="row">
                            <div class="col-md-6 mb-4 mb-md-0 d-flex flex-column justify-content-center" data-aos="fade-right">
                                <h2 class="goal-title">Лингвистическая программа</h2>
                                <p class="vision-text">

                                    предусматривает изучение:
                                <ul>
                                    <li>  английский язык на углублённом уровне,</li>
                                    <li> второй иностранный с 5 класса</li>
                                    <li> немецкий (3часа/неделю),</li>
                                    <li> церковнославянский - 4 года,</li>
                                    <li> латинский - 4 года,</li>
                                    <li> древнегреческий по выбору.</li>
                                </ul>
                                    Точные и естественнонаучные предметы преподаются на базовом уровне.
                                </p>
                            </div>
                            <div class="col-md-6" data-aos="fade-left">
                                <img src="{{ asset('assets/images/about9.jpg?v=1')}}" alt="goal" class="img-fluid2"  style="width:100%">
                            </div>
                        </div>
                    </section>
                    <section class="edica-about-clients mb-5">
                        <h2 class="clients-title mb-5" data-aos="fade-up">Наши выпускники</h2>
                        <div class="row py-4 d-flex justify-content-sm-around" data-aos="fade-up">
                            <div class="mb-4 mb-md-0">
                                <img src="assets/images/out.jpg" alt="client logo" style="border-radius:0.5rem;height: 190px;max-width: 100%">
                            </div>
                            <div class="mb-4 mb-md-0">
                                <img src="assets/images/out21.jpg" alt="client logo" style="border-radius:0.5rem;height: 190px;max-width: 100%">
                            </div>
                            <div class="mb-4 mb-md-0">
                                <img src="assets/images/out20.jpg" alt="client logo"  style="border-radius:0.5rem;height: 190px;max-width: 100%">
                            </div>
                         <div class="mb-4 mb-md-0">
                                <img src="assets/images/out19.jpg" alt="client logo"  style="border-radius:0.5rem;height: 190px;max-width: 100%">
                            </div>
{{--                            <div class="col-6 col-md-2 mb-4 mb-md-0">--}}
{{--                                <img src="assets/images/out.jpg" alt="client logo" width="140px" class="img-fluid">--}}
{{--                            </div>--}}
{{--                            <div class="col-6 col-md-2 mb-4 mb-md-0">--}}
{{--                                <img src="assets/images/out.jpg" alt="client logo" width="140px" class="img-fluid">--}}
{{--                            </div>--}}
{{--                            <div class="col-6 col-md-2 mb-4 mb-md-0">--}}
{{--                                <img src="assets/images/out.jpg" alt="client logo" width="140px" class="img-fluid">--}}
{{--                            </div>--}}
                         </div>
                    </section>
                    <section class="edica-about-faq py-5 mb-5">
                        <h2 class="faq-title" data-aos="fade-up">Часто задаваемые вопросы</h2>
                        <p class="faq-section-text" data-aos="fade-up" data-aos-delay="100">
                            На Ваши вопросы отвечает заведующий учебной частью Гимназии.
                        </p>
                        <div class="accordion" id="edicaAboutFaqCollapse" role="tablist" aria-multiselectable="true">
                            <div class="card" data-aos="fade-up" data-aos-delay="200">
                                <div class="card-header" role="tab" id="edicaAboutFaq1">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" data-parent="#edicaAboutFaqCollapse" href="#edicaAboutFaqContent1" aria-expanded="true" aria-controls="edicaAboutFaqContent1">
                                            Какие документы необходимо представить для перехода в Вашу школу из другой образовательной организации?
                                        </a>
                                    </h5>
                                </div>
                                <div id="edicaAboutFaqContent1" class="collapse in" role="tabpanel" aria-labelledby="edicaAboutFaq1">
                                    <div class="card-body">
                                        При переводе обучающегося из другой образовательной организации родители (законные представители) должны предоставить следующие документы:
                                        <ul>
                                            <li> личное дело обучающегося,</li>
                                            <li>академическую справку по результатам текущей и промежуточной аттестации за период обучения в другой образовательной организации;</li>
                                            <li>заявление на имя директора школы;</li>
                                            <li>копию паспорта заявителя;</li>
                                            <li>медицинские документы (медицинскую карту, прививочный сертификат, прививочную карту Ф-63, ксерокопию медицинского полиса);</li>
                                            <li>копию свидетельства о рождении ребёнка.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card" data-aos="fade-up" data-aos-delay="300">
                                <div class="card-header" role="tab" id="edicaAboutFaq2">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" data-parent="#edicaAboutFaqCollapse" href="#edicaAboutFaqContent2" aria-expanded="false" aria-controls="edicaAboutFaqContent1">
                                            Имеет ли право ученик, закончивший 9 классов, продолжить обучение в 10 классе в вашей школы?
                                        </a>
                                    </h5>
                                </div>
                                <div id="edicaAboutFaqContent2" class="collapse" role="tabpanel" aria-labelledby="edicaAboutFaq2">
                                    <div class="card-body">
                                        Учащийся, успешно освоивший программу основного общего образования, имеет право получить среднее общее образование. Не только выпускник, но и его родители (поскольку право выбора образовательного учреждения ФЗ «Об образовании» (п.2 ст. 50) закреплено за совершеннолетними гражданами) могут написать заявление о приеме в 10 класс. Отказ в приеме в нашу школу  допустим по причине отсутствии свободных (вакантных) мест в сформированных классах. Иные мотивы отказа являются незаконными, нарушают право ученика на общедоступность образования. Родители имеют право обжаловать действия директора лицея в вышестоящих инстанциях, в том числе и в судебном порядке. При приеме в общеобразовательную организацию для получения среднего общего образования представляется аттестат об основном общем образовании установленного образца.                   </div>
                                </div>
                            </div>
                            <div class="card" data-aos="fade-up" data-aos-delay="400">
                                <div class="card-header" role="tab" id="edicaAboutFaq3">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" data-parent="#edicaAboutFaqCollapse" href="#edicaAboutFaqContent3" aria-expanded="false" aria-controls="edicaAboutFaqContent1">
                                            Как узнать, правильно ли учитель учит и объективно ли он оценивает уровень знаний моего ребенка?
                                        </a>
                                    </h5>
                                </div>
                                <div id="edicaAboutFaqContent3" class="collapse" role="tabpanel" aria-labelledby="edicaAboutFaq3">
                                    <div class="card-body">
                                        Если вас что-то тревожит, обратитесь к администрации школы.
                                    </div>
                                </div>
                            </div>
                            <div class="card" data-aos="fade-up" data-aos-delay="500">
                                <div class="card-header" role="tab" id="edicaAboutFaq4">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" data-parent="#edicaAboutFaqCollapse" href="#edicaAboutFaqContent4" aria-expanded="false" aria-controls="edicaAboutFaqContent1">
                                            Как организовано питание в школе? Почему учащимся необходимо питаться в школьной столовой?
                                        </a>
                                    </h5>
                                </div>
                                <div id="edicaAboutFaqContent4" class="collapse" role="tabpanel" aria-labelledby="edicaAboutFaq4">
                                    <div class="card-body">
                                        Школа предоставляет учащимся ежедневное горячее питание: завтраки и обеды. Имеется столовая на 80 посадочных мест. В работе по организации питания учащихся администрация школы руководствуется основными нормативнo-правовыми актами и документами, которые можно найти на нашем сайте.
                                    </div>
                                </div>
                            </div>
                            <div class="card" data-aos="fade-up" data-aos-delay="500">
                                <div class="card-header" role="tab" id="edicaAboutFaq5">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" data-parent="#edicaAboutFaqCollapse" href="#edicaAboutFaqContent5" aria-expanded="false" aria-controls="edicaAboutFaqContent1">
                                            Как заставить ребенка учиться?                                        </a>
                                    </h5>
                                </div>
                                <div id="edicaAboutFaqContent5" class="collapse" role="tabpanel" aria-labelledby="edicaAboutFaq5">
                                    <div class="card-body">
                                        Заставлять ребенка учиться ни в коем случае нельзя,  а вот сделать так, чтобы у него появилось такое желание просто необходимо. Для того, чтобы у ребенка возник интерес к школе, надо, чтобы она не казалась ему страшной. Рассказывайте больше хорошего о своей школьной жизни, исключив негативные ситуации, настраивайте себя и своего ребенка на положительные эмоции в отношении учебы, учите общаться со сверстниками, развивайте любознательность и не высказывайте своих переживаний по поводу его будущей школьной жизни.                                    </div>
                                </div>
                            </div>
                            <div class="card" data-aos="fade-up" data-aos-delay="500">
                                <div class="card-header" role="tab" id="edicaAboutFaq6">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" data-parent="#edicaAboutFaqCollapse" href="#edicaAboutFaqContent6" aria-expanded="false" aria-controls="edicaAboutFaqContent1">
                                            Надо ли родителям помогать выполнять домашнее задание своему ребенку?
                                        </a>
                                    </h5>
                                </div>
                                <div id="edicaAboutFaqContent6" class="collapse" role="tabpanel" aria-labelledby="edicaAboutFaq6">
                                    <div class="card-body">
                                        Некоторые дети изначально рождаются самостоятельными, но это не значит, что помощь в выполнении заданий им не требуется. А другие дети постоянно требуют внимания и поддержки от взрослых. Независимо от того, какой у вас ребенок, Ваша поддержка никогда не будет лишней. Задача родителей – проконтролировать выполнение домашних заданий и, возможно, дать полезный совет.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section  class="edica-about-faq py-5 mb-5">
                        <h2 class="faq-title" data-aos="fade-right">Галерея картинок</h2>
                        <div class="row d-flex">
                            @foreach ($posts->chunk($chunkPosts) as $chunk)
                                <div class="col-4">
                                    @foreach ($chunk as $post)
                                        <div>
                                            <img style="max-width: 100%;border-radius:0.5rem;"   class="mb-4" src="{{  asset("storage/" . $post->preview_image) }}" alt="blog post">
                                        </div>
                                        <div>
                                            <img style="max-width: 100%;border-radius:0.5rem;"   class="mb-4" src="{{  asset("storage/" . $post->main_image) }}" alt="blog post">
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach

                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>

@endsection
