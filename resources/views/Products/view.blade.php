@extends('layouts.master')
@section('metalinks')
    @include('layouts.metalinks')
@stop
@section('content')
    <div class="container">
    <div class="col-md-8 col-md-offset-2">
        {!! Form::open(['url' => '/']) !!}
        {{ csrf_field() }}
            <h2>Products</h2>
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Name</label>
                <div class="col-sm-9">
                    <input type="text" id="name" name="name" placeholder="Product Name" class="form-control" autofocus
                </div>
            </div>
            <div class="form-group">
                <label for="quantity" class="col-sm-3 control-label">Quantity</label>
                <div class="col-sm-9">
                    <input type="quantity" id="quantity" name="quantity" placeholder="Quantity" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="price" class="col-sm-3 control-label">Price</label>
                <div class="col-sm-9">
                    <input type="price" id="price" name="price" placeholder="Price" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-9 col-sm-offset-3">
                    <button id="saveProduct" type="submit" class="btn btn-primary btn-block">Save</button>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
    <br>
    {{-- Product Table Section --}}
    <div class="col-md-8 col-md-offset-2">
        <h2>Products</h2>
        <div class="table-responsive" >
            <table class="table table-striped table-bordered table-hover banks">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
                </thead>
                <tbody id="products">
                <!-- table data here -->
                    @foreach($products as $product)
                    <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->price}}</td>
                    </tr> 
                    @endforeach
                </tbody>
            </table>
        </div><!--table-responsive-->
    </div>
    </div>
@stop
@section('scripts')
    <script src="{{ asset ("/js/scripts.js") }}" type="text/javascript">
@stop