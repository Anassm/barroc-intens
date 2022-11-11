<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<style>
.whitespace1{
        height: 50px;
        }

</style>
<body class="bg-amber-100">
    @include('homepagina.navbar')

<div class="whitespace1"></div>
    @include('contact.formulier')
</div>
<footer>
    @include('homepagina.footer')
</footer>
</body>
</html>