@extends('layouts.main')

@section('content')
    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up"> Гимназия Радонеж рекомендует. Театр.</h1>
            <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">учебный год 2022-23</p>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="{{ asset('assets/images/theatre.jpg')}}" alt="featured image" class="w-100">
            </section>
            <section class="post-content">
                <div class="row">
                    <div class="col-lg-9 mx-auto" data-aos="fade-up">
                        <h2 class="mb-4" data-aos="fade-up">Рекомендуемые театральные постановки</h2>
                        <table class="table">
                            <tbody>
                            <tr class="table-success">
                                <td>№</td>
                                <td>Название театра</td>
                                <td>Спектакль</td>
                                <td>возраст&nbsp;</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Историко-этнографический театр</td>
                                <td>"Ученик Лицея"</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Малый театр</td>
                                <td>Недоросль</td>
                                <td>14</td>
                            </tr>
                            <tr>
                                <td>&nbsp;3</td>
                                <td>Малый театр</td>
                                <td>Свои люди - сочтемся</td>
                                <td>15</td>
                            </tr>
                            <tr>
                                <td>4&nbsp;</td>
                                <td>Театр Апарте</td>
                                <td>Гамлет</td>
                                <td>16</td>
                            </tr>
                            <tr>
                                <td>5&nbsp;</td>
                                <td>Театр Апарте</td>
                                <td>Ревизор</td>
                                <td>14</td>
                            </tr>
                            <tr>
                                <td>6&nbsp;</td>
                                <td>Театр Апарте</td>
                                <td>Обломов</td>
                                <td>16</td>
                            </tr>
                            <tr>
                                <td>7&nbsp;</td>
                                <td>Театр им.Вл.Маяковского</td>
                                <td>Мертвые души</td>
                                <td>15</td>
                            </tr>
                            <tr>
                                <td>8&nbsp;</td>
                                <td>МТЮЗ</td>
                                <td>Черный монах</td>
                                <td>17</td>
                            </tr>
                            <tr>
                                <td>&nbsp;9</td>
                                <td>&nbsp;Модернъ</td>
                                <td>"Путешествие Маленького Принца"</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>&nbsp;10</td>
                                <td>Театр им.Моссовета</td>
                                <td>&nbsp;"Р.Р.Р."&nbsp;<br>(по роману Ф.М.Достоевского "Преступление и наказание")</td>
                                <td>16</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>МХТ им.Чехова</td>
                                <td>Шинель</td>
                                <td>14</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>&nbsp;Театр на Юго-Западе&nbsp;</td>
                                <td>&nbsp;На дне</td>
                                <td>16</td>
                            </tr>
                            <tr>
                                <td>13&nbsp;</td>
                                <td>&nbsp;Театр "Мастерская П.Фоменко"&nbsp;&nbsp;</td>
                                <td>&nbsp;Война и мир</td>
                                <td>16</td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Театр "Мастерская П.Фоменко" &nbsp;</td>
                                <td>Волки и овцы</td>
                                <td>16</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
