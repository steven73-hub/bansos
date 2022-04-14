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
			      			<h3 class="mb-4">Register</h3>
			      		</div>
			      	</div>
						<form action="/register" class="signin-form" method="POST">
						@csrf
                        
                        <div class="form-group mb-3">
			      			<label class="label" for="name">Nama Anda</label>

							@error('name')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
							@enderror

			      			<input type="text" name="nama" class="form-control rounded-top @error('nama') is-invalid @enderror" placeholder="Masukkan Nama Anda" required value="{{ old('nama')}}">
			      		</div>
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Username</label>
							
							  @error('username')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
							@enderror

			      			<input type="text" name="username" class="form-control rounded-top @error('username') is-invalid @enderror" placeholder="Masukkan Username Anda" required value="{{ old('username')}}">
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>
						@error('password')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
						@enderror
		              <input type="password" name="password" class="form-control rounded-top @error('password') is-invalid @enderror" placeholder="Password" required>
		            </div>
					<div class="form-group">
                        <label for="type">Tipe Pengguna</label>
                            <select class="form-control @error('type') is-invalid border-danger @enderror" id="type" name="level">
                                <option
                                    {{ old('level') == 'user' || isset($_GET['level']) == 'user' ? 'selected' : '' }}
                                    value="user">User
                                </option>
                                <option
                                {{ old('level') == 'admin' || isset($_GET['level']) == 'admin' ? 'selected' : '' }}
                                value="admin">
                                Admin
                                </option>
                            </select>
                            @error('level')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                    </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Daftar</button>
		            </div>
					<div class="form-group">
					<p class="text-left">Sudah Punya akun? <a href="/login"> Log in</a></p>
		            	
		            </div>
		            
		          </form>
				  
		         
		      </div>
				</div>
			</div>
		</div>
	</section>

    @endsection

