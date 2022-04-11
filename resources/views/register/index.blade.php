@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            
            <form action="/register" method="post">
                @csrf
                <div class="form-floating"> 
                  <input type="text" name="firstname" class="form-control rounded-top @error('firstname') is-invalid @enderror" id="firstname" placeholder="Firstname" required value="{{ old('firstname') }}">
                  <label for="firstname">First name</label>
                  @error ('firstname')
                  <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror              
                </div>
                <div class="form-floating">
                  <input type="text" name="lastname" class="form-control @error('lastname') is-invalid @enderror" id="lastname" placeholder="Lastname" required value="{{ old('lastname') }}">
                  <label for="lastname">Last name</label>
                  @error ('lastname')
                  <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror              
                </div>
              <div class="form-floating">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                <label for="username">Username</label>
                @error ('username')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror              
              </div>
              <div class="form-floating">
                <input type="date" name="dateofbirth" class="form-control @error('dateofbirth') is-invalid @enderror" id="dateofbirth" placeholder="1999-1-12" required value="{{ old('dateofbirth') }}"> 
                <label for="email">Date of birth</label>
                @error ('email')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror              
              <div class="form-floating">
                <input type="number" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="1999-1-12" required value="{{ old('phone') }}"> 
                <label for="phone">Phone number</label>
                @error ('phone')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror              
              </div>
              <div class="form-floating">
                <input type="file" name="profilpicture" class="form-control @error('profilpicture') is-invalid @enderror" id="profilpicture"  required value="{{ old('profilpicture') }}"> 
                <label for="profilpicture">Picture</label>
                @error ('profilpicture')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror              
              </div>
              <div class="form-floating">
                <input type="text" name="store" class="form-control @error('store') is-invalid @enderror" id="store"  placeholder="Nama toko" required value="{{ old('store') }}"> 
                <label for="store">Nama toko</label>
                @error ('store')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror              
              </div>
              <div class="form-floating">
                <input type="text" name="storeAddress" class="form-control @error('storeAddress') is-invalid @enderror" id="storeAddress"  placeholder="alamat toko" required value="{{ old('storeAddress') }}"> 
                <label for="storeAddress">Alamat toko</label>
                @error ('storeAddress')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror              
              </div>
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}"> 
                <label for="email">Email address</label>
                @error ('email')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror              
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error ('password')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror              
              </div>
          
             
              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3">Already registered? <a href="/login">Login</a></small>
          </main>  
    </div>
</div>

  
@endsection