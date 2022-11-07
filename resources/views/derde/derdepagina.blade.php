<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      *{
        color: white;
        text-decoration: none;
      }
      body{
          background-color: #d5d5d5;
          font-family: Arial, sans-serif;
      }

      .main-card {
        box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
        max-width: 1400px;
        height:auto;
        margin: auto;
        text-align: center;
        font-family: arial;
        background-color: #fff;
        border-radius: 20px;
        margin-bottom:20px;
        margin-top:20px;
        color: black;
        padding-top: 40px;
        padding-bottom: 40px;
      }

      .grid{
        display: grid;
        grid-template-columns: 1fr 1fr;
        color: black;
      }

      .img {
        height:auto;
        width: 100%;
        margin-left: 6.5%;
        margin-right: 6.5%;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        border-radius:20px;
        box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
      }
      .card2 {
        width: 90%;
        height: 100%;
        font-family: Arial, sans-serif;
        background-color: #fff;
        border-radius: 20px;
        color: black;
        overflow: hidden;
        box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
      }
      .photo{
        color: black;
        display: flex;
        height: auto;
        width: auto;
        align-items: center;
        justify-content: center;
        margin-top: auto;
      }
      .title-text{
        font-size: 3rem;
        font-weight: bold;
        color: black;
        font-family: Arial, sans-serif;
      }
      .desc-text{
        font-size: 1rem;
        color: black;
        font-family: Arial, sans-serif;
        padding-left:20px;
        padding-right: 20px;
      }

    </style>
  </head>
  <body>
    <div class="main-card">
      <div class="grid">
        <div class="photo">
          @foreach($products as $product)
            <img src="{{ asset('images/' . $product->image_path) }}"class="img">
          @endforeach
        </div>
        <div class="text">
          <div class="card2">
            <div class="title-text">
              {{$product->name}}
            </div>
            <br/>
            <div class="desc-text">
              {{$product->description}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>