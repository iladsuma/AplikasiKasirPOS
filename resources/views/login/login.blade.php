<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
           
            background: linear-gradient(to bottom, #75ACFF 35%, #FFEEEE 25%);
            font-family: Poppins, sans-serif;
        }
        .form-container {
            background-color: #FAFAFA;
            width: 436px;
            height: 648px;
            position: absolute;
            left: 1300px;
            top: 100px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 25px;
            display: flex;
            flex-direction: column;
         
            padding: 20px;
        }
        .form-container h2 {
            margin-top: 0;
            font-size: 32px;
            margin-bottom: 20px;
            text-align: left;
        }
        .form-container h3 {
            
            color: #0F9AFF;
            margin-top: 0;
            font-size: 32px;
            margin-bottom: 20px;
            text-align: left;
        }
        .form-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .form-container button {
            width: 100%;
            padding: 10px;
            background: #4a90e2;
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 10px;
        }
        .form-container button:hover {
            background: #357ab8;
        }
        .form-container .google-btn {
            background: #db4437;
        }
        .form-container .google-btn i {
            margin-right: 5px;
        }
        .form-container a {
            color: #4a90e2;
            text-align: right;
            margin-bottom: 10px;
            display: block;
        }
        .form-container p {
            
            text-align: left;
            margin-bottom: 10px;
            display: block;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Welcome to</h2>
        <h3>Lorep</h3>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <p>username</p>
            <input type="text" name="username" placeholder="Enter your username" required>
            <p>password</p>
            <input type="password" name="password" placeholder="Enter your password" required>
            <a href="#">Forgot password?</a>
            <button type="submit">Login</button>
            <button type="button" class="google-btn">
                <i class="fab fa-google"></i> Sign in with Google
            </button>
        </form>
    </div>
</body>
</html>
