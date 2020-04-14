@extends('layouts.app')

@section('content')

<main class="page page-financial-reports">
      <h3>Финансовые отчеты</h3>
      <!-- SECTION-->
      <section class="financial-reports-years">
        <div class="financial-reports-years__wrap">
          <div class="container">
            <div class="tabs tabs--theme--blue">
              <ul class="tabs__list row">
                <li class="tab-item tab-item--active" data-tab-index="0">Поступления</li>
                <li class="tab-item" data-tab-index="1">Траты</li>
              </ul>
              <div class="tabs__content">
                <!-- - -->
                <div class="tab-content-item tab-content-item--active" data-tab-index="0">
                  <ul class="row">
                    @foreach($income_reports as $report)
                      @php
                        
                        $disabled_class = null;

                        if($report["disabled"] === true) {
                          $disabled_class = 'financial-report-item--disabled';
                        } 
                      @endphp

                      <li class="financial-report-item {{ $disabled_class }} financial-reports-years__item" data-report-type="income" data-report-year="{{  $report['disabled'] ? '' : $report['label'] }}">
                        <p class="financial-report-item__year">{{ $report['label'] }}</p>
                      </li>
                    @endforeach
                  </ul>
                </div>
                <!-- - -->
                <div class="tab-content-item" data-tab-index="1">
                  <ul class="row">
                    @foreach($waste_reports as $report)
                      @php
                        
                        $disabled_class = null;

                        if($report["disabled"] === true) {
                          $disabled_class = 'financial-report-item--disabled';
                        } 
                      @endphp

                      <li class="financial-report-item {{ $disabled_class }} financial-reports-years__item" data-report-type="waste" data-report-year="{{  $report['disabled'] ? '' : $report['label'] }}">
                        <p class="financial-report-item__year">{{ $report['label'] }}</p>
                      </li>
                    @endforeach
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
            <!-- Code -->
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
    
    <script src="/js/reports.js"></script>
@endsection