@extends('dashboard.layouts.mainLayout')

@section('dashboard-content')
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card shadow border-0">
                <div class="card-body p-3">
                    <h3 class="text-center text-primary mb-4 border-bottom">List of User</h3>

                    <table class="table table-striped p-0 m-0 w-0">
                        <thead class="text-center">
                            <th>Sl.</th>
                            <th>Full Name</th>
                            <th>User Name</th>
                            <th>E-Mail</th>
                            <th>Role</th>
                            <th>Created Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($users as $count => $row)
                                <tr>
                                    <th>{{ ++$count }}.</th>
                                    <th>{{ $row->full_name }}</th>
                                    <th>{{ $row->user_name }}</th>
                                    <th>{{ $row->email }}</th>
                                    <th>{{ $row->role }}</th>
                                    <th>
                                        {{ $row->created_at->format('Y-m-d')}}
                                    </th>
                                    <th>
                                        @if ($row->is_active)
                                            <form action="{{ url('/is-user-activated/' . $row->id) }}" method="post">
                                                @csrf
                                                <input type="hidden" name="is_active" id="is_active" value="0">
                                                <button class="btn btn-primary" type="submit">
                                                    <i class="fas fa-user"></i></button>
                                            </form>
                                        @else
                                            <form action="{{ url('/is-user-activated/' . $row->id) }}" method="post">
                                                @csrf
                                                <input type="hidden" name="is_active" id="is_active" value="1">
                                                <button class="btn btn-danger" type="submit">
                                                    <i class="fas fa-user-slash"></i></i>
                                                </button>
                                            </form>
                                        @endif
                                    </th>
                                    <th>
                                        <a class="btn btn-success" href="{{ url('/show-user/' . $row->id) }}">
                                            <i class="fas fa-binoculars"></i>
                                        </a>
                                        <a class="btn btn-warning" href="{{ url('/edit-user/' . $row->id) }}">
                                            <i class="fas fa-edit"></i></a>
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
