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
                    <h4 class="text-right">Edit Data Kriteria</h4>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Nama Kriteria</label><input type="text" class="form-control" placeholder="masukkan nama kriteria" value=""></div>
                    <div class="col-md-12"><label class="labels">Tipe Kriteria</label><input type="text" class="form-control" placeholder="Masukkan tipe kriteria" value=""></div>
                    <div class="col-md-12"><label class="labels">Bobot Kriteria</label><input type="text" class="form-control" placeholder="masukkan bobot kriteria" value=""></div>
                    <div class="col-md-12"><label class="labels">Variabel</label><input type="text" class="form-control" placeholder="masukkan variabel kriteria" value=""></div>
                </div>
                
                <div class="mt-3 text-left">
                    <button class="btn btn-success" type="button">Simpan</button>
                    <button type="button" a href="#myModal" class="btn btn-danger" data-toggle="modal" data-target="">
                    Hapus
                    </button>
                </div>
                
            </div>
        </div>
        
    </div>

<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <form action="" method="POST">
		        <div class="modal-content">
			        <div class="modal-header flex-column">					
				    <h4 class="modal-title w-100">Apakah Anda Yakin?</h4>	   
			    </div>
			    <div class="modal-footer justify-content-center">
				    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
				    <button type="button" class="btn btn-danger">Hapus</button>
			    </div>
		    </div>
        </form>
	</div>
</div>
</div>
</div>
            <!-- Footer -->
@extends('includes.footer')            