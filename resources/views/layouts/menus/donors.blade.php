<nav class="header__nav nav" style="font">
    <ul class="navbar header__navbar row-mg">

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
                $styles =  'color: orange;';
            }

        @endphp

        <li style="padding: 0 15px;">
            <b><a href="{{ url($item->link()) }}" target="{{ $item->target }}" style="{{ $styles }}">{{ $item->title }}</a></b>
        </li>
    @endforeach

    </ul>
</nav>