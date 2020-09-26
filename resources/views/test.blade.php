<!DOCTYPE html>
@include(captcha.js)
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset ('js/captcha.js')}} "rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <form action="" id="form">
        <div class="captcha-base"></div>
        <button type="submit">Send form</button>
    </form>
</body>
<script>
    document.getElementById('form').addEventListener('submit', function(event) 
    {
        alert('submitted');
        console.log('submitted');
        event.preventDefault();
    })
</script>
</html>