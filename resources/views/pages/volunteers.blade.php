@extends('layouts.app')

@section('content')

<main class="page page--volunteers">
    <h3>{{ $page->title }}</h3>
    
    {!! $page->body !!}


    <section class="volunteers-members">
      <div class="volunteers-members__wrap">
        <div class="container">
          <h4>Наши волонтеры</h4>
          <ul class="volunteers-members__members-list owl-carousel members-list__owl-carousel members-list owl-carousel--custom-nav-1">
            <!-- - -->
            <li class="member-item member-item--status--volunteer">
              <div class="member-item__photo"><img class="img-responsive" src="uploads/images/member_item.jpg" alt="member_item"></div>
              <div class="member-item__contacts">
                <div class="member-item__name">Магомед Магомедов</div>
                <div class="member-item__position">Менеджер</div>
                <p class="member-item__connect"><b>Тел.:</b> 8 (928) 731-26-02</p>
                <p class="member-item__connect"><b>Email.:</b> dobrokdl@gmail.com</p>
              </div>
            </li>
            <!-- - -->
            <li class="member-item member-item--status--volunteer">
              <div class="member-item__photo"><img class="img-responsive" src="uploads/images/member_item.jpg" alt="member_item"></div>
              <div class="member-item__contacts">
                <div class="member-item__name">Магомед Магомедов</div>
                <div class="member-item__position">Менеджер</div>
                <p class="member-item__connect"><b>Тел.:</b> 8 (928) 731-26-02</p>
                <p class="member-item__connect"><b>Email.:</b> dobrokdl@gmail.com</p>
              </div>
            </li>
            <!-- - -->
            <li class="member-item member-item--status--volunteer">
              <div class="member-item__photo"><img class="img-responsive" src="uploads/images/member_item.jpg" alt="member_item"></div>
              <div class="member-item__contacts">
                <div class="member-item__name">Магомед Магомедов</div>
                <div class="member-item__position">Менеджер</div>
                <p class="member-item__connect"><b>Тел.:</b> 8 (928) 731-26-02</p>
                <p class="member-item__connect"><b>Email.:</b> dobrokdl@gmail.com</p>
              </div>
            </li>
            <!-- - -->
            <li class="member-item member-item--status--volunteer">
              <div class="member-item__photo"><img class="img-responsive" src="uploads/images/member_item.jpg" alt="member_item"></div>
              <div class="member-item__contacts">
                <div class="member-item__name">Магомед Магомедов</div>
                <div class="member-item__position">Менеджер</div>
                <p class="member-item__connect"><b>Тел.:</b> 8 (928) 731-26-02</p>
                <p class="member-item__connect"><b>Email.:</b> dobrokdl@gmail.com</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>


    <!-- SECTION-->
    <section class="volunteers-form">
      <div class="volunteers-form__wrap">
        <div class="container">
          <h4 class="txt-color--orange">Вступить в наши ряды</h4>
          <form class="form volunteers-form__form" action="">
            <div class="form__wrap">
              <div class="form__group form-group">
                <div class="form-group__fields-list row"><span class="field field-text form-group__field">
                    <input type="text" placeholder="Фамилия"></span><span class="field field-text form-group__field">
                    <input type="text" placeholder="Имя"></span><span class="field field-text form-group__field">
                    <input type="text" placeholder="Отчество"></span></div>
                <div class="form-group__fields-list row"><span class="field field-text form-group__field">
                    <input type="text" placeholder="Дата рождения"></span><span class="field field-text form-group__field">
                    <input type="text" placeholder="Телефон"></span><span class="field field-text form-group__field">
                    <input type="text" placeholder="Email"></span></div><span class="field field-text">
                  <input type="text" placeholder="Адрес проживания"></span><span class="field field-text">
                  <input type="text" placeholder="Род деятельности"></span>
              </div>
              <p class="form__title">Что именно привлекает Вас в волонтерской деятельности? (отметьте нужное):</p>
              <div class="form__group form-group">
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox"></i>
                    <p class="field-checkbox__title">Получение нового опыта</p></span></label>
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox"></i>
                    <p class="field-checkbox__title">Встречи с новыми людьми</p></span></label>
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox"></i>
                    <p class="field-checkbox__title">Возможность помочь другим</p></span></label>
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox"></i>
                    <p class="field-checkbox__title">Вклад в общее дело</p></span></label>
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox"></i>
                    <p class="field-checkbox__title">Новые интересы</p></span></label>
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox"></i>
                    <p class="field-checkbox__title">Открытие для себя новых сфер</p></span></label>
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox"></i>
                    <p class="field-checkbox__title">Новые интересы</p></span></label>
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox"></i>
                    <p class="field-checkbox__title">Другое:</p></span></label><span class="field field-text">
                  <input type="text" placeholder="Напишите"></span>
              </div>
              <p class="form__title">Есть ли у Вас опыт волонтёрской и добровольческой деятельности? Если есть, какой именно:</p><span class="field field-text">
                <input type="text" placeholder=""></span>
              <p class="form__title">Какая из действующих программ Фонда Вам наиболее интересна:</p>
              <div class="form__group form-group">
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox"></i>
                    <p class="field-checkbox__title">Получение нового опыта</p></span></label>
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox"></i>
                    <p class="field-checkbox__title">Встречи с новыми людьми</p></span></label>
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox"></i>
                    <p class="field-checkbox__title">Возможность помочь другим</p></span></label>
              </div>
              <p class="form__title">9.	Какую помощь Вы готовы оказать:</p>
              <div class="form__group form-group">
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox"></i>
                    <p class="field-checkbox__title">Раздавать листовки, расклеивать рекламные афиши и объявления</p></span></label>
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox"></i>
                    <p class="field-checkbox__title">Перевозить необходимые вещи на своём автомобиле</p></span></label>
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox"></i>
                    <p class="field-checkbox__title">Быть организатором мероприятий, акций </p></span></label>
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox"></i>
                    <p class="field-checkbox__title">Быть ведущим на  акциях и т.п.</p></span></label>
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox"></i>
                    <p class="field-checkbox__title">Работать с базой данных на ПК, по фандрайзингу (привлечение средств)</p></span></label>
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox"></i>
                    <p class="field-checkbox__title">Оказывать юридическую консультативную помощь</p></span></label>
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox"></i>
                    <p class="field-checkbox__title">оказывать юридическую консультативную помощь</p></span></label>
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox"></i>
                    <p class="field-checkbox__title">оказывать бухгалтерскую консультативную помощь</p></span></label>
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox"></i>
                    <p class="field-checkbox__title">заниматься ведением и пополнением информацией сайта Фонда, социальных сетей и др. сайтов</p></span></label>
              </div>
              <p class="form__title">Помощь в качестве:</p>
              <div class="form__group form-group">
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox"></i>
                    <p class="field-checkbox__title">Дизайнера (художник)</p></span></label>
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox"></i>
                    <p class="field-checkbox__title">Аниматора</p></span></label>
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox"></i>
                    <p class="field-checkbox__title">Фотографа</p></span></label>
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox"></i>
                    <p class="field-checkbox__title">Видеографа</p></span></label>
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox"></i>
                    <p class="field-checkbox__title">Репетитора</p></span></label>
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox"></i>
                    <p class="field-checkbox__title">Другое</p></span></label><span class="field field-text">
                  <input type="text" placeholder=""></span>
                <button class="btn btn--theme--orange" type="submit">Отправить</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
  </main>

@endsection