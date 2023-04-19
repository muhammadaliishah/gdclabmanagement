@if($link["child_menus"])

    <li class="nav-item has-submenu">

        <a class="nav-link submenu-toggle "
           href="#"
           data-toggle="collapse"
           data-target="#submenu-{{$loop->iteration}}"
           aria-expanded="false"
           aria-controls="submenu-{{$loop->iteration}}">
            <div class="nav-icon">
                {!! $link["icon"] !!}
            </div>
            <span class="nav-link-text">{{__($link["title"])}}</span>
            <div class="submenu-arrow">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down"
                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
            </div>
        </a>

        <div id="submenu-{{$loop->iteration}}"
             class="collapse submenu submenu-{{$loop->iteration}} {{ str_contains(request()->url(),$link["url"] ? 'show':'collapse') }} "
             data-parent="#menu-accordion">
            <ul class="submenu-list list-unstyled">

                @include('layouts.partials.links.list', ['items' => $link["child_menus"], 'is_child_link' => true])

            </ul>
        </div>

    </li>

@else

    @if($is_child_menu)

        <li class="submenu-item">
            <a class="submenu-link "
               href="{{$link['url']}}"
            >
                {{__($link["title"] )}}
            </a>
        </li>

    @else

        <li class="nav-item">

            <a class="nav-link "
               href="{{$link["url"]}}"
            >
                <span class="nav-icon">
                    {!! $link["icon"] !!}
                </span>
                <span class="nav-link-text">{{__($link["title"] )}}</span>
            </a>

        </li>

    @endif


@endif

