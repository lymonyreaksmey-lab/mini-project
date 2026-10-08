<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

    <style>
    
        body {
            font-family: Arial, sans-serif;
            background-color: #ffe6f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        h2 {
            padding-top: 100px;
            position: absolute;
            top: 50px;
            color: #e91e63;
        }

        form {
            background-color: white;
            width: 350px;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
        }

        label {
            font-weight: bold;
            color: #555;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-top: 8px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 8px;
        }

        input:focus {
            outline: none;
            border-color: #e91e63;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #e91e63;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #c2185b;
        }

</style>
</head>

<body>
    
    <h2>Login Form</h2>

    <!-- Login Form -->
    <form action="login_process.php" method="POST">

        <!-- Email -->
        <label>Email:</label>
        <br>
        <input type="email" name="email" placeholder="your@example.com" required>

        <br><br>

        <!-- Password -->
        <label>Password:</label>
        <input type="password" name="password" placeholder="••••••••" required>

        <br><br>

        <!-- Spam protection -->
        <div style="display:none">
        <label for="">Do not fill this field</label>
        <input type="text" name="website">
        </div>
        
        <!-- Submit button -->
        <button type="submit">Login</button>

    </form>
</body>
</html>