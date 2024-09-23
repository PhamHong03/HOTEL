@extends('client.homepage')

@section('content')
    <div class="container">
        <div class="row">
            <div class="register__title">
                {{-- <h3>LOGIN HERE</h3> --}}
                <span>Please fill full your information</span>
                
            </div>
        </div>     
        <div class="register__form">
            <form action="" method="POST" class="form">
                @include('admin.alert')
                @csrf
                <div class="mb-3 align-items-center mt-3">
                    <div class="d-flex align-items-center mt-3">
                        <i class="fa-solid fa-envelope"></i><input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                    </div>
                    @error('email')
                        <div class="ms-5 text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3 align-items-center">
                    <div class="d-flex align-items-center mt-3">
                        <i class="fa-solid fa-key"></i> <input  type="password" name="password" id="password" class="form-control" id="exampleFormControlInput1" placeholder="Password">
                    </div>
                    @error('password')
                        <div class="ms-5 text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3 d-flex ms-3">
                    <input type="checkbox" id="checkbox" onclick="showPassword()"> <span class="ms-1">Show password</span>
                    <a href="" class="ms-3 text-danger">Forgot password</a>
                </div>
                <div class="mb-3 d-flex ms-3" style="justify-content: center">   
                    <input class="btn sesstion__two--button-readmore btn-button-contact" type="submit" value="Login">
                </div>

                <p class="text-center">Don't have an account? <a href="{{ route('client-register') }}">Register</a></p>
            </form>
        </div>
    </div>    
    <script>
        function showPassword() {
            var password = document.getElementById('password');
            var checkbox = document.getElementById('checkbox');

            if(checkbox.checked) {
                password.type = "text";
            }else{
                password.type = "password";
            }
        }
    </script>

@endsection