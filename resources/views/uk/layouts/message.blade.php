
@if(count($errors->all()) > 0)
    
        <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    
@endif

@if(session()->has('uk_success'))
    <div class="alert alert-success">{{ session('uk_success') }}</div>
@endif
@if(session()->has('uk_error'))
    <div class="alert alert-danger">{{ session('uk_error') }}</div>
@endif