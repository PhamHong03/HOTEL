@extends('admin.main')

@section('content')
    <form action="" method="POST">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Slider Name</label>
                        <input type="text" name="name" value="{{ $slider->name }}" class="form-control" placeholder="Enter slider name...">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="room">URL </label>
                        <input type="text" name="url" value="{{ $slider->url }}" class="form-control" placeholder="https://admin">
                    </div>
                </div>
                
            </div>           

            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="file">Images of room </label>
                        <input type="file" class="form-control" id="upload"> 
                        <div id="image_show">
                            <a href="{{ $slider->thumb }}">
                                <img src="{{ $slider->thumb }}" alt="" width="100px">
                            </a>
                        </div>
                        <input type="hidden" name="thumb" value="{{ $slider->thumb }}" id="thumb">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label >Sort By: </label>
                        <input type="number" name="sort_by" value="{{ $slider->sort_by }}" class="form-control" id="room" placeholder="Enter quantity...">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label >Active</label>
                <div class="custom-control custom-radio">
                    <input type="radio" value="1" class="custom-control-input" id="active" name="active" 
                    {{ $slider->active == 1 ? 'checked=""': '' }}>
                    <label for="active" class="custom-control-label">Yes</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" value="0" class="custom-control-input" id="nonactive" name="active" 
                    {{ $slider->active == 0 ? 'checked=""': '' }}>
                    <label for="nonactive" class="custom-control-label">No</label>
                </div>

            </div>
        </div>
        
        <div class="card-footer">
        <button type="submit" class="btn btn-primary">Add slider</button>
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