<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

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
    </style>
</head>
<body>

<div class="form-container">
    <h2>Signup</h2>
    <form action="{{ route('registersave') }}" method="POST">
        @csrf
         <div class="input-group">
            <label for="Name">Name:</label>
            <input type="name" id="name" name="name" autocomplete="off" placeholder="Enter your Name" required>
        </div>
        <div class="input-group">
            <label for="email">Email:</label>
            <input type="email" id="email" autocomplete="off" name="email" placeholder="Enter your email" required>
        </div>

        <div class="input-group">
            <label for="password">Password:</label>
            <input type="password" autocomplete="off" id="password" name="password" placeholder="Enter your password" required>
        </div>

        <div class="input-group">
            <label for="confirm">Confirm Password:</label>
            <input type="password" autocomplete="off" id="password_confirm"name="password_confirmation" placeholder="Confirm your password" required>
        </div>

        <div class="button-container">
            <button type="submit">Register</button>
        </div>
    </form> 
</div> 
@if($errors->any()){
 <div class="card-footer text-body-secondary">
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error){
                <li>{{ $error }}</li>
            }
            @endforeach
        </ul>
    </div>
 </div>
}
@endif
</body>
</html>
