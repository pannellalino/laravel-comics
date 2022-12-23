@php
    $menu = config('db.menu')
@endphp

<header>
    <div class="container">
        <div class="logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        </div>

        <nav>
            <ul>
                @foreach ($menu as $link)
                    <li><a href="">{{ $link['text'] }}</a></li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>
