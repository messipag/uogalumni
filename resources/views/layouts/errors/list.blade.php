@if(Session::has('errors'))
    <div class="alert alert-danger">
        {{ Session::get('errors') }}
        @php
            Session::forget('errors');
        @endphp
    </div>
@endif