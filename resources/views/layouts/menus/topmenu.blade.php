<nav class="header__nav nav">
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
            }

        @endphp

        <li class=" navbar-item {{ $subitem_class }} {{ $active }}">
            <a href="{{ url($item->link()) }}" target="{{ $item->target }}" style="{{ $styles }}">{{ $item->title }}</a>

            @if(!$originalItem->children->isEmpty())
                    <div class="navbar-item__navbar navbar">
                        <ul class="navbar header__navbar">
                            @foreach($originalItem->children as $menu_item)
                                @php
                                    if(url($menu_item->link()) == url()->current()){
                                        $active = 'navbar-item--active';
                                    }
                                    else {
                                        $active = null;
                                    }
                                @endphp
                                <li class="navbar-item {{ $active }}"><a href="{{ url($menu_item->link()) }}">{{ $menu_item->title }}</a></li>
                            @endforeach
                    </ul>
                </div>
            @endif
        </li>
    @endforeach

    </ul>
</nav>