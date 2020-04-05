@extends('layouts.app')

@section('content')

<main class="page page--financial-reports">
      <h3>Финансовые отчеты</h3>
      <!-- SECTION-->
      <section class="financial-reports-years">
        <div class="financial-reports-years__wrap">
          <div class="container">
            <div class="tabs tabs--theme--blue">
              <ul class="tabs__list row">
                <li class="tab-item tab-item--active" data-tab-index="0">Программы</li>
                <li class="tab-item" data-tab-index="1">Проекты</li>
              </ul>
              <div class="tabs__content">
                <!-- - -->
                <div class="tab-content-item tab-content-item--active" data-tab-index="0">
                  <ul class="row">
                    <li class="financial-report-item financial-reports-years__item" data-report-year="2012">
                      <p class="financial-report-item__year">2012</p>
                    </li>
                    <li class="financial-report-item financial-reports-years__item" data-report-year="2013">
                      <p class="financial-report-item__year">2013</p>
                    </li>
                    <li class="financial-report-item financial-reports-years__item" data-report-year="2014">
                      <p class="financial-report-item__year">2014</p>
                    </li>
                    <li class="financial-report-item financial-reports-years__item" data-report-year="2015">
                      <p class="financial-report-item__year">2015</p>
                    </li>
                    <li class="financial-report-item financial-reports-years__item" data-report-year="2016">
                      <p class="financial-report-item__year">2016</p>
                    </li>
                    <li class="financial-report-item financial-reports-years__item" data-report-year="2017">
                      <p class="financial-report-item__year">2017</p>
                    </li>
                    <li class="financial-report-item financial-reports-years__item" data-report-year="2018">
                      <p class="financial-report-item__year">2018</p>
                    </li>
                    <li class="financial-report-item financial-reports-years__item" data-report-year="2019">
                      <p class="financial-report-item__year">2019</p>
                    </li>
                    <li class="financial-report-item financial-reports-years__item" data-report-year="2020">
                      <p class="financial-report-item__year">2020</p>
                    </li>
                  </ul>
                </div>
                <!-- - -->
                <div class="tab-content-item" data-tab-index="1">
                  <ul class="row">
                    <li class="financial-report-item financial-reports-years__item" data-report-year="2012">
                      <p class="financial-report-item__year">2012</p>
                    </li>
                    <li class="financial-report-item financial-reports-years__item" data-report-year="2013">
                      <p class="financial-report-item__year">2013</p>
                    </li>
                    <li class="financial-report-item financial-reports-years__item" data-report-year="2014">
                      <p class="financial-report-item__year">2014</p>
                    </li>
                    <li class="financial-report-item financial-reports-years__item" data-report-year="2015">
                      <p class="financial-report-item__year">2015</p>
                    </li>
                    <li class="financial-report-item financial-reports-years__item" data-report-year="2016">
                      <p class="financial-report-item__year">2016</p>
                    </li>
                    <li class="financial-report-item financial-reports-years__item" data-report-year="2017">
                      <p class="financial-report-item__year">2017</p>
                    </li>
                    <li class="financial-report-item financial-reports-years__item" data-report-year="2018">
                      <p class="financial-report-item__year">2018</p>
                    </li>
                    <li class="financial-report-item financial-reports-years__item" data-report-year="2019">
                      <p class="financial-report-item__year">2019</p>
                    </li>
                    <li class="financial-report-item financial-reports-years__item" data-report-year="2020">
                      <p class="financial-report-item__year">2020</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- SECTION-->
      <section class="financial-reports-months">
        <div class="financial-reports-months__wrap">
          <button class="btn btn-close financial-reports-months__btn-close"></button>
          <ul class="financial-reports-months__list row-mg">
            <li class="financial-report-item financial-report-item--type--month financial-reports-months__item" data-report-year="2012">
              <p class="financial-report-item__month">Скачать отчет за</p><a class="financial-report-item__link" href="">Август</a>
            </li>
            <li class="financial-report-item financial-report-item--type--month financial-reports-months__item" data-report-year="2013">
              <p class="financial-report-item__month">Скачать отчет за</p><a class="financial-report-item__link" href="">Август</a>
            </li>
            <li class="financial-report-item financial-report-item--type--month financial-reports-months__item" data-report-year="2014">
              <p class="financial-report-item__month">Скачать отчет за</p><a class="financial-report-item__link" href="">Август</a>
            </li>
            <li class="financial-report-item financial-report-item--type--month financial-reports-months__item" data-report-year="2015">
              <p class="financial-report-item__month">Скачать отчет за</p><a class="financial-report-item__link" href="">Август</a>
            </li>
            <li class="financial-report-item financial-report-item--type--month financial-reports-months__item" data-report-year="2016">
              <p class="financial-report-item__month">Скачать отчет за</p><a class="financial-report-item__link" href="">Август</a>
            </li>
            <li class="financial-report-item financial-report-item--type--month financial-reports-months__item" data-report-year="2017">
              <p class="financial-report-item__month">Скачать отчет за</p><a class="financial-report-item__link" href="">Август</a>
            </li>
            <li class="financial-report-item financial-report-item--type--month financial-reports-months__item" data-report-year="2018">
              <p class="financial-report-item__month">Скачать отчет за</p><a class="financial-report-item__link" href="">Август</a>
            </li>
            <li class="financial-report-item financial-report-item--type--month financial-reports-months__item" data-report-year="2019">
              <p class="financial-report-item__month">Скачать отчет за</p><a class="financial-report-item__link" href="">Август</a>
            </li>
            <li class="financial-report-item financial-report-item--type--month financial-reports-months__item" data-report-year="2020">
              <p class="financial-report-item__month">Скачать отчет за</p><a class="financial-report-item__link" href="">Август</a>
            </li>
            <li class="financial-report-item financial-report-item--type--month financial-reports-months__item" data-report-year="2018">
              <p class="financial-report-item__month">Скачать отчет за</p><a class="financial-report-item__link" href="">Август</a>
            </li>
            <li class="financial-report-item financial-report-item--type--month financial-reports-months__item" data-report-year="2019">
              <p class="financial-report-item__month">Скачать отчет за</p><a class="financial-report-item__link" href="">Август</a>
            </li>
            <li class="financial-report-item financial-report-item--type--month financial-reports-months__item" data-report-year="2020">
              <p class="financial-report-item__month">Скачать отчет за</p><a class="financial-report-item__link" href="">Август</a>
            </li>
          </ul>
        </div>
      </section>
      <!-- SECTION                        -->
      <section class="financial-reports-action">
        <div class="financial-reports__wrap">
          <div class="action-block financial-reports__action-block bg-gradient--orange">
            <div class="container">
              <h3 class="action-block__question">Хотите участвовать в волонтерстве?</h3>
              <button class="btn btn--theme--white-to-blue action-block__btn">Напишите нам</button>
            </div>
          </div>
        </div>
      </section>
    </main>

@endsection