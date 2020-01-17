@extends('auth.authLayouts.adminlayout')
@section('title','Users')
@section('customcss')
<style>
    .btn-info,.btn-success {
        color: white;
    }

</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card d-block">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            <h1>Users</h1>
                        </div>
                        <div class="col-6">
                            <a class="btn btn-primary float-right" href="{{ route('users.create') }}">Add user</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">

                    @if($users->count() > 0)
                    <table class="table">
                        <tr>
                            <td>Sr. no.</td>
                            <td>Avatar</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Authorization</td>
                            <td></td>
                        </tr>
                         @foreach ($users as $key => $user)
                        <tr>
                            <td>{{ ($users->currentpage()-1) * $users->perpage() + $key + 1 }}</td>
                        <td><img src="{{ Gravatar::src($user->email) }}" alt="{{ $user->name }}" style="border-radius:50%" width="50px" height="50px"></td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->auth }}</td>
                        <td>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <a href="{{ route('users.edit', $user->id) }}"
                                    class="btn btn-info btn-sm">Edit</a>
                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                            </form>
                            {{--
                                @if (!$user->isAdmin())
                                <form action="{{ route('users.make-admin', $user->id) }}" method="POST">
                                    @csrf
                                    <button class="bphptn btn-success btn-sm" type="submit">Make admin</button>
                                </form>

                                @endif
                            --}}
                         </td>
                        </tr>
                        @endforeach
                    </table>
                    @else
                    <h3>No entry yet! </h3>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-12">
            {{ $users->links() }}
        </div>
    </div>
</div>
@endsection
