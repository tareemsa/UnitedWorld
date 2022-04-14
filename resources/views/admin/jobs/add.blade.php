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
                 <script>
                     document.addEventListener("DOMContentLoaded", function() {
                         toastr.success('{{ session()->get('Success') }}');
                     })
                 </script>

<!--                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-check"></i>  {{ session()->get('Success') }}</h5>
                    </div>-->
                @endif
                @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    toastr.error('{{ $error }}');
                                })
                            </script>
                        @endforeach
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
                                        <option value="Elazığ">Elazığ</option>
                                        <option value="erzincan">Erzincan</option>
                                        <option value="erzurum">Erzurum</option>
                                        <option value="eskişehir">Eskişehir</option>
                                        <option value="gaziantep">Gaziantep</option>
                                        <option value="giresun">Giresun</option>
                                        <option value="gümüşhane">Gümüşhane</option>
                                        <option value="hakkâri">Hakkâri</option>
                                        <option value="hatay">Hatay</option>
                                        <option value="isparta">Isparta</option>
                                        <option value="mersin">Mersin</option>
                                        <option value="istanbul">İstanbul</option>
                                        <option value="izmir">İzmir</option>
                                        <option value="kars">Kars</option>
                                        <option value="kastamonu">Kastamonu</option>
                                        <option value="kayseri">Kayseri</option>
                                        <option value="kırklareli">Kırklareli</option>
                                        <option value="kırşehir">Kırşehir</option>
                                        <option value="kocaeli">Kocaeli</option>
                                        <option value="konya">Konya</option>
                                        <option value="kütahya">Kütahya</option>
                                        <option value="malatya">Malatya</option>
                                        <option value="manisa">Manisa</option>
                                        <option value="kahramanmaraş">Kahramanmaraş</option>
                                        <option value="mardin">Mardin</option>
                                        <option value="muğla">Muğla</option>
                                        <option value="muş">Muş</option>
                                        <option value="nevşehir">Nevşehir</option>
                                        <option value="niğde">Niğde</option>
                                        <option value="ordu">Ordu</option>
                                        <option value="rize">Rize</option>
                                        <option value="sakarya">Sakarya</option>
                                        <option value="samsun">Samsun</option>
                                        <option value="siirt">Siirt</option>
                                        <option value="sinop">Sinop</option>
                                        <option value="sivas">Sivas</option>
                                        <option value="tekirdağ">Tekirdağ</option>
                                        <option value="tokat">Tokat</option>
                                        <option value="trabzon">Trabzon</option>
                                        <option value="tunceli">Tunceli</option>
                                        <option value="şanlıurfa">Şanlıurfa</option>
                                        <option value="Uşak">Uşak</option>
                                        <option value="Van">Van</option>
                                        <option value="Yozgat">Yozgat</option>
                                        <option value="Zonguldak">Zonguldak</option>
                                        <option value="Aksaray">Aksaray</option>
                                        <option value="Bayburt">Bayburt</option>
                                        <option value="Karaman">Karaman</option>
                                        <option value="Kırıkkale">Kırıkkale</option>
                                        <option value="Batman">Batman</option>
                                        <option value="Şırnak">Şırnak</option>
                                        <option value="Bartın">Bartın</option>
                                        <option value="Ardahan">Ardahan</option>
                                        <option value="Iğdır">Iğdır</option>
                                        <option value="Yalova">Yalova</option>
                                        <option value="Karabük">Karabük</option>
                                        <option value="Kilis">Kilis</option>
                                        <option value="Osmaniye">Osmaniye</option>
                                        <option value="Düzce">Düzce</option>
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
                    <button onclick="this.form.reset();" href="" class="btn btn-secondary">Cancel</button>
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
