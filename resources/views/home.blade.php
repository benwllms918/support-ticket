@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                    <hr>
                    <div>
                        <a href="{{ url('new_ticket') }}">Create ticket</a>
                    </div>
                    <div>
                        <a href="{{ url('my_tickets') }}">My tickets</a>
                    </div>
                    @if (Auth::user()->is_admin == 1)
                        <div>
                            <a href="{{ url('admin/tickets') }}">View all tickets</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
