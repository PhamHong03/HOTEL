
{{-- <header class="sticky-top mt-2"> --}}
<header class="mt-2">
    <div class=" head">
        <div class="container__contact">
            
            <div class="container__contact--phone">
                <i class="fa-solid fa-phone"></i>
                <span>+84366182451</span>
            </div>
            <div class="container__contact--email">
                <i class="fa-solid fa-envelope"></i>
                <span>hotaler@gmail.com</span>
            </div>
        </div>
        <div class="container__language">
            <span>ENG</span>
        </div>
    </div>
    <div class=" header__container">
        <div class="container__layout--one">
            <div class="layout__one--image">
                <a href="{{ route('client-home') }}"><img src="{{asset('images/image.jpg')}}" alt=""></a>
            </div>
            <div class="layout__one--title">
                <span><b>Hotaler</b></span>
            </div>
        </div>
        <div class="container__layout--two">
            <div class="layout__three--menu">
                <a href="{{ route('client-home') }}"><span>Home</span></a>
                <a href="{{ route('client-about') }}"><span>About</span></a>                
                <div class="dropdown">
                    <a href="{{ route('client-rooms') }}"><span>Rooms</span></a>
                    <ul class="dropdown-content">
                        
                        {!! \App\Helpers\Helper::roomtypes($roomtypes) !!}
                    </ul>
                </div>
                <a href="{{ route('client-contact') }}"><span>Contact</span></a>                
            </div>
        </div>

        {{-- <div class="container__layout--five">
            <a href=""><i class="fa-brands fa-square-snapchat"></i></a>
            <a href=""><i class="fa-solid fa-bell"></i></a>
        </div> --}}
        {{-- <div class="container__layout--four">
            <a href="{{ route('client-book') }}"><span>CHAT BOX</span></a>
        </div> --}}
        <div class="container__layout--three header__account">
            {{-- <a href="{{ route('client-login') }}"><button>Sign in</button></a> --}}
            @if (Auth::check())
                <i class="me-2 fa-solid fa-user"style="border-radius: 50%; background-color: ; padding:7px 8px" ></i> <b>{{ Auth::user()->name }}</b>
                <div class="header__account--list">
                    <button class="button button-white"><a href="">Your profile</a></button>
                    <button class="button button-white"><a href="">Room order</a></button>
                    <button class="button button-red"><a href="{{ route('logout') }}">Logout</a></button>
                </div>
            @else
                <a href="{{ route('client-login') }}"><button class="btn-sign-in">Sign in</button></a>
            @endif                       
        </div>
    </div>  

    <div class="header__nav--search mb-2">        
        <div class="container__layout--four nav__search">
            <form action="{{ route('search') }}" class="input-group ">
                <input type="text" class="form-control" name="key" placeholder="Input text..." />
                <div class="input-group-append ms-2">
                    <button class="btn btn-outline-none" type="submit" >
                        <i class="fa-solid fa-magnifying-glass"></i> Search
                    </button>
                </div>
            </form>
        </div>
    </div>
</header>

