@extends('includes.header')

@section('content')


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

    @include('includes.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            @include('includes.navbar')

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Content Row -->
            <div class="row">
             <div class="col-md-12 grid-margin">
                 <div class="row">
                     <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                         <h3 class="font-weight-bold">Selamat datang {{ auth()->user()->nama }}<span
                                 class="waving-hand">👋</span></h3>
                         <h5 class="font-weight-bold">Aplikasi Sistem Penunjang Keputusan Penerima Bantuan Sosial Menggunakan Metode SAW. </h5>
                     </div>
                     <div class="col-12 col-xl-4">
                         <div class="justify-content-end d-flex">
                             <div class="flex-md-grow-1 flex-xl-grow-0">
                                 <div class="btn btn-sm btn-light bg-white font-weight-bold">
                                     <!-- {{ now()->format(' D, d M Y ') }} -->
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
            </div>

            <hr class="sidebar-divider">
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Calon Penerima</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">40 Orang</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Kriteria</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">26 jenis</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">skor
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Tidak Masuk Kategori</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">6</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-times fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- section -->


            
         <div class="row">
             {{-- Nilai Normalisasi --}}
             


             <div class="col-md-8 col-sm-12 grid-margin stretch-card">
                 <div class="card position-relative">
                     <div class="card-body">
                         <p class="card-title float-left">Top Alternative </p>
                         <div class="table-responsive width">
                             <table class="table">
                                     <tr>
                                         <th>Nama</th>
                                         <th>Skor</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                    
                                         <tr>
                                             <td>Tepen</td>
                                             <td>100</td>
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
            <!-- End of Main Content -->

            <!-- Footer -->
@extends('includes.footer')            