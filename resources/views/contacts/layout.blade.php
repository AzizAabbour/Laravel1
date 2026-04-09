<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Contacts</title>
    <style>
        body { font-family: sans-serif; max-width: 900px;
               margin: 30px auto; padding: 0 16px; color: #333; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px 14px; border: 1px solid #ddd; text-align: left; }
        th { background: #f5f5f5; }
        .btn { padding: 6px 14px; border-radius: 5px; text-decoration: none;
               cursor: pointer; border: none; font-size: 14px; }
        .btn-primary { background: #4f46e5; color: #fff; }
        .btn-warning { background: #f59e0b; color: #fff; }
        .btn-danger  { background: #ef4444; color: #fff; }
        input[type=text],input[type=email] { width:100%; padding:8px 10px;
               border:1px solid #ccc; border-radius:5px; margin-bottom:12px; }
        .alert { padding: 10px 14px; background: #d1fae5;
                 border: 1px solid #6ee7b7; border-radius:5px; margin-bottom:16px; }
        .error { color: #dc2626; font-size: 13px; margin-top:-8px; margin-bottom:10px; }
    </style>
</head>
<body>
    @yield('content')
</body>
</html>