@extends('layouts.shop')
@section('content')
    

    <!--Body Content-->
    <div id="page-content">
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">Your cart</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        
        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 main-col">
                	<form action="{{url('shop/carts/update')}}" method="post" class="cart style2">
                		@csrf
                        <table>
                            <thead class="cart__row cart__header">
                                <tr>
                                    <th colspan="2" class="text-center">Product</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Quantity</th>
                                    <th class="text-right">Total</th>
                                    <th class="action">&nbsp;</th>
                                </tr>
                            </thead>
                    		<tbody>
                                @foreach ($items as $item)
                                <tr class="cart__row border-bottom line1 cart-flex border-top">
                                    <td class="cart__image-wrapper cart-flex-item">
                                        <?php $images = DB::table('products')->where('id', $item->product_id)->get(); ?>
                                        @foreach ($images as $image)
                                        <a href="#"><img class="cart__image" src="{{asset('shop-new/assets/images/product-images/product-image1.jpg')}}" alt="Elastic Waist Dress - Navy / Small"></a> 
                                        @endforeach
                                    </td>
                                    <td class="cart__meta small--text-left cart-flex-item">
                                        <div class="list-view-item__title">
                                            <a href="#">{{$item->name}} </a>
                                        </div>
                                        
                                        <div class="cart__meta-text">
                                            Color: Navy<br>Size: Small<br>
                                        </div>
                                    </td>
                                    <td class="cart__price-wrapper cart-flex-item">
                                        <span class="money">{{ 'Rp.' . number_format($item->price) }}</span>
                                    </td>
                                    <td class="cart__update-wrapper cart-flex-item text-right">
                                        <div class="cart__qty text-center">
                                            <div class="qtyField">
                                                <a class="qtyBtn minus" href="javascript:void(0);"><i class="icon icon-minus"></i></a>
                                                <input class="cart__qty-input qty" type="text" name="quantity" id="qty" value="{{$item->quantity}}" pattern="[0-9]*">
                                                <a class="qtyBtn plus" href="javascript:void(0);"><i class="icon icon-plus"></i></a>
                                            </div>
                                        </div>
                                        
                                    </td>
                                    <td class="text-right small--hide cart-price">
                                        <div><span class="money">{{ 'Rp.' . number_format($item->price * $item->quantity) }} </span></div>
                                    </td>
                                    <td class="text-center small--hide"><a href="{{url('shop/cart/remove/'. $item->id)}}" class="btn btn--secondary cart__remove" title="Remove tem" onclick="return confirm('Anda Yakin akan menghapus daftar belanja ini ?')"><i class="icon icon anm anm-times-l"></i></a></td>
                                </tr>
                             
                                @endforeach
                            </tbody>
                    		<tfoot>
                                <tr>
                                    <td colspan="3" class="text-left"><a href="http://annimexweb.com/" class="btn--link cart-continue"><i class="icon icon-arrow-circle-left"></i> Continue shopping</a></td>
                                    <td colspan="3" class="text-right"><button type="submit" name="update" class="btn--link cart-update"><i class="fa fa-refresh"></i> Update</button></td>
                                </tr>
                            </tfoot>
                    </table>
                    
                    <div class="currencymsg">We processes all orders in USD. While the content of your cart is currently displayed in USD, the checkout will use USD at the most current exchange rate.</div>
                    <hr>

                    
                    </form>                   
               	</div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 cart__footer">
                	<div class="cart-note">
                    	<div class="solid-border">
							<h5><label for="CartSpecialInstructions" class="cart-note__label small--text-center">Add a note to your order</label></h5>
							<textarea name="note" id="CartSpecialInstructions" class="cart-note__input"></textarea>
						</div>
                    </div>
                    <div class="solid-border">
                      <div class="row">
                      	<span class="col-12 col-sm-6 cart__subtotal-title"><strong>Subtotal</strong></span>
                        <span class="col-12 col-sm-6 cart__subtotal-title cart__subtotal text-right"><span class="money">{{ 'Rp.' . number_format(\Cart::getSubTotal()) }}</span></span>
                      </div>
                      <div class="cart__shipping">Shipping &amp; taxes calculated at checkout</div>
                      <p class="cart_tearm">
                        <label>
                          <input type="checkbox" name="tearm" id="cartTearm" class="checkbox" value="tearm" required="">
                           I agree with the terms and conditions</label>
                      </p>
                      <a href="{{url('shop/check-out')}}" type="submit"  class="btn btn--small-wide checkout" >Check Out</a>
                      <div class="paymnet-img"><img src="{{asset('shop-new/assets/images/payment-img.jpg')}}" alt="Payment"></div>
                    </div>

                </div>
            </div>
        </div>
        
    </div>

@endsection