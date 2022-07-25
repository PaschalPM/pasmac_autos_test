<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <meta name="color-scheme" content="dark">
    <style>
        *{
            font-family: Poppins, Nunito, arial;
        }
    </style>
    <script src="{{ asset("js/app.js") }}"></script>
    <title>{{ config("app.name") }}</title>
</head>
<body>
    <x-nav-bar></x-nav-bar>
    <main class="container my-2 position-relative">
        @yield("main")
    </main>
</body>
</html>
<script>
    let deleteBtnforms = [...document.getElementsByClassName('delete')]
    deleteBtnforms.forEach((form,i)=>{
        form.addEventListener("submit",function(evt){
            evt.preventDefault();
            if(this == deleteBtnforms[i])
            {
                if(confirm("Are you sure?"))
                {
                    deleteBtnforms[i].submit()
                }
            }
        })
    })  
</script>