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
            <h3 class="font-weight-bold">Data User</h3>
        </div>
             <div class="col-md-12 col-sm-12 grid-margin stretch-card">
                 <div class="card position-relative">
                     <div class="card-body">
                         <p class="card-title float-left">List User</p>
                         <div class="table-responsive width">
                             <table class="table">
                                     <tr>
                                         <th>Nama</th>
                                         <th>Username</th>
                                         <th>Level</th>
                                         <th>Aksi</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                @foreach ($data as $mu)
                                         <tr>
                                             <td>{{ $mu['nama'] }}</td>
                                             <td>{{ $mu['username'] }}</td>
                                             <td>{{ $mu['level'] }}</td>
                                             <td>
                                             <a href="{{ route('editusers') }}" class="btn btn-sm btn-primary">Edit</a>
                                             <!-- <a href="" class="btn btn-sm btn-danger">Hapus</a> -->
                                             <!-- <div class="text-center"> -->
	                                            <a href="#myModal" class="btn btn-sm btn-danger" data-toggle="modal">Hapus</a>
                                            <!-- </div> -->
                                             </td>
                                         </tr>
                                @endforeach
                                 </tbody>
                             </table>
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
</div>


            <!-- Footer -->
@extends('includes.footer')            