<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;


class JobController extends Controller
{
    private $model_instance;
    private $success_message;
    private $error_message;
    private $update_success_message;
    private $update_error_message;

    public function __construct()
    {
        $this->success_message = trans('admin.created_successfully');
        $this->update_success_message = trans('admin.update_created_successfully');
        $this->error_message = trans('admin.fail_while_create');
        $this->update_error_message = trans('admin.fail_while_update');
        $this->model_instance = Job::class;
        //$this->middleware('auth');
    }

    private function StoreValidationRules()
    {
        return [
            'title' => 'required|string|max:100',
            'type' => 'required|string|max:100',
            'salary' => 'required|integer',
            'paid_per' => 'required|string|max:100',
            'work_time' => 'required|string|max:100',
            'desc' => 'required|string|max:10000',
            'military_status' => 'required|in:done,not_yet,exempt',
            'experience' => 'required|integer|max:50',
            'education_level' => 'required|in:bac,master,doc,phd',
            'currency' => 'required|string|max:100',
            'city' => 'required|string|max:100',
            'area' => 'required|string|max:100',
            'smoker' => 'required|integer',
            'driver_license' => 'required|integer',
            'category' => 'required|string|max:100',
            'relationship_status' => 'required|in:married,engaged,single',
        ];
    }

    private function UpdateValidationRules()
    {
        return [
            'title' => 'required|string|max:100',
            'type' => 'required|string|max:100',
            'salary' => 'required|integer',
            'paid_per' => 'required|string|max:100',
            'work_time' => 'required|string|max:100',
            'desc' => 'required|string|max:10000',
            'military_status' => 'required|in:done,not_yet,exempt',
            'experience' => 'required|integer|max:50',
            'education_level' => 'required|in:bac,master,doc,phd',
            'currency' => 'required|string|max:100',
            'city' => 'required|string|max:100',
            'area' => 'required|string|max:100',
            'smoker' => 'required|integer',
            'driver_license' => 'required|integer',
            'category' => 'required|string|max:100',
            'relationship_status' => 'required|in:married,engaged,single',
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = $this->model_instance::paginate(10);
        return view('admin/jobs/index', compact('jobs'));
    }


    public function create()
    {
        $categories=Category::all();
        return view('admin/jobs/add',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //has_access('job_create');
        $validator = Validator::make($request->all(), $this->StoreValidationRules());
        if ($validator->fails()) {
            Log::error($validator->errors());

            return redirect('/dashboard/jobs/add') ->withErrors($validator) ->withInput();
        }

        try {

            $validated_data = $validator->validated();
            //$validated_data['user_id'] = get_Current_user_id();
            $validated_data['user_id'] = 1;
            $object = $this->model_instance::create($validated_data);

            $log_message = 'jobs.create_log' . '#' . $object->id;
            Log::info($log_message);
           return redirect('/dashboard/jobs/add')->with('Success', 'Job Added Successfully');
        } catch (\Error $ex) {

            Log::error($ex->getMessage());
            return redirect('/dashboard/jobs/add')->with('errors', 'Something went wrong');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = $this->model_instance::findOrFail($id);
        //$job->push('user', $job->user);
        return view('admin/jobs/show',compact('job'));
    }

    /**
     *Show update page for the specified resource in storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response*/

    public function edit( $id)
    {
        $job = $this->model_instance::findOrFail($id);
        //$job->push('user', $job->user);
        return view('admin/jobs/edit',compact('job'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {
        // has_access('job_update');
        $validator = Validator::make($request->all(), $this->UpdateValidationRules());
        if ($validator->fails()) {
            Log::error($validator->errors());

            return redirect('/dashboard/jobs/add') ->withErrors($validator) ->withInput();
        }

        try {
        $validated_data = $validator->validated();
        $validated_data['user_id'] = get_Current_user_id();
        $object = $this->model_instance::find($id);
        $object->update($validated_data);
        $log_message = 'jobs.update_log' . '#' . $object->id;

        } catch (\Error $ex) {

            Log::error($ex->getMessage());
            return redirect('/dashboard/jobs/add')->with('errors', 'Something went wrong');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        try {
            $object = $this->model_instance::find($id);
            $object->delete();
            $log_message = 'jobs.create_log' . '#' . $object->id;
            Log::info($log_message);
            return redirect('/dashboard/jobs/')->with('info', 'Job #'.$id.' Deleted Successfully');
        } catch (\Error $ex) {

            Log::error($ex->getMessage());
            return redirect('/dashboard/jobs/')->with('errors', 'Something went wrong');
        }
    }

    public function search($term)
    {
        $job = $this->model_instance::whereLike('title', $term)->get();
        return response()->json(['status' => 'success', 'data' => $job], 200);
    }
}
