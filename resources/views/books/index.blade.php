@extends('books.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Books</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="#"> Create New Book</a>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th>slug</th>
            <th>slug</th>
            <th width="280px">Action</th>
        </tr>
	    @foreach ($books as $book)
        <?php //dd($book); ?>
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $book->title }}</td>
	        <td>{{ $book->body }}</td>
	        <td>{{ $book->slug }}</td>
            <td>{{ $book->id }}</td>
	        <td>
                <form action="#" method="POST">
                    @csrf
                    {{-- <a class="btn btn-info" href="{{ route('show',$book->slug) }}">Show</a> --}}
                    <a class="btn btn-info" href='show/{{ $book->slug }}'>Show</a>

                    <a class="btn btn-primary" href="destroy/{{ $book->id }}">Edit</a>
                    {{-- @csrf --}}
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>


@endsection
