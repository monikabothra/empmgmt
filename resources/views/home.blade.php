@extends('layouts.app')

@section('content')
<div class="container">
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    
            </div>
            
        </div>
    </div>
</div> --}}
<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

<div class="content">
    <div class="title m-b-md">
        Employee Management
    </div>

    <div class="links">
        <a href="{{ route('department.index') }}">Departments</a>
        <a href="{{ route('work.index') }}">Works</a>
        <a href="{{ route('employee.index') }}">Employees</a>
        <a href="{{ route('post.index') }}">Posts</a>

    </div>
</div>
</div>
@endsection
