@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th style="width: 50px">ID</th>
                <th style="width:100px">Name</th>
                <th style="width: 400px">Description</th>
                <th>Catalogue</th>
                <th>Price</th>
                <th>Price_sale</th>
                <th>Quantity</th>
                <th>Person</th>
                <th>Active</th>
                {{-- <th>Update</th> --}}
                <th>Feature</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rooms as $key => $room)
                <tr>
                    <td>{{ $room->id }}</td>
                    <td>{{ $room->name }}</td>
                    <td>{!! $room->description !!}</td>
                    <td>{{ $room->roomtype->name }}</td>
                    <td>{{ $room->price }}</td>
                    <td>{{ $room->price_sale }}%</td>
                    <td>{{ $room->quantity }}</td>
                    <td>{{ $room->person }}</td>
                    <td>{!! \App\Helpers\Helper::active($room->active) !!}</td>
                    {{-- <td>{{ $room->updated_at }}</td> --}}
                    <td>
                        <a class="btn btn-primary btn-sm" href="/admin/rooms/edit/{{ $room->id }}" >
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a class="btn btn-danger btn-sm" href ="#" onclick="removeRow({{ $room->id }}, '/admin/rooms/destroy')" >
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach               
        </tbody>
    </table>
    {!! $rooms->links() !!}
@endsection
