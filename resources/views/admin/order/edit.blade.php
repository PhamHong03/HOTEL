@extends('admin.main')


@section('content')

<form method="POST" id="form" class="form" action="">
    <div class="customer mt-2">
        
        <ul>
            <li>Customer's name : <strong>{{ $customers->name }}</strong></li>
            <li>Customer's phone : <strong>{{ $customers->phone }}</strong></li>
            <li>Customer's email : <strong>{{ $customers->email }}</strong></li>
            <li>Trạng thái :
                <select name="status" id="" class="p-1" >
                    <option style="color: blue" value="0" {{ $customers->status == 0 ? 'selected' : '' }}>Pending</option>
                    <option style="color: green" value="1" {{ $customers->status == 1 ? 'selected' : '' }}>Confirmed</option>
                    <option style="color: orangered" value="2" {{ $customers->status == 2 ? 'selected' : '' }}>Cancel</option>
                </select> 
            </li>
        </ul>
    </div>      
    <div class="cart__admin">
        <div class="product__cart--admin ">
            <table class="table cart__admin-table ">
                <tbody>
                  <tr class="">
                      <th class="column-1 table_admin" >IMGAE</th>
                      <th class="column-1 table_admin">BRANCH</th>
                      <th class="column-2 table_admin">ROOM</th>
                      <th class="column-3 table_admin">PRICE ROOM</th>
                      <th class="column-4 table_admin" >QTY</th>
                      <th class="column-5 table_admin">AMENITY</th>
                      <th class="column-6 table_admin">CHECK IN</th>
                      <th class="column-7 table_admin">CHECK OUT</th>
                  </tr>              
                
                    @foreach ($orders as $key => $order )         
                        @php                 
                            $price = $order->total_price;                       
                        @endphp          
                        
                        <tr class="table_row ">
                            <td class="column-1 table_admin ">

                                <div class="how_itemcart1">
                                    <img src="{{ $order->room->thumb }}" alt="IMG" style="width: 70px">
                                </div>
                            </td>
                            <td class="column-2 table_admin">{{ $order->address }}</td>
                            <td class="column-2 table_admin">{{ $order->room->name }}</td>
                            <td class="column-3 table_admin">{!! \App\Helpers\Helper::price_sal($order->room->price, $order->room->price_sale) !!}VND</td>
                            <td class="column-4 table_admin">{{ $order->quantity_room }}</td>
                            <td class="column-5 table_admin">
                                <p><b>{{ $order->amenities }}</b></p>
                                <p>{{ number_format($order->price_amenity) }}VND</p>
                            </td>
                            <td class="column-6 table_admin">
                                <p>Date: {{ $order->arrival }}</p>
                                <p>Time: {{ $order->time_checkin }}</p>
                            </td>
                            <td class="column-7 table_admin">
                                <p>Date: {{ $order->departure  }}</p>
                                <p>Time: {{ $order->time_checkout  }}</p>
                            </td>
                            
                        </tr>                                   
                    @endforeach
                    <tr style="font-size: 1.4rem">
                        <td colspan="7" class="tet-red text-right"><strong>Total price (include amenity):</strong> </td>
                        <td style="width:100px"><strong>{{ number_format($price) }}VND</strong></td>
                    </tr>   
                </tbody>
            </table>
            {{-- 
            <div class="change_status">
                <select name="status" id="status" class="p-1 change_status-customers" >
                    <option value="{{ $customers->status }}" class="disible">Status </option>
                    <option value="0" {{ $customers->status == 0 ? 'selected' : '' }}>Pending</option>
                    <option value="1" {{ $customers->status == 1 ? 'selected' : '' }}>Confirmed</option>
                </select>  
            </div> --}}
            <button class=" btn btn-success mb-2" id="btn-delivery" type="submit" style="float: right">Confirm this order</button>        
        </div>
    </div>
    @csrf
</form>
@endsection
{{-- <script>
    function duyetdon(event) {
        event.preventDefault()
        const form = document.querySelector('.form');
        const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: "btn btn-success",
            cancelButton: "btn btn-danger"
        },
        buttonsStyling: false
        });
        swalWithBootstrapButtons.fire({
            title: "Are you confirm this order?",
            text: "Customers needing you",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Approval", 
            cancelButtonText: "Unapproval",
            reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    form.setAttribute('action','/admin/customers');
                    form.submit();
                    swalWithBootstrapButtons.fire({
                    title: "Confirmed successful",
                    text: "Customers are happy",
                    icon: "success"
                    });
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire({
                    title: "Error",
                    text: "Not move",
                    icon: "error"
                    });
                }
            });
        };

</script> --}}

{{-- onclick="duyetdon(event)" --}}