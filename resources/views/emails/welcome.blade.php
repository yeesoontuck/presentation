<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Example.com</title>
</head>
<body>
    <img src="{{ $message->embed(public_path() . '/images/welcome.jpg') }}" alt="">

    <h5>Hello, {{ $user->name }}</h5>

    <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, dicta.</div>
    <div>Facilis ducimus ab assumenda, nulla illo harum sit cumque autem?</div>
    <div>Dicta fugit quos laborum soluta magni, perferendis ullam non inventore?</div>
    <div>Sequi at et, ipsam illum. Quos sed minus deserunt error.</div>
    <div>Fugit fuga aspernatur magnam sint laboriosam fugiat eos deleniti nisi!</div>
</body>
</html>