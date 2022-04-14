@extends('includes.header')

@section('content')


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

    @include('includes.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
    @include('includes.navbar')
        <div class="container-fluid">
        <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                <span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Data Calon Penerima</h4>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Nama Calon Penerima</label><input type="text" class="form-control" placeholder="Masukkan Nama" value=""></div>
                    <div class="col-md-12"><label class="labels">Pekerjaan</label><input type="text" class="form-control" placeholder="Pekerjaan" value=""></div>
                    <div class="col-md-12"><label class="labels">Usia</label><input type="text" class="form-control" placeholder="Masukkan Usia" value=""></div>
                    <div class="col-md-12"><label class="labels">Alamat</label><input type="text" class="form-control" placeholder="Masukkan Alamat Calon Penerima" value=""></div>
                </div>
                
                <div class="mt-3 text-left"><button class="btn btn-primary profile-button" type="button">Simpan</button></div>
            </div>
        </div>
        
    </div>




</div>
        </div>
            <!-- Footer -->
@extends('includes.footer')            