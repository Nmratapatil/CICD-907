<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Welcome to Gourmet Haven</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: url('https://source.unsplash.com/1600x900/?restaurant,food') no-repeat center center/cover;
      color: #fff;
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    .overlay {
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background-color: rgba(0, 0, 0, 0.6);
      z-index: -1;
    }

    h1 {
      font-size: 3rem;
      margin-bottom: 0.5rem;
    }

    p {
      font-size: 1.2rem;
      margin-bottom: 2rem;
    }

    .btn {
      background-color: #e67e22;
      padding: 12px 24px;
      border: none;
      border-radius: 5px;
      color: white;
      font-size: 1rem;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #cf711f;
    }
  </style>
</head>
<body>
  <div class="overlay"></div>
  <h1>Welcome to Gourmet Haven</h1>
  <p>Experience fine dining like never before. Discover flavors, ambience, and service that delight.</p>
  <a href="#menu" class="btn">Explore Our Menu</a>
</body>
</html>
