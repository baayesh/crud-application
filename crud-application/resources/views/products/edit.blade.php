@extends('students.layout')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h2>Edit Product</h2>
    </div>
</div>

<form action="{{route('product.update', $product->id)}}">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12">
            <strong>Product Name</strong>
            <input type="text" name="product_name" class="form-control" value="{{$product->name}}">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <strong>Description</strong>
            <input type="text" name="description" class="form-control" value="{{$product->name}}">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <strong>Description</strong>
            <input type="text" name="description" class="form-control" value="{{$product->name}}">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <strong>Shipping Method</strong>
            <input type="text" name="shipping_method" class="form-control" value="{{$product->name}}">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <strong>Quantity</strong>
            <input type="text" name="quantity" class="form-control" value="{{$product->name}}">
        </div>
    </div
</form>
@endsection