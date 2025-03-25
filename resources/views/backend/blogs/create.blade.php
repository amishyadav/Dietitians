@extends('backend.layouts.app')
@section('title')
    Blog Create
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <h3>New Blog</h3>
            <a href="{{ route('blogs.index') }}">
                <button class="btn btn-green back-btn">Back</button></a>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('blogs.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-12">
                                <label for="title" class="form-label">Title:</label>
                                <input type="text" id="title" name="title" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="author" class="form-label">Author:</label>
                                <input type="text" id="author" name="author" class="form-control">
                            </div>
                            <div class="mb-3 col-6">
                                <label for="image" class="form-label">Image:</label>
                                <input type="file" id="image" name="image" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Content:</label>
                            <div id="editor-snow" style="height: 600px; width: 100%;"></div>
                            <input type="hidden" name="description" id="content">
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" name="active" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                            <label class="form-check-label" for="flexSwitchCheckChecked">Active</label>
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
        function submitForm() {
            document.getElementById('content').value = quill.root.innerHTML;
        }

        document.getElementById('fileInput').addEventListener('change', function (event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function () {
                    document.getElementById('profileImage').src = reader.result;
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
@endsection
