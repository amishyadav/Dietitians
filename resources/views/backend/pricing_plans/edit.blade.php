@extends('backend.layouts.app')
@section('title')
    Pricing Plans Edit
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <h3>Edit Plan</h3>
            <a href="{{ route('pricing-plans.index') }}">
            <button class="btn btn-green back-btn">Back</button></a>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('pricing-plans.update',$pricingPlan->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="name" class="form-label">Name:</label>
                                <input type="text" id="name" name="name" value="{{$pricingPlan->name}}" class="form-control">
                            </div>
                            <div class="mb-3 col-6">
                                <label for="price" class="form-label">Price:</label>
                                <input type="number" id="price" name="price" value="{{$pricingPlan->price}}" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 col-6">
                            <label for="duration" class="form-label">Duration:</label>
                            <input type="text" id="duration" name="duration" value="{{$pricingPlan->duration}}" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description:</label>
                            <div id="editor-snow" style="height: 400px; width: 100%;">{!! $pricingPlan->description !!}</div>
                            <input type="hidden" name="description" id="content">
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-3" onclick="submitForm()">Save</button>
                            <a href="{{ route('pricing-plans.index') }}" class="btn btn-secondary">Cancel</a>
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
        quill.root.innerHTML = `{!! $pricingPlan->description !!}`;

        function submitForm() {
            document.getElementById('content').value = quill.root.innerHTML;
        }
    </script>
@endsection