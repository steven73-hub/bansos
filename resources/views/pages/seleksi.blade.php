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
                 <h3 class="font-weight-bold">Data Seleksi</h3>
             </div>

             <div class="col-md-12 col-sm-12 grid-margin stretch-card">
                 <div class="card position-relative">
                     <div class="card-body">
                         <p class="card-title float-left">Nilai Alternatif</p>
                         <a href="{{ route('addseleksi') }}" class="btn btn-primary btn-sm float-right mb-2">Tambah
                             Seleksi</a>
                         <div class="table-responsive width">
                             <table class="table text-capitalize">
                                 <thead>
                                     <tr>
                                         <th>C1</th>
                                         <th>C2</th>
                                         <th>C3</th>
                                         <th>C4</th>
                                         <th>C5</th>
                                         <th>C6</th>
                                         <th>C7</th>
                                         <th>C8</th>
                                         <th>C9</th>
                                         <th>C10</th>                                        
                                         <th width="10%">Aksi</th>
                                     </tr>
                                 </thead>

                                 <tbody>
                                    

                                         <tr>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>5</td>
                                            <td>6</td>
                                            <td>7</td>
                                            <td>8</td>
                                            <td>9</td>
                                            <td>10</td>
                                            <td>
                                                 <a href="{{ route('editseleksi') }}"
                                                     class="btn btn-sm btn-primary">Edit</a>
                                            </td>
                                         </tr>
                                 </tbody>

                             </table>
                         </div>
                     </div>
                 </div>
             </div>


             <div class="col-md-12 col-sm-12 grid-margin stretch-card">
                 <div class="card position-relative">
                     <div class="card-body">
                         <p class="card-title float-left">Nilai Konversi / Matrik Keputusan</p>
                         <div class="table-responsive width">
                             <table class="table text-capitalize">
                                 <thead>
                                     <tr>
                                         <th>Nama</th>
                                         <th>C1</th>
                                         <th>C2</th>
                                         <th>C3</th>
                                         <th>C4</th>
                                         <th>C5</th>
                                         <th>C6</th>
                                         <th>C7</th>
                                         <th>C8</th>
                                         <th>C9</th>
                                         <th>C10</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     
                                         <tr>
                                            <td>tepen</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>5</td>
                                            <td>6</td>
                                            <td>7</td>
                                            <td>8</td>
                                            <td>9</td>
                                            <td>10</td>
                                         </tr>
                                     
                                 </tbody>
                             </table>
                         </div>
                     </div>
                 </div>
             </div>

             {{-- Nilai Normalisasi --}}
             <div class="col-md-12 col-sm-12 grid-margin stretch-card">
                 <div class="card position-relative">
                     <div class="card-body">
                         <p class="card-title float-left">Normalisasi</p>
                         <div class="table-responsive width">
                             <table class="table text-capitalize">
                                 <thead>
                                     <tr>
                                         <th>Nama</th>
                                         <th>C1</th>
                                         <th>C2</th>
                                         <th>C3</th>
                                         <th>C4</th>
                                         <th>C5</th>
                                         <th>C6</th>
                                         <th>C7</th>
                                         <th>C8</th>
                                         <th>C9</th>
                                         <th>C10</th>
                                         
                                     </tr>
                                 </thead>
                                 <tbody>
                                     

                                         <tr>
                                            <td>tepen</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>5</td>
                                            <td>6</td>
                                            <td>7</td>
                                            <td>8</td>
                                            <td>9</td>
                                            <td>10</td>
                                            
                                         </tr>
                                    
                                 </tbody>
                             </table>
                         </div>
                     </div>
                 </div>
             </div>

             {{-- Rangking --}}
             <div class="col-md-12 col-sm-12 grid-margin stretch-card">
                 <div class="card position-relative">
                     <div class="card-body">
                         <p class="card-title float-left">Ranking</p>
                         <div class="table-responsive width">
                             <table class="table text-capitalize">
                                 <thead>
                                     <tr>
                                         <th>Nama</th>
                                         <th>Score</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     

                                     
                                         <tr>
                                             <td>tepen</td>
                                             <td>1</td>
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
            <!-- Footer -->
@extends('includes.footer')            