@extends('client.homepage')

@section('content')
    <div class="container">
        <div class="row">
            <div class="register__title">
                {{-- <h3>SO HAPPY TO SIGN UP AN ACCOUNT WITH YOU</h3> --}}
                <span>Please fill full your information</span>
            </div>
        </div>     
        <div class="register__form">
            <form action="" method="POST" class="form">
                @csrf
                <div class="mb-3 align-items-center mt-2">
                    <div class="d-flex align-items-center mt-3">
                        <i class="fa-solid fa-user"></i><input type="text" class="form-control" name="name" placeholder="First and last name">
                    </div>
                    @error('name')
                        <div class="ms-5 text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3 align-items-center mt-2">
                    <div class="d-flex align-items-center mt-3">
                         <i class="fa-solid fa-envelope"></i><input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    @error('email')
                        <div class="ms-5 text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3  align-items-center">
                    <div class="d-flex align-items-center mt-3">
                        <i class="fa-solid fa-phone"></i><input type="text" class="form-control" name="phone" placeholder="Phone number">
                    </div>
                    @error('phone')
                        <div class="ms-5 text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3  align-items-center">
                    <div class="d-flex align-items-center mt-3">
                        <i class="fa-solid fa-location-dot"></i><input type="text" class="form-control" name="address" placeholder="Address">
                    </div>
                    @error('phone')
                        <div class="ms-5 text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3 align-items-center">
                    <div class="d-flex align-items-center mt-3">
                        <i class="fa-solid fa-key"></i> <input type="password" id="password" class="form-control" name="password" placeholder="Mật khẩu">
                    </div>
                    @error('password')
                        <div class="ms-5 text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3 align-items-center">
                    <div class="d-flex align-items-center mt-3">
                        <i class="fa-solid fa-key"></i> <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder= "Nhập lại mật khẩu">
                    </div>
                    @error('confirmPassword')
                        <div class="ms-5 text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3 d-flex ms-3">
                    <input type="checkbox" id="checkbox" onclick="showPassword()"> <span class="ms-1">Show password</span>
                </div>
                <div class="mb-3 d-flex ms-3" style="justify-content: center">   
                    <input class="btn sesstion__two--button-readmore btn-button-contact" type="submit" value="SIGN UP">
                </div>

                <p class="text-center">Do you have an account? <a href="{{route('client-login')}}">Sign in</a></p>
            </form>
        </div>
    </div>    

    <script>
        function showPassword() {
            var password = document.getElementById('password');
            var checkbox = document.getElementById('checkbox');
            var confirmPassword = document.getElementById('confirmPassword');

            if(checkbox.checked) {
                password.type = "text";
                confirmPassword.type = "text";
            }else{
                password.type = "password";
                confirmPassword.type = "password";
            }
        }
    </script>

@endsection