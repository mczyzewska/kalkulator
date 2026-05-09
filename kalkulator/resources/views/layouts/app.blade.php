<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator IIS</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background: #101820; color: #fff; display: flex; justify-content: center; align-items: center; height: 100vh; }
        .container { background: #1a1f2b; padding: 40px; border-radius: 20px; box-shadow: 0 0 20px rgba(0,0,0,0.5); width: 400px; text-align: center; }
        select, input, button { width: 100%; margin: 10px 0; padding: 10px; border-radius: 10px; border: none; font-size: 16px; }
        button { background: #00bfa6; color: #fff; font-weight: bold; cursor: pointer; }
        button:hover { background: #00a894; }
        a { color: #00bfa6; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
