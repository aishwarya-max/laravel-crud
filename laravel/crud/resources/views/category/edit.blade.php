<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>
                        Edit categories
                        <a href="{{ url('categories') }}" class="btn btn-primary float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('categories/'.$category->id.'/edit') }}" method="POST">
                        @csrf <!-- Add CSRF token -->
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name">Name</label> <!-- Added for attribute -->
                            <input type="text" name="name" id="name" class="form-control" value="{{ $category->name}}"/>
                            @error('name') <span class="text-danger">{{ $message }}</span>@enderror <!-- Fixed syntax -->
                        </div>
                        <div class="mb-3">
                            <label for="description">Description</label> <!-- Added for attribute -->
                            <textarea name="description" id="description" class="form-control" rows="3">{{ $category->description }}</textarea>
                            @error('description') <span class="text-danger">{{ $message }}</span>@enderror <!-- Fixed syntax -->
                        </div>
                        
                        <div class="mb-3">
                            <label for="description">age</label> <!-- Added for attribute -->
                            <textarea name="description" id="description" class="form-control" rows="3">{{ $category->age }}</textarea>
                            @error('description') <span class="text-danger">{{ $message }}</span>@enderror <!-- Fixed syntax -->
                        </div>
                        <div class="mb-3">
                            <label for="description">speciality</label> <!-- Added for attribute -->
                            <textarea name="description" id="description" class="form-control" rows="3">{{ $category->speciality }}</textarea>
                            @error('description') <span class="text-danger">{{ $message }}</span>@enderror <!-- Fixed syntax -->
                        </div>
                        <div class="mb-3">
                            <label for="is_active">Is Active</label> <!-- Added for attribute -->
                            <input type="checkbox" name="is_active" id="is_active" class="form-control" {{ $category->is_active == true ? 'checked' : '' }}/> <!-- Fixed syntax -->
                            @error('is_active') <span class="text-danger">{{ $message }}</span>@enderror <!-- Fixed syntax -->
                        </div>
                      
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">update</button> <!-- Added button class -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
