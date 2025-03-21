@extends('backend.layouts.app')
@section('title')
    Blog Create
@endsection
@section('css')
  <style>
      .profile-container {
          text-align: center;
      }

      .profile-label {
          font-size: 16px;
          font-weight: bold;
          display: flex;
          align-items: center;
          gap: 5px;
      }

      .profile-wrapper {
          position: relative;
          width: 120px;
          height: 120px;
          border-radius: 50%;
          overflow: hidden;
          border: 2px solid #ddd;
          display: flex;
          justify-content: center;
          align-items: center;
      }

      .profile-wrapper img {
          width: 100%;
          height: 100%;
          object-fit: cover;
      }

      .edit-icon {
          position: absolute;
          top: 5px;
          right: 5px;
          background-color: white;
          border-radius: 50%;
          padding: 5px;
          cursor: pointer;
          box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
      }

      .edit-icon img {
          width: 20px;
          height: 20px;
      }

      .allowed-text {
          font-size: 12px;
          color: gray;
          margin-top: 5px;
      }

      /* Hide the default file input */
      #fileInput {
          display: none;
      }
  </style>
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
                            <div class="mb-3 col-12">
                                <label for="title" class="form-label">Slug:</label>
                                <input type="text" id="title" name="title" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                        <div class="mb-3 col-6">
                            <label for="author" class="form-label">Author:</label>
                            <input type="text" id="author" name="author" class="form-control">
                        </div>
                            <div class="profile-container">
                                <label class="profile-label">Profile: <span title="Upload your profile picture">❓</span></label>
                                <div class="profile-wrapper">
                                    <img id="profileImage" src="https://via.placeholder.com/120" alt="Profile">
                                    <div class="edit-icon" onclick="document.getElementById('fileInput').click();">
{{--                                        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828911.png" alt="Edit">--}}
                                        <box-icon name='edit-alt'></box-icon>
                                    </div>
                                </div>
                                <input type="file" id="fileInput" accept="image/png, image/jpeg, image/jpg">
                                <p class="allowed-text">Allowed file types: png, jpg, jpeg.</p>
                            </div>
                        <div class="mb-3 col-6">
                            <label for="image" class="form-label">Image:</label>
                            <input type="file" id="image" name="image" class="form-control">
                        </div>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" name="active" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                            <label class="form-check-label" for="flexSwitchCheckChecked">Active</label>
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