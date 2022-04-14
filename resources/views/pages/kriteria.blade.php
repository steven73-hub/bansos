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
        <h3 class="font-weight-bold">Data Kriteria</h3>
    </div>
    
    <div class="col-md-12 col-sm-12 grid-margin stretch-card">
    @include('includes.flash-message')
        <div class="card position-relative">
            <div class="card-body">
                <p class="card-title float-left">List Kriteria</p>
                <a href="{{ route('addkriteria') }}" class="btn btn-primary btn-sm float-right mb-2">
                    Tambah Kriteria
                </a>
                <div class="table-responsive width">
                    <table class="table text-left">
                        <thead>
                            <tr>
                                <th>Nama Kriteria</th>
                                <th>Tipe Kriteria</th>
                                <th>Bobot</th>
                                <th>Variabel</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($data as $cr)
                                <tr>
                                
                                    <td>{{ $cr['kriteria'] }}</td>
                                    <td>{{ $cr['type'] }}</td>
                                    <td>{{ $cr['bobot'] }}</td>
                                    <td>{{ $cr['variabel'] }}</td>
                                    <td>
                                        <a href="{{ route('editkriteria') }}"
                                            class="btn btn-sm btn-info">Detail</a>
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
        </div>
            <!-- Footer -->
@extends('includes.footer')            
