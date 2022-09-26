<!DOCTYPE html>
<html>
<head>
    <title>AQExport.com</title>
</head>
<body>
    <h1>{{ $mailData['title'] }}</h1>
    <ol>
        @foreach($mailData['body'] as $body)
        <li>{{$body}}</li>
        @endforeach
    </ol>     
    <p>Thank you</p>
</body>
</html>