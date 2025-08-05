@extends('dashboard.layouts.mainLayout')

@section('dashboard-content')
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card shadow border-0">
                <div class="card-body p-3">
                    <h3 class="text-center text-primary mb-4 border-bottom">List of Book</h3>

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
                            @foreach ($publish as $count => $row)
                                <tr>
                                    <th>{{ ++$count }}.</th>
                                    <th>{{ $row->book_name }}</th>
                                    <th>{{ $row->book_author }}</th>
                                    <th>{{ $row->publish_date }}</th>
                                    <th>{{ $row->category_of_publication }}</th>
                                    <th><i id="" class="fas {{ $row->is_visible ? 'fa-eye' : 'fa-eye-slash' }}"></i></th>
                                    <th>
                                        <a class="btn btn-success" href="{{ url('/show-publish/' . $row->id) }}">
                                            <i class="fas fa-binoculars"></i>
                                        </a>
                                        <a class="btn btn-warning" href="{{ url('/edit-publish/' . $row->id) }}">
                                            <i class="fas fa-edit"></i></a>
                                        <a class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
