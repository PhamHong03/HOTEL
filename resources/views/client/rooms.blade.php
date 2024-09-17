@extends('client.homepage')

@section('content')
    <div class="session__one">
        <div class="session__one--image">
            <img src="{{ asset('images/background.jpg') }}" alt="">
        </div>
        {{-- <div id="overlay"></div> --}}
        <div class="session__one--text">
            <h1>List rooms</h1>
            <ul>
                <li>
                    <a href="">HOME</a>
                </li>
                <li><i class="fa-solid fa-chevron-right"></i></li>
                <li>LIST ROOMS</li>
            </ul>
        </div>
    </div>
    <div class="session__two" id="loadRoom">
        @include('client.room.list');
    </div>
  
    <div class="section__three--button-load" id="button-loadMore">
        <input type="hidden" value="1" id="page" class="page">
        <a  onclick="loadMore()">
            LOAD MORE
        </a>
    </div>
@endsection