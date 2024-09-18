@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th style="width: 50px">ID</th>
                <th >Name</th>
                <th >Description</th>
                <th>Catalogue</th>
                <th>Price</th>
                <th>Active</th>
                <th>Update</th>
                <th>Feature</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($amenities as $key => $amenity)
                <tr>
                    <td>{{ $amenity->id }}</td>
                    <td>{{ $amenity->name }}</td>
                    <td>{!! $amenity->description !!}</td>
                    <td>{{ $amenity->amenitytype->name }}</td>
                    <td>{{ $amenity->price }}</td>
                    <td>{!! \App\Helpers\Helper::active($amenity->active) !!}</td>
                    <td>{{ $amenity->updated_at }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/admin/amenities/edit/{{ $amenity->id }}" >
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a class="btn btn-danger btn-sm" href ="#" onclick="removeRow({{ $amenity->id }}, '/admin/amenities/destroy')" >
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach               
        </tbody>
    </table>
    {!! $amenities->links() !!}
@endsection
