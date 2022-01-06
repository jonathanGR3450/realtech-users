@extends('layouts.app')

@section('content')
<div class="container">
    <div class="bg-white p-5 shadow rounded">
        <h1>{{  $user->name }}</h1>
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <table class="table">
                        <tr>
                            <th>Name</th>
                            <td>{{ $user->present()->name() }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $user->present()->email() }}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-12">
                <a class="btn btn-info btn-lg btn-block" href="{{ route('user.index') }}">Back</a>
                @can('edit', $user)
                    <a class="btn btn-primary btn-lg btn-block" href="{{ route('user.edit', $user) }}">Edit</a>
                @endcan
                @can('destroy', $user)
                    <a class="btn btn-danger btn-lg btn-block" href="#" onclick="document.getElementById('delete-user').submit()">Delete</a>
                    <form class="d-none" id="delete-user" action="{{ route("user.destroy", $user) }}" method="post">
                        @csrf @method("DELETE")
                    </form>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection