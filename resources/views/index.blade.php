@extends('layouts.app')
@section('content')
    <section class="section recent-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>recently sold items</h2>
                    </div>
                </div>
            </div>
            <div class="row" style="display: flex; flex-wrap: wrap; gap: 15px;">
                @foreach ($products as $item)
                    <div class="col" style="flex: 1 0 20%; max-width: 20%;">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text sale">sale</label></div>
                                <button class="product-wish wish"><i class="fas fa-heart"></i></button>
                                <a class="product-image" href="product-video.html">
                                    <img src={{ $item->image }} alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                        data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">
                                        {{ $item->name }}
                                    </a>
                                </h6>
                                <h6 class="product-price">
                                    <span>{{ $item->price }}<small>/piece</small></span>
                                </h6>

                                <form id="addToCartForm"
                                    action="{{ route('cart.add', ['productId' => $item->id, 'quantity' => 1]) }}"
                                    method="post">
                                    @csrf
                                    <a style="margin-right: 15px">
                                        <button type="submit" value="add to cart">add to cart</button>
                                    </a>
                                </form>

                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus">
                                        <i class="icofont-minus"></i>
                                    </button>
                                    <input class="action-input" title="Quantity Number" type="text" name="quantity"
                                        value="1">
                                    <button class="action-plus" title="Quantity Plus">
                                        <i class="icofont-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-btn-25"><a href="shop-4column.html" class="btn btn-outline"><i
                                class="fas fa-eye"></i><span>show more</span></a></div>
                </div>
            </div>
        </div>
    </section>
@endsection
