@extends('client.homepage')
@section('content')
    <form action="">
        <div class="container">
        @php
            $total = 0;
        @endphp         
        <h3 class="order__off--me">MY DETAIL ORDER HOTEL FORM HOTALER</h3>
       @if ( Auth::check())
        @foreach ( $customers as $customer )
                @if ($customer->email == $users->email)
                    <div class="cartDetail">
                        <div class="cartDetail__left mt-2">
                            <span><strong>ID ORDER: </strong>{{ $customer->id }}hotaler</span>
                        </div>
                        <div class="cartDetail__right mt-2">
                            @if ( $customer->status  == 0 )
                                <span style="color: blue">PENDING</span>
                            @elseif ( $customer->status  == 1)
                                <span style="color: green">CONFIRMED</span>
                            @elseif ( $customer->status  == 2)
                                <span style="color: orangered">CANCELED</span>
                            @endif
                        </div>
                    </div>
                    <div class="order">
                        <div class="cart__order--left">
                            @foreach ($orders as $key => $order )   
                                      
                                @if($order->customer_id == $customer->id) 
                                    
                                    <div class="product__cart product__cart--body ">
                                        <div class="product__cart--item product__cart--item-img">
                                            <img src="{{ $order->room->thumb  }}" alt="{{ $order->room->name  }}" style="width:100px; height:100px"></div>
                                        <div class="product__cart--item product__cart--item-con">
                                            <div class="product__cart--item-cont ms-3"><h4>Room: {{ $order->room->name  }}</h4></div>                
                                            <div class="product__cart--item-cont ms-3"><h6>Quantity room: {{ $order->quantity_room }} room</h6></div>
                                            <div class="product__cart--item-cont ms-3"><h6>Amenity room: <b>{{ $order->amenities }}</b></h6></div>
                                           
                                            <div class="product__cart--item-cont ms-3"><h6>Price room: {!! \App\Helpers\Helper::price_sal($order->room->price, $order->room->price_sale) !!}VND</h6></div>                         
                                        </div>  
                                        
                                    </div> 
                                    <div class="product__cart product__cart--item-con ms-2 mt-3">
                                        <h4 style="color:#212529"><b>INFO DATE TIME:</b> </h4>
                                        <div class="product__cart--item-cont">
                                            
                                            <h6><i class="fa-solid fa-calendar fa-fw"></i> Check in 
                                                <span style="color: #da3c3c">{{ $order->arrival }} : {{ $order->time_checkin }}</span>
                                            </h6>
                                        </div>                
                                        <div class="product__cart--item-cont">
                                            <h6><i class="fa-solid fa-calendar fa-fw"></i> Check out 
                                                <span style="color: #da3c3c">{{ $order->departure }} : {{ $order->time_checkout }}</span>
                                            </h6>
                                        </div>                
                                        
                                    </div> 
                                    <div class="cart__order--right address_receive mt-5">
                                        <div class="me-3" style="color: #212529;font-size:24px;font-weight:600">
                                            TOTAL PRICE: 
                                        </div>
                                        <div class="address__detail">
                                            <span class="tongtien">{{ number_format($order->total_price) }}VND</span>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>                        
                        <div class="cart__order--right">
                            <div class="customer mt-2">
                            <div class="customer_infor">
                                    <div class="customer_infor customer__title">
                                        CUSTOMER: 
                                    </div>
                                    <div class="customer_infor customer__name">
                                        {{ $customer->name }}
                                    </div>
                            </div>
                            <div class="customer_infor">
                                    <div class="customer_infor customer__title">
                                        PHONE: 
                                    </div>
                                    <div class="customer_infor customer__name">
                                        {{ $customer->phone }}
                                    </div>
                            </div>
                            <div class="customer_infor">
                                    <div class="customer_infor customer__title">
                                        EMAIL: 
                                    </div>
                                    <div class="customer_infor customer__email">
                                        <i>{{ $customer->email }}</i>
                                    </div>
                            </div>                            
                            <div class="customer_infor">
                                    <div class="customer_infor customer__title">
                                        NOTE: 
                                    </div>
                                    <div class="customer_infor customer__email">
                                        <i>{{ $customer->content }}</i>
                                    </div>
                            </div>                            
                                <div class="address_receive mt-2">
                                    <div class="address__title">
                                        HOTEL IN: 
                                    </div>
                                    <div class="address__detail">
                                        {{ $order->address }} 
                                    </div>
                                </div>               
                                <div class="info__order">
                                    <i class="fa-solid fa-calendar fa-fw"></i>
                                    Order date: {{ $customer->created_at }}                                    
                                </div>
                                
                                <div class="cartDetail__right mt-5">
                                    @if ( $customer->status  == 0 )
                                        <button class="btn btn-danger" type="submit"><a href="" style="color: white" onclick="huyDon(event)">Hủy đơn</a></button>
                                    @elseif ($customer->status  == 1 || $customer->status  == 2 || $customer->status  == 3)
                                        <button class="btn btn-danger" type="submit"><a href="" style="color: white"  onclick="huyDon2(event)">Hủy đơn</a></button>
                                    @endif
                                </div>
                            </div>
                            
                        </div>
                    </div>            
                @endif
            @endforeach 
       @endif     
    </div>
    </form>
@endsection
<script>
    function huyDon(event) {
        event.preventDefault()
        const form = document.querySelector('.form');
        Swal.fire({
            title: 'Are you sure you want to cancel the order?',
            text: 'Cancellation requests will be sent to hotel management.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Cancel order',
        }).then((result) => {
            if (result.isConfirmed) {
                form.setAttribute('action', '');
                form.submit();
                Swal.fire({
                    title: "Canceled",
                    text: "This order of yours cannot be restored.",
                    icon: "success"
                });     
            }          
        });        
    };
    function huyDon2(event) {
        event.preventDefault()
        const form = document.querySelector('.form');
        Swal.fire({
            title: 'You cannot cancel the order.',
            text: 'Because this application has been approved by the hotel.',
            icon: 'warning',   
        });        
    };  
</script>