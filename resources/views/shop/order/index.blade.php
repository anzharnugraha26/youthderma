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
                                        <a href="{{url('/shop/order/konfirmasi/' . $o->id)}}" class="btn btn-secondary btn--small  small--hide" style="background: green">bayar</a>
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
                                    <th class="text-left">Status</th>
                                    <th class="text-right">Total</th>
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
                                        <a href="{{url("shop/order-detail/$o->id")}}" name="clear" class="btn btn-secondary btn--small  small--hide" style="background: green">Detail</button>
                                    	
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
                                @foreach($histori as $o)
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
                                        <a href="{{url("shop/order-detail/$o->id")}}" name="clear" class="btn btn-secondary btn--small  small--hide" style="background: green">Detail</button>
                                    	
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
        
    </div>


    @endsection