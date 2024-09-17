@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th style="width: 50px">ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Update</th>
                <th>Active</th>
                <th>Feature</th>
            </tr>
        </thead>
        <tbody>
            {!! \App\Helpers\Helper::roomtype($roomtypes) !!}
        </tbody>
    </table>

@endsection
