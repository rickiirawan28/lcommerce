@extends('layouts.base', ['title'=>'Products'])

@section('content')
<div class="container-fluid">
    @if(session('message'))
    <div class="row">
        <div class="col-md">
            <div class="alert alert-success">{{session('message')}}</div>
        </div>
    </div>
    @endif
    <div class="row">
        @foreach($products as $product)
        <div class="col-md-3">
            <div class="card mb-2">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="#" class="text-dark text-decoration-none">{{$product->name}}</a>
                    </h5>
                    <p class="card-text">Rp.{{number_format($product->price)}}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-muted">Stock : {{$product->stock}}</span>
                        <form action="{{route('cart.add', $product->slug)}}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-primary"><i class="fas fa-cart-plus"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        {{$products->links()}}
    </div>
</div>
@endsection
