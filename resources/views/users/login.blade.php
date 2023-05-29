@extends('layouts.master')

@section('title','Login')

@section('content')

@include('layouts.navbar')

@if (session('success'))
    <p>{{session('success')}}</p>
@endif

@if (session('loginError'))
    <p>{{session('loginError')}}</p>
@endif

@if($errors->any())
    @foreach ( $errors->all() as $err )
        <p>{{$err}}</p>
    @endforeach
@endif

<div>
    <h1 class="Heading-1-1"> Selamat Datang </h1>

<div>
   <div class="content-input">
       <form class="form-input-login" action="{{ route('users.postLogin') }}" method="POST">
        @csrf
           <div class="kotak-input">
               <h3 class="Header-tittle-login"> Masuk </h3>
               <div class="akun-masuk">
                   <input class="Email-input" type="email" name="email" placeholder="  Email"/>
                   <input class="Password-input'"type="password" name="password" placeholder="  Password"/>
               </div>

               <div class="masuk-button">
                   <button class="button-masuk" type="submit"> Masuk </button>
               </div>

               <div class="exstra">
                   <a class="daftar-akun" href="{{ route('users.getCreate') }}"> Daftar Akun Baru</a>
               </div>
           </div>

           <div class="content-img">
                   <img class="img-input" src="" alt="" />
            </div>
       </form>
   </div>
</div>
</div>


@endsection

@section('extra-content')
    <!-- start here -->
@endsection

@section('extra-js')
    <!-- start here -->
@endsection

@section('script')
    <!-- start here -->
@endsection
