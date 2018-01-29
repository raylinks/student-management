<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Cla;
Use App\User;
use App\Section;




use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function managecourse()
    {
        return view('sch.managecourse');
    }

    public function getStudent()
    {
        return view('sch.addstudent');
    }

    public function getTeacher()
    {   $users = user::all(['id', 'name']);

        return view('sch.addteacher', compact ('users'));
    }

    public function Update_profile_picture(Request $request)
    {
        # we check if the request id passed in the upload picture form is not the same as the id of the authenticated user
        if ($request->id != Auth()->user()->id) {
            # we display a message for the user to log in to perform the operation to be sure the owner of the account is the actual person performing the task. 
            session()->flash('alert-danger', 'Log in to perform this action');
            # redirect back to te upload picture form
            return redirect()->back();
        }

        // getting all of the images for the story
        $file = $request->file('pro_image');

        $theImages = "";

        # declare our validation rules 
        $rules = array(
            'file' => 'required|mimes:png,gif,jpeg'
            );                      //'required|mimes:png,gif,jpeg,txt,pdf,doc'

        $validator = Validator::make(array('file' => $file), $rules);
        if ($validator->passes()) {
            $destinationPath = 'image_upload/' . microtime(true);
            $filename = $file->getClientOriginalName();
            $theImages = $destinationPath . '/' . $filename;
            $upload_success = $file->move($destinationPath, $filename);

        } else {
            session()->flash('danger', 'Validation failed');
            return redirect()->back();
        }

        // Update to db
        User::where('id', $request->id)->update(['pro_pic' => $theImages]);


        session()->flash('success', 'Profile Picture Updated Successfully.');
        return redirect()->back();


    }



    public function valido(Request $request)
    {
        return $this->validate($request, [
            'name' => 'required|max:255',
            'student_limit'  =>    'required|max:255',
            'student_hall'  =>  'required|max:255',
            ]);
    }

    public function addTeacher (Request $request)
    {
        $this->vali($request);
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->subject = $request->input('subject');
        $user->sex = $request->input('sex');
        $user->address = $request->input('address');
        $user->status = $request->input('status');
        $user->save();

       return 'success';
    }

    public function vali (Request $request)
    {
        return $this->validate($request,[
            'name' => 'required|max:255',
            'email' =>   'required|email|max:255|unique:users',
            'password' => 'required|min:6',
            'subject' =>   'required|max:255',
            'status'  =>  'required|max:255',
            'address' =>   'required|max:255',
            'sex' =>   'required|max:255'

        ]);
    }

    public function postStudents(Request $request)
    {
        $this->validato($request);
        $users = new User();
        $users->sunname = $request->input('sunname');
        $users->firstname = $request->input('firstname');
        $users->email = $request->input('email');
        $users->password = bcrypt($request->input('password'));
        $users->subject = $request->input('subject');
        $users->origin = $request->input('origin');
        $users->address = $request->input('address');
        $users->sex = $request->input('sex');
        $users->genotype = $request->input('genotype');
        $users->save();

        session()->flash('success', 'Student successfully registered');
            return redirect()->back();
    }

    public function validato(Request $request)
    {
        return $this->validate($request,[
            'sunname' => 'required|max:255',
            'firstname' => 'required|max:255',
            'email' =>   'required|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'subject' =>   'required|max:255',
            'origin'  =>  'required|max:255',
            'address' =>   'required|max:255',
            'sex' =>   'required|max:255',
            'genotype' => 'required|max:255',

            ]);
    }

    public function postEdit(Request $request)
    {
        $class = cla::find($request->id);
        $class->name = $request->input('name');
        $class->Student_limit = $request->input('student_limit');
        $class->student_hall = $request->input('student_hall');
        $class->save();


        return response()->json($class);
    }

    public function addsection()
    {
        return view('sch.addsection');
    }

    public function postSection (Request $request)
    {

        $this->validoo($request);
        $section = new Section();
        $section->section = $request->input('section');
        $section->teacher_id = $request->input('teacher_id');
        $section->class_id = $request->input('class_id');
        $section->save();

        return 'success';
    }

    public function validoo (Request $request)
    {
        return $this->validate($request,[
            'section' => 'required|max:255',
            'teacher_id' => 'required|not_in:0',
            'class_id' => 'required|not_in:0',
            ]);

    }

    public function postProfileUpdate(updateProfile $request)

    {
        # check if the authenticated user id is the same as the id passed in the request from the update form
        if (Auth::user()->id == $request->id) {
            # we get all the details of the request and then pass it into a variable called $requestData
            $requestData = $request->all();
            # we unset the token in the previous details saved
            unset($requestData['_token']);
            # we update the user table where the id column is equal to the id passed in the update request
            User::where('id', $request->id)->update($requestData);
            # display a temporary message to the artisan user using the session
            session()->flash('success', " Profile Update Successful");
        } else {
            return redirect()->to(url('/'));
        }
        return redirect()->back();

    }

    public function getProfile()
    {
        return view('sch.updateprofile');
    }


}
