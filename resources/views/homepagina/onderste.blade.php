<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style> 
    .grid-2-colums-1-row{
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-auto-rows: 300px;
    }
    .card-photo{
        margin-left: 5%;
        margin-right: 5%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        font-size: 3rem;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        border-radius:20px;
        box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
    }
    .card-text{
        margin-left: 5%;
        margin-right: 5%;
    }
    .title-text{
        font-size: 3rem;
        color: black;
        font-weight: bold;
    }
    .desc-text{
        font-size: 1rem;
        color: black;
    }
</style>

<body>
    <main>
        <div class="grid-2-colums-1-row">
            @foreach($productsen as $product)
                    <div class="card-photo" style="background-image:url({{ asset('images/' . $product->image_path) }});"></div>
                    <div class="card-text">
                        <div class="title-text">
                            {{$product->name}}
                        </div>

                        <br/>

                        <div class="desc-text">
                            {{$product->description}}
                        </div>
                    </div>
                @endforeach
        </div>
    </main>
</body>

</html>