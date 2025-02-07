<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Accept Booking</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f8f8f8;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    #container {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
      text-align: left;
      max-width: 600px;
      width: 100%;
      margin: 0 auto;
    }

    div {
      margin-top: 20px;
      font-style: italic;
      color: #777777;
    }

    .title {
      display: flex;
      justify-content: start;
      align-items: center;
      margin: 1rem 3rem;
      color: #555555;
    }

    h1 {
      text-align: center color: #333333;
    }

    .titleName {
      width: 150px;
      font-weight: bold;
      color: #4285f4;
    }
  </style>
</head>

<body>
  <div id="container">
    <h1>Property {{ $property->acception_status }}</h1>
    <p class="title"><span class="titleName">Property name: </span><span>{{ $property->name }}</span></p>
    <h3>Your Property has been accepted to host on the website</h3>
  </div>
</body>

</html>
