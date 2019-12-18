<!DOCTYPE html>
<html lang="en">

<head>
@include('layouts.resource_file.header') 
</head>

<body class="col-lg-12">
  <!--Navigation bar-->
  <nav class="navbar navbar-default navbar-fixed-top">
  @include('layouts.resource_file.topmenu') 
  </nav>

{{-------------------------}}
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <div class="row">
        <section class="content">
         @yield('content')
        </section>
      </div>
</div>
{{-------------------------}}
  <!-- /.content-wrapper -->


  <footer id="footer" class="footer">
  @include('layouts.resource_file.footer') 
  </footer>
  <!--/ Footer-->

  <script src="{{asset('app/js/jquery.min.js')}}"></script>
  <script src="{{asset('app/js/jquery.easing.min.js')}}"></script>
  <script src="{{asset('app/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('app/js/custom.js')}}"></script>
  <!-- <script src="contactform/contactform.js"></script> -->
<!-- for the message toster -->

<script src="{{ asset('app/js/toastr.min.js') }}"></script>
<script>
  @if(Session::has('success'))
    toastr.success("{{ Session::get('success') }}")
  @endif
  @if(Session::has('info'))
    toastr.info("{{ Session::get('info') }}")
  @endif
  @if(Session::has('error'))
    toastr.error("{{ Session::get('error') }}")
  @endif
  @if(Session::has('warning'))
    toastr.warning("{{ Session::get('warning') }}")
  @endif
  
</script>
<!-- end of message toster -->
</body>

</html>
