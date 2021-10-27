<?php

namespace App\Http\Controllers;

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
        //  $this->middleware('auth');
    }

    private function StoreValidationRules()
    {
        return [
            'title' => 'required|string|max:100',
            'type' => 'required|string|max:100',
            'salary' => 'required|integer',
            'paid_per' => 'required|string|max:100',
            'work_time' => 'required|string|max:100',
            'location' => 'required|string|max:100',
            'desc' => 'required|string|max:10000',
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
            'location' => 'required|string|max:100',
            'desc' => 'required|string|max:10000',
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

        return view('admin/jobs/add');
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

            return redirect('/dashboard/jobs') ->withErrors($validator) ->withInput();
        }
        try {

            $validated_data = $validator->validated();
            //$validated_data['user_id'] = get_Current_user_id();
            $validated_data['user_id'] = 1;
            $object = $this->model_instance::create($validated_data);
            $log_message = 'jobs.create_log' . '#' . $object->id;
            Log::info($log_message);
            return redirect('/dashboard/jobs')->with('Success', 'Job Added Successfully');
        } catch (\Error $ex) {

            Log::error($ex->getMessage());
            return redirect('/dashboard/jobs')->with('errors', 'Something went wrong');
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
        $job = $this->model_instance::find($id);
        $job->push('user', $job->user);
        return response()->json(['status' => 'success', 'data' => $job], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // has_access('job_update');
        $validator = Validator::make($request->all(), $this->UpdateValidationRules());
        if ($validator->fails()) {
            Log::error($validator->errors());

            return response()->json(['status' => 'fail', 'errors' => formatValidationMessages($validator->errors()->getMessages())], 422);
        }


        $validated_data = $validator->validated();
        $validated_data['user_id'] = get_Current_user_id();
        $object = $this->model_instance::find($id);
        $object->update($validated_data);
        $log_message = 'jobs.update_log' . '#' . $object->id;

        return response()->json(['status' => 'success', 'success' => ['Job Updated']], 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = $this->model_instance::find($id);
        $job->delete();
        return response()->json(['status' => 'success', 'Job', $id, "deleted" => $job], 200);
    }

    public function search($term)
    {
        $job = $this->model_instance::whereLike('title', $term)->get();
        return response()->json(['status' => 'success', 'data' => $job], 200);
    }
}
