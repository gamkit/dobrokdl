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

            $isActive = null;
            $styles = null;
            $subitem_class = null;

            if(!$originalItem->children->isEmpty()) {
                $subitem_class = "navbar-item--sub";
            }
                

            // Check if link is current
            if(url($item->link()) == url()->current()){
                $isActive = 'active';
            }

        @endphp

        <li class="{{ $isActive }} navbar-item {{ $subitem_class }}">
            <a href="{{ url($item->link()) }}" target="{{ $item->target }}" style="{{ $styles }}">
                {{ $item->title }}
            </a>
            @if(!$originalItem->children->isEmpty())
                    <div class="navbar-item__navbar navbar">
                        <ul class="navbar header__navbar">
                @foreach($originalItem->children as $menu_item)
                        <li class="navbar-item"><a href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a></li>
                @endforeach
                    </ul>
                </div>
            @endif
        </li>
    @endforeach

    </ul>
</nav>