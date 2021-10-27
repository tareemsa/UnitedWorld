<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 10/23/2021
 * Time: 12:03 PM
 */


use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

function formatValidationMessages($errors)
{
    return Arr::flatten($errors);
}
/*function has_access ($slugs) {
    //dd(Auth::check());
    if (!Auth::user()->can($slugs)) {
        abort(403);
    }
    return true;
}
function is_company()
{
    if(!Auth::user()->hasRole('company'))
    {
        abort(403);
    }
    return true;
}
function is_employee()
{
    if(!Auth::user()->hasRole('employee'))
    {
        abort(403);
    }
    return true;
}
function get_Current_user_id()
{
    return Auth::user()->id;
}*/