<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{route('sendMessage')}}">
        @csrf
        <input type="text" name="name"    value="Name: Yaseen">
        <input type="text" name="message" value="Message: Hello World!">
        <input type="text" name="subject" value="Subject: Welcome!">
        <input type="text" name="email"   value="Email: yenaya15@gmail.com!">
        <input type="submit" value="إرسال">
    </form>

    <hr>

    @if ($errors->any())
     @foreach ($errors->all() as $error)
         <div>{{$error}}</div>
     @endforeach
 @endif

    <script src="{{asset('js/app.js')}}"></script>
    <script>
    
    // Yaseen.
    // window.Echo.channel('chat').listen('ChatEvent', (e) => {
    //     alert("Done!");
    // });
    </script>

</body>
</html>