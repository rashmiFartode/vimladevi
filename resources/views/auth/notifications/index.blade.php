@extends('auth.authLayouts.adminlayout')
@section('title','Notifications')
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
                            <h1>Notifications</h1>
                        </div>
                        <div class="col-6">
                            <a class="btn btn-primary float-right" href="{{route('notifications.create')}}">Add</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">

                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    @if (session('warning'))
                    <div class="alert alert-warning" role="alert">
                        {{ session('warning') }}
                    </div>
                    @endif

                    @if($notifications->count() > 0)
                    <table class="table">
                        <tr>
                            <td>Sr. no.</td>
                            <td>Title</td>
                            <td>File</td>
                        </tr>
                         @foreach ($notifications as $key => $notification)
                        <tr>
                        <td>{{ ($notifications->currentpage()-1) * $notifications->perpage() + $key + 1 }}</td>
                        <td>{{ $notification->title }}
                            @if($notification->new == 1)
                            <sup><span class="badge badge-primary">New</span></sup>
                            @endif
                        </td>

                            <td><a href="{{asset('storage/' . $notification->notification_file) }}" class="btn btn-info btn-sm" target="_blank"> View</a></td>
                            <td>
                                <form action="{{ route('notifications.destroy', $notification->id) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <a href="{{ route('notifications.edit', $notification->id) }}"
                                        class="btn btn-info btn-sm">Edit</a>
                                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    @else
                    <h3>No notification yet! </h3>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-12">
            {{ $notifications->links() }}
        </div>
    </div>
</div>
@endsection
