<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;


class ProjectController extends Controller
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
        $this->model_instance = Project::class;
        //$this->middleware('auth');
    }

    private function StoreValidationRules()
    {
        return [

            'title' => 'required|string|max:100',
            'phone' => 'required|string|max:100',
            'city' => 'required|string|max:100',
            'town' => 'required|string|max:100',
            'rooms' => 'required|string|max:100',
            'sea_view' => 'required|integer',
            'location' => 'required|string|max:100',
            'status' => 'required|in:sold,ready,under_construction',
            'uwestate_url' => 'required|string|max:100',
            'starting_price_usd' => 'required|integer',
        ];
    }

    private function UpdateValidationRules()
    {
        return [
            'title' => 'required|string|max:100',
            'phone' => 'required|string|max:100',
            'town' => 'required|string|max:100',
            'location' => 'required|string|max:100',
            'status' => 'required|in:sold,ready,under_construction',
            'uwestate_url' => 'required|string|max:100',
            'starting_price_usd' => 'required|integer', // Corrected key
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = $this->model_instance::paginate(10);
        return view('admin/projects/index', compact('projects'));
    }


    public function create()
    {

        return view('admin/projects/add');
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

            return redirect('/dashboard/projects/add') ->withErrors($validator) ->withInput();
        }

        try {

            $validated_data = $validator->validated();
            $validated_data['user_id'] = get_Current_user_id();
            //$validated_data['user_id'] = A;
            $object = $this->model_instance::create($validated_data);

            $log_message = 'projects.create_log' . '#' . $object->id;
            Log::info($log_message);
           return redirect('/dashboard/projects/add')->with('Success', 'Project Added Successfully');
        } catch (\Error $ex) {

            Log::error($ex->getMessage());
            return redirect('/dashboard/projects/add')->with('errors', 'Something went wrong');
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
        return view('admin/projects/show',compact('job'));
    }

    /**
     *Show update page for the specified resource in storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response*/
    public function edit($id)
    {
        try {

                $project = Project::findOrFail($id);
                return view('admin.projects.edit', compact('project'));
            
            
        } catch (\Exception $ex) {
            Log::error($ex->getMessage());
            return redirect('/dashboard/projects')->with('errors', 'project not found');
        }
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), $this->UpdateValidationRules());
    
        if ($validator->fails()) {
            Log::error($validator->errors());
            return redirect()->route('projects.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }
    
        try {
            $validated_data = array_filter($validator->validated(), function ($value) {
                return $value !== null;
            });
            $project = project::findOrFail($id); // Fetch the order or throw 404
            $project->update($validated_data);
    
            Log::info('project updated: ' . $project->id);
    
            return redirect()->route('projects.index')->with('success', 'project Updated Successfully');
        } catch (\Exception $ex) {
            Log::error($ex->getMessage());
            return redirect()->route('projects.edit', $id)->with('error', 'Something went wrong');
        }
    }



   /* public function edit( $id)
    {
        $job = $this->model_instance::findOrFail($id);
        //$job->push('user', $job->user);
        return view('admin/projects/edit',compact('job'));

    }
*/
    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
   /* public function update(Request $request, $id)
    {
        // has_access('job_update');
        $validator = Validator::make($request->all(), $this->UpdateValidationRules());
        if ($validator->fails()) {
            Log::error($validator->errors());

            return redirect('/dashboard/projects/add') ->withErrors($validator) ->withInput();
        }

        try {
        $validated_data = $validator->validated();
        $validated_data['user_id'] = get_Current_user_id();
        $object = $this->model_instance::find($id);
        $object->update($validated_data);
        $log_message = 'projects.update_log' . '#' . $object->id;

        } catch (\Error $ex) {

            Log::error($ex->getMessage());
            return redirect('/dashboard/projects/add')->with('errors', 'Something went wrong');
        }

    }*/

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
            $log_message = 'projects.create_log' . '#' . $object->id;
            Log::info($log_message);
            return redirect('/dashboard/projects/')->with('info', 'Project #'.$id.' Deleted Successfully');
        } catch (\Error $ex) {

            Log::error($ex->getMessage());
            return redirect('/dashboard/projects/')->with('errors', 'Something went wrong');
        }
    }

    public function search($term)
    {
        $job = $this->model_instance::whereLike('title', $term)->get();
        return response()->json(['status' => 'success', 'data' => $job], 200);
    }
}
