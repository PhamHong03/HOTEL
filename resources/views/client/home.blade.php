@extends('client.homepage')

@section('content')
    <div class="session__one">
        <div class="session__one--image">
            <img src="{{ asset('images/background.jpg') }}" alt="">
        </div>
        <div class="session__one--home">
            <h3><i>WELCOME TO HOTALER</i></h3>
            <h1>The Enjoy Your Holidays</h1>
            <p class="session__one--home-description">HOTEL AND RESORT</p>
        </div>
    </div>

    <div class="sesstion__two--home">
        <div class="row">
            <div class="col-6">
                <img src="{{ asset('images/home3.jpg') }}" alt="" class="sesstion__two--home-image">
            </div>
            <div class="col-6">
                <div class="sesstion__two--text">
                    <h3 class="sesstion__two--name sesstion__two--name-right">HOTALER</h3>
                    <h2 class="sesstion__two--title sesstion__two--title-right">For rooms and type rooms</h2>
                    <p class="sesstion__two--description-home sesstion__two--description-home-right" >Enthusiastically productize intuitive convergence 
                        after resource sucking e-business. Interactively recaptiualize leading. 
                        Efficiently scale granular sources for mission-critical platforms. 
                        Enthusiastically productize intuitive convergence after resource sucking e-business. 
                        Interactively recaptiualize leading. 
                        Efficiently scale granular sources for mission-critical platforms. 
                        Enthusiastically productize intuitive convergence after resource sucking e-business. 
                        Interactively recaptiualize leading. 
                        Efficiently scale granular sources for mission-critical platforms.</p>
                    <button class="sesstion__two--button-readmore sesstion__two--button-readmore-left"><a href="">READ MORE</a></button>
                </div>
            </div>
        </div>
        <div class="row">            
            <div class="col-7 ">
                <div class="sesstion__two--text sesstion__two--text-left">
                    <h3 class="sesstion__two--name sesstion__two--name-left">SERVICES & AMENITIES</h3>
                    <h2 class="sesstion__two--title sesstion__two--title-left">Our Hotel Services & Amenities</h2>
                    <p class="sesstion__two--description-home sesstion__two--description-home-left">Experience the most sumptuous and seamless of stays at Park Hyatt Saigon, 
                        one of the leading accommodations in Saigon District 1; with 245 rooms including 23 suites,
                         which recently underwent a complete renovation of décor, facilities and furnishings. 
                         Today, the upgraded French-colonial style rooms combine elegant, traditional comfort 
                         with the latest technology, including in-room mini iPads, Nespresso machines and sensor 
                         lighting systems. For those of you who welcome additional space, the suites at Park Hyatt 
                         Saigon all feature a separate living room, as well as a curated collection of oil paintings.</p>
                </div>
            </div>
            <div class="col-5">
                <img src="{{ asset('images/home2.jpg') }}" alt="" class="sesstion__two--home-image sesstion__two--button-readmore-right">
            </div>
        </div>
    </div>

    <div class="sesstion__three--home">
        <div class="sesstion__three--title">
            <h3 class="sesstion__three--name sesstion__two--name">TESTIMONIALS</h3>
            <h2 class="sesstion__three--tag sesstion__two--title">What Client Say</h2>   
        </div>
        <div class="sesstion__three--body">
            <div class="row">
                <div class="col-6 col__body">
                    <div class="col__top d-flex mt-2">
                        <img src="{{ asset('images/customer1.png') }}" alt="">
                        <div class="col__top--description">
                            <span class="sesstion__two--description-home sesstion__two--description-home-rating">
                                Enjoy the panoramic view of energetic Saigon from this 78 sq m (839 sq ft) suite, 
                                offering a separate living area with tall bay windows and wooden flooring. 
                                This is a standard suite. See World of Hyatt program terms for upgrade eligibility.
                            </span>
                        </div>
                    </div>
                    <div class="col__bottom d-flex">
                        <div class="col__bottom--name">
                            <span>Aurora Pham</span>
                        </div>
                        <div class="col__boxText--rating">
                            <ul class="d-flex"> 
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li>(5.0)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-6 col__body">
                    <div class="col__top d-flex mt-2">
                        <img src="{{ asset('images/customer1.png') }}" alt="">
                        <div class="col__top--description">
                            <span class="sesstion__two--description-home sesstion__two--description-home-rating">
                                Enjoy the panoramic view of energetic Saigon from this 78 sq m (839 sq ft) suite, 
                                offering a separate living area with tall bay windows and wooden flooring. 
                                This is a standard suite. See World of Hyatt program terms for upgrade eligibility.
                            </span>
                        </div>
                    </div>
                    <div class="col__bottom d-flex">
                        <div class="col__bottom--name">
                            <span>Aurora Pham</span>
                        </div>
                        <div class="col__boxText--rating">
                            <ul class="d-flex">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li>(5.0)</li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="back-to-top animate">
        <span><i class="fa-solid fa-arrow-up"></i></span>
    </div> --}}
@endsection