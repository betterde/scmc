<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.14.2/styles/default.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.14.2/highlight.min.js"></script>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            <pre>
                <code id="code" class="nginx"></code>
            </pre>
        </div>
    </div>
</div>
<script>hljs.initHighlightingOnLoad();</script>
<script>
    document.getElementById('code').innerHTML = decodeURIComponent("server%20%7B%0A%20%20%20%20listen%20%7B%7B%24port%7D%7D%3B%0A%20%20%20%20server_name%20%7B%7B%24server_name%7D%7D%3B%0A%20%20%20%20root%20%2Fvar%2Flocal%2Fsites%2Fbaidu%3B%0A%0A%20%20%20%20token%20off%3B%0A%7D%0A");
</script>
</body>
</html>
