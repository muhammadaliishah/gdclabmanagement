@if($items)

    @foreach($items as $link)
        @include('layouts.partials.links.link', ['link' => $link, 'is_child_menu' => isset($is_child_menu)])
    @endforeach

@endif
