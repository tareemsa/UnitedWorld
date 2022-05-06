<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use \Illuminate\Foundation\Auth\RedirectsUsers;
class UserController extends Controller
{
    use RedirectsUsers;
    private $model_instance;
    private $success_message;
    private $error_message;
    private $update_success_message;
    private $update_error_message;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;


    public function __construct()
    {
        $this->success_message = trans('admin.created_successfully');
        $this->update_success_message = trans('admin.update_created_successfully');
        $this->error_message = trans('admin.fail_while_create');
        $this->update_error_message = trans('admin.fail_while_update');
        $this->model_instance = User::class;
        $this->middleware('guest');
        //$this->middleware('auth');
    }
    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }
    private function StoreValidationRules()
    {
        return [
            'name' => ['required', 'string', 'max:190'],
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'email' => ['required', 'string', 'email', 'max:190', 'unique:users'],
            'phone' => ['required', 'string', 'max:190', 'unique:users'],
            'country' => ['required', 'string', 'max:190'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'address' => ['required', 'string','max:190'],
            'category_id' => ['required', 'integer','exists:categories,id'],
        ];
    }
    public function CreateUser()
    {

        $categories=Category::all();
        return view('auth/registeruser',compact('categories'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function StoreUser(Request $request)
    {
        //return $request;
        //handel iamge upload
        $FileNameToStore = "";
        if ($request->hasFile('image')) {
            //get filename with ext
            $filenamewithext = $request->file('image')->getClientOriginalName();
            // dd($filenamewithext);
            //get just the name
            $filename = pathinfo($filenamewithext, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $FileNameToStore = time().$filename .'.'. $extension;
            $path = $request->file('image')->storeAs('public/images', $FileNameToStore);

        } else {
            $FileNameToStore = 'noimage.jpg';
        }
        $validator = Validator::make($request->all(), $this->StoreValidationRules());
        if ($validator->fails()) {
            Log::error($validator->errors());

            return redirect('/registeruser') ->withErrors($validator) ->withInput();
        }

        try {

            $validated_data = $validator->validated();
            $validated_data['image'] =$FileNameToStore;
            $object = $this->model_instance::create($validated_data);
            $log_message = 'user.register_log' . '#' . $object->id;
            $this->guard()->login($object);
            Log::info($log_message);
            return redirect('/registeruser')->with('Success', 'Registered Successfully')->withInput();
        } catch (\Error $ex) {

            Log::error($ex->getMessage());
            return redirect('/registeruser')->with('errors', 'Something went wrong')->withInput();;
        }

    }
    public function StoreCompany(Request $request)
    {
        //return $request;
        //handel iamge upload
        $FileNameToStore = "";
        if ($request->hasFile('image')) {
            //get filename with ext
            $filenamewithext = $request->file('image')->getClientOriginalName();
            // dd($filenamewithext);
            //get just the name
            $filename = pathinfo($filenamewithext, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $FileNameToStore = time().$filename .'.'. $extension;
            $path = $request->file('image')->storeAs('public/images', $FileNameToStore);

        } else {
            $FileNameToStore = 'noimage.jpg';
        }
        $validator = Validator::make($request->all(), $this->StoreValidationRules());
        if ($validator->fails()) {
            Log::error($validator->errors());

            return redirect('/registeruser') ->withErrors($validator) ->withInput();
        }

        try {

            $validated_data = $validator->validated();
            $validated_data['image'] =$FileNameToStore;
            $object = $this->model_instance::create($validated_data);
            $log_message = 'user.register_log' . '#' . $object->id;
            $this->guard()->login($object);
            Log::info($log_message);
            return redirect('/registeruser')->with('Success', 'Registered Successfully')->withInput();
        } catch (\Error $ex) {

            Log::error($ex->getMessage());
            return redirect('/registeruser')->with('errors', 'Something went wrong')->withInput();;
        }

    }
}
