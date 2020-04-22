@extends('welcome')
@section('content')
<div>
    <table class="table" border="1">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Book Name</th>
            <th scope="col">ISBN</th>
            <th scope="col">Price</th>
            <th scope="col">Page Count</th>
        </tr>
        @foreach( $getBooksList as $book)
            <tr>
                <td scope="row">{{ $book->id}} </td>
                <td>{{ $book->BookName}}</td>
                <td>{{ $book->ISBN}}</td>
                <td>{{ $book->Price}}</td>
                <td>{{ $book->PageCount}}</td>
            </tr>
        @endforeach
    </table>
</div>
@endsection
