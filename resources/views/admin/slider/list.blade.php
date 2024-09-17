@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th style="width: 50px">ID</th>
                <th>Title</th>
                <th>Link</th>
                <th>Image</th>
                <th>Active</th>
                <th>Update</th>
                <th>Feature</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sliders as $key => $slider)
                <tr>
                    <td>{{ $slider->id }}</td>
                    <td>{{ $slider->name }}</td>
                    <td>{{ $slider->url }}</td>
                    <td><a href="{{ $slider->thumb }}"><img src="{{ $slider->thumb }}" alt="" style="width: 100px; height=100px"></a></td>
                    <td>{!! \App\Helpers\Helper::active($slider->active) !!}</td>
                    <td>{{ $slider->updated_at }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/admin/sliders/edit/{{ $slider->id }}" >
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a class="btn btn-danger btn-sm" href ="#" onclick="removeRow({{ $slider->id }}, '/admin/sliders/destroy')" >
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach               
        </tbody>
    </table>
    {!! $sliders->links() !!}
@endsection
