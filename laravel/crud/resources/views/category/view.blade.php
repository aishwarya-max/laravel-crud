<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>
                        View Category Details
                        <a href="{{ url('categories') }}" class="btn btn-primary float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name"><strong>Name:</strong></label>
                        <p id="name" class="form-control-static">{{ $category->name }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="description"><strong>Medical History:</strong></label>
                        <p id="description" class="form-control-static">{{ $category->description }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="description"><strong>Specialty:</strong></label>
                        <p id="description" class="form-control-static">{{ $category->speciality }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="is_active"><strong>Is Active:</strong></label>
                        <p id="is_active" class="form-control-static">{{ $category->is_active ? 'Yes' : 'No' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
