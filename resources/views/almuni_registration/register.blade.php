
@extends('layouts.app')
@section('content')

    <!-- body section  -->
<div class="col-lg-12">
    <br/> <br/><br/>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-12">

    <div class="jumbotron jumbotron-fluid" style="background-color:#c7ffd7">
        <div class="container">
            <h1 class="display-4">Welcome</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>
<!-- registration form start -->
<div class="col-lg-12">
    <form action="{{route('register.store')}}" method="POST">
    @csrf
    @include('layouts.success.list')
        <div class="form-row  col-lg-12">
            <div class="form-group col-md-6">
                <label for="fullname">Full Name:</label>
                <input type="text" class="form-control" id="fullname" name="fullname" value="{{ old('fullname') }}" placeholder="Full Name">
                @if ($errors->has('fullname'))
                    <span class="text-danger">{{ $errors->first('fullname') }}</span>
                @endif
            </div>
            <div class="form-group col-md-6">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Email">
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
			</div>
        </div>

        <div class="form-row col-lg-12">
            <div class="form-group col-md-6">
                <label for="user_name">User Name:</label>
                <input type="text" class="form-control" name="user_name" id="user_name" value="{{ old('user_name') }}" placeholder="User Name">
                @if ($errors->has('user_name'))
                    <span class="text-danger">{{ $errors->first('user_name') }}</span>
                @endif
			</div>
            <div class="form-group col-md-6">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" class="form-control" value="{{ old('gender') }}">
                    <option selected value="">Choose...</option>
                    <option value="M">Male</option>
					<option value="F">Female</option>
                </select>
                @if ($errors->has('gender'))
                    <span class="text-danger">{{ $errors->first('gender') }}</span>
                @endif
            </div>
		</div>


        <div class="form-row col-lg-12">
        <div class="form-group col-md-6">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}" placeholder="Password">
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
			</div>
			<div class="form-group col-md-6">
                <label for="confirmpassword">Confirm Password:</label>
                <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" value="{{ old('confirmpassword') }}" placeholder="Password">
                @if ($errors->has('confirmpassword'))
                    <span class="text-danger">{{ $errors->first('confirmpassword') }}</span>
                @endif
            </div>
        </div>

        <div class="form-row col-lg-12">
        <div class="form-group col-md-4">
                <label for="department">Department:</label>
                <select id="department" name="department" value="{{ old('department') }}" class="form-control">
                    <option selected value="">Choose Department</option>
                    @foreach($department as $v)
                    <option value="{{$v->id}}">{{$v->department}}</option>
                    @endforeach
                </select>
                @if ($errors->has('department'))
                    <span class="text-danger">{{ $errors->first('department') }}</span>
                @endif
            </div>
            <div class="form-group col-md-4">
				<label for="graduationyear">Year of Graduation:</label>
				<input type="date" class="form-control" id="graduationyear" name="graduationyear" value="{{ old('graduationyear') }}" placeholder="Graduation Year">
                @if ($errors->has('graduationyear'))
                    <span class="text-danger">{{ $errors->first('graduationyear') }}</span>
                @endif
            </div>

            <div class="form-group col-md-4">
                <label for="residentaddress">Residence Address:</label>
                <input type="text" class="form-control" id="residentaddress" name="residentaddress" value="{{ old('residentaddress') }}"  placeholder="Eg:Gondar,Ethiopia">
                @if ($errors->has('residentaddress'))
                    <span class="text-danger">{{ $errors->first('residentaddress') }}</span>
                @endif
            </div>
        </div>

        <div class="form-row col-lg-12">
            <div class="form-group col-md-4">
                <label for="jobcategory">Job Category:</label>
                <select id="jobcategory" name="jobcategory" value="{{ old('jobcategory') }}" class="form-control">
                    <option selected value="">Choose...</option>
                    <option value="Private">Private</option>
					<option value="Self Employee">Self Employee</option>
					<option value="Gevernment">Gevernment</option>
                </select>
                @if ($errors->has('jobcategory'))
                    <span class="text-danger">{{ $errors->first('jobcategory') }}</span>
                @endif
            </div>
            <div class="form-group col-md-4">
                <label for="organization">Name of Organization:</label>
                <input type="text" class="form-control" id="organization" name="organization" value="{{ old('organization') }}" placeholder="Name of Organization">
                @if ($errors->has('organization'))
                    <span class="text-danger">{{ $errors->first('organization') }}</span>
                @endif
            </div>

            <div class="form-group col-md-4">
                <label for="position">Position:</label>
                <input type="text" class="form-control" id="position" name="position" value="{{ old('position') }}" placeholder="Position">
                @if ($errors->has('position'))
                    <span class="text-danger">{{ $errors->first('position') }}</span>
                @endif
            </div>
        </div>

        

        <div class="form-row col-lg-12">
            <div class="form-group col-md-6">
                <label for="workplace">Work Place:</label>
                <input type="text" class="form-control" id="workplace" name="workplace" value="{{ old('workplace') }}" placeholder="Work Place">
                @if ($errors->has('workplace'))
                    <span class="text-danger">{{ $errors->first('workplace') }}</span>
                @endif
            </div>
            <div class="form-group col-md-6">
                <label for="phone_number">Phone Number:</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" placeholder="Phone Number">
                @if ($errors->has('phone_number'))
                    <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                @endif
            </div>

        </div>
        <div class="form-row col-lg-12">
        
            <div class="form-group col-md-6">
                <label for="membership">Professional Membership:</label>
                <textarea class="form-control" id="membership" name="membership" rows="5" placeholder="If you have any professional membership"></textarea>
            </div>

            <div class="form-group col-md-4" align="center">
                <div class="g-recaptcha" data-sitekey="{{env('CAPTCHA_KEY')}}"></div>
                @if ($errors->has('g-recaptcha-response'))
                    <span class="text-danger" style="display:block">{{ $errors->first('g-recaptcha-response') }}</span>
                @endif
            </div>
        </div>
        <div class="col-lg-12">
            <button type="submit" class="btn btn-success btn-lg btn-block">Register</button>
        </div>

   </form>
</div>


<!-- end of registration form  -->
    </div>
  </div>
  <div class="col-lg-12">
    <br/><br/>
</div>
</div>
<!-- end body section -->

@endsection