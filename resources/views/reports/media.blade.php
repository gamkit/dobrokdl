@extends('layouts.app')

@section('content')

<main class="page page--gallery-reports">
      <!-- SECTION-->
      <section class="gallery-reports">
        <div class="gallery-reports__wrap">
          <div class="container">
            <h4 class="txt-color--orange">Фотоотчеты</h4>
            <ul class="gallery-reports__reports-list owl-carousel gallery-reports__owl-carousel gallery-reports-list owl-carousel--custom-nav-2">
              <!-- - -->
              <li class="gallery-item">
                <div class="gallery-item__photo"><img class="img-responsive" src="/uploads/images/gallery_item.jpg" alt="gallery_item"></div>
                <div class="gallery-item__desc">
                  <div class="gallery-item__title">Отчет от 20.03.2019</div>
                  <div class="gallery-item__text">Благотворительный фонд социальной помощи и поддержки граждан</div><a class="btn btn--theme--blue gallery-item__btn" href="">Перейти</a>
                </div>
              </li>
              <!-- - -->
              <li class="gallery-item">
                <div class="gallery-item__photo"><img class="img-responsive" src="/uploads/images/gallery_item.jpg" alt="gallery_item"></div>
                <div class="gallery-item__desc">
                  <div class="gallery-item__title">Отчет от 20.03.2019</div>
                  <div class="gallery-item__text">Благотворительный фонд социальной помощи и поддержки граждан</div><a class="btn btn--theme--blue gallery-item__btn" href="">Перейти</a>
                </div>
              </li>
              <!-- - -->
              <li class="gallery-item">
                <div class="gallery-item__photo"><img class="img-responsive" src="/uploads/images/gallery_item.jpg" alt="gallery_item"></div>
                <div class="gallery-item__desc">
                  <div class="gallery-item__title">Отчет от 20.03.2019</div>
                  <div class="gallery-item__text">Благотворительный фонд социальной помощи и поддержки граждан</div><a class="btn btn--theme--blue gallery-item__btn" href="">Перейти</a>
                </div>
              </li>
              <!-- - -->
              <li class="gallery-item">
                <div class="gallery-item__photo"><img class="img-responsive" src="/uploads/images/gallery_item.jpg" alt="gallery_item"></div>
                <div class="gallery-item__desc">
                  <div class="gallery-item__title">Отчет от 20.03.2019</div>
                  <div class="gallery-item__text">Благотворительный фонд социальной помощи и поддержки граждан</div><a class="btn btn--theme--blue gallery-item__btn" href="">Перейти</a>
                </div>
              </li>
              <!-- - -->
              <li class="gallery-item">
                <div class="gallery-item__photo"><img class="img-responsive" src="/uploads/images/gallery_item.jpg" alt="gallery_item"></div>
                <div class="gallery-item__desc">
                  <div class="gallery-item__title">Отчет от 20.03.2019</div>
                  <div class="gallery-item__text">Благотворительный фонд социальной помощи и поддержки граждан</div><a class="btn btn--theme--blue gallery-item__btn" href="">Перейти</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- SECTION-->
      <section class="gallery-reports">
        <div class="gallery-reports__wrap">
          <div class="container">
            <h4 class="txt-color--blue">Видеоотчеты</h4>
            <ul class="gallery-reports__reports-list owl-carousel gallery-reports__owl-carousel gallery-reports-list owl-carousel--custom-nav-2">
              <!-- - -->
              <li class="gallery-item gallery-item--type--video">
                <div class="gallery-item__photo"><img class="img-responsive" src="/uploads/images/gallery_item.jpg" alt="gallery_item"></div>
              </li>
              <!-- - -->
              <li class="gallery-item gallery-item--type--video">
                <div class="gallery-item__photo"><img class="img-responsive" src="/uploads/images/gallery_item.jpg" alt="gallery_item"></div>
              </li>
              <!-- - -->
              <li class="gallery-item gallery-item--type--video">
                <div class="gallery-item__photo"><img class="img-responsive" src="/uploads/images/gallery_item.jpg" alt="gallery_item"></div>
              </li>
              <!-- - -->
              <li class="gallery-item gallery-item--type--video">
                <div class="gallery-item__photo"><img class="img-responsive" src="/uploads/images/gallery_item.jpg" alt="gallery_item"></div>
              </li>
            </ul>
          </div>
        </div>
      </section>
    </main>

@endsection