
@extends('layouts.app')
@section('content')

<!-- body section  -->
<div class="col-lg-12">
  <br/> <br/><br/>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-12">

    <div class="jumbotron jumbotron-fluid" style="background-color:#E6E3E2">
        <div class="container">
            <h1 class="display-4">welcome back</h1>
            @if($status->status =="Pending")
            <p class="lead">Please be patient until we can confirm. Thank you for your patience.</p>
            @endif
            @if($status->status =="Denied")
            <p class="lead">Please call us because we have not get your information from the University Database.</p>
            @endif
        </div>
    </div>
    </div>
  </div>
  <div class="col-lg-12">
    <br/><br/>
</div>
</div>
<!-- end body section -->

@endsection