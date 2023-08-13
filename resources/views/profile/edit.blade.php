@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb iq-bg-primary">
       <li class="breadcrumb-item"><a href="{{ url('dashboard') }}"><i class="ri-home-4-line mr-1 float-left"></i>Dashboard</a></li>
       <li class="breadcrumb-item active" aria-current="page">Profil</li>
    </ol>
 </nav>

<div class="container">
    <div class="row align-items-center justify-content-center">
       <div class="col-lg-4 col-md-6">
        <div class="card-transparent card-block card-stretch card-height">
            <div class="card-body text-center p-0">
                <div class="item">
                    <div class="odr-img">
                        <img src="{{ asset('foto/user.jpg') }}" class="img-fluid rounded-circle avatar-90 m-auto" alt="image">
                    </div>
                    <div class="odr-content rounded">
                        <h4 class="mb-2">{{ $user->name }}</h4>
                        <p class="mb-3">{{ $user->email }}</p>
                        <ul class="list-unstyled mb-3">
                            <a href="mailto:adeharyantonailunnabhan@gmail.com" class="bg-secondary-light rounded-circle iq-card-icon-small mr-4"><i class="ri-mail-open-line m-0"></i></a>

                            <a href="https://api.whatsapp.com/send?phone=6282216280746" class="bg-success-light rounded-circle iq-card-icon-small"><i class="ri-phone-line m-0"></i></a>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div></div>
@endsection
