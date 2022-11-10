
    <style>
      body{
          font-family: Arial, sans-serif;
            background-image: url("/images/achtergrond.jpg");
            min-height: 600px;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
      }
      .enkel{
        margin-left: 5%;
        margin-right: 5%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        font-size: 1rem;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        border-radius:20px;
        box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
        background-color:#212121;
        text-align: center;
      }
      .container{ 
        box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
        height:auto;
        margin-left: 5vh;
        margin-right: 10vh;
        text-align: center;
        font-family: arial;
        background-color: #fff;
        border-radius: 5vh;
        margin-bottom:5vh;
        margin-top:5vh;
        color: black;
        padding-top: 10vh;
        padding-bottom: 10vh;
      }
      .grid{
        display: grid;
        grid-template-columns: 1fr 1fr;

      }
  
      .img{
        height: 50vh;
        justify-content: center;
        display: flex;
        width: 75%;
        position: relative;
      }
      
      h1{
        color:#ffd700 ;
        margin-top: 20vh;
      }
      
      h3{
        color:#ffd700 ;
      }

    </style>
    <div class="container">
      <div class="grid">
        <div class="img">
          <img  src="{{ asset('images/' . $products->image_path) }}"  alt=""/>
          
        </div>
        <div class="enkel">
          <h1>{{$products->name}}</h1><br/>
          <h3>{{$products->description}}</h3>
        </div>
      </div>
    </div>