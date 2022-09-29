<!DOCTYPE html>
<html>
<head>
    <title>AQExport.com</title>
</head>
<body>
    <h2>{{ $mailData['title'] }}</h2> 
    <br>
        
    <ul>
        <li>Product Name: {{$mailData['body_product']}}</li>
        <li>Order No: {{$mailData['body_order']}}</li>
        <li>Product Style: {{$mailData['body_style']}}</li>
        <li>Product Quantity: {{$mailData['body_quantity']}}</li>
        <li>Byuer Contact: {{$mailData['body_contact']}}</li>
    </ul> 
    
    Thank you
</body>
</html>