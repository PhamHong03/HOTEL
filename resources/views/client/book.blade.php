@extends('client.homepage')

@section('content')
    {{-- <div class="container ">
        <h2 class="booking__title mt-3">
            <span style="color:#000000;" class="booking__title--name">So happy booking with us!
            </span>
        </h2>
        <div class="booking__field">
            <form action=""  class="form">                
                <div class="booking__select--hotel booking ">
                    <label for="" class="title booking__label">Choose Hotel <span class="" style="color: red"> * </span> </label>
                    <select name="hotel" id="hotel" class="select__choose--hotel">
                        <option value="">Select where you want to go</option>
                        <option value="">Can Tho</option>
                        <option value="">Tp Ho Chi Minh</option>
                        <option value="">Da Nang</option>
                        <option value="">Ha Noi</option>
                    </select>
                </div>
                <div class="booking__time--come">
                    <div class="date-field booking" >
                        <label for="arrival" class="booking__label">Arrival Date <span class="" style="color: red"> * </span> </label>
                        <input type="text" id="arrival" class="date-picker" placeholder="Select a date arrive" >
                    </div>
                    <div class="date-field booking">
                        <label for="departure" class="booking__label">Departure Date <span class="" style="color: red"> * </span> </label>
                        <input type="text" id="departure" class="date-picker" placeholder="Select a date departure">
                    </div>        
                    <div class="booking">
                        <label for="" class="booking__label">Check in time <span class="" style="color: red"> * </span> </label>
                        <select id="input_comp-l00xjyes" required="" class="wixui-time-picker__input">
                            <option value="" disabled="" class="TimePickerDropdown1277584979__dummyOption"></option>
                            <option value="00:00">00:00</option>
                            <option value="00:15">00:15</option>
                            <option value="00:30">00:30</option>
                            <option value="00:45">00:45</option>
                            <option value="01:00">01:00</option>
                            <option value="01:15">01:15</option>
                            <option value="01:30">01:30</option>
                            <option value="01:45">01:45</option>
                            <option value="02:00">02:00</option>
                            <option value="02:15">02:15</option>
                            <option value="02:30">02:30</option>
                            <option value="02:45">02:45</option>
                            <option value="03:00">03:00</option>
                            <option value="03:15">03:15</option>
                            <option value="03:30">03:30</option>
                            <option value="03:45">03:45</option>
                            <option value="04:00">04:00</option>
                            <option value="04:15">04:15</option>
                            <option value="04:30">04:30</option>
                            <option value="04:45">04:45</option>
                            <option value="05:00">05:00</option>
                            <option value="05:15">05:15</option>
                            <option value="05:30">05:30</option>
                            <option value="05:45">05:45</option>
                            <option value="06:00">06:00</option>
                            <option value="06:15">06:15</option>
                            <option value="06:30">06:30</option>
                            <option value="06:45">06:45</option>
                            <option value="07:00">07:00</option>
                            <option value="07:15">07:15</option>
                            <option value="07:30">07:30</option>
                            <option value="07:45">07:45</option>
                            <option value="08:00">08:00</option>
                            <option value="08:15">08:15</option>
                            <option value="08:30">08:30</option>
                            <option value="08:45">08:45</option>
                            <option value="09:00">09:00</option>
                            <option value="09:15">09:15</option>
                            <option value="09:30">09:30</option>
                            <option value="09:45">09:45</option>
                            <option value="10:00">10:00</option>
                            <option value="10:15">10:15</option>
                            <option value="10:30">10:30</option>
                            <option value="10:45">10:45</option>
                            <option value="11:00">11:00</option>
                            <option value="11:15">11:15</option>
                            <option value="11:30">11:30</option>
                            <option value="11:45">11:45</option>
                            <option value="12:00">12:00</option>
                            <option value="12:15">12:15</option>
                            <option value="12:30">12:30</option>
                            <option value="12:45">12:45</option>
                            <option value="13:00">13:00</option>
                            <option value="13:15">13:15</option>
                            <option value="13:30">13:30</option>
                            <option value="13:45">13:45</option>
                            <option value="14:00" selected="">14:00</option>
                            <option value="14:15">14:15</option>
                            <option value="14:30">14:30</option>
                            <option value="14:45">14:45</option>
                            <option value="15:00">15:00</option>
                            <option value="15:15">15:15</option>
                            <option value="15:30">15:30</option>
                            <option value="15:45">15:45</option>
                            <option value="16:00">16:00</option>
                            <option value="16:15">16:15</option>
                            <option value="16:30">16:30</option>
                            <option value="16:45">16:45</option>
                            <option value="17:00">17:00</option>
                            <option value="17:15">17:15</option>
                            <option value="17:30">17:30</option>
                            <option value="17:45">17:45</option>
                            <option value="18:00">18:00</option>
                            <option value="18:15">18:15</option>
                            <option value="18:30">18:30</option>
                            <option value="18:45">18:45</option>
                            <option value="19:00">19:00</option>
                            <option value="19:15">19:15</option>
                            <option value="19:30">19:30</option>
                            <option value="19:45">19:45</option>
                            <option value="20:00">20:00</option>
                            <option value="20:15">20:15</option>
                            <option value="20:30">20:30</option>
                            <option value="20:45">20:45</option>
                            <option value="21:00">21:00</option>
                            <option value="21:15">21:15</option>
                            <option value="21:30">21:30</option>
                            <option value="21:45">21:45</option>
                            <option value="22:00">22:00</option>
                            <option value="22:15">22:15</option>
                            <option value="22:30">22:30</option>
                            <option value="22:45">22:45</option>
                            <option value="23:00">23:00</option>
                            <option value="23:15">23:15</option>
                            <option value="23:30">23:30</option>
                            <option value="23:45">23:45</option>
                        </select>
                    </div>
                    <div class="booking">
                        <label for="" class="booking__label">Check out time <span class="" style="color: red"> * </span> </label>
                        <select id="input_comp-l00xjyf2" required="" class="wixui-time-picker__input">
                            <option value="" disabled="" class="TimePickerDropdown1277584979__dummyOption"></option>
                            <option value="00:00">00:00</option>
                            <option value="00:15">00:15</option>
                            <option value="00:30">00:30</option>
                            <option value="00:45">00:45</option>
                            <option value="01:00">01:00</option>
                            <option value="01:15">01:15</option>
                            <option value="01:30">01:30</option>
                            <option value="01:45">01:45</option>
                            <option value="02:00">02:00</option>
                            <option value="02:15">02:15</option>
                            <option value="02:30">02:30</option>
                            <option value="02:45">02:45</option>
                            <option value="03:00">03:00</option>
                            <option value="03:15">03:15</option>
                            <option value="03:30">03:30</option>
                            <option value="03:45">03:45</option>
                            <option value="04:00">04:00</option>
                            <option value="04:15">04:15</option>
                            <option value="04:30">04:30</option>
                            <option value="04:45">04:45</option>
                            <option value="05:00">05:00</option>
                            <option value="05:15">05:15</option>
                            <option value="05:30">05:30</option>
                            <option value="05:45">05:45</option>
                            <option value="06:00">06:00</option>
                            <option value="06:15">06:15</option>
                            <option value="06:30">06:30</option>
                            <option value="06:45">06:45</option>
                            <option value="07:00">07:00</option>
                            <option value="07:15">07:15</option>
                            <option value="07:30">07:30</option>
                            <option value="07:45">07:45</option>
                            <option value="08:00">08:00</option>
                            <option value="08:15">08:15</option>
                            <option value="08:30">08:30</option>
                            <option value="08:45">08:45</option>
                            <option value="09:00">09:00</option>
                            <option value="09:15">09:15</option>
                            <option value="09:30">09:30</option>
                            <option value="09:45">09:45</option>
                            <option value="10:00">10:00</option>
                            <option value="10:15">10:15</option>
                            <option value="10:30">10:30</option>
                            <option value="10:45">10:45</option>
                            <option value="11:00">11:00</option>
                            <option value="11:15">11:15</option>
                            <option value="11:30">11:30</option>
                            <option value="11:45">11:45</option>
                            <option value="12:00" selected="">12:00</option>
                            <option value="12:15">12:15</option>
                            <option value="12:30">12:30</option>
                            <option value="12:45">12:45</option>
                            <option value="13:00">13:00</option>
                            <option value="13:15">13:15</option>
                            <option value="13:30">13:30</option>
                            <option value="13:45">13:45</option>
                            <option value="14:00">14:00</option>
                            <option value="14:15">14:15</option>
                            <option value="14:30">14:30</option>
                            <option value="14:45">14:45</option>
                            <option value="15:00">15:00</option>
                            <option value="15:15">15:15</option>
                            <option value="15:30">15:30</option>
                            <option value="15:45">15:45</option>
                            <option value="16:00">16:00</option>
                            <option value="16:15">16:15</option>
                            <option value="16:30">16:30</option>
                            <option value="16:45">16:45</option>
                            <option value="17:00">17:00</option>
                            <option value="17:15">17:15</option>
                            <option value="17:30">17:30</option>
                            <option value="17:45">17:45</option>
                            <option value="18:00">18:00</option>
                            <option value="18:15">18:15</option>
                            <option value="18:30">18:30</option>
                            <option value="18:45">18:45</option>
                            <option value="19:00">19:00</option>
                            <option value="19:15">19:15</option>
                            <option value="19:30">19:30</option>
                            <option value="19:45">19:45</option>
                            <option value="20:00">20:00</option>
                            <option value="20:15">20:15</option>
                            <option value="20:30">20:30</option>
                            <option value="20:45">20:45</option>
                            <option value="21:00">21:00</option>
                            <option value="21:15">21:15</option>
                            <option value="21:30">21:30</option>
                            <option value="21:45">21:45</option>
                            <option value="22:00">22:00</option>
                            <option value="22:15">22:15</option>
                            <option value="22:30">22:30</option>
                            <option value="22:45">22:45</option>
                            <option value="23:00">23:00</option>
                            <option value="23:15">23:15</option>
                            <option value="23:30">23:30</option>
                            <option value="23:45">23:45</option>
                        </select>
                        
                    </div>
                    <div class="booking__number booking">
                        <label for="" class="booking__number--title booking__label">Number of Nights <span class="" style="color: red"> * </span> </label>
                        <div class="">
                            <input name="" id="" class="" type="number" placeholder="Enter a number" required="" aria-required="true" aria-invalid="true" autocomplete="off" value="">
                        </div>
                    </div>
                </div>
                <div class="booking__customer booking">
                    <label for="" class="booking__label">Customer name <span class="" style="color: red"> * </span> </label>
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-user me-2"></i><input type="text" class="form-control" name="name" placeholder="First and last name">
                    </div>
                </div>
                <div class="booking__email booking">
                    <label for="" class="booking__label">Email <span class="" style="color: red"> * </span>  </label>
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-envelope me-2"></i><input type="email" class="form-control" name="email" placeholder="Email">
                   </div>
                </div>
                <div class="booking__phone booking">
                    <label for="" class="booking__label">Phone <span class="" style="color: red"> * </span> </label>
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-phone me-2"></i><input type="text" class="form-control" name="phone" placeholder="Phone number">
                    </div>
                </div>
                <div class=" d-flex ms-3" style="justify-content: center">   
                    <input class="btn sesstion__two--button-readmore btn-button-contact" type="submit" value="BOOKING">
                </div>
                @csrf
            </form>
        </div>
    </div>        --}}
    <div class="container">
        <div class="row mt-5">
            <div class="col-6 image__booking">
                <img src="{{ $room->thumb }}" alt="{{ $room->thumb }}">
            </div>
            <div class="col-6 ">
                
                <div class="content__booking content__booking--category">
                    <h2>Type: {{ $room->roomtype->name }}</h2>
                </div>
                <div class="content__booking content__booking--title">
                    <h3>Name: {{ $room->name }}</h3>
                </div>
                <div class="content__booking content__booking--description">
                    <span>Description: {!! $room->description !!}</span>
                </div>
                <div class="content__booking content__booking--price">
                    <span>Price: {!! $room->price !!}VND/per/night</span>
                </div>
                <div class="content__booking content__booking--price_sale">
                    <span>Discount: {!! $room->price_sale !!}%</span>
                </div>
                <div class="content__booking content__booking--price-real">
                    <span>Price finally: {!! \App\Helpers\Helper::price_sal($room->price, $room->price_sale) !!}VND/per/night</span>
                </div>
                <div class="content__booking content__booking--person">
                    <span>Max Guest: {!! $room->person !!} guest </span>
                </div>
                <div class="content__booking content__booking--quantity">
                    @if($room->quantity == 0) 
                        <h6 style="color: #DA3C3C">Status: Not available</h6>
                    @else
                        <h6 style="color: #DA3C3C">Status: {{ $room->quantity }} room available</h6>
                    
                    @endif
                    
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div class="booking__field">
                    <form action="/order"  class="form"> 
                        <input type="hidden" name="id_room" value="{{ $room->id }}"> 
                        <input type="hidden" name="price_room" value="{{ \App\Helpers\Helper::price_sal($room->price, $room->price_sale) }}">              
                        <div class="booking__select--hotel booking ">
                            <label for="" class="title booking__label">Choose Hotel <span class="" style="color: red"> * </span> </label>
                            <select  id="city" aria-label=".form-select-sm" name="address" class="select__choose--hotel">
                                <option value="Select where you want to go">Select where you want to go</option>
                                <option value="Can Tho">Can Tho City</option>
                                <option value="Tp Ho Chi Minh">Ho Chi Minh City</option>
                                <option value="Da Nang">Da Nang Province</option>
                                <option value="Ha Noi">Ha Noi Capital</option>
                                <option value="Ha Noi">Nha Trang Province</option>
                            </select> 
                        </div>
                        <div class="booking__time--come">
                            <div class="date-field booking" >
                                <label for="arrival" class="booking__label">Arrival Date <span class="" style="color: red"> * </span> </label>
                                <input type="text" name="arrival" id="arrival" class="date-picker" placeholder="Select a date arrive" >
                            </div>
                            <div class="date-field booking">
                                <label for="departure" class="booking__label">Departure Date <span class="" style="color: red"> * </span> </label>
                                <input type="text" name="departure" id="departure" class="date-picker" placeholder="Select a date departure">
                            </div>        
                            <div class="booking">
                                <label for="" class="booking__label">Check in time <span class="" style="color: red"> * </span> </label>
                                <select id="input_comp-l00xjyes" name="time_checkin" required="" class="wixui-time-picker__input">
                                    <option value="" disabled="" class="TimePickerDropdown1277584979__dummyOption"></option>
                                    <option value="00:00" selected="">00:00</option>
                                    <option value="00:15">00:15</option>
                                    <option value="00:30">00:30</option>
                                    <option value="00:45">00:45</option>
                                    <option value="01:00">01:00</option>
                                    <option value="01:15">01:15</option>
                                    <option value="01:30">01:30</option>
                                    <option value="01:45">01:45</option>
                                    <option value="02:00">02:00</option>
                                    <option value="02:15">02:15</option>
                                    <option value="02:30">02:30</option>
                                    <option value="02:45">02:45</option>
                                    <option value="03:00">03:00</option>
                                    <option value="03:15">03:15</option>
                                    <option value="03:30">03:30</option>
                                    <option value="03:45">03:45</option>
                                    <option value="04:00">04:00</option>
                                    <option value="04:15">04:15</option>
                                    <option value="04:30">04:30</option>
                                    <option value="04:45">04:45</option>
                                    <option value="05:00">05:00</option>
                                    <option value="05:15">05:15</option>
                                    <option value="05:30">05:30</option>
                                    <option value="05:45">05:45</option>
                                    <option value="06:00">06:00</option>
                                    <option value="06:15">06:15</option>
                                    <option value="06:30">06:30</option>
                                    <option value="06:45">06:45</option>
                                    <option value="07:00">07:00</option>
                                    <option value="07:15">07:15</option>
                                    <option value="07:30">07:30</option>
                                    <option value="07:45">07:45</option>
                                    <option value="08:00">08:00</option>
                                    <option value="08:15">08:15</option>
                                    <option value="08:30">08:30</option>
                                    <option value="08:45">08:45</option>
                                    <option value="09:00">09:00</option>
                                    <option value="09:15">09:15</option>
                                    <option value="09:30">09:30</option>
                                    <option value="09:45">09:45</option>
                                    <option value="10:00">10:00</option>
                                    <option value="10:15">10:15</option>
                                    <option value="10:30">10:30</option>
                                    <option value="10:45">10:45</option>
                                    <option value="11:00">11:00</option>
                                    <option value="11:15">11:15</option>
                                    <option value="11:30">11:30</option>
                                    <option value="11:45">11:45</option>
                                    <option value="12:00">12:00</option>
                                    <option value="12:15">12:15</option>
                                    <option value="12:30">12:30</option>
                                    <option value="12:45">12:45</option>
                                    <option value="13:00">13:00</option>
                                    <option value="13:15">13:15</option>
                                    <option value="13:30">13:30</option>
                                    <option value="13:45">13:45</option>
                                    <option value="14:00" >14:00</option>
                                    <option value="14:15">14:15</option>
                                    <option value="14:30">14:30</option>
                                    <option value="14:45">14:45</option>
                                    <option value="15:00">15:00</option>
                                    <option value="15:15">15:15</option>
                                    <option value="15:30">15:30</option>
                                    <option value="15:45">15:45</option>
                                    <option value="16:00">16:00</option>
                                    <option value="16:15">16:15</option>
                                    <option value="16:30">16:30</option>
                                    <option value="16:45">16:45</option>
                                    <option value="17:00">17:00</option>
                                    <option value="17:15">17:15</option>
                                    <option value="17:30">17:30</option>
                                    <option value="17:45">17:45</option>
                                    <option value="18:00">18:00</option>
                                    <option value="18:15">18:15</option>
                                    <option value="18:30">18:30</option>
                                    <option value="18:45">18:45</option>
                                    <option value="19:00">19:00</option>
                                    <option value="19:15">19:15</option>
                                    <option value="19:30">19:30</option>
                                    <option value="19:45">19:45</option>
                                    <option value="20:00">20:00</option>
                                    <option value="20:15">20:15</option>
                                    <option value="20:30">20:30</option>
                                    <option value="20:45">20:45</option>
                                    <option value="21:00">21:00</option>
                                    <option value="21:15">21:15</option>
                                    <option value="21:30">21:30</option>
                                    <option value="21:45">21:45</option>
                                    <option value="22:00">22:00</option>
                                    <option value="22:15">22:15</option>
                                    <option value="22:30">22:30</option>
                                    <option value="22:45">22:45</option>
                                    <option value="23:00">23:00</option>
                                    <option value="23:15">23:15</option>
                                    <option value="23:30">23:30</option>
                                    <option value="23:45">23:45</option>
                                </select>
                            </div>
                            <div class="booking">
                                <label for="" class="booking__label">Check out time <span class="" style="color: red"> * </span> </label>
                                <select id="input_comp-l00xjyf2" name="time_checkout" required="" class="wixui-time-picker__input">
                                    <option value="" disabled="" class="TimePickerDropdown1277584979__dummyOption"></option>
                                    <option value="00:00"  selected="">00:00</option>
                                    <option value="00:15">00:15</option>
                                    <option value="00:30">00:30</option>
                                    <option value="00:45">00:45</option>
                                    <option value="01:00">01:00</option>
                                    <option value="01:15">01:15</option>
                                    <option value="01:30">01:30</option>
                                    <option value="01:45">01:45</option>
                                    <option value="02:00">02:00</option>
                                    <option value="02:15">02:15</option>
                                    <option value="02:30">02:30</option>
                                    <option value="02:45">02:45</option>
                                    <option value="03:00">03:00</option>
                                    <option value="03:15">03:15</option>
                                    <option value="03:30">03:30</option>
                                    <option value="03:45">03:45</option>
                                    <option value="04:00">04:00</option>
                                    <option value="04:15">04:15</option>
                                    <option value="04:30">04:30</option>
                                    <option value="04:45">04:45</option>
                                    <option value="05:00">05:00</option>
                                    <option value="05:15">05:15</option>
                                    <option value="05:30">05:30</option>
                                    <option value="05:45">05:45</option>
                                    <option value="06:00">06:00</option>
                                    <option value="06:15">06:15</option>
                                    <option value="06:30">06:30</option>
                                    <option value="06:45">06:45</option>
                                    <option value="07:00">07:00</option>
                                    <option value="07:15">07:15</option>
                                    <option value="07:30">07:30</option>
                                    <option value="07:45">07:45</option>
                                    <option value="08:00">08:00</option>
                                    <option value="08:15">08:15</option>
                                    <option value="08:30">08:30</option>
                                    <option value="08:45">08:45</option>
                                    <option value="09:00">09:00</option>
                                    <option value="09:15">09:15</option>
                                    <option value="09:30">09:30</option>
                                    <option value="09:45">09:45</option>
                                    <option value="10:00">10:00</option>
                                    <option value="10:15">10:15</option>
                                    <option value="10:30">10:30</option>
                                    <option value="10:45">10:45</option>
                                    <option value="11:00">11:00</option>
                                    <option value="11:15">11:15</option>
                                    <option value="11:30">11:30</option>
                                    <option value="11:45">11:45</option>
                                    <option value="12:00">12:00</option>
                                    <option value="12:15">12:15</option>
                                    <option value="12:30">12:30</option>
                                    <option value="12:45">12:45</option>
                                    <option value="13:00">13:00</option>
                                    <option value="13:15">13:15</option>
                                    <option value="13:30">13:30</option>
                                    <option value="13:45">13:45</option>
                                    <option value="14:00">14:00</option>
                                    <option value="14:15">14:15</option>
                                    <option value="14:30">14:30</option>
                                    <option value="14:45">14:45</option>
                                    <option value="15:00">15:00</option>
                                    <option value="15:15">15:15</option>
                                    <option value="15:30">15:30</option>
                                    <option value="15:45">15:45</option>
                                    <option value="16:00">16:00</option>
                                    <option value="16:15">16:15</option>
                                    <option value="16:30">16:30</option>
                                    <option value="16:45">16:45</option>
                                    <option value="17:00">17:00</option>
                                    <option value="17:15">17:15</option>
                                    <option value="17:30">17:30</option>
                                    <option value="17:45">17:45</option>
                                    <option value="18:00">18:00</option>
                                    <option value="18:15">18:15</option>
                                    <option value="18:30">18:30</option>
                                    <option value="18:45">18:45</option>
                                    <option value="19:00">19:00</option>
                                    <option value="19:15">19:15</option>
                                    <option value="19:30">19:30</option>
                                    <option value="19:45">19:45</option>
                                    <option value="20:00">20:00</option>
                                    <option value="20:15">20:15</option>
                                    <option value="20:30">20:30</option>
                                    <option value="20:45">20:45</option>
                                    <option value="21:00">21:00</option>
                                    <option value="21:15">21:15</option>
                                    <option value="21:30">21:30</option>
                                    <option value="21:45">21:45</option>
                                    <option value="22:00">22:00</option>
                                    <option value="22:15">22:15</option>
                                    <option value="22:30">22:30</option>
                                    <option value="22:45">22:45</option>
                                    <option value="23:00">23:00</option>
                                    <option value="23:15">23:15</option>
                                    <option value="23:30">23:30</option>
                                    <option value="23:45">23:45</option>
                                </select>                            
                            </div>
                            
                            <div class="booking__number booking">
                                <label for="" class="booking__number--title booking__label">Number of room <span class="" style="color: red"> * </span> </label>
                                <div class="">
                                    <input name="quantity_room" id="" class="" type="number" placeholder="Enter a number" required="" aria-required="true" aria-invalid="true" autocomplete="off" value="">
                                </div>
                            </div>
                        </div>
                        <div class="booking__amenity booking">
                            <label for="" class="booking__number--title booking__label">Choose amenity <span class="" style="color: red"> * </span> </label>
                            <div class="d-flex ms-2">
                                @php
                                    $totalPrice = App\Helpers\Helper::price_s($room->price, $room->price_sale);
                                @endphp
                                @foreach ($amenities as $amenity )
                                    
                                    <input type="hidden" name="price_amenity" value="{{ number_format($amenity->price)}}">
                                    @php
                                        $totalPrice = $totalPrice + $amenity->price;
                                    @endphp
                                    <input type="radio" name="amenities" id="amenity" class="me-2" aria-required="true" aria-invalid="true" autocomplete="off" value="{{ $amenity->amenitytype->name }}">
                                    <label class="me-5" for="amenities">{{ $amenity->amenitytype->name }}</label><br>
                                @endforeach
                            </div>
                        </div>
                        <div class="booking__customer booking">
                            <label for="" class="booking__label">Customer name <span class="" style="color: red"> * </span> </label>
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-user me-2"></i><input type="text" class="form-control" name="name" placeholder="First and last name">
                            </div>
                        </div>
                        <div class="booking__email booking">
                            <label for="" class="booking__label">Email <span class="" style="color: red"> * </span>  </label>
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-envelope me-2"></i><input type="email" class="form-control" name="email" placeholder="Email">
                           </div>
                        </div>
                        <div class="booking__phone booking">
                            <label for="" class="booking__label">Phone <span class="" style="color: red"> * </span> </label>
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-phone me-2"></i><input type="text" class="form-control" name="phone" placeholder="Phone number">
                            </div>
                        </div>
                        <div class="booking__price booking mt-4">
                            <h3>Total price: {!! \App\Helpers\Helper::price_sal($room->price, $room->price_sale) !!}VND</h3>
                            {{-- <p>Tổng giá: <span id="total-price">{{ $totalPrice }}</span></p> --}}
                        </div>
                        <div class=" d-flex ms-3" style="justify-content: center">   
                            @if($room->quantity == 0)
                                <input class="btn sesstion__two--button-readmore btn-button-contact" type="submit" value="BOOKING" disabled>    
                            @else
                                <input class="btn sesstion__two--button-readmore btn-button-contact" type="submit" value="BOOKING">
                            @endif
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div> 
    </div>
    @php
        $total = App\Helpers\Helper::price_s($room->price, $room->price_sale);
    @endphp
    <script>
        const amenities = document.querySelectorAll('input[name="amenities"]');
        const totalPriceElement = document.getElementById('total-price');
        const initialTotalPrice = {{ $total }};
        
        amenities.forEach(amenity => {
            amenity.addEventListener('change', () => {
                let totalPrice = initialTotalPrice;
                amenities.forEach(checkedAmenity => {
                    if (checkedAmenity.checked) {
                        const price = parseFloat(checkedAmenity.dataset.price);
                        if (!isNaN(price)) {
                            totalPrice += price;
                        } else {
                            console.error('Invalid price:', checkedAmenity.dataset.price);
                        }
                    }
                });                
                totalPriceElement.textContent = totalPrice + ' VND';
            });
        });
    </script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr(".date-picker", {
        dateFormat: "d/m/Y",  // Custom date format
    });
</script>
@endsection