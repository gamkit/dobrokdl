@extends('layouts.app')

@section('content')

<main class="page page-volunteers">
    <h3>{{ $page->title }}</h3>
    
    {!! $page->body !!}


    <section class="volunteers-members">
      <div class="volunteers-members__wrap">
        <div class="container">
          <h3>Наши волонтеры</h3>
          <ul class="volunteers-members__members-list owl-carousel members-list__owl-carousel members-list owl-carousel--custom-nav-1">
            
            @foreach($volunteers as $volunteer)
              <li class="member-item member-item--status--volunteer">
                  <div class="member-item__photo" style="background-image: url(/storage/{{ $volunteer->photo }});"></div>
                  <div class="member-item__contacts">
                    <p class="member-item__name" title="{{ $volunteer->fullname }}">{{  $volunteer->fullname }} </p>
                    <span>{{  $volunteer->age }} лет</span>
                    <p class="member-item__position" title="{{ $volunteer->position }}">{{ $volunteer->position }}</p>
                  </div>
              </li>
            @endforeach
            
          </ul>
        </div>
      </div>
    </section>


    <!-- SECTION-->
    <section class="volunteers-form" id="form_volunteers">
      <div class="volunteers-form__wrap">
        <div class="container">
          <h3 class="txt-color--orange">Вступить в наши ряды</h3>
          <form class="form volunteers-form__form" method="POST" action="{{ route('kdl.forms.volunteer') }}">
            {{ csrf_field() }}
            <div class="form__wrap">
              @include('layouts.errors.default')
              <div class="form__group form-group">
            
                <span class="field field-text"><input name="full_name" required type="text" placeholder="ФИО" value="{{old('full_name')}}"></span>

                <div class="form-group__fields-list row">
                    <span class="field field-text form-group__field"><input type="date" required name="born" placeholder="Дата рождения" value="{{old('date')}}"></span>
                    <span class="field field-text form-group__field"><input type="text" required name="phone" placeholder="Телефон" value="{{old('phone')}}"></span>
                    <span class="field field-text form-group__field"><input type="email" required name="email" placeholder="Email" value="{{old('email')}}"></span></div>
                    <span class="field field-text"><input type="text" required name="address" placeholder="Адрес проживания" value="{{old('address')}}"></span>
                    <span class="field field-text"><input type="text" required name="occupation" placeholder="Род деятельности" value="{{old('occupation')}}"></span>
                    
              </div>
              <p class="form__title">Что именно привлекает Вас в волонтерской деятельности? (отметьте нужное):</p>
              <div class="form__group form-group">
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox" name="targets[]" {{ (is_array(old('targets')) && in_array("Получение нового опыта", old('targets'))) ? ' checked' : '' }} value="Получение нового опыта"></i>
                    <p class="field-checkbox__title">Получение нового опыта</p></span></label>
                
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox" name="targets[]" {{ (is_array(old('targets')) && in_array("Встречи с новыми людьми", old('targets'))) ? ' checked' : '' }}   value="Встречи с новыми людьми" ></i>
                    <p class="field-checkbox__title">Встречи с новыми людьми</p></span></label>
                
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox" name="targets[]" {{ (is_array(old('targets')) && in_array("Возможность помочь другим", old('targets'))) ? ' checked' : '' }} value="Возможность помочь другим"></i>
                    <p class="field-checkbox__title">Возможность помочь другим</p></span></label>
                
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox" name="targets[]" {{ (is_array(old('targets')) && in_array("Вклад в общее дело", old('targets'))) ? ' checked' : '' }} value="Вклад в общее дело"></i>
                    <p class="field-checkbox__title">Вклад в общее дело</p></span></label>
                
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox" name="targets[]" {{ (is_array(old('targets')) && in_array("Новые интересы", old('targets'))) ? ' checked' : '' }} value="Новые интересы"></i>
                    <p class="field-checkbox__title">Новые интересы</p></span></label>
                
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox" name="targets[]" {{ (is_array(old('targets')) && in_array("Открытие для себя новых сфер", old('targets'))) ? ' checked' : '' }} value="Открытие для себя новых сфер"></i>
                    <p class="field-checkbox__title">Открытие для себя новых сфер</p></span></label>
                
                <label class="form-group__checkbox-container">
                  <span class="field field-checkbox">
                    <i class="field-checkbox__checkmark glyph-check-1"><input type="checkbox" name="targets[]"></i><p class="field-checkbox__title">Новые интересы</p>
                  </span>
                </label>
                
                <p>Другое:</p>
                
                <span class="field field-text"><input type="text" name="targets[]" placeholder="Напишите" ></span>
              </div>
              
              <p class="form__title">Есть ли у Вас опыт волонтёрской и добровольческой деятельности? Если есть, какой именно:</p><span class="field field-text">
                <input type="text" required name="experience" value="{{old('experience')}}"></span>
              
              <p class="form__title">Какая из действующих программ Фонда Вам наиболее интересна:</p>
              <div class="form__group form-group">
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox" name="programs[]" value="Медицинская программа" {{ (is_array(old('programs')) && in_array("Медицинская программа", old('programs'))) ? ' checked' : '' }}></i>
                    <p class="field-checkbox__title">Медицинская программа</p></span></label>
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox" name="programs[]" value="Продуктовая программа" {{ (is_array(old('programs')) && in_array("Продуктовая программа", old('programs'))) ? ' checked' : '' }}></i>
                    <p class="field-checkbox__title">Продуктовая программа</p></span></label>
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox" name="programs[]" value="Образовательно-развлекательная" {{ (is_array(old('programs')) && in_array("Образовательно-развлекательная", old('programs'))) ? ' checked' : '' }}></i>
                    <p class="field-checkbox__title">Образовательно-развлекательная</p></span></label>
              </div>
              <p class="form__title">9.	Какую помощь Вы готовы оказать:</p>
              <div class="form__group form-group">
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox" name="favours[]" {{ (is_array(old('programs')) && in_array("Раздавать листовки, расклеивать рекламные афиши и объявления", old('favours'))) ? ' checked' : '' }} value="Раздавать листовки, расклеивать рекламные афиши и объявления" ></i>
                    <p class="field-checkbox__title">Раздавать листовки, расклеивать рекламные афиши и объявления</p></span></label>
                
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox" name="favours[]" {{ (is_array(old('favours')) && in_array("Перевозить необходимые вещи на своём автомобиле", old('favours'))) ? ' checked' : '' }} value="Перевозить необходимые вещи на своём автомобиле"></i>
                    <p class="field-checkbox__title">Перевозить необходимые вещи на своём автомобиле</p></span></label>
                
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox" name="favours[]" {{ (is_array(old('favours')) && in_array("Быть организатором мероприятий, акций", old('favours'))) ? ' checked' : '' }} value="Быть организатором мероприятий, акций"></i>
                    <p class="field-checkbox__title">Быть организатором мероприятий, акций </p></span></label>
                
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox" name="favours[]" {{ (is_array(old('favours')) && in_array("Быть ведущим на  акциях и т.п.", old('favours'))) ? ' checked' : '' }} value="Быть ведущим на  акциях и т.п."></i>
                    <p class="field-checkbox__title">Быть ведущим на  акциях и т.п.</p></span></label>
                
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox" name="favours[]" {{ (is_array(old('favours')) && in_array("Работать с базой данных на ПК, по фандрайзингу (привлечение средств)", old('favours'))) ? ' checked' : '' }} value="Работать с базой данных на ПК, по фандрайзингу (привлечение средств)"></i>
                    <p class="field-checkbox__title">Работать с базой данных на ПК, по фандрайзингу (привлечение средств)</p></span></label>
               
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox" name="favours[]" {{ (is_array(old('favours')) && in_array("Оказывать юридическую консультативную помощь", old('favours'))) ? ' checked' : '' }} value="Оказывать юридическую консультативную помощь"></i>
                    <p class="field-checkbox__title">Оказывать юридическую консультативную помощь</p></span></label>
                
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox" name="favours[]" {{ (is_array(old('favours')) && in_array("Оказывать юридическую консультативную помощь", old('favours'))) ? ' checked' : '' }} value="Оказывать юридическую консультативную помощь"></i>
                    <p class="field-checkbox__title">Оказывать юридическую консультативную помощь</p></span></label>
               
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox" name="favours[]" {{ (is_array(old('favours')) && in_array("Оказывать бухгалтерскую консультативную помощь", old('favours'))) ? ' checked' : '' }} value="Оказывать бухгалтерскую консультативную помощь"></i>
                    <p class="field-checkbox__title">Оказывать бухгалтерскую консультативную помощь</p></span></label>
                
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox" name="favours[]" {{ (is_array(old('favours')) && in_array("Заниматься ведением и пополнением информацией сайта фонда, социальных сетей и др. сайтов", old('favours'))) ? ' checked' : '' }} value="Заниматься ведением и пополнением информацией сайта фонда, социальных сетей и др. сайтов"></i>
                    <p class="field-checkbox__title">Заниматься ведением и пополнением информацией сайта фонда, социальных сетей и др. сайтов</p></span></label>
              </div>
              <p class="form__title">Помощь в качестве:</p>
              <div class="form__group form-group">
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox" name="positions[]"  {{ (is_array(old('positions')) && in_array("Дизайнера (художник)", old('positions'))) ? ' checked' : '' }} value="Дизайнера (художник)"></i>
                    <p class="field-checkbox__title">Дизайнера (художник)</p></span></label>
                
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox" name="positions[]"  {{ (is_array(old('positions')) && in_array("Аниматора", old('positions'))) ? ' checked' : '' }} value="Аниматора"></i>
                    <p class="field-checkbox__title">Аниматора</p></span></label>
                
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox" name="positions[]"  {{ (is_array(old('positions')) && in_array("Фотографа", old('positions'))) ? ' checked' : '' }} value="Фотографа"></i>
                    <p class="field-checkbox__title">Фотографа</p></span></label>
                
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox" name="positions[]"  {{ (is_array(old('positions')) && in_array("Видеографа", old('positions'))) ? ' checked' : '' }} value="Видеографа"></i>
                    <p class="field-checkbox__title">Видеографа</p></span></label>
                
                <label class="form-group__checkbox-container"><span class="field field-checkbox"><i class="field-checkbox__checkmark glyph-check-1">
                      <input type="checkbox" name="positions[]"  {{ (is_array(old('positions')) && in_array("Репетитора", old('positions'))) ? ' checked' : '' }} value="Репетитора"></i>
                    <p class="field-checkbox__title">Репетитора</p></span></label>
                    <p>Другое:</p>
                    <span class="field field-text"><input type="text" placeholder="" name="positions[]"></span>
                <button class="btn btn--theme--orange" type="submit">Отправить</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
  </main>

@endsection