<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-server-_2xX0vWWhx10xJ65p_xwGcsJ">
</script>
<!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->  
</head> 
<body>    
    <?php 
        $order = DB::table('orders')->where('user_email', Auth::user()->email)->where('status_order_id', 1)->first();
        \Midtrans\Config::$serverKey = 'SB-Mid-server-_2xX0vWWhx10xJ65p_xwGcsJ';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $order->subtotal,
            ),
            'customer_details' => array(
                'first_name' => 'Tn. ',
                'last_name' => Auth::user()->name,
                'email' => Auth::user()->email ,
                'phone' => '08111222333',
            ),
        );
        
        $snapToken = \Midtrans\Snap::getSnapToken($params);

    ?>
<button id="pay-button">Pay!</button>    
<script type="text/javascript">      
var payButton = document.getElementById('pay-button');    
  // For example trigger on button clicked, or any time you need  
      payButton.addEventListener('click', function () {    
      window.snap.pay('{{$snapToken}}'); // Replace it with your transaction token     
     });   
</script>
</body>
</html>