@extends('admin.main')

@section('content')
    <form action="" method="POST">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="col-5">
                    <div class="form-group">
                        <label for="roomtype">Roomtype Name</label>
                        <input type="text" name="name" value="{{ $roomtype->name }}" class="form-control"  placeholder="Enter roomtype...">
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label >Calalogue</label>
                        <select name="parent_id" class="form-control">
                            <option value="0"{{ $roomtype->parent_id === 0 ? 'selected' :'' }}>Parent Catalog</option>
                            @foreach ( $roomtypes as $roomtypeParent )
                            <option value="{{ $roomtypeParent->id }}" 
                                {{ $roomtype->parent_id === $roomtypeParent->id ? 'selected' :'' }}>
                                {{ $roomtypeParent->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label >Price</label>
                        <input type="text" name="price" value="{{ $roomtype->price }}" class="form-control" id="roomtype" placeholder="Enter price for roomtype...">
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <label >Description</label>
                <textarea name="description" id="description" class="form-control">{{ $roomtype->description }}</textarea>
            </div>
                   
            <div class="form-group">
                <label >Active</label>
                <div class="custom-control custom-radio">
                    <input type="radio" value="1" class="custom-control-input" id="active" name="active" 
                    {{ $roomtype->active == 1 ? 'checked': '' }}>
                    <label for="active" class="custom-control-label">Yes</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" value="0" class="custom-control-input" id="nonactive" name="active"
                    {{ $roomtype->active == 0 ? 'checked': '' }}>
                    <label for="nonactive" class="custom-control-label">No</label>
                </div>

            </div>
        </div>
        
        <div class="card-footer">
        <button type="submit" class="btn btn-primary">Update RoomType</button>
        </div>
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