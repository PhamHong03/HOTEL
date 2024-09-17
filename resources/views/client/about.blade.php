@extends('client.homepage')

@section('content')
<div class="session__one">
    <div class="session__one--image">
        <img src="{{ asset('images/about2.webp') }}" alt="">
    </div>
    <div class="session__one--text">
        <h1 style="color: #2E2E2E">About us</h1>
        <ul>
            <li>
                <a href="">HOME</a>
            </li>
            <li><i class="fa-solid fa-chevron-right" style="color: #2E2E2E"></i></li>
            <li style="color: #2E2E2E">ABOUT US</li>
        </ul>
    </div>
</div>

<div class="sesstion__two--about mt-4">
    <div class="row">            
        <div class="col-7 ">
            <div class="sesstion__two--text sesstion__two--text-left">
                <h3 class="sesstion__two--name sesstion__two--name-left">About us</h3>
                <h2 class="sesstion__two--title sesstion__two--title-left">Hibtel is The Best Hotels to Celebrate Life</h2>
                <p class="sesstion__two--description-home sesstion__two--description-home-left">
                    Discover urban luxury with a combination of sophisticated design,
                     handcrafted details, and modern-day comforts at Park Hyatt Saigon. 
                     Enjoy the world-class restaurants in Ho Chi Minh City and our tranquil spa. 
                     Park Hyatt Saigon looks forward to welcoming you with warm and dignified service for the ultimate 
                     personalised luxury experience.
                     Enjoy the world-class restaurants in Ho Chi Minh City and our tranquil spa. 
                     Park Hyatt Saigon looks forward to welcoming you with warm and dignified service for the ultimate 
                     personalised luxury experience.
                     Enjoy the world-class restaurants in Ho Chi Minh City and our tranquil spa. 
                     Park Hyatt Saigon looks forward to welcoming you with warm and dignified service for the ultimate 
                     personalised luxury experience.
                </p>
            </div> 
            <button class="btn sesstion__two--button-readmore sesstion__two--button-readmore-left btn-bookNow"><a href="{{ route('client-rooms') }}">BOOK NOW</a></button>

        </div>
        <div class="col-5">
            <img src="{{ asset('images/about1.png') }}" alt="" class="sesstion__two--home-image sesstion__two--button-readmore-right">
        </div>
    </div>
    <div class="row"> 
        <div class="col-6">
            <img src="{{ asset('images/about3.webp') }}" alt="" class="sesstion__two--home-image sesstion__two--button-readmore-right">
        </div>           
        <div class="col-6">
            <div class="sesstion__two--text sesstion__two--text-left">
                <h3 class="sesstion__two--name sesstion__two--name-left">About us</h3>
                <h2 class="sesstion__two--title sesstion__two--title-left">Hibtel is The Best Hotels to Celebrate Life</h2>
                <p class="sesstion__two--description-home sesstion__two--description-home-left">
                    Discover urban luxury with a combination of sophisticated design,
                     handcrafted details, and modern-day comforts at Park Hyatt Saigon. 
                     Enjoy the world-class restaurants in Ho Chi Minh City and our tranquil spa. 
                     Park Hyatt Saigon looks forward to welcoming you with warm and dignified service for the ultimate 
                     personalised luxury experience.
                     Enjoy the world-class restaurants in Ho Chi Minh City and our tranquil spa. 
                     Park Hyatt Saigon looks forward to welcoming you with warm and dignified service for the ultimate 
                     personalised luxury experience.
                </p>
            </div> 
            <button class="btn sesstion__two--button-readmore sesstion__two--button-readmore-left btn-bookNow"><a href="{{ route('client-rooms') }}">BOOK NOW</a></button>

        </div>
        
    </div>
</div>

@endsection