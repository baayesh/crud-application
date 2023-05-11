@extends('products.layout')


@section('content')

<div class="container">
    <h3>Product list</h3>
</div>

<div class="row">
    <a class="btn btn-success" href="{{route('products.create'}}">Create New Product</a>
</div>

<!-- check weather session get succeed -->
@if ($message = Session::get('success'))
<div class="alert alert-sucess">
    <p>{{$message}}</p>
</div>
@endif

<!-- table for represent data -->
<div class="table table-bordered">
    <table>
        <tr>
            <th>No</th>
            <th>Product Name</th>
            <th>Description</th>
            <th>Shipping Method</th>
            <th>Quantity</th>
            <th>Action</th>
            @foreach ($products as $product)
        <tr>
            <td>{{++i}}</td>
            <td>{{$product->$product_name}}</td>
            <td>{{$product->Description}}</td>
            <td>{{$product->shipping_method}}</td>
            <td>{{$product->quantity}}</td>
            <td>
                <form action="{{route(products.destroy, $student->id}}" method="POST">
                    <a class="btn btn-info" href="{{route(products.edit, $product->id)}}">Show</a>
                    <a class="btn btn-primary" href="{{route('products.edit', product->id)}}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <div type="submit" class="btn btn-danger">Delete</div>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection('content')