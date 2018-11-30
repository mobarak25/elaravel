@php
use App\Http\Controllers\MyController;
$getData = new MyController;
@endphp
@extends('layout')
@section('content')
<div class="features_items"><!--features_items-->
    <h2 class="title text-center">Cart Items</h2>
    <?php

        //Cart::destroy();
        $contents = Cart::content();
        
    ?>
    <section id="cart_items">
        <div class="container-fluid">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Shopping Cart</li>
                </ol>
            </div>
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu">
                            <td class="image">Image</td>
                            <td class="description">Name</td>
                            <td class="price">Price</td>
                            <td class="quantity">Quantity</td>
                            <td class="total">Total</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contents as $v_contents)
                            <tr>
                                <td class="cart_product">
                                    <a href=""><img src="{{$v_contents->options->image}}" alt="" width="80"></a>
                                </td>
                                <td class="cart_description">
                                    <h4><a href="">{{$v_contents->name}}</a></h4>
                                </td>
                                <td class="cart_price">
                                    <p>{{$v_contents->price}}</p>
                                </td>
                                <td class="cart_quantity">
                                    <div class="cart_quantity_button">
                                        <a class="cart_quantity_up" href=""> + </a>
                                        <input class="cart_quantity_input" type="text" name="quantity" value="{{$v_contents->qty}}" autocomplete="off" size="2">
                                        <a class="cart_quantity_down" href=""> - </a>
                                    </div>
                                </td>
                                <td class="cart_total">
                                    <p class="cart_total_price">{{$v_contents->total()}}</p>
                                </td>
                                <td class="cart_delete">
                                    <a class="cart_quantity_delete" href="{{ url('/delete-cart/'.$v_contents->rowId) }}"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </section> <!--/#cart_items-->
    <section id="do_action">
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-sm-12">
                    <div class="total_area">
                        <ul>
                            <li>Cart Sub Total <span>${{Cart::subtotal()}}</span></li>
                            <li>Eco Tax <span>${{Cart::tax()}}</span></li>
                            <li>Shipping Cost <span>Free</span></li>
                            <li>Total <span>${{Cart::total()}}</span></li>
                        </ul>
                        <a class="btn btn-default update" href="">Update</a>
                        <a class="btn btn-default check_out" href="">Check Out</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#do_action-->
</div>
@endsection