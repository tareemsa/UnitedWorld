@extends('layouts.app')

@section('content')

    <!-- jp register wrapper start -->
    <div class="register_section">
        <!-- register_form_wrapper -->
        <div class="register_tab_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div role="tabpanel">

                            <!-- Nav tabs -->
                            <ul id="tabOne" class="nav register-tabs">
                                <li class="active"><a href="#user" data-toggle="tab">{{ __('auth.personal_account')}} <br>
                                    </a>
                                </li>

                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active register_left_form" id="user">
                                    <form method="POST" action="{{ action('UserController@StoreUser') }}" enctype="multipart/form-data">
                                        @csrf
                                    <div class="jp_regiter_top_heading">
                                        <p>{{ __('auth.fields_note')}}</p>
                                    </div>
                                    <div class="row">
                                        <form action="#" data-toggle="validator">
                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label for="">{{ __('auth.full_name') }} *</label>
                                                <input type="text" name="full_name" value="" placeholder="{{ __('auth.full_name') }}*"
                                                       required>
                                            </div>

                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label for="">{{ __('auth.email') }} *</label>
                                                <input type="email" name="email" value="" placeholder="{{ __('auth.email') }}*"
                                                       required>
                                            </div>
                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label for="">{{ __('auth.password') }} *</label>
                                                <input id="password-field" type="password" name="password" value=""
                                                       onChange="onChange()" placeholder="{{ __('auth.password') }}*" required>
                                            </div>




                                            <div class="login_btn_wrapper register_btn_wrapper login_wrapper ">
                                                <button type="submit"
                                                        class="btn btn-primary login_btn">register</button>
                                                <!-- <a type="submit" href="javascript:;" class="btn btn-primary login_btn"> register </a> -->
                                            </div>
                                        </form>
                                    </div>
                                    <div class="login_message">
                                        <p>Already a member? <a href="/login"> Login Here </a> </p>
                                    </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp register wrapper end -->
@endsection
