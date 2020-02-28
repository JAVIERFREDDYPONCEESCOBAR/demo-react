@if (session('success'))
    <div class="alert alert-success mt-4">
        {{ session('success') }}
    </div>
@elseif(session('warning'))
    <div class="alert alert-warning mt-4">
        {{ session('warning') }}
    </div>
@elseif(session('info'))
    <div class="alert alert-info mt-4">
        {{ session('info') }}
    </div>
@elseif(session('danger'))
    <div class="alert alert-danger mt-4">
        {{ session('danger') }}
    </div>
@endif