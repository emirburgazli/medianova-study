@extends('welcome')
@section('content')
    <div>
        <table class="table" border="1">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">adres</th>
                <th scope="col">Price</th>
            </tr>
            @foreach( $getProductsList as $product)
                <tr>
                    <td scope="row">{{ $product->id}} </td>
                    <td>{{ $product->product_name}}</td>
                    <td>{{ $product->description}}</td>
                    <td>{{ $product->price}}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection


