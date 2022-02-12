@extends('layouts.dashboradheader')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Jobs </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/dashborad">Home</a></li>
                            <li class="breadcrumb-item active">Jobs</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="container col-12">
                @if(session()->has('Success'))
                    <div class="m-sm-4 alert alert-success">
                        {{ session()->get('Success') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            </div>
            <form action="{{ action('JobController@store') }}" method="POST" >
                @csrf
                <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary" >
                        <div class="card-header">
                            <h3 class="card-title">Add New Job</h3>


                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title"> Title</label>
                                <input required type="text" name="title" id="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="summernote"> Description</label>
                                <textarea  required id="summernote" name="desc" class="form-control" rows="20"  ></textarea>
                            </div>
                            <div class=" form-group row">
                                <div class="col-2">
                                <label for="type">Type</label>
                                <select required id="type" name="type" class="form-control custom-select">
                                    <option  disabled>Select one</option>
                                    <option value="remote">Remote</option>
                                    <option value="indoor" selected >Indoor</option>
                                </select>
                                </div>
                                <div class="col-2">
                                <label for="work_time">Work Time</label>
                                <select required id="work_time" name="work_time" class="form-control custom-select">
                                    <option selected disabled>Select one</option>
                                    <option value="full_time">Full Time</option>
                                    <option value="part_time">Part Time</option>
                                </select>
                                </div>



                                <div class="col-2">
                                <label for="paid_per">Paid Per</label>
                                <select required id="paid_per" name="paid_per" class="form-control custom-select">
                                    <option  disabled>Select one</option>
                                    <option value="hour" selected>Paid Per Hour</option>
                                    <option value="day">Paid Per Day</option>
                                    <option value="monthly">Paid Per Monthly</option>
                                    <option value="yearly">Paid Per Yearly</option>
                                </select>
                                </div>
                                <div class="col-2">
                                    <label for="salary">Salary </label>
                                    <input required type="number" id="salary" name="salary" class="form-control">
                                </div>
                                <div class="col-2">
                                    <label for="military_status">Currency</label>
                                    <select required id="military_status" name="military_status" class="form-control custom-select">
                                        <option  disabled>Select one</option>
                                        <option value="done" selected>USD</option>
                                        <option value="exempt" selected>EURO</option>
                                        <option value="not_yet">TL</option>
                                    </select>
                                </div>

                                <div class="col-2">
                                    <label for="military_status">Military Status</label>
                                    <select required id="military_status" name="military_status" class="form-control custom-select">
                                        <option  disabled>Select one</option>
                                        <option value="done" selected>Done</option>
                                        <option value="exempt" selected>Exempt</option>
                                        <option value="not_yet">Not Yet</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>Minimal</label>
                                        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                            <option selected="selected" data-select2-id="3">Alabama</option>
                                            <option data-select2-id="46">Alaska</option>
                                            <option data-select2-id="47">California</option>
                                            <option data-select2-id="48">Delaware</option>
                                            <option data-select2-id="49">Tennessee</option>
                                            <option data-select2-id="50">Texas</option>
                                            <option data-select2-id="51">Washington</option>
                                        </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-v434-container"><span class="select2-selection__rendered" id="select2-v434-container" role="textbox" aria-readonly="true" title="California">California</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                <label for="city">City</label>
                                    <select name="city" class="form-control custom-select">
                                        <option value="">Choose...</option>
                                        <option value="1">Adana</option>
                                        <option value="2">Adıyaman</option>
                                        <option value="3">Afyonkarahisar</option>
                                        <option value="4">Ağrı</option>
                                        <option value="5">Amasya</option>
                                        <option value="6">Ankara</option>
                                        <option value="7">Antalya</option>
                                        <option value="8">Artvin</option>
                                        <option value="9">Aydın</option>
                                        <option value="10">Balıkesir</option>
                                        <option value="11">Bilecik</option>
                                        <option value="12">Bingöl</option>
                                        <option value="13">Bitlis</option>
                                        <option value="14">Bolu</option>
                                        <option value="15">Burdur</option>
                                        <option value="16">Bursa</option>
                                        <option value="17">Çanakkale</option>
                                        <option value="18">Çankırı</option>
                                        <option value="19">Çorum</option>
                                        <option value="20">Denizli</option>
                                        <option value="21">Diyarbakır</option>
                                        <option value="22">Edirne</option>
                                        <option value="23">Elazığ</option>
                                        <option value="24">Erzincan</option>
                                        <option value="25">Erzurum</option>
                                        <option value="26">Eskişehir</option>
                                        <option value="27">Gaziantep</option>
                                        <option value="28">Giresun</option>
                                        <option value="29">Gümüşhane</option>
                                        <option value="30">Hakkâri</option>
                                        <option value="31">Hatay</option>
                                        <option value="32">Isparta</option>
                                        <option value="33">Mersin</option>
                                        <option value="34">İstanbul</option>
                                        <option value="35">İzmir</option>
                                        <option value="36">Kars</option>
                                        <option value="37">Kastamonu</option>
                                        <option value="38">Kayseri</option>
                                        <option value="39">Kırklareli</option>
                                        <option value="40">Kırşehir</option>
                                        <option value="41">Kocaeli</option>
                                        <option value="42">Konya</option>
                                        <option value="43">Kütahya</option>
                                        <option value="44">Malatya</option>
                                        <option value="45">Manisa</option>
                                        <option value="46">Kahramanmaraş</option>
                                        <option value="47">Mardin</option>
                                        <option value="48">Muğla</option>
                                        <option value="49">Muş</option>
                                        <option value="50">Nevşehir</option>
                                        <option value="51">Niğde</option>
                                        <option value="52">Ordu</option>
                                        <option value="53">Rize</option>
                                        <option value="54">Sakarya</option>
                                        <option value="55">Samsun</option>
                                        <option value="56">Siirt</option>
                                        <option value="57">Sinop</option>
                                        <option value="58">Sivas</option>
                                        <option value="59">Tekirdağ</option>
                                        <option value="60">Tokat</option>
                                        <option value="61">Trabzon</option>
                                        <option value="62">Tunceli</option>
                                        <option value="63">Şanlıurfa</option>
                                        <option value="64">Uşak</option>
                                        <option value="65">Van</option>
                                        <option value="66">Yozgat</option>
                                        <option value="67">Zonguldak</option>
                                        <option value="68">Aksaray</option>
                                        <option value="69">Bayburt</option>
                                        <option value="70">Karaman</option>
                                        <option value="71">Kırıkkale</option>
                                        <option value="72">Batman</option>
                                        <option value="73">Şırnak</option>
                                        <option value="74">Bartın</option>
                                        <option value="75">Ardahan</option>
                                        <option value="76">Iğdır</option>
                                        <option value="77">Yalova</option>
                                        <option value="78">Karabük</option>
                                        <option value="79">Kilis</option>
                                        <option value="80">Osmaniye</option>
                                        <option value="81">Düzce</option>
                                    </select>
                                </div>        <div class="col-3">

                                <label for="location">Area</label>
                                <input required type="text" id="location" name="location" class="form-control">
                                </div>

                                <div class="col-3">
                                <label for="experience">Experience</label>
                                <input required type="number" id="experience" name="experience" class="form-control">
                                </div>

                                <div class="col-3">
                                <label for="education">Education level</label>
                                <input required type="text" id="education" name="education" class="form-control">
                                </div>

                                <div class="col-3">
                                    <label for="relationship_status">Relationship status</label>
                                    <select required id="relationship_status" name="relationship_status" class="form-control custom-select">
                                        <option  disabled>Select one</option>
                                        <option value="married" selected>Married</option>
                                        <option value="engaged">Engaged</option>
                                        <option value="single">Single</option>
                                    </select>
                                </div>

                                <div class="col-3">
                                    <label for="relationship_status">Smoker</label>
                                    <select required id="relationship_status" name="relationship_status" class="form-control custom-select">
                                        <option  disabled>Select one</option>
                                        <option value="no" selected>No</option>
                                        <option value="yes">Yes</option>
                                    </select>
                                </div>

                                <div class="col-3">
                                    <label for="relationship_status">Driver license </label>
                                    <select required id="relationship_status" name="relationship_status" class="form-control custom-select">
                                        <option  disabled>Select one</option>
                                        <option value="married" selected>Married</option>
                                        <option value="engaged">Engaged</option>
                                        <option value="single">Single</option>
                                    </select>
                                </div>

                            </div>
                        </div>

                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <a href="" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Add New Job" class="btn btn-success float-right">
                </div>
            </div>
            </form>
        </section>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- Page specific script -->

@endsection
