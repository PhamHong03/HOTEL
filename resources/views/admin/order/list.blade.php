@extends('admin.main')


@section('content')
    <table class="table">
        <thead>
            <tr>
                <th style="width: 50px">ID</th>
                <th>Room name</th>
                <th>Qty</th>
                <th>Amenity</th>
                {{-- <th>Price_A</th>  --}}
                <th>Check in</th> 
                <th>Check out</th> 
                <th style="width: 100px">Active</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $key => $order)          
            
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->room->name }}</td>
                    <td>{{ $order->quantity_room }}</td>
                    <td>{{ $order->amenities }}</td>
                    {{-- <td>{{ $order->price_amenity }}</td> --}}
                    <td>
                        <p>{{ $order->arrival }}</p>
                        <p>{{ $order->time_checkin }}</p>
                    </td>
                    <td>
                        <p>{{ $order->departure }}</p>
                        <p>{{ $order->time_checkout }}</p>
                    </td>
                    
                    <td>
                        <a class="btn btn-primary btn-sm" href="/admin/orders/view/{{ $order->id }}" >
                            <i class="fa-solid fa-eye"> </i> 
                            
                        </a>
                        <a class="btn btn-danger btn-sm" href ="/admin/orders/edit/{{ $order->id }}" >
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
{!! $orders->links() !!}
@endsection
