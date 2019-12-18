@if(session()->has('notif'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
             &times;
        </button>
        <strong>{{ session()->get('notif') }}</strong>
    </div>
@endif