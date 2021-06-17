<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-server-_2xX0vWWhx10xJ65p_xwGcsJ">
</script>
<!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->  
</head> 
<body>    
    <?php $o = DB::table('orders')->get(); ?>
    @foreach ($o as $item)
    <a href="{{url('midtras/' . $item->id)}}">Pay!</a>     
    @endforeach
<script type="text/javascript">      
var payButton = document.getElementById('pay-button');    
  // For example trigger on button clicked, or any time you need  
      payButton.addEventListener('click', function () {    
      window.snap.pay('test'); // Replace it with your transaction token     
     });   
</script>
</body>
</html>