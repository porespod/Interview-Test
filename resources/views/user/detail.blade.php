@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="width: 24rem;">
                    <div class="card-body">
                    <h5 class="card-title">{{ $user->name }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Email address: {{ $user->email }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Created at: {{ $user->created_at }}</h6>
                    <a href="{{ route('user.index') }}" class="card-link">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

  @endsection