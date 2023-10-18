@extends('layouts.main')

@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-11 mx-auto">
                    <h1 class="edica-page-title" data-aos="fade-up">Контакты</h1>
                    <section class="edica-contact py-5 mb-5">
                        <div class="row">
                            <div class="col-md-4 contact-sidebar" data-aos="fade-right">
                                <h5>Свяжитесь с нами</h5>
                                <p>117574, Москва, пр-д Одоевского, 13 </p>
                                <p>Тел./факс: (495) 423-51-22</p>
                                <p>email: info@gymnasia-radonezh.ru</p>
                                <div class="embed-responsive embed-responsive-1by1 contact-map">
                                    <iframe src="https://yandex.ru/map-widget/v1/-/CCUZQIwqTD" width="560" height="400" frameborder="1" allowfullscreen="true" ></iframe>
                                </div>
                            </div>
                            <div class="col-md-8 contact-form-wrapper">
                                <h5 data-aos="fade-up" class="mb-4">Контактная форма</h5>
                                <div class="row">
                                    <div class="form-group col-md-6" data-aos="fade-up">
                                        <label for="name">Имя</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Ваше полное имя">
                                    </div>
                                    <div class="form-group col-md-6" data-aos="fade-up">
                                        <label for="phone">Телефон</label>
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Телефон">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6" data-aos="fade-up" data-aos-delay="100">
                                        <label for="email">EMAIL</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email адрес">
                                    </div>
                                    <div class="form-group col-md-6" data-aos="fade-up" data-aos-delay="100">
                                        <label for="subject">Тема</label>
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Тема обращения">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12" data-aos="fade-up" data-aos-delay="200">
                                        <label for="message">Сообщение</label>
                                        <textarea name="message" id="message" rows="9" class="form-control">Текстовое поле</textarea>
                                    </div>
                                </div>
                                <div  class='d-flex justify-content-end'>
                                    <button type="submit" class="btn btn-warning btn-lg" data-aos="fade-up" data-aos-delay="300">Отправить сообщение</button>
                                </div>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
    <section class="edica-footer-banner-section">
        <div class="container">
            <div class="footer-banner" data-aos="fade-up">
                <h1 class="banner-title">Запись на собеседование</h1>
                <h1 class="banner-title text-danger">8(495)423-51-22</h1>
                <div class="banner-btns-wrapper">
                    {{--                <button class="btn btn-success"> <img src="{{ asset('assets/images/apple@1x.svg') }}" alt="ios" class="mr-2"> App Store</button>--}}
                    {{--                <button class="btn btn-success"> <img src="{{ asset('assets/images/android@1x.svg') }}" alt="android" class="mr-2"> Google Play</button>--}}
                </div>
{{--                <p class="banner-text">Add some helper text here to explain the finer details of your <br> product or service.</p>--}}
            </div>
        </div>
    </section>
@endsection
