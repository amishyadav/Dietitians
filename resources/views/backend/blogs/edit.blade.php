@extends('backend.layouts.app')
@section('title')
    Blog Edit
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <h3>Edit Plan</h3>
            <a href="{{ route('blogs.index') }}">
            <button class="btn btn-green back-btn">Back</button></a>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('blogs.update',$blog->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="mb-3 col-12">
                                <label for="title" class="form-label">Title:</label>
                                <input type="text" id="title" name="title" value="{{$blog->title}}" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="author" class="form-label">Author:</label>
                                <input type="text" id="author" name="author" value="{{$blog->author}}" class="form-control">
                            </div>
                            <div class="mb-3 col-6">
                                <label for="image" class="form-label">Image:</label>
                                <div class="d-flex">
                                <img src="{{ asset('storage/' . $blog->image) }}" width="100">
                                <input type="file" id="image" name="image" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Content:</label>
                            <div id="editor-snow" style="height: 600px; width: 100%;">{!! $blog->description !!}</div>
                            <input type="hidden" name="description" id="content">
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-3" onclick="submitForm()">Save</button>
                            <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        const quill = new Quill('#editor', {
            theme: 'snow',
        });
        quill.root.innerHTML = `{!! $blog->description !!}`;

        function submitForm() {
            document.getElementById('content').value = quill.root.innerHTML;
        }
    </script>
@endsection