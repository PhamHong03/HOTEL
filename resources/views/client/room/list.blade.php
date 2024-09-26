    <div class="row sesstion__two--list-rooms">
        @foreach ($rooms as $room )
            <div class="col-4 col-sm-4 col-md-4 col-12">
                <div class="col__image" id="col__image">
                    <img id="image__rooms" src="{{ $room->thumb }}" alt="ROOM_IMAGE">
                    <span class="product-img-sale">{{ $room->price_sale }}%</span>
                    <div class="col__boxText">
                        <div class="col__boxText--top">
                            <div class="col__boxText--price">
                                <span>{!! \App\Helpers\Helper::price_sal($room->price, $room->price_sale) !!}Đ</span>
                            </div>
                            <div class="col__boxText--rating">
                                <ul class="d-flex">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col__boxText--bottom">
                            <span class="col__boxText--title">
                                <a href="/room/{{ $room->id }}-{{ Str::slug($room->name), '-' }}">{{ $room->name }}</a>
                            </span>
                        </div>
                    </div>
                    
                    <div class="col__button--seemore">
                        <a href="/room/{{ $room->id }}-{{ Str::slug($room->name), '-' }}.html"><button class="col__button--see">SEE MORE</button></a>
                        <a href="/room_book/{{ $room->id }}-{{ Str::slug($room->name), '-' }}.html"><button class="col__button--book">BOOK NOW</button></a>
                    </div>
                </div>                
            </div >
        @endforeach
    </div>
