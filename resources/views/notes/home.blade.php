@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                @if (session('status') && false)
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href='{{route("notes.add")}}' class='btn btn-primary'> <span class='fas fa-plus'></span> Add Note</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection