<footer class="footer">
    <div class="footer__wrap">
    <div class="container">
        <div class="footer__logo">
            <svg class="svg-logo">
                <use class="svg-logo" xlink:href="#svg-logo-white"></use>
            </svg>
        </div>
      
        {!! Menu::display('kdl_footer_menu', 'layouts.menus.bottommenu') !!}
    </div>
    <div class="footer__info-box">
        <div class="container"><a class="footer__btn-donut btn btn-donut btn--theme--orange btn--shadow--black" href="{{ route('kdl.donut') }}"><span>Помочь сейчас</span><i class="btn__glyph glyph-kid"></i></a>
        <div class="footer__base-contacts base-contacts">
            <ul class="base-contacts__list row">
            <li class="base-contacts__item base-contacts__item">
                <p><b>Телефон:</b> 8 (960) 435-55-22</p>
            </li>
            <li class="base-contacts__item base-contacts__item">
                <p><b>WhatsApp:</b> 8 (928) 731-26-02</p>
            </li>
            <li class="base-contacts__item base-contacts__item">
                <p><b>E-Mail:</b> dobro.kdl@gmail.com</p>
            </li>
            </ul>
        </div>
        <ul class="footer__social-links social-links social-links--theme--blue social-links--size--sm row">
            <li class="social-links__item"><a target="_blank" href="https://vk.com/dobrokdl"><i class="glyph-social-vk"></i></a></li>
            <li class="social-links__item"><a target="_blank" href="https://www.instagram.com/fond_kdl"><i class="glyph-social-ig"></i></a></li>
            <li class="social-links__item"><a target="_blank" href="https://t.me/donor_kdl"><i class="glyph-social-tg"></i></a></li>
        </ul>
        </div>
    </div>
    <div class="footer__copyright">
        <p>&copy; 2005–2019, БФ «Клуб Добрых Людей»</p>
    </div>
    </div>
</footer>