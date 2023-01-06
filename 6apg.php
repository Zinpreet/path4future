<!DOCTYPE html>
<html>
  <title>admin panel</title>
<head>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }
    header {
      background-color: #333;
      color: white;
      padding: 20px;
      width: 100%;
    }
    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #333;
      color: white;
      padding: 20px;
      width: 100%;
      height: 00px;

    }
    nav a {
      color: white;
      text-decoration: none;
    }
    main {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }
    .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }
    .card {
      background-color: white;
      border-radius: 5px;
      box-shadow: 0 2px 3px rgba(0,0,0,0.1);
      margin: 20px;
      max-width: 300px;
      padding: 20px;
    }
    .card h3 {
      font-size: 18px;
      margin: 0;
    }
    .card p {
      font-size: 14px;
      margin: 0;
      color: #666;
    }
    .ap{
        text-align: center;
    }
  .img{
    margin: 20px;
    height: 200px;
    width: 200px;
    display: flex;
    border-radius: 100px;
  }
  .path{
    text-align: center;
    margin-top: -100px;
  }
  </style>
</head>

<body>
  
  <header>
    <img src="logo.jpeg"  class="img" alt=""> <h1 class="path"> <u> Path 4 Future</u></h1>
    <h1 class="ap">Admin Panel</h1>
  </header>
  <nav>
    <a href="/1start.html">Home</a>
   
    <a href="#">manage</a>
    <a href="#">Settings</a>
  </nav>
  <main>
    <div class="container">
      <div class="card">
        <h3>User 1</h3>
        <p>Email: supreetkurdekar05@gmail.com</p>
        <p>Role: Admin</p>
      </div>
      <div class="card">
        <h3>User 2</h3>
        <p>Email: shivumn@gmail.com</p>
        <p>Role: Admin</p>
      </div>
    </div>
  </main>
</body>
