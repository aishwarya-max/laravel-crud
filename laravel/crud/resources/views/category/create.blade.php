<div class="container-fluid d-flex align-items-center justify-content-center"
     style="background-image: url('{{ asset('storage/clinic3.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            color: white;">
    
    <div >
        <div >
            @if(session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            <div class="card" >
          

                <div class="card-header">
                    <h4>
                        Add categories
                        <a href="{{ url('/') }}" class="btn btn-primary float-end">Back</a>
                   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

                    </h4>
                </div>
                <div class="card-body" >
                <form action="{{ url('categories/create') }}" method="POST" >
                        @csrf <!-- Add CSRF token -->
                        
                        <div class="mb-3">
                            <label for="patient_name" class="form-label">Patient Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}"/>
                            @error('name') <span class="text-danger">{{ $message }}</span>@enderror <!-- Fixed syntax -->
                          </div>
                        
                        <div class="mb-3">
                            <label for="description" class="form-label">Medical History</label>
                            <textarea name="description" id="description" class="form-control" rows="3">{{ old('description') }}</textarea>
                            @error('description') <span class="text-danger">{{ $message }}</span>@enderror <!-- Fixed syntax -->
                             </div>
                        
                        <div class="mb-3">
                            <label for="age" class="form-label">Contact Information</label>
                            <input type="text" name="age" id="age" class="form-control" value="{{ old('age') }}"/>
                            @error('age') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        
                       
                        <div class="mb-3">
                            <label for="specialty" class="form-label">Doctor Specialty</label>
                            <select name="specialty" id="specialty" class="form-select">
                                <option value="Gynecologist">Gynecologist</option>
                                <option value="ENT">ENT</option>
                                <option value="Surgeon">Surgeon</option>
                                <option value="Skin">Skin Doctor</option>
                            </select>
                        </div>
                        <div class="mb-3 form-check">
    <input type="checkbox" name="is_active" id="is_active" class="form-check-input" {{ old('is_active') ? 'checked' : '' }} />
    <label for="is_active" class="form-check-label">Doctor Available</label>
    @error('is_active') <span class="text-danger">{{ $message }}</span> @enderror
</div>
                        
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
