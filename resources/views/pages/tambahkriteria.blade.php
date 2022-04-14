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
                <img class="rounded-circle mt-5" width="150px" src="images/add.png">
            </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Tambah Kriteria</h4>
                </div>
            
            <form class="forms-sample" method="POST" action="{{ route('createkriteria') }}">
                             @csrf
                             <div class="form-group">
                                 <label for="username">Nama kriteria</label>
                                 <input type="text" class="form-control @error('kriteria') is-invalid @enderror"
                                     id="kriteria" placeholder="Nama kriteria" value="{{ old('kriteria') }}"
                                     name="kriteria">
                                 @error('kriteria')
                                     <div class="invalid-feedback">
                                         {{ $message }}
                                     </div>
                                 @enderror
                             </div>
                             <div class="form-group">
                                 <label for="type">Tipe kriteria</label>
                                 <select class="form-control @error('type') is-invalid border-danger @enderror" id="type"
                                     name="type">
                                     <option {{ old('type') == 'cost' ? 'selected' : '' }} value="cost">
                                         Cost
                                     </option>
                                     <option {{ old('type') == 'benefit' ? 'selected' : '' }} value="benefit">
                                         Benefit
                                     </option>
                                 </select>
                                 @error('type')
                                     <div class="invalid-feedback">
                                         {{ $message }}
                                     </div>
                                 @enderror
                             </div>
                             <div class="form-group">
                                 <label for="username">Bobot kriteria</label>
                                 <input type="text" class="form-control @error('bobot') is-invalid @enderror" id="bobot"
                                     placeholder="Bobot kriteria" value="{{ old('bobot') }}" name="bobot">
                                 @error('bobot')
                                     <div class="invalid-feedback">
                                         {{ $message }}
                                     </div>
                                 @enderror
                             </div>
                             <div class="form-group">
                                 <label for="variabel">Variabel</label>
                                 <input type="text" class="form-control @error('variabel') is-invalid @enderror" id="variabel"
                                     placeholder="Variabel kriteria" value="{{ old('variabel') }}" name="variabel">
                                 @error('bobot')
                                     <div class="invalid-feedback">
                                         {{ $message }}
                                     </div>
                                 @enderror
                             </div>
                             <button type="submit" class="btn btn-primary mr-2">Tambah</button>
                             <a href="{{ route('kriteria') }}" class="btn btn-light">Batal</a>
                         </form>
            </div>
            
        </div>
        
    </div>




</div>
        </div>
            <!-- Footer -->
@extends('includes.footer')            