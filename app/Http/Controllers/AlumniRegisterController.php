<?php

namespace App\Http\Controllers;
use App\Alumnus;
use App\User;
use App\Department;
use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Rules\Captcha;
use \App\Mail\SendMail;
class AlumniRegisterController extends Controller
{
    public function create(){
        $department = Department::all();
        return view('almuni_registration.register')->with('department',$department);
    }

    public function store(Request $request){
        $this->validate($request, [
            'fullname'=>'required',
            'email'=>'required|unique:alumni',
            'email'=>'required|unique:users',
            'user_name'=>'required|unique:alumni',
            'gender'=>'required',
            'password'=>'required',
            'confirmpassword'=>'required',
            'department'=>'required',
            'graduationyear'=>'required',
            'residentaddress'=>'required',
            'jobcategory'=>'required',
            'organization'=>'required',
            'position'=>'required',
            'phone_number'=>'required|unique:alumni',
            'workplace'=>'required',
            'g-recaptcha-response' => new Captcha(),
        ]);

        $password = $request->password;
        $confirmpassword = $request->confirmpassword;

        //if the password length less than 8
        if(strlen($password) < 8){
            Session::flash('error','Password less than 8 characters');
            return redirect()->route('register.create');
        }
        //if password and confirm password characters are not equale 
        else if($password != $confirmpassword){
            Session::flash('error','password dose not match');
            return redirect()->route('register.create'); 
        }

        
        // other wise seve the data in to the almuni and user table at the 
        // same time.
        else{
            $user = User::create([
                'name' => $request->fullname,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'remember_token'=>str::random(60),
            ]);
            $alumnis = Alumnus::create([
                'full_name'=>$request->fullname,
                'email'=>$request->email,
                'user_name'=>$request->user_name,
                'gender'=>$request->gender, 
                'password'=>bcrypt($request->password),
                'department'=>$request->department,
                'year_of_gratuation'=>$request->graduationyear,
                'resedent_address'=>$request->residentaddress, 
                'job_category'=>$request->jobcategory,
                'work_place'=>$request->workplace,
                'name_of_organization'=>$request->organization,
                'position'=>$request->position,
                'phone_number'=>$request->phone_number,
                'profesional_membership'=>$request->membership,
                'status'=>Pending,
                ]);

                $details = [
                    'title' => 'Registrar and Alumni Directorate of the University of Gondar',
                    'name' => $request->fullname,
                    'body' => 'Thank you for registering in Registrar and Alumni Directorate of the University of Gondar. Please be patient until we confirm your registration.'

                ];
        
                \Mail::to($request->email)->send(new SendMail($details));
                
                Session::flash('success','Successfully registered');
                Session()->flash('notif','Registration was successfully and we send you an email');
                return redirect()->back(); 
        }
     
    }


    public function success(){
        return view('almuni_registration.success');
    }
}
