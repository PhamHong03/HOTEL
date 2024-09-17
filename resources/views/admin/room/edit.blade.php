@extends('admin.main')

@section('content')
    <form action="" method="POST">

        <div class="card-body">
            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <label for="room">Room Name</label>
                        <input type="text" name="name" value="{{ $room->name }}" class="form-control"  placeholder="Enter room...">
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label >Roomtypes</label>
                        <select name="roomtype_id" class="form-control">                                                                                  
                            @foreach ( $roomtypes as $roomtype )
                                <option value="{{ $roomtype->id }}" {{ $room->roomtype_id  == $roomtype->id ? 'selected': ''}}>
                                    {{ $roomtype->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-group">
                        <label >Price</label>
                        <input type="text" name="price" value="{{ $room->price }}" class="form-control" id="room" placeholder="Enter price...">
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-group">
                        <label >Price sale</label>
                        <input type="text" name="price_sale" value="{{ $room->price_sale }}" class="form-control" id="room" placeholder="Enter price sale...">
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <label >Description</label>
                <textarea name="description" id="description"  class="form-control">{{ $room->description }}</textarea>
            </div>

            <div class="row">
                <div class="col-8">
                    <div class="form-group">
                        <label for="file">Images of room </label>
                        <input type="file" class="form-control" id="upload"> 
                        <div id="image_show">
                            <a href="{{ $room->thumb }}" target="_blank">
                                <img src="{{ $room->thumb }}" alt="" width="100px">
                            </a>
                        </div>
                        <input type="hidden" name="thumb" value="{{ $room->thumb }}" id="thumb">
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label >Quantity for room</label>
                        <input type="text" name="quantity" value="{{ $room->quantity }}" class="form-control" id="room" placeholder="Enter quantity...">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label >Active</label>
                <div class="custom-control custom-radio">
                    <input type="radio" value="1" class="custom-control-input" id="active" name="active" 
                    {{ $room->active == 1 ? 'checked=""': '' }}>
                    <label for="active" class="custom-control-label">Yes</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" value="0" class="custom-control-input" id="nonactive" name="active" 
                    {{ $room->active == 0 ? 'checked=""': '' }}>
                    <label for="nonactive" class="custom-control-label">No</label>
                </div>

            </div>
        </div>
        
        <div class="card-footer">
        <button type="submit" class="btn btn-primary">Update Room</button>
        </div>
        @csrf
    </form>
@endsection

@section('footer')
<script type="importmap">
    {
        "imports": {
            "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.js",
            "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.0.0/"
        }
    }
</script>
<script type="module">
    import {
        ClassicEditor,
        Essentials,
        Paragraph,
        Bold,
        Italic,
        Font
    } from 'ckeditor5';
    ClassicEditor
        .create( document.querySelector( '#description' ), {
            plugins: [ Essentials, Paragraph, Bold, Italic, Font ],
            toolbar: [
                'undo', 'redo', '|', 'bold', 'italic', '|',
                'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
            ]
        } )
        .then( editor => {
            window.editor = editor;
        } )
        .catch( error => {
            console.error( error );
        } );
</script>

@endsection