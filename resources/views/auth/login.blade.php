@extends('layouts.login')

@section('content')
<section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    
                    <!-- Authentication card start -->
                            
                        
                            <div class="text-center">
                                <img src="{{ asset('files\assets\images\logo.png')}}" alt="logo.png">
                            </div>
                            <div class="auth-box card">
                                <div class="card-block">

                                <form method="post" method="POST" action="{{ route('login') }}" novalidate="">
                                @csrf
                                <div class="row m-b-20">
                                        <div class="col-md-12">
                                            <h3 class="text-center">Acceder</h3>
                                        </div>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="text" name="email" class="form-control" placeholder="Your Email Address" value="admin@gmail.com">                                        
                                        @error('email')
                                            <span class="form-bar">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="password" name="password" class="form-control"  placeholder="Password" value="123456">
                                        <span class="form-bar"></span>
                                        @error('password')
                                            <span class="form-bar">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    
                                
                                    <div class="form-group row">
                                        <label class="col-sm-2"></label>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Acceder</button>
                                        </div>
                                    </div>
                                </form>

                                
                                    
                                    
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <p class="text-inverse text-left m-b-0">Desarrollado por.</p>
                                            <p class="text-inverse text-left"><a href="/"><b class="f-w-600">IT GUMA</b></a></p>
                                        </div>
                                        <div class="col-md-2">
                                            <img src="{{ asset('files\assets\images\auth\Logo-small-bottom.png')}}" alt="small-logo.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
                        <!-- end of form -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
@endsection
