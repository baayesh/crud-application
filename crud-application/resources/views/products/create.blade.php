@extends('students.layout')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div>
            <h2>Add New Product</h2>
        </div>
        <div>
            <a class="btn btn-primary"  href="{{route('products.index')}}">Back</a>
        </div>
    </div>
</div>
<form action="{{route('products.store')}}" method="POST">
@csrf

<div class="row">
    <div class="col-xs-12 col-sm-12">
        <div class="form-group">
            <strong>Product Name:</strong>
            <input type="text" name="product_name" class="form-control" placeholder="Product Name">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12">
        <div class="form-group">
            <strong>Description</strong>
            <input type="text" name="description" class="form-control" placeholder="Description">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12">
        <div class="form-group">
            <strong>Description</strong>
            <input type="text" name="description" class="form-control" placeholder="Description">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12">
        <div class="form-group">
            <strong>Shipping Method</strong>
            <input type="text" name="shipping_method" class="form-control" placeholder="Shipping method">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12">
        <div class="form-group">
            <strong>Quantity</strong>
            <input type="text" name="quantity" class="form-control" placeholder="Quantity">
        </div>
    </div>
</div>

<div class="col-xs-12">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>

</form>

@endsection