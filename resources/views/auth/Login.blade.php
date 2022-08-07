@extends('auth.Layout')
@section('content')
<div class="col-md-6">
    <form action="{{ route('login.process') }}" method="POST">
        @csrf
        <div class="card-body">
            {{-- <img src="../assets/images/logo-dark.png" alt="" class="img-fluid mb-4"> --}}
            <h4 class="mb-3 f-w-400">Login Untuk Masuk Ke Akun</h4>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <small class="text-danger">{{ $error }}</small>
                @endforeach
            @endif
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="feather icon-mail"></i></span>
                </div>
                <input name="email" type="email" class="form-control" placeholder="Email address">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="feather icon-lock"></i></span>
                </div>
                <input name="password" type="password" class="form-control" placeholder="Password">
            </div>
            <button class="btn btn-primary mb-4">Login</button>
            <a href="{{ route('auth.register') }}" class="btn btn-light mb-4">Daftar?</a>
            <p class="mb-2 text-muted">Lupa Password? <span>Hub: Admin</span></p>
        </div>
    </form>
</div>
@endsection
