@if(session()->has('status_message'))
    <p class="status status--{{ session('status_level') }}">
        {{ session('status_message') }}
    </p>
@endif
