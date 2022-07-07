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
        <form action="{{ action('ProjectController@store') }}" method="POST" >
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
                                    <label for="currency">Currency</label>
                                    <select required id="currency" name="currency" class="form-control custom-select">
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

                                    <label for="city">City</label>
                                    <select name="city" class="form-control custom-select"  required>
                                        <option value="" disabled >Choose...</option>
                                        <option value="adana">Adana</option>
                                        <option value="adıyaman">Adıyaman</option>
                                        <option value="afyonkarahisar">Afyonkarahisar</option>
                                        <option value="ağrı">Ağrı</option>
                                        <option value="amasya">Amasya</option>
                                        <option value="ankara">Ankara</option>
                                        <option value="antalya">Antalya</option>
                                        <option value="artvin">Artvin</option>
                                        <option value="aydın">Aydın</option>
                                        <option value="balıkesir">Balıkesir</option>
                                        <option value="bilecik">Bilecik</option>
                                        <option value="bingöl">Bingöl</option>
                                        <option value="bitlis">Bitlis</option>
                                        <option value="bolu">Bolu</option>
                                        <option value="burdur">Burdur</option>
                                        <option value="bursa">Bursa</option>
                                        <option value="çanakkale">Çanakkale</option>
                                        <option value="çankırı">Çankırı</option>
                                        <option value="çorum">Çorum</option>
                                        <option value="denizli">Denizli</option>
                                        <option value="diyarbakır">Diyarbakır</option>
                                        <option value="edirne">Edirne</option>
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

                                    <label for="area">Area</label>
                                    <input required type="text" id="area" name="area" class="form-control">
                                </div>

                                <div class="col-3">
                                    <label for="experience">Experience</label>
                                    <input required type="number" id="experience" name="experience" class="form-control">
                                </div>

                                <div class="col-3">
                                    <label for="education_level">Education level</label>
                                    <select required id="education_level" name="education_level" class="form-control custom-select">
                                        <option  disabled>Select one</option>
                                        <option value="bac" selected>Bac</option>
                                        <option value="master">Master</option>
                                        <option value="doc">Doc</option>
                                        <option value="phd">Phd</option>
                                    </select>
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
                                    <select required id="smoker" name="smoker" class="form-control custom-select">
                                        <option  disabled>Select one</option>
                                        <option value="0" selected>No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>

                                <div class="col-3">
                                    <label for="relationship_status">Driver license </label>
                                    <select required id="driver_license" name="driver_license" class="form-control custom-select">
                                        <option  disabled>Select one</option>
                                        <option value="1" selected>Yes</option>
                                        <option value="0">No</option>

                                    </select>
                                </div>
                                <div class="col-3">
                                    <label for="category ">Category </label>
                                    <select required id="category" name="category" class="form-control custom-select">
                                        <option  disabled>Select one</option>
                                        @foreach ($categories as $cat)
                                        <option value="{{$cat->title}}">{{$cat->title}}</option>
                                        @endforeach
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
