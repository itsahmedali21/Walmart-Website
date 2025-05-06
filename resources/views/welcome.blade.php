<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Account - E-commerce Style</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Inter', sans-serif;
    }

    body {
      background-color: #f0f2f5;
      color: #333;
    }

    header {
      background: #0046be;
      color: white;
      padding: 20px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header h1 {
      font-size: 26px;
    }

    .logout-btn {
      background: #ff4d4f;
      color: white;
      border: none;
      padding: 10px 16px;
      border-radius: 6px;
      cursor: pointer;
      font-weight: 600;
    }

    .container {
      max-width: 1000px;
      margin: 40px auto;
      background: white;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
    }

    h2 {
      font-size: 24px;
      margin-bottom: 20px;
    }

    .section {
      margin-top: 40px;
    }

    .section h3 {
      font-size: 20px;
      color: #222;
      border-bottom: 2px solid #eee;
      padding-bottom: 10px;
      margin-bottom: 20px;
    }

    .info {
      margin-bottom: 15px;
      font-size: 16px;
    }

    ul {
      list-style: none;
    }

    li {
      margin-bottom: 12px;
    }

    a {
      color: #0046be;
      text-decoration: none;
      font-weight: 500;
    }

    a:hover {
      text-decoration: underline;
    }

    .tag {
      background: #f1f1f1;
      padding: 4px 10px;
      border-radius: 4px;
      font-size: 14px;
      color: #555;
      display: inline-block;
      margin-top: 5px;
    }

  </style>
</head>
<body>

<header>
  <h1>My Account</h1>
  <form method="get" action="{{ route('logout') }}">
    @csrf
    <button class="logout-btn">Logout</button>
  </form>
</header>

<div class="container">

  <h2>Welcome, {{ Auth::user()->name }}</h2>

  <div class="section">
    <h3>👤 Profile Information</h3>
    <div class="info"><strong>Name:</strong> {{ Auth::user()->name }}</div>
    <div class="info"><strong>Email:</strong> {{ Auth::user()->email }}</div>
    <div class="info"><strong>Phone:</strong> <span class="tag">Not added</span></div>
  </div>

  <div class="section">
    <h3>🏠 Saved Addresses</h3>
    <p>No addresses saved yet. <a href="#">Add Address</a></p>
  </div>

  <div class="section">
    <h3>🔒 Security Settings</h3>
    <ul>
      <li><a href="#">Change Password</a></li>
      <li><a href="#">Enable Authentication</a></li>
    </ul>
  </div>

  <div class="section">
    <h3>⚙️ Preferences</h3>
    <ul>
      <li>Language: <span class="tag">English</span></li>
      <li>Theme: <span class="tag">Light Mode</span></li>
    </ul>
  </div>

  <div class="section">
    <h3>📰 Newsletter</h3>
    <p>You are not subscribed. <a href="#">Subscribe Now</a></p>
  </div>

</div>

</body>
</html>
