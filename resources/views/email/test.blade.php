<style>
    
    .cart_order{
      background-color: #dcdada;
    }
    .cartDetail
    {
  
      display: flex;
      margin: 10px 30px;
      border-bottom: 1px solid #ccc;
      padding: 10px 0px;
    }
    .cartDetail__left{
      flex: 50%;
      
    }
    .cartDetail__right{
      flex: 50%;
      margin-left: 50px;
      text-transform: uppercase;
      font-weight: 600;
  }
    
  .cartDetail__right span{
      float: right;
  }
  
  .cartDetail__right button{
      float: right;
  }
  .order{
      display: flex;
  }
  
  
  .cart__order--left{
      flex: 50%;
  }
  .cart__order--right{
      flex: 50%;
  }
  .info__order{
      margin-left: 30px;
      color: var(--green3) ;
      font-weight: 600;
  }
  .info__order--detail{
      display: flex;
      flex-direction: column;
      margin-left: 60px;
      color: var(--green3) ;
      font-weight: 600;
  
  }
  .info__order--detail .span{
      color: rgb(95, 146, 19);
  }
  
  .address_receive{
      display: flex;
  }
  
  .cart__order--right .address__title{
      margin-left: 30px;
      font-weight: 600;
      font-size: 1.4rem;
      flex: 50%;
  }
  .cart__order--right .address__detail{
      font-size: 1rem;
      flex: 50%;
  }
  
  .customer_infor{
      display: flex;
  }
  .customer__name{
      flex: 50%;
      font-size: 1.2rem;
      text-transform: uppercase;
  }
  .customer__title{
      margin-left: 30px;
      font-weight: 600;
      font-size: 1rem;
      flex: 50%;
  }
  .customer__email{
      flex: 50%;
  }
  .tongtien{
      border: 1px solid #222;
      padding: 10px 30px;
      width: 50%;
      background-color: var(--green3);
      color: var(--white);
      border-radius: 5px;
      font-size: 1.4rem;
  }
  
  
  .order__off--me{
      text-align: center;
      color: #0b3d06;
      text-transform: uppercase;
      font-size: 1.8rem;
      margin-top: 20px;
  }
  </style>

<div style="
    width: 500px;
    margin: 0 auto;
    padding: 15px;
    text-align: center;
">    

    <h2>Hello {{  $name }}</h2>
    <h3>On behalf of Hotaler, we would like to send you an order invoice.</h3>
    
</div>
    @php
        $total = 0;
    @endphp
    @foreach ( $customers as $customer )
            @if ($customer->email == $users->email)
                <div class="cartDetail">
                    <div class="cartDetail__left mt-2">
                        <span><strong>ORDER ID: </strong>{{ $customer->id }}0123456789abc</span><br>
                        <span>STATUS :</span>
                        @if ( $customer->status  == 0 )
                            <span style="color: blue">PENDING FOR CONFIRMATION</span>
                        @elseif($customer->status  == 1)
                            <span style="color: green">CONFIRMED</span>
                        @endif
                    </div>
                </div>
                <div class="order">
                    <div class="cart__order--left">
                        @foreach ($orders as $key => $order )         
                            @if($order->customer_id == $customer->id)
                                {{-- @php                 
                                    $price = floatval($order->total_price);
                      
                                @endphp     --}}
                                <div class="product__cart product__cart--body ">
                                    <div class="product__cart--item product__cart--item-con">
                                        <div class="product__cart--item-cont">
                                            <p>Room: {{ $order->room->name  }}</p>
                                            <p>Quantity room: {{ $order->quantity_room }} room</p>
                                            <p>Date arrival: {{ $order->arrival }} </p>
                                            <p>Date leave: {{ $order->departure }} </p>
                                            <p>Check in: {{ $order->time_checkin }} </p>
                                            <p>Check out: {{ $order->time_checkout }} </p>
                                            <p>Amenity: {{ $order->amenities }}, Price: {{ $order->price_amenity }}</p>
                                            <p>Price room: {{ number_format($order->room->price) }}VND</p>
                                        </div>                
                                    </div>  
                                </div>  
                            @endif
                        @endforeach
                    </div>
                    
                    <div class="cart__order--right">
                        <div class="customer mt-2">
                            <div class="customer_infor">
                                <div class="customer_infor customer__title">
                                    CUSTOMER: {{ $customer->name }}
                                </div>
                            </div>
                            <div class="customer_infor">
                                <div class="customer_infor customer__title">
                                    PHONE NUMBER: {{ $customer->phone }}
                                </div>
                            </div>
                            <div class="customer_infor">
                                <div class="customer_infor customer__title">
                                    EMAIL: <i>{{ $customer->email }}</i>
                                </div>
                            </div>                
                            <div class="info__order">
                                <i class="fa-solid fa-calendar fa-fw"></i>
                                {{ $customer->created_at }}
                                
                            </div>
                            <div class="address_receive mt-5">
                                <div class="address__title">
                                    TOTAL PAY: <span class="tongtien" style="color: red">{{ number_format($order->total_price) }}VND</span>
                                </div>
                            </div>                        
                        </div>
                        
                    </div>
                </div>            
            @endif
    @endforeach  


    <p style="color: red;font-weight:600">Dear Customers, please check the invoice information, if there is any error, please contact immediately (036) 910287653 line 131 within 10 days from the invoice issuance date. After this time, BOOKSTORE will refuse to resolve any complaints from Customers. We hope you understand!</p>
    <span style="font-weight: 600">Note: <i>This is an automated email from the system. Please do not reply to this email.</i></span><br>
    <p>Thank you for accompanying Hotaler, your order will be approved in the near future, please wait for Hotaler. Sincerely thank you!
    </p>
    <p>Best regards!</p>
    <span>Electronic system from Hotaler</span><br>
    <span>Provided by HOTALER NATIONWIDE</span><br>
    <span>Webiste: <a href="" style="color: blue">Hotaler.vn</a> - Hotline: 0366182451</span>