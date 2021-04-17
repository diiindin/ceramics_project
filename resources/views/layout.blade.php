<body>
<div id="app">
    <div style="background-color: #343a40;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark container">
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-auto">
                    @php $locale = session()->get('locale'); @endphp
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            @switch($locale)
                                @case('en')
                                <img id="lang" src="{{asset('images/usa.png')}}"> English
                                @break
                                @case('ru')
                                <img id="lang" src="{{asset('images/russia.png')}}"> Русский
                                @break
                                @default
                                <img id="lang" src="{{asset('images/usa.png')}}"> English
                            @endswitch
                            <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/en"><img id="lang" src="{{asset('images/usa.png')}}"> English</a>
                            <a class="dropdown-item" href="/ru"><img id="lang" src="{{asset('images/russia.png')}}"> Русский</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <main class="py-4">
        @yield('content')
    </main>
</div> 
<style>
#lang {
    width:3%;
}
</style> 
</body>
</html>