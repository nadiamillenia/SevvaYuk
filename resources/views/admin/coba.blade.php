@extends('layouts.appadmin2')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Hello Admin</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                        <br>
                        check!
                        <div class="col-md-6">
                                            <a href="{{Route('confirmed')}}" class="btn btn-primary">Back</a>
                                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection