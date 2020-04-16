<nav class="footer__nav nav">
    <ul class="footer__navbar navbar navbar--theme--white row">

    @php

        if (Voyager::translatable($items)) {
            $items = $items->load('translations');
        }

    @endphp

    @foreach ($items as $item)

        @php

            $originalItem = $item;
            
            if (Voyager::translatable($item)) {
                $item = $item->translate($options->locale);
                
            }

            $active = null;
            $styles = null;
            $subitem_class = null;

            if(!$originalItem->children->isEmpty()) {
                $subitem_class = "navbar-item--sub";
            }
                

            // Check if link is current
            if(url($item->link()) == url()->current()){
                $active = 'navbar-item--active';
            }

        @endphp

        <li class="navbar-item footer__navbar-item {{ $active }}">
            <a href="{{ url($item->link()) }}" target="{{ $item->target }}" style="{{ $styles }}">
                {{ $item->title }}
            </a>
            
        </li>
    @endforeach

    </ul>
</nav>