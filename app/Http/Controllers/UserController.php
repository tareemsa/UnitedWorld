<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
            'full_name' => ['required', 'string', 'max:190'],
            'email' => ['required', 'string', 'email', 'max:190', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ];
    }
    public function CreateUser()
    {


        return view('auth/registeruser');
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

        $validator = Validator::make($request->all(), $this->StoreValidationRules());
        if ($validator->fails()) {
            Log::error($validator->errors());
          //dd($validator->errors());
            return redirect('/registeruser') ->withErrors($validator) ->withInput();
        }

        try {
            $validated_data = $validator->validated();
            $validated_data['password'] = Hash::make($validated_data['password']);
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
