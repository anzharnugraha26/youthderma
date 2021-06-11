@extends('layouts.shop')
@section('content')
    

<div id="page-content">
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">Orders</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        
        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                	<div class="alert alert-success text-uppercase" role="alert">
						&nbsp;<strong>Congratulations!</strong> Silahkan Konfirmasi Pembayaran dengan click tombol bayar 
					</div>
                	<form action="#" method="post" class="cart style2">
                		<table>
                            <thead class="cart__row cart__header">
                                <tr>
                                    <th class="text-left">Invoice</th>
                                    <th class="text-left">Status</th>
                                    <th class="text-right">Total</th>
                                    <th class="text-center">&nbsp;Option</th>
                                </tr>
                            </thead>
                    		<tbody>
                                @foreach($order as $o)
                                <tr class="cart__row border-bottom line1 cart-flex border-top">
                                    <td class="cart__meta small--text-left cart-flex-item">
                                        {{ $o->invoice }}
                                    </td>
                                    <td class="cart__price-wrapper cart-flex-item">
                                        {{ $o->name }}
                                    </td>
            
                                    <td class="text-right small--hide cart-price">
                                         {{ 'Rp.' . number_format($o->subtotal)}}
                                    </td>
                                    <td class="text-center small--hide">
                                        <a href="{{url('/order/konfirmasi/' . $o->id)}}" class="btn btn-secondary btn--small  small--hide" style="background: green">bayar</a>
                                        <button type="submit" name="update" class="btn btn-secondary btn--small cart-continue ml-2" style="background: red">Batalkan</button>
                                </tr>
                                @endforeach
                            </tbody>
                    		<tfoot>
                                <tr>
                                    <td colspan="3" class="text-left"><a href="http://annimexweb.com/" class="btn btn-secondary btn--small cart-continue">Continue shopping</a></td>
                                    <td colspan="3" class="text-right">
	                        
                                    </td>
                                </tr>
                            </tfoot>
                    </table> 
                    </form>                   
               	</div>
            </div>
        </div>
        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                	<div class="alert alert-success text-uppercase" role="alert">
						&nbsp;<strong>Congratulations!</strong> 
					</div>
                	<form action="#" method="post" class="cart style2">
                		<table>
                            <thead class="cart__row cart__header">
                                <tr>
                                    <th class="text-left">Invoice</th>
                                    <th class="text-left">Total</th>
                                    <th class="text-right">Status</th>
                                    <th class="text-center">&nbsp;Option</th>
                                </tr>
                            </thead>
                    		<tbody>
                                @foreach($dicek as $o)
                                <tr class="cart__row border-bottom line1 cart-flex border-top">
                                    <td class="cart__meta small--text-left cart-flex-item">
                                        {{ $o->invoice }}
                                    </td>
                                    <td class="cart__price-wrapper cart-flex-item">
                                        @if($o->name == 'Perlu Di Cek')
                                        Sedang Di Cek
                                        @else
                                        {{ $o->name }}
                                        @endif
                                    </td>
            
                                    <td class="text-right small--hide cart-price">
                                         {{ 'Rp.' . number_format($o->subtotal)}}
                                    </td>
                                    <td class="text-center small--hide">
                                        <a href="{{url("order-detail/$o->id")}}" name="clear" class="btn btn-secondary btn--small  small--hide" style="background: green">Detail</button>
                                    	
                                </tr>
                                @endforeach
                            </tbody>
                    		<tfoot>
                                <tr>
                                    <td colspan="3" class="text-left"><a href="http://annimexweb.com/" class="btn btn-secondary btn--small cart-continue">Continue shopping</a></td>
                                    <td colspan="3" class="text-right">
	                        
                                    </td>
                                </tr>
                            </tfoot>
                    </table> 
                    </form>                   
               	</div>
            </div>
        </div>
        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                	<div class="alert alert-success text-uppercase" role="alert">
						<i class="icon anm anm-truck-l icon-large"></i> &nbsp;<strong>Congratulations!</strong> You've got free shipping!
					</div>
                	<form action="#" method="post" class="cart style2">
                		<table>
                            <thead class="cart__row cart__header">
                                <tr>
                                    <th class="text-center">Invoice</th>
                                    <th class="text-center">Total</th>
                                    <th class="text-center">Status</th>
                                    <th class="action">&nbsp;</th>
                                </tr>
                            </thead>
                    		<tbody>
                                @foreach($order as $o)
                                <tr class="cart__row border-bottom line1 cart-flex border-top">
                                    <td class="cart__meta small--text-left cart-flex-item">
                                        <div class="list-view-item__title">
                                            <a href="#">Elastic Waist Dress </a>
                                        </div>
                                        
                                        <div class="cart__meta-text">
                                            Color: Navy<br>Size: Small<br>
                                        </div>
                                    </td>
                                    <td class="cart__price-wrapper cart-flex-item">
                                        <span class="money">$735.00</span>
                                    </td>
            
                                    <td class="text-right small--hide cart-price">
                                        <div><span class="money">$735.00</span></div>
                                    </td>
                                    <td class="text-center small--hide"><a href="#" class="btn btn--secondary cart__remove" title="Remove tem"><i class="icon icon anm anm-times-l"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                    		<tfoot>
                                <tr>
                                    <td colspan="3" class="text-left"><a href="http://annimexweb.com/" class="btn btn-secondary btn--small cart-continue">Continue shopping</a></td>
                                    <td colspan="3" class="text-right">
	                                    <button type="submit" name="clear" class="btn btn-secondary btn--small  small--hide">Clear Cart</button>
                                    	<button type="submit" name="update" class="btn btn-secondary btn--small cart-continue ml-2">Update Cart</button>
                                    </td>
                                </tr>
                            </tfoot>
                    </table> 
                    </form>                   
               	</div>
            </div>
        </div>
        
    </div>


    @endsection