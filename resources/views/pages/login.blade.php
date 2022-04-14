@extends('includes.auth')
@section('content')
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Aplikasi Sistem Penunjang Keputusan Penerima Bantuan Sosial Metode SAW</h2>
				</div>
			
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(images/auth.jpg);">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Log In</h3>
			      		</div>
			      	</div>
					
					@if(session()->has('success'))
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						{{ session('success')}}
						
					</div>
					@endif
				

						<form action="/login" class="signin-form" method="POST">
							@csrf

			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Username</label>
			      			<input type="text" name="username" class="form-control rounded-top @error('username') is-invalid @enderror" placeholder="Masukkan Username" required value="{{ old('username')}}">
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>
		              <input type="password" name="password" class="form-control rounded-top @error('password') is-invalid @enderror" placeholder="Password" required>
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
		            </div>
					<div class="form-group">
					<p class="text-left">Belum Punya akun? <a href="/register"> Daftar</a></p>
		            	
		            </div>
		            
		          </form>
				  
		         
		      </div>
				</div>
			</div>
		</div>
	</section>
    @endsection


