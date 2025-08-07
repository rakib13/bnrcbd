@extends('dashboard.layouts.mainLayout')

@section('dashboard-content')
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card shadow border-0">
                <div class="card-body p-3">
                    <h3 class="text-center text-primary mb-4 border-bottom">List of Leadership</h3>

                    <table class="table table-striped p-0 m-0 w-0">
                        <thead class="text-center">
                            <th>Sl.</th>
                            <th>Book Name</th>
                            <th>Book Author</th>
                            <th>Publish Date</th>
                            <th>Category</th>
                            <th>Is Shown</th>
                            <th>Actions</th>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($leadership as $count => $row)
                                <tr>
                                    <th>{{ ++$count }}.</th>
                                    <th>{{ $row->book_name }}</th>
                                    <th>{{ $row->book_author }}</th>
                                    <th>{{ $row->publish_date }}</th>
                                    <th>{{ $row->tag }}</th>
                                    <th>
                                        @if ($row->is_shown)
                                            <form action="{{ url('/status-leadership/' . $row->id) }}" method="post">
                                                @csrf
                                                <input type="hidden" name="is_shown" id="is_shown" value="0">
                                                <button class="btn btn-info" type="submit">
                                                    <i id="" class="fas fa-eye"></i></button>
                                            </form>
                                        @else
                                            <form action="{{ url('/status-leadership/' . $row->id) }}" method="post">
                                                @csrf
                                                <input type="hidden" name="is_shown" id="is_shown" value="1">
                                                <button class="btn btn-danger" type="submit">
                                                    <i id="" class="fas fa-eye-slash"></i></button>
                                            </form>
                                        @endif
                                    </th>
                                    <th>
                                        <a class="btn btn-success" href="{{ url('/show-leadership/' . $row->id) }}">
                                            <i class="fas fa-binoculars"></i>
                                        </a>
                                        <a class="btn btn-warning" href="{{ url('/edit-leadership/' . $row->id) }}">
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
