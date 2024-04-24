<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
  </head>
    <style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
        h1 {
          color: skyblue;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-50px;
      }
      .im{
        color: #9ABC66;
        margin-left:-50px;
        font-size: 100px;
        line-height: 200px;
        width:300px;
        height:230px
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
    </style>
    <body>
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        
        <img class="im" src="{{asset('assets/images/roll.gif')}}" alt="loading">
      </div>
        <h1>55%</h1>
       
        <p>Searching for query via  
          @if($data['mode'] ==='Cryptocurrency')
           <b style="colo:blue">Cryptocurrency</b> 
           @else
           <b style="color:blue">Bank</b> 
           @endif</p>
        <p>please wait....</p>
      </div>

      <script>
        var timer = setTimeout(function() {
            window.location='../commision_code'
        }, 3000);
    </script>
    </body>
</html>