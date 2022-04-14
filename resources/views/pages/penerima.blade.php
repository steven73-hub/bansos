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
            <div class=" col-md-12 mb-2">
                <h3 class="font-weight-bold text-capitalize">Data </h3>
            </div>

            <div class="col-md-8 col-sm-12 grid-margin stretch-card">

                <div class="card position-relative">
                    <div class="card-body">
                        @include('includes.flash-message')
                        <p class="card-title float-left text-capitalize">List Nama </p>
                        <a href="{{ route('tambahpenerima') }}" class="btn btn-primary btn-sm float-right mb-2">
                            Tambah
                        </a>

                        <div class="table-responsive width">
                    <table class="table text-left">
                        <thead>
                            <tr>
                                <th>Nama Calon Penerima</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>tepen</td>
                                    <td>
                                    <a href="{{ route('editpenerima') }}" class="btn btn-sm btn-primary">Edit</a>
                                                <button type="button" a href="#myModal" class="btn btn-sm btn-danger" data-toggle="modal"
                                                    data-target="">
                                                    Hapus
                                                </button>

                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
                    </div>
                </div>
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
            <!-- Footer -->
@extends('includes.footer')            