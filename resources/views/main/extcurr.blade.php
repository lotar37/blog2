@extends('layouts.main')

@section('content')
    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Внеурочная образовательная деятельность</h1>
            <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">учебный год 2022-23</p>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="{{ asset('assets/images/extcurr.jpg')}}" alt="featured image" class="w-100">
            </section>
            <section class="post-content">
                <div class="row">
                    <div class="col-lg-9 mx-auto" data-aos="fade-up">
                        <h2 class="mb-4" data-aos="fade-up">Запланированные мерприятия</h2>
                        <table class="table"><colgroup><col width="100" /><col width="100" /><col width="100" /><col width="100" /><col width="296" /><col width="100" /><col width="100" /></colgroup>
                            <tbody>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Дата&quot;}">Дата</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;День недели&quot;}">День недели</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Время&quot;}">Время</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Классы&quot;}">Классы</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Мероприятие&quot;}">Мероприятие</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Предмет&quot;}">Предмет</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Сопровождающие/\nответственные&quot;}">
                                    <div>
                                        <div>Сопровождающие/<br />ответственные</div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="table-success">
                                <td colspan="7" rowspan="1" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;I триместр 2022-2023 уч. год&quot;}">I триместр 2022-2023 уч. год</td>
                            </tr>
                            <tr class="table-secondary">
                                <td colspan="7" rowspan="1" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;СЕНТЯБРЬ 2022 г&quot;}">СЕНТЯБРЬ 2022 г</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:1}">1</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;четверг&quot;}">четверг</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;9.00&quot;}">9.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:44866}" data-sheets-numberformat="{&quot;1&quot;:5,&quot;2&quot;:&quot;d-m&quot;,&quot;3&quot;:1}">1-11</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;День знаний. Торжественный молебен на начало учебного года.&quot;}">
                                    <div>
                                        <div>День знаний. Торжественный молебен на начало учебного года.</div>
                                    </div>
                                </td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:10}">10</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;суббота&quot;}">суббота</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;9.00&quot;}">9.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:5.6}">5,6</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Автобусная поездка в Саввино-Сторожевский монастырь, дом-музей М.М.Пришвина в Дунино&quot;}">Автобусная поездка в Саввино-Сторожевский монастырь, дом-музей М.М.Пришвина в Дунино</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Литература\nИстория\nМХК\nПаломничество&quot;}">Литература<br />История<br />МХК<br />Паломничество</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Себина Е.Н.\nТихомирова-Слепова Е.Б.\nБывшева Ю.А.\nЧельцов К.Ю.&quot;}">
                                    <div>
                                        <div>Себина Е.Н.<br />Тихомирова-Слепова Е.Б.<br />Бывшева Ю.А.<br />Чельцов К.Ю.</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:11}">11</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;воскресенье&quot;}">воскресенье</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;14.30&quot;}">14.30</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:3.4}">3,4</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Путешествие по Москве\n\&quot;Здравствуй, Москва\&quot; \n(для детей с родителями)&quot;}">Путешествие по Москве<br />"Здравствуй, Москва" <br />(для детей с родителями)</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;История Москвы&quot;}">История Москвы</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Себина Е.Н.\nЧельцов К.Ю.\nЗайцев А.Б.\nХодькова Л.Г.\nКузьмичева Н.П.\nПиляева Е.Н.&quot;}">
                                    <div>
                                        <div>Себина Е.Н.<br />Чельцов К.Ю.<br />Зайцев А.Б.<br />Ходькова Л.Г.<br />Кузьмичева Н.П.<br />Пиляева Е.Н.</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:13}">13</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;вторник&quot;}">вторник</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;14.00, 15.00&quot;}">14.00, 15.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:40825}" data-sheets-numberformat="{&quot;1&quot;:5,&quot;2&quot;:&quot;d,m,yy&quot;,&quot;3&quot;:1}">9,10,11</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Музей Преодоление. Квест \&quot;Московскими переулками в Пушкинский круг\&quot;&quot;}">Музей Преодоление. Квест "Московскими переулками в Пушкинский круг"</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Литература&quot;}">Литература</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Себина Е.Н.\nРыжова О.Б.\nПронина Ю.М.\nЧельцов К.Ю.&quot;}">Себина Е.Н.<br />Рыжова О.Б.<br />Пронина Ю.М.<br />Чельцов К.Ю.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:14}">14</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;четверг&quot;}">четверг</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;9.00&quot;}">9.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:38048}" data-sheets-numberformat="{&quot;1&quot;:5,&quot;2&quot;:&quot;d,m,yyyy&quot;,&quot;3&quot;:1}">2,3,2004</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Паломническая поездка в Новоиерусалимский монастырь&quot;}">Паломническая поездка в Новоиерусалимский монастырь</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Паломничество&quot;}">Паломничество</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Воронкова И.Е.\nГолубятникова С.С.\nКузьмичева Н.П.\nПиляева Е.Н.\nХодькова Л.Г.&quot;}">
                                    <div>
                                        <div>Воронкова И.Е.<br />Голубятникова С.С.<br />Кузьмичева Н.П.<br />Пиляева Е.Н.<br />Ходькова Л.Г.</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;20-25&quot;}">20-25</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;-&quot;}">-</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;-&quot;}">-</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:40825}" data-sheets-numberformat="{&quot;1&quot;:5,&quot;2&quot;:&quot;d,m,yy&quot;,&quot;3&quot;:1}">9,10,11</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Многодневная поездка в Пушкиногорье\nПсков, Изборск, Псково-Печерский монастырь, Святогорский монастырь, усадьбы Петровское, Тригорское, Михайловское.\nФилологическая практика.&quot;}">Многодневная поездка в Пушкиногорье<br />Псков, Изборск, Псково-Печерский монастырь, Святогорский монастырь, усадьбы Петровское, Тригорское, Михайловское.<br />Филологическая практика.</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Литература\nИстория\nМХК\nПаломничество&quot;}">Литература<br />История<br />МХК<br />Паломничество</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Себина Е.Н.\nВоронкова И.Е.\nРыжова О.Б.\nТишкова М.Б.&quot;}">Себина Е.Н.<br />Воронкова И.Е.<br />Рыжова О.Б.<br />Тишкова М.Б.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:7}">7</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;пятница&quot;}">пятница</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;14.30&quot;}">14.30</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:7}">7</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Соборная площадь Кремля&quot;}">Соборная площадь Кремля</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;МХК&quot;}">МХК</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Рыжова О.Б.\nТихомирова-Слепова Е.Б.&quot;}">
                                    <div>
                                        <div>Рыжова О.Б.<br />Тихомирова-Слепова Е.Б.</div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="table-secondary">

                                <td colspan="7" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;ОКТЯБРЬ 2022 г&quot;}">ОКТЯБРЬ 2022 г</td>

                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;1-30&quot;}">1-30</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:44866}" data-sheets-numberformat="{&quot;1&quot;:5,&quot;2&quot;:&quot;d-m&quot;,&quot;3&quot;:1}">1-11</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Неделя педагогической практики&quot;}">Неделя педагогической практики</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Профориентация&quot;}">Профориентация</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;учителя, кураторы&quot;}">
                                    <div>
                                        <div>учителя, кураторы</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:5}">5</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;среда&quot;}">среда</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;12.30&quot;}">12.30</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:44652}" data-sheets-numberformat="{&quot;1&quot;:5,&quot;2&quot;:&quot;d-m&quot;,&quot;3&quot;:1}">1-4</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;День Учителя. Праздничный концерт в начальной школе&quot;}">День Учителя. Праздничный концерт в начальной школе</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Общешкольный праздник&quot;}">Общешкольный праздник</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;учителя, кураторы&quot;}">
                                    <div>
                                        <div>учителя, кураторы</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:6}">6</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;четверг&quot;}">четверг</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;13.45&quot;}">13.45</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:44870}" data-sheets-numberformat="{&quot;1&quot;:5,&quot;2&quot;:&quot;d-m&quot;,&quot;3&quot;:1}">5-11</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;День Учителя. Литературно-музыкальная композиция \&quot;Слово Пушкину\&quot;&quot;}">День Учителя. Литературно-музыкальная композиция "Слово Пушкину"</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Общешкольный праздник&quot;}">Общешкольный праздник</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;учителя, кураторы&quot;}">
                                    <div>
                                        <div>учителя, кураторы</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:15}">15</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;суббота&quot;}">суббота</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:8.3}">8,3</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:7.8}">7,8</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Автобусная поездка в Мураново.\nУсадьба Тютчева, \nхрам Спаса Нерукотворного,\nпарк детей, погибших в Беслане&quot;}">Автобусная поездка в Мураново.<br />Усадьба Тютчева, <br />храм Спаса Нерукотворного,<br />парк детей, погибших в Беслане</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Литература\nИстория\nМХК\nПаломничество&quot;}">Литература<br />История<br />МХК<br />Паломничество</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Себина Е.Н\n Рыжова О.Б.\nСоцардовская А.Д.\nВоронкова И.Е.&quot;}">
                                    <div>
                                        <div>Себина Е.Н<br /> Рыжова О.Б.<br />Соцардовская А.Д.<br />Воронкова И.Е.</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;октябрь&quot;}">октябрь</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;\&quot;Чай с директором\&quot;\nПодведение итогов педагогической практики&quot;}">"Чай с директором"<br />Подведение итогов педагогической практики</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Профориентация&quot;}">Профориентация</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Тишков М.Б.&quot;}">Тишков М.Б.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:26}">26</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;среда&quot;}">среда</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;14.30&quot;}">14.30</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:5.6}">5,6</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Музей А.С.Пушкина\nинтерактивная программа\n\&quot;Путешествие по Пушкинскому Лицею\&quot;&quot;}">Музей А.С.Пушкина<br />интерактивная программа<br />"Путешествие по Пушкинскому Лицею"</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Литература&quot;}">Литература</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Себина Е.Н.\nВоронкова И.Е.\nРыжова О.Б.\nБывшева Ю.А.&quot;}">Себина Е.Н.<br />Воронкова И.Е.<br />Рыжова О.Б.<br />Бывшева Ю.А.</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Эко-тропа. Битцевский лес.&quot;}">Эко-тропа. Битцевский лес.</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Окружающий мир&quot;}">
                                    <div>
                                        <div>Окружающий мир</div>
                                    </div>
                                </td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:30}">30</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;воскресенье&quot;}">воскресенье</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;18.30&quot;}">18.30</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;8, 9&quot;}">8, 9</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Малый театр.\nСпектакль \&quot;Не все коту масленица\&quot;&quot;}">Малый театр.<br />Спектакль "Не все коту масленица"</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Литература&quot;}">Литература</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Соцардовская А.Д.\nПронина Ю.М.&quot;}">
                                    <div>
                                        <div>Соцардовская А.Д.<br />Пронина Ю.М.</div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="table-secondary">
                                <td colspan="7" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;НОЯБРЬ 2022&quot;}">НОЯБРЬ 2022</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:5}">5</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;вторник&quot;}">вторник</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;16.00&quot;}">16.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:10}">10</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Музей И.С.Тургенева&quot;}">Музей И.С.Тургенева</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Литература&quot;}">Литература</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Себина Е.Н.\nБывшева Ю.А.&quot;}">Себина Е.Н.<br />Бывшева Ю.А.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:6}">6</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;среда&quot;}">среда</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;15.00&quot;}">15.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:7}">7</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Музей И.С.Тургенева&quot;}">Музей И.С.Тургенева</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Литература&quot;}">Литература</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Себина Е.Н.\nРыжова О.Б.&quot;}">Себина Е.Н.<br />Рыжова О.Б.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:8}">8</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;пятница&quot;}">пятница</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;19.00&quot;}">19.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:8}">8</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Театр \&quot;У Никитских ворот\&quot;\nспектакль \&quot;Бедная Лиза\&quot;&quot;}">Театр "У Никитских ворот"<br />спектакль "Бедная Лиза"</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Литература&quot;}">Литература</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Кориненко Л.Э.&quot;}">Кориненко Л.Э.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:14}">14</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;понедельник&quot;}">понедельник</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;19.00&quot;}">19.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:10}">10</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Театр Маяковского\nспектакль \&quot;Обломов\&quot;&quot;}">Театр Маяковского<br />спектакль "Обломов"</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Литература&quot;}">Литература</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Рышкова В.В.&quot;}">Рышкова В.В.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:8}">8</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;суббота&quot;}">суббота</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;11.00&quot;}">11.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:8}">8</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Путешествие по Москве. Мясницкая улица.&quot;}">Путешествие по Москве. Мясницкая улица.</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;История&quot;}">История</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Чельцов К.Ю.&quot;}">Чельцов К.Ю.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:13}">13</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;среда&quot;}">среда</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;11.30&quot;}">11.30</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:3}">3</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Музей минералогии им.Ферсмана&quot;}">Музей минералогии им.Ферсмана</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Окружающий мир&quot;}">Окружающий мир</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Голубятникова С.С.&quot;}">
                                    <div>
                                        <div>Голубятникова С.С.</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:14}">14</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;четверг&quot;}">четверг</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;10.00&quot;}">10.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2}">2</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Музей \&quot;Огни Москвы\&quot;&quot;}">Музей "Огни Москвы"</td>
                                <td>&nbsp;</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Седых М.Л.&quot;}">Седых М.Л.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:16}">16</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;суббота&quot;}">суббота</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;19.00&quot;}">19.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:8}">8</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;МХТ им.А.П.Чехова\nСпектакль \&quot;Шинель\&quot;&quot;}">МХТ им.А.П.Чехова<br />Спектакль "Шинель"</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Литература&quot;}">Литература</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:21}">21</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;четверг&quot;}">четверг</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;14.00&quot;}">14.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:44872}" data-sheets-numberformat="{&quot;1&quot;:5,&quot;2&quot;:&quot;d-m&quot;,&quot;3&quot;:1}">7-11</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Выставка \&quot;Память поколений\&quot;\nв Центральном Манеже&quot;}">Выставка "Память поколений"<br />в Центральном Манеже</td>
                                <td>&nbsp;</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Бывшева Ю.А.\nРыжова О.Б.&quot;}">Бывшева Ю.А.<br />Рыжова О.Б.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:23}">23</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;суббота&quot;}">суббота</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;15.00&quot;}">15.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:6}">6</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Театр Модерн. Спектакль \&quot;Путешествие Маленького Принца\&quot;&quot;}">Театр Модерн. Спектакль "Путешествие Маленького Принца"</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Литература&quot;}">Литература</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Воронкова И.Е,\nДарашевич А.А.&quot;}">Воронкова И.Е,<br />Дарашевич А.А.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:25}">25</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;понедельник&quot;}">понедельник</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;15.00&quot;}">15.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:8}">8</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Музей древнерусского искусства им.А.Рублева&quot;}">Музей древнерусского искусства им.А.Рублева</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Древнерусская литература&quot;}">Древнерусская литература</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Стриевская Е.К.\nИванова Е.А.&quot;}">Стриевская Е.К.<br />Иванова Е.А.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:26}">26</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;вторник&quot;}">вторник</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;14.30&quot;}">14.30</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:6}">6</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;ГМИИ им.А.С.Пушкина.\nЭкскурсия \&quot;Искусство Древнего Рима\&quot;&quot;}">ГМИИ им.А.С.Пушкина.<br />Экскурсия "Искусство Древнего Рима"</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;МХК&quot;}">МХК</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Тихонова Т.С.\nДарашевич А.А. Воронкова И.Е.&quot;}">
                                    <div>
                                        <div>Тихонова Т.С.<br />Дарашевич А.А. Воронкова И.Е.</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:26}">26</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;вторник&quot;}">вторник</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;16.00&quot;}">16.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:10.11}">10,11</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;ГМИИ им.А.С.Пушкина.\nЗанятие в залах&quot;}">ГМИИ им.А.С.Пушкина.<br />Занятие в залах</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;МХК&quot;}">МХК</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Тихонова Т.С.&quot;}">Тихонова Т.С.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;13-17&quot;}">13-17</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:44652}" data-sheets-numberformat="{&quot;1&quot;:5,&quot;2&quot;:&quot;d-m&quot;,&quot;3&quot;:1}">1-4</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Мероприятия, посвященные празднику День Матери&quot;}">
                                    <div>
                                        <div>Мероприятия, посвященные празднику День Матери</div>
                                    </div>
                                </td>
                                <td>&nbsp;</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;кураторы классов&quot;}">
                                    <div>
                                        <div>кураторы классов</div>
                                    </div>
                                </td>
                            </tr>
                            <tr  class="table-success">

                                <td colspan="7" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;2 триместр 2022-2023 уч.года\nДЕКАБРЬ 2022&quot;}">2 триместр 2022-2023 уч.года</td>

                            </tr>
                             <tr  class="table-secondary">

                                <td colspan="7" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;2 триместр 2022-2023 уч.года\nДЕКАБРЬ 2022&quot;}">ДЕКАБРЬ 2022</td>

                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:1}">1</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;воскресенье&quot;}">воскресенье</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;13.00&quot;}">13.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:5}">5</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;ГМИИ им.А.С.Пушкина.\nЭкскурсия \&quot;Искусство Древнего Египта\&quot;&quot;}">ГМИИ им.А.С.Пушкина.<br />Экскурсия "Искусство Древнего Египта"</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;МХК&quot;}">МХК</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Тихонова Т.С.\nВоронкова И.Е.\nБуракова К.С.&quot;}">Тихонова Т.С.<br />Воронкова И.Е.<br />Буракова К.С.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:1}">1</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;воскресенье&quot;}">воскресенье</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;15.00&quot;}">15.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:7}">7</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Дом музыки\nЛитературно-музыкальная композиция\n \&quot;Моцарт и Сальери\&quot;&quot;}">Дом музыки<br />Литературно-музыкальная композиция<br /> "Моцарт и Сальери"</td>
                                <td>&nbsp;</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Себина Е.Н.\nРыжова О.Б.&quot;}">Себина Е.Н.<br />Рыжова О.Б.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:3}">3</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;понедельник&quot;}">понедельник</td>
                                <td>&nbsp;</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:9}">9</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;&laquo;Орбита школьных проектов&raquo;\nзащита проектов&quot;}">&laquo;Орбита школьных проектов&raquo;<br />защита проектов</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;МХК&quot;}">МХК</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Себина Е.Н.&quot;}">Себина Е.Н.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:4}">4</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;вторник&quot;}">вторник</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;10.00&quot;}">10.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:44866}" data-sheets-numberformat="{&quot;1&quot;:5,&quot;2&quot;:&quot;d-m&quot;,&quot;3&quot;:1}">1-11</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Введение во храм Пресвятой Богородицы, Литургия,\nПосвящение в первоклассники&quot;}">
                                    <div>
                                        <div>Введение во храм Пресвятой Богородицы, Литургия,<br />Посвящение в первоклассники</div>
                                    </div>
                                </td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:6}">6</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;четверг&quot;}">четверг</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;19.00&quot;}">19.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:10}">10</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Театр им.Моссовета.\nСпектакль \&quot;Р.Р.Р.\&quot; (по роману Ф.М.Достоевского \&quot;Преступление и наказание\&quot;&quot;}">Театр им.Моссовета.<br />Спектакль "Р.Р.Р." (по роману Ф.М.Достоевского "Преступление и наказание"</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Литература&quot;}">Литература</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Себина Е.Н.\nБывшева Ю.А.\nВоронкова И.Е.&quot;}">Себина Е.Н.<br />Бывшева Ю.А.<br />Воронкова И.Е.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:6}">6</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;четверг&quot;}">четверг</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;11.00&quot;}">11.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:6}">6</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Начало работы радио гимназии\n\&quot;Я расскажу вам о Войне...\&quot;\nТема передачи \&quot;Оборона Москвы\&quot;&quot;}">Начало работы радио гимназии<br />"Я расскажу вам о Войне..."<br />Тема передачи "Оборона Москвы"</td>
                                <td>&nbsp;</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Рышкова В.В.\nРыжова В.В.&quot;}">Рышкова В.В.<br />Рыжова В.В.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:10}">10</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;вторник&quot;}">вторник</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;12.00&quot;}">12.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:3}">3</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Экскурсия в храм свт.Николая в Кленниках&quot;}">Экскурсия в храм свт.Николая в Кленниках</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Закон Божий&quot;}">Закон Божий</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Голубятникова С.С.&quot;}">
                                    <div>
                                        <div>Голубятникова С.С.</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:10}">10</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;вторник&quot;}">вторник</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;13.40&quot;}">13.40</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:7}">7</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Третьковская галерея\nЗанятие в залах\n&laquo;Тургенев и русские художники&raquo;&quot;}">Третьковская галерея<br />Занятие в залах<br />&laquo;Тургенев и русские художники&raquo;</td>
                                <td>&nbsp;</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Себина Е.Н.\nРыжова О.Б.&quot;}">Себина Е.Н.<br />Рыжова О.Б.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:13}">13</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;пятница&quot;}">пятница</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;13.30&quot;}">13.30</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:5}">5</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Дарвиновский музй\nЭкскурсия \&quot;Животные в сказках\&quot;&quot;}">Дарвиновский музй<br />Экскурсия "Животные в сказках"</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Литература&quot;}">Литература</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Себина Е.Н.\nВоронкова И.Е.\nБуракова К.С.&quot;}">Себина Е.Н.<br />Воронкова И.Е.<br />Буракова К.С.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:16}">16</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;понедельник&quot;}">понедельник</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;14.30&quot;}">14.30</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:7}">7</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Оружейная палата Кремля&quot;}">Оружейная палата Кремля</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;МХК&quot;}">МХК</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Тихонова Т.С.\nРыжова О.Б.&quot;}">Тихонова Т.С.<br />Рыжова О.Б.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:17}">17</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;вторник&quot;}">вторник</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;19.00&quot;}">19.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:9}">9</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Театр Вахтангова\nСпектакль \&quot;Евгений Онегин\&quot;&quot;}">Театр Вахтангова<br />Спектакль "Евгений Онегин"</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Литература&quot;}">Литература</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Тихонова Т.С.&quot;}">Тихонова Т.С.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:25}">25</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;среда&quot;}">среда</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;19.00&quot;}">19.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:11}">11</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;ЛаТеатр\nСпектакль \&quot;Вишневый сад\&quot;&quot;}">ЛаТеатр<br />Спектакль "Вишневый сад"</td>
                                <td>&nbsp;</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Рыжова О.Б.&quot;}">Рыжова О.Б.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:19}">19</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;четверг&quot;}">четверг</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;10.00-14.00&quot;}">10.00-14.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:44866}" data-sheets-numberformat="{&quot;1&quot;:5,&quot;2&quot;:&quot;d-m&quot;,&quot;3&quot;:1}">1-11</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Рождественская ярмарка&quot;}">Рождественская ярмарка</td>
                                <td>&nbsp;</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Воронкова И.Е.\nШестакова С.В.\nНенова Л.В.&quot;}">Воронкова И.Е.<br />Шестакова С.В.<br />Ненова Л.В.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:25}">25</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;среда&quot;}">среда</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;12.30&quot;}">12.30</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:44652}" data-sheets-numberformat="{&quot;1&quot;:5,&quot;2&quot;:&quot;d-m&quot;,&quot;3&quot;:1}">1-4</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Праздник \&quot;В ожидании Рождества\&quot;\nспектакль&quot;}">Праздник "В ожидании Рождества"<br />спектакль</td>
                                <td>&nbsp;</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Седых М.Л.&quot;}">Седых М.Л.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:26}">26</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;четверг&quot;}">четверг</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;13.00&quot;}">13.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:44870}" data-sheets-numberformat="{&quot;1&quot;:5,&quot;2&quot;:&quot;d-m&quot;,&quot;3&quot;:1}">5-11</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Молебен на окончание года,\n праздник \&quot;В ожидании Рождества\&quot; (Средняя, старшая школа)&quot;}">
                                    <div>
                                        <div>Молебен на окончание года,<br /> праздник "В ожидании Рождества" (Средняя, старшая школа)</div>
                                    </div>
                                </td>
                                <td>&nbsp;</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Воронкова И.Е.&quot;}">Воронкова И.Е.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:27}">27</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;пятница&quot;}">пятница</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;19.00&quot;}">19.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:6}">6</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Центр Павла Слободкина\nЛитературно-музыкальная композиция \&quot;Метель\&quot;&quot;}">
                                    <div>
                                        <div>Центр Павла Слободкина<br />Литературно-музыкальная композиция "Метель"</div>
                                    </div>
                                </td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:30}">30</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;понедельник&quot;}">понедельник</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Поездка с подарками в Детскую больницу&quot;}">Поездка с подарками в Детскую больницу</td>
                                <td>&nbsp;</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Воронкова И.Е.&quot;}">Воронкова И.Е.</td>
                            </tr>
                            <tr class="table-secondary">
                                <td colspan="7" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;ЯНВАРЬ 2023&quot;}">ЯНВАРЬ 2023</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:11}">11</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;суббота&quot;}">суббота</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;10.00&quot;}">10.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:44872}" data-sheets-numberformat="{&quot;1&quot;:5,&quot;2&quot;:&quot;d-m&quot;,&quot;3&quot;:1}">7-11</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Поездка в Православный детский приют \&quot;Покров\&quot;&quot;}">
                                    <div>
                                        <div>Поездка в Православный детский приют "Покров"</div>
                                    </div>
                                </td>
                                <td>&nbsp;</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Бывшева Ю.А.\nВоронкова И.Е.\nИванова Е.А.&quot;}">Бывшева Ю.А.<br />Воронкова И.Е.<br />Иванова Е.А.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:13}">13</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;понедельник&quot;}">понедельник</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;11.00&quot;}">11.00</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;дошкольное отделение&quot;}">дошкольное отделение</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Рождественский праздник&quot;}">Рождественский праздник</td>
                                <td>&nbsp;</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Колненкова И.Д.&quot;}">
                                    <div>
                                        <div>Колненкова И.Д.</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:14}">14</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;вторник&quot;}">вторник</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;10.00&quot;}">10.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:44866}" data-sheets-numberformat="{&quot;1&quot;:5,&quot;2&quot;:&quot;d-m&quot;,&quot;3&quot;:1}">1-11</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Молебен с пением рождественских песнопений и колядок&quot;}">
                                    <div>
                                        <div>Молебен с пением рождественских песнопений и колядок</div>
                                    </div>
                                </td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:15}">15</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;среда&quot;}">среда</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;15.00&quot;}">15.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:11}">11</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Музей М.Горького&quot;}">Музей М.Горького</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Литература&quot;}">Литература</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Рыжова О.Б.\nСебина Е.Н.&quot;}">Рыжова О.Б.<br />Себина Е.Н.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:16}">16</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;четверг&quot;}">четверг</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;16.00&quot;}">16.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:8}">8</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Музей А.С.Пушкина,\nэкскурсия \&quot;Пушкина в работе над пугачевской темой\&quot;&quot;}">Музей А.С.Пушкина,<br />экскурсия "Пушкина в работе над пугачевской темой"</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Литература&quot;}">Литература</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Себина Е.Н.\nСтриевская Е.К.&quot;}">Себина Е.Н.<br />Стриевская Е.К.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:17}">17</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;пятница&quot;}">пятница</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;15.00&quot;}">15.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:7}">7</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Музей обороны Москвы&quot;}">Музей обороны Москвы</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Патриотическое воспитание&quot;}">Патриотическое воспитание</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Воронкова И.Е.\nРыжова О.Б.&quot;}">Воронкова И.Е.<br />Рыжова О.Б.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:21}">21</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;вторник&quot;}">вторник</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;14.30&quot;}">14.30</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:5}">5</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Музей А.С.Пушкина,\n\&quot;Но детских лет люблю воспоминанье...\&quot;&quot;}">Музей А.С.Пушкина,<br />"Но детских лет люблю воспоминанье..."</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Литература&quot;}">Литература</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Себина Е.Н.\nСципио А.Д.\nВоронкова И.Е.&quot;}">Себина Е.Н.<br />Сципио А.Д.<br />Воронкова И.Е.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:21}">21</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;вторник&quot;}">вторник</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;15.30&quot;}">15.30</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:5}">5</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Музей А.С.Пушкина,\nэкскурсия \&quot;В одной отдаленной губернии\&quot;&quot;}">Музей А.С.Пушкина,<br />экскурсия "В одной отдаленной губернии"</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Литература&quot;}">Литература</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Себина Е.Н.\nДарашевич А.А.&quot;}">Себина Е.Н.<br />Дарашевич А.А.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:22}">22</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;среда&quot;}">среда</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;19.00&quot;}">19.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:8}">8</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Малый театр\nСпектакль \&quot;Свои люди - сочтемся\&quot;&quot;}">Малый театр<br />Спектакль "Свои люди - сочтемся"</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Литература&quot;}">Литература</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Себина Е.Н.\nСтриевская Е.К.&quot;}">Себина Е.Н.<br />Стриевская Е.К.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:24}">24</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;пятница&quot;}">пятница</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;11.00&quot;}">11.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:44866}" data-sheets-numberformat="{&quot;1&quot;:5,&quot;2&quot;:&quot;d-m&quot;,&quot;3&quot;:1}">1-11</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Радиолинейка \&quot;Поэты, опаленные войной...\&quot;&quot;}">Радиолинейка "Поэты, опаленные войной..."</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Патриотическое воспитание&quot;}">Патриотическое воспитание</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Дарашевич А.А.&quot;}">Дарашевич А.А.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:28}">28</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;вторник&quot;}">вторник</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;15.00&quot;}">15.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:7}">7</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Третьяковская галерея\nУрок в музее \n&laquo;Гоголь и русские художники&raquo;&quot;}">Третьяковская галерея<br />Урок в музее <br />&laquo;Гоголь и русские художники&raquo;</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Литература&quot;}">Литература</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Себина Е.Н.\nРыжова О.Б.&quot;}">Себина Е.Н.<br />Рыжова О.Б.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:29}">29</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;среда&quot;}">среда</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;10.00&quot;}">10.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:40429}" data-sheets-numberformat="{&quot;1&quot;:5,&quot;2&quot;:&quot;d,m,yy&quot;,&quot;3&quot;:1}">8,9,10</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Автобусная экскурсия в аэропорт \&quot;Домодедово\&quot;&quot;}">Автобусная экскурсия в аэропорт "Домодедово"</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Профориентация&quot;}">Профориентация</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Воронкова И.Е.\nБывшева Ю.А.\nНенова Л.В.\nСтриевская Е.К.&quot;}">Воронкова И.Е.<br />Бывшева Ю.А.<br />Ненова Л.В.<br />Стриевская Е.К.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:29}">29</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;среда&quot;}">среда</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;19.00&quot;}">19.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:11}">11</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Театр на Юго-Западе\nСпектакль \&quot;На дне\&quot;&quot;}">Театр на Юго-Западе<br />Спектакль "На дне"</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Литература&quot;}">Литература</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Рыжова О.Б.&quot;}">Рыжова О.Б.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:29}">29</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;среда&quot;}">среда</td>
                                <td>&nbsp;</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:7}">7</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Третьяковская Галерея. Занятие в залах.\nТема: \&quot;Гоголь и русские художники\&quot;&quot;}">Третьяковская Галерея. Занятие в залах.<br />Тема: "Гоголь и русские художники"</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Литература&quot;}">Литература</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Себина Е.Н. \nРыжова О.Б.&quot;}">Себина Е.Н. <br />Рыжова О.Б.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:30}">30</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;четверг&quot;}">четверг</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;14.00&quot;}">14.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:5}">5</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Покровский храм в Ясенево&quot;}">Покровский храм в Ясенево</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Закон Божий&quot;}">Закон Божий</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Бывшева Ю.А.&quot;}">Бывшева Ю.А.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:31}">31</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;пятница&quot;}">пятница</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;11.00&quot;}">11.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:10}">10</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Радиолинейка \&quot;Сталинград\&quot;&quot;}">Радиолинейка "Сталинград"</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Патриотическое воспитание&quot;}">Патриотическое воспитание</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Бывшева Ю.А.&quot;}">Бывшева Ю.А.</td>
                            </tr>
                            <tr class="table-secondary">
                                <td colspan="7" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;ФЕВРАЛЬ 2023&quot;}">ФЕВРАЛЬ 2023</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:1}">1</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;суббота&quot;}">суббота</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;19.00&quot;}">19.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:10}">10</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Театр Апарте\nСпектакль \&quot;Обломов\&quot;&quot;}">Театр Апарте<br />Спектакль "Обломов"</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Литература&quot;}">Литература</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Бывшева Ю.А.&quot;}">Бывшева Ю.А.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:5}">5</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;среда&quot;}">среда</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;15.00&quot;}">15.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:40825}" data-sheets-numberformat="{&quot;1&quot;:5,&quot;2&quot;:&quot;d,m,yy&quot;,&quot;3&quot;:1}">9,10,11</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Музей обороны Москвы&quot;}">Музей обороны Москвы</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Патриотическое воспитание&quot;}">Патриотическое воспитание</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Воронкова И.Е.\nБывшева Ю.А.\nРыжова О.Б.\nНенова Л.В.&quot;}">Воронкова И.Е.<br />Бывшева Ю.А.<br />Рыжова О.Б.<br />Ненова Л.В.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:7}">7</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;пятница&quot;}">пятница</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;19.00&quot;}">19.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:6}">6</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Московский государственный историко-этнографический театр\nспектакль \&quot;Ученик Лицея\&quot;&quot;}">Московский государственный историко-этнографический театр<br />спектакль "Ученик Лицея"</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Литература&quot;}">Литература</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Воронкова И.Е.\nДарашевич А.А.&quot;}">Воронкова И.Е.<br />Дарашевич А.А.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:10}">10</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;понедельник&quot;}">понедельник</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;15.00&quot;}">15.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:8}">8</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Музей книги РГБ&quot;}">Музей книги РГБ</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Древнерусская литература&quot;}">Древнерусская литература</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Иванова Е.А.\nСтриевкая Е.К.&quot;}">Иванова Е.А.<br />Стриевкая Е.К.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:12}">12</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;среда&quot;}">среда</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;14.30&quot;}">14.30</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:5.6}">5,6</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Музей обороны Москвы&quot;}">Музей обороны Москвы</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Патриотическое воспитание&quot;}">Патриотическое воспитание</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Воронкова И.Е.\nСципио А.Д.\nДарашевич А.А.&quot;}">Воронкова И.Е.<br />Сципио А.Д.<br />Дарашевич А.А.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:13}">13</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;четверг&quot;}">четверг</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;15.00&quot;}">15.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:7}">7</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Музей А.Н.Толстого в Хамовниках\nобзорная экскурсия&quot;}">Музей А.Н.Толстого в Хамовниках<br />обзорная экскурсия</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Литература&quot;}">Литература</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Себина Е.Н.\nРыжова О.Б.&quot;}">Себина Е.Н.<br />Рыжова О.Б.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:14}">14</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;пятница&quot;}">пятница</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;11.00&quot;}">11.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:44866}" data-sheets-numberformat="{&quot;1&quot;:5,&quot;2&quot;:&quot;d-m&quot;,&quot;3&quot;:1}">1-11</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Радиолинейка \&quot;Несломленные духом\&quot;\nВстреча с узницей концлагеря&quot;}">Радиолинейка "Несломленные духом"<br />Встреча с узницей концлагеря</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Патриотическое воспитание&quot;}">Патриотическое воспитание</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Рыжова О.Б.&quot;}">Рыжова О.Б.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:19}">19</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;среда&quot;}">среда</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;12.30&quot;}">12.30</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:44652}" data-sheets-numberformat="{&quot;1&quot;:5,&quot;2&quot;:&quot;d-m&quot;,&quot;3&quot;:1}">1-4</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Спортивные соревнования\n\&quot;Богатырские забавы\&quot;&quot;}">Спортивные соревнования<br />"Богатырские забавы"</td>
                                <td>&nbsp;</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Фурсов А.С.&quot;}">Фурсов А.С.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:20}">20</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;четверг&quot;}">четверг</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;11.00&quot;}">11.00</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;2, 3&quot;}">2, 3</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Производство мороженого \&quot;Чистая линия\&quot;\nэкскурсия&quot;}">Производство мороженого "Чистая линия"<br />экскурсия</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Профориентация&quot;}">Профориентация</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Голубяиникова С.С.\nСедых М.Л.&quot;}">
                                    <div>
                                        <div>Голубяиникова С.С.<br />Седых М.Л.</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:16}">16</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;пятница&quot;}">пятница</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;13.40&quot;}">13.40</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:44870}" data-sheets-numberformat="{&quot;1&quot;:5,&quot;2&quot;:&quot;d-m&quot;,&quot;3&quot;:1}">5-11</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Масленица в старшей школе&quot;}">Масленица в старшей школе</td>
                                <td>&nbsp;</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;кураторы&quot;}">кураторы</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:16}">16</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;пятница&quot;}">пятница</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;19.00&quot;}">19.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:8.9}">8,9</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Театр Апарте\nспектакль \&quot;Ревизор\&quot;&quot;}">Театр Апарте<br />спектакль "Ревизор"</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Литература&quot;}">Литература</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Рыжова О.Б.,\nБывшева Ю.А.&quot;}">Рыжова О.Б.,<br />Бывшева Ю.А.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:27}">27</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;вторник&quot;}">вторник</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;14.15&quot;}">14.15</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:44870}" data-sheets-numberformat="{&quot;1&quot;:5,&quot;2&quot;:&quot;d-m&quot;,&quot;3&quot;:1}">5-11</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;День словесности\nВстреча-урок, посвященные словарям&quot;}">День словесности<br />Встреча-урок, посвященные словарям</td>
                                <td>&nbsp;</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Франгулян Л.Р.\nСтриевская М.К.&quot;}">
                                    <div>
                                        <div>Франгулян Л.Р.<br />Стриевская М.К.</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:28}">28</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;среда&quot;}">среда</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;12.30&quot;}">12.30</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:1}">1</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Прздник Азбуки&quot;}">Прздник Азбуки</td>
                                <td>&nbsp;</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Шестакова С.В.&quot;}">Шестакова С.В.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:28}">28</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;среда&quot;}">среда</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;19.00&quot;}">19.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:10}">10</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Театр на Покровке\nспектакль \&quot;Война и мир. Княжна Марья.\&quot;&quot;}">Театр на Покровке<br />спектакль "Война и мир. Княжна Марья."</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Литература&quot;}">Литература</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Рыжова О.Б.&quot;}">Рыжова О.Б.</td>
                            </tr>
                            <tr class="table-secondary">
                                <td colspan="7" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;МАРТ 2023&quot;}">МАРТ 2023</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:3}">3</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;суббота&quot;}">суббота</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;11.00&quot;}">11.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:5}">5</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;ГМИИ им.А.С.Пушкина.\nЭкскурсия \&quot;Искусство Древней Греции\&quot;&quot;}">ГМИИ им.А.С.Пушкина.<br />Экскурсия "Искусство Древней Греции"</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;МХК&quot;}">МХК</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Тихонова Т.С.&quot;}">Тихонова Т.С.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:3}">3</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;суббота&quot;}">суббота</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;13.00&quot;}">13.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:6}">6</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;ГМИИ им.А.С.Пушкина.\nЭкскурсия \&quot;Искусство средневековья\&quot;&quot;}">ГМИИ им.А.С.Пушкина.<br />Экскурсия "Искусство средневековья"</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;МХК&quot;}">МХК</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Тихонова Т.С.\nДрюпина А.В.\nВоронкова И.Е.&quot;}">Тихонова Т.С.<br />Дрюпина А.В.<br />Воронкова И.Е.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:3}">3</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;суббота&quot;}">суббота</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;14.00&quot;}">14.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:7}">7</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;ГМИИ им.А.С.Пушкина.\nЭкскурсия \&quot;Искусство Возрождения\&quot;&quot;}">ГМИИ им.А.С.Пушкина.<br />Экскурсия "Искусство Возрождения"</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;МХК&quot;}">МХК</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Тихонова Т.С.\nНенова Л.В.&quot;}">Тихонова Т.С.<br />Ненова Л.В.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:11}">11</td>
                                <td>&nbsp;</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;19.00&quot;}">19.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:9}">9</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Театр на Покровке\nспектакль \&quot;Горе от ума\&quot;&quot;}">Театр на Покровке<br />спектакль "Горе от ума"</td>
                                <td>&nbsp;</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Тихонова Т.С.&quot;}">Тихонова Т.С.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:21}">21</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;среда&quot;}">среда</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;12.00&quot;}">12.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2}">2</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Покровский храм в Ясенево&quot;}">Покровский храм в Ясенево</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Закон Божий&quot;}">Закон Божий</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Бывшева Ю.А.\nРышкова В.В.\nГолубятникова С.С.\nХодькова Л.Г.&quot;}">
                                    <div>
                                        <div>Бывшева Ю.А.<br />Рышкова В.В.<br />Голубятникова С.С.<br />Ходькова Л.Г.</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:24}">24</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;суббота&quot;}">суббота</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;14.00&quot;}">14.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:5}">5</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Третьяковская галерея\nЗанятие в залах\n\&quot;Художники Абрамцевского кружка\&quot;&quot;}">Третьяковская галерея<br />Занятие в залах<br />"Художники Абрамцевского кружка"</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Литература&quot;}">Литература</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Себина Е.Н,\n\nВоронкова И.Е.&quot;}">Себина Е.Н,<br /><br />Воронкова И.Е.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:28}">28</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;среда&quot;}">среда</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;11.00&quot;}">11.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:3}">3</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Марфо-Мариинская обитель&quot;}">Марфо-Мариинская обитель</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Закон Божий&quot;}">Закон Божий</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Бывшева Ю.А.&quot;}">Бывшева Ю.А.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:29}">29</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;четверг&quot;}">четверг</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;12.30, 14.00&quot;}">12.30, 14.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:4}">4</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Третьяковская галерея\nЗанятие в залах\n\&quot;Художники Абрамцевского кружка\&quot;&quot;}">Третьяковская галерея<br />Занятие в залах<br />"Художники Абрамцевского кружка"</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Литература&quot;}">Литература</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Себина Е.Н,\nВолкова Г.А.,\nСедых М.Л.&quot;}">Себина Е.Н,<br />Волкова Г.А.,<br />Седых М.Л.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:29}">29</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;четверг&quot;}">четверг</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;19.00&quot;}">19.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:9}">9</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Театр Вл.Маяковского\n\&quot;Мертвые души\&quot;&quot;}">Театр Вл.Маяковского<br />"Мертвые души"</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Литература&quot;}">Литература</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Рыжова О.Б.,&quot;}">Рыжова О.Б.,</td>
                            </tr>
                            <tr  class="table-success">
                                 <td colspan="7" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;III триместр 2012-2023 уч. год\nАПРЕЛЬ 2023&quot;}">III триместр 2012-2023 уч. год</td>
                           </tr>
                          <tr class="table-secondary">
                                 <td colspan="7" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;III триместр 2012-2023 уч. год\nАПРЕЛЬ 2023&quot;}">АПРЕЛЬ 2023</td>
                           </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2}">2</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;понедельник&quot;}">понедельник</td>
                                <td>&nbsp;</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:3}">3</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Неделя детской книги \n\&quot;Лоцманы книжных морей\&quot;&quot;}">Неделя детской книги <br />"Лоцманы книжных морей"</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Литература&quot;}">Литература</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Летникова Е.А.&quot;}">Летникова Е.А.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:18}">18</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;среда&quot;}">среда</td>
                                <td>&nbsp;</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:44652}" data-sheets-numberformat="{&quot;1&quot;:5,&quot;2&quot;:&quot;d-m&quot;,&quot;3&quot;:1}">1-4</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Пасхальный праздник в начальной школе\nСпектакль \&quot;Пугливая овечка\&quot;&quot;}">Пасхальный праздник в начальной школе<br />Спектакль "Пугливая овечка"</td>
                                <td>&nbsp;</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Седых М.Л.&quot;}">Седых М.Л.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:19}">19</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;четверг&quot;}">четверг</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;16.00&quot;}">16.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:8.9}">8,9</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Музей Н.В.Гоголя,\nИнтерактивное занятие \&quot;Ревизор\&quot;&quot;}">Музей Н.В.Гоголя,<br />Интерактивное занятие "Ревизор"</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Литература&quot;}">Литература</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Себина Е.Н.\nБывшева Ю.А.\nРыжова О.Б.&quot;}">Себина Е.Н.<br />Бывшева Ю.А.<br />Рыжова О.Б.</td>
                            </tr>
                            <tr class="table-secondary">
                                <td colspan="7" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;МАЙ 2023&quot;}">МАЙ 2023</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:8}">8</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;среда&quot;}">среда</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:44692}" data-sheets-numberformat="{&quot;1&quot;:5,&quot;2&quot;:&quot;dd.mm&quot;,&quot;3&quot;:1}">11.05</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:44652}" data-sheets-numberformat="{&quot;1&quot;:5,&quot;2&quot;:&quot;d-m&quot;,&quot;3&quot;:1}">1-4</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;День Победы\nПраздник в начальной школе&quot;}">День Победы<br />Праздник в начальной школе</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:8}">8</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;среда&quot;}">среда</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;13.00&quot;}">13.00</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:44866}" data-sheets-numberformat="{&quot;1&quot;:5,&quot;2&quot;:&quot;d-m&quot;,&quot;3&quot;:1}">1-11</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Бессмертный полк&quot;}">Бессмертный полк</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:24}">24</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;суббота&quot;}">суббота</td>
                                <td>&nbsp;</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;5, 6&quot;}">5, 6</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Автобусная поездка в Захарово-Вяземы&quot;}">Автобусная поездка в Захарово-Вяземы</td>
                                <td>&nbsp;</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Себина Е.Н.\nРышкова В.В.\nРыжова О.Б.\nВоронкова И.Е.\nЧельцов К.Ю.&quot;}">Себина Е.Н.<br />Рышкова В.В.<br />Рыжова О.Б.<br />Воронкова И.Е.<br />Чельцов К.Ю.</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:21}">21</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;понедельник&quot;}">понедельник</td>
                                <td>&nbsp;</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:44866}" data-sheets-numberformat="{&quot;1&quot;:5,&quot;2&quot;:&quot;d-m&quot;,&quot;3&quot;:1}">1-11</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Престольный праздник&quot;}">Престольный праздник</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:23}">23</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;четверг&quot;}">четверг</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Праздник \&quot;Последний звонок\&quot;&quot;}">Праздник "Последний звонок"</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:44716}" data-sheets-numberformat="{&quot;1&quot;:5,&quot;2&quot;:&quot;dd.mm&quot;,&quot;3&quot;:1}">04.06</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;вторник&quot;}">вторник</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;10.30&quot;}">10.30</td>
                                <td data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:4}">4</td>
                                <td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Праздник \&quot;Последний звонок\&quot; в начальной школе&quot;}">
                                    <div>
                                        <div>Праздник "Последний звонок" в начальной школе</div>
                                    </div>
                                </td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
