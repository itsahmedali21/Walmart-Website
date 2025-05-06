<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
     <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background: #fff;
            padding: 25px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            width: 400px;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .input-group label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .button-container {
            text-align: center;
        }

        .button-container button {
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .button-container button:hover {
            background-color: #0056b3;
        }
.alert {
    color: red;
    text-align: center;
    margin-top: 10px;
    position: relative;
    top: -34%;
    left: -22%;
}
    </style>

    <div class="form-container">
        <h2>Login Form</h2>
        <form action="{{ route('loginmatch') }}" method="POST">
          @csrf
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email"  id="email"  autocomplete="off" name="email" required placeholder="Enter your email">
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" autocomplete="off" name="password" required placeholder="Enter your password">
            </div>

            <div class="button-container">
                <button type="submit">Submit</button>
            </div>
    <a href="{{ route('signup') }}">Register</a>
            
        </form>
    </div>
    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

</body>
</html>
