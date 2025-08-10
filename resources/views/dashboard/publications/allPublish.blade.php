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
                            <th>Shown</th>
                            <th>Featured</th>
                            <th>Actions</th>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($publish as $count => $row)
                                <tr>
                                    <th>{{ ++$count }}.</th>
                                    <th>{{ $row->book_name }}</th>
                                    <th>{{ $row->book_author }}</th>
                                    <th>{{ $row->publish_date }}</th>
                                    <th>{{ $row->tag }}</th>
                                    <th>
                                        @if ($row->is_shown)
                                            <form action="{{ url('/is-shown-publish/' . $row->id) }}" method="post">
                                                @csrf
                                                <input type="hidden" name="is_shown" id="is_shown" value="0">
                                                <button class="btn btn-info" type="submit">
                                                    <i class="fas fa-eye"></i></button>
                                            </form>
                                        @else
                                            <form action="{{ url('/is-shown-publish/' . $row->id) }}" method="post">
                                                @csrf
                                                <input type="hidden" name="is_shown" id="is_shown" value="1">
                                                <button class="btn btn-danger" type="submit">
                                                    <i class="fas fa-eye-slash"></i></button>
                                            </form>
                                        @endif
                                    </th>
                                    <th>
                                        @if ($row->is_featured)
                                            <form action="{{ url('/is-featured-publish/' . $row->id) }}" method="post">
                                                @csrf
                                                <input type="hidden" name="is_featured" id="is_featured" value="0">
                                                <button class="btn btn-primary" type="submit">
                                                    <i class="fas fa-star"></i></button>
                                            </form>
                                        @else
                                            <form action="{{ url('/is-featured-publish/' . $row->id) }}" method="post">
                                                @csrf
                                                <input type="hidden" name="is_featured" id="is_featured" value="1">
                                                <button class="btn btn-secondary" type="submit">
                                                    <i class="fas fa-star"></i></button>
                                            </form>
                                        @endif
                                    </th>
                                    <th>
                                        <a class="btn btn-success" href="{{ url('/show-publish/' . $row->id) }}">
                                            <i class="fas fa-binoculars"></i>
                                        </a>
                                        <a class="btn btn-warning" href="{{ url('/edit-publish/' . $row->id) }}">
                                            <i class="fas fa-edit"></i></a>
                                        {{-- <a class="btn btn-danger"><i class="fas fa-trash"></i></a> --}}
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
