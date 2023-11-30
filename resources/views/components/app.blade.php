<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>

<div class="px-4 sm:px-6 lg:px-8">
    <div class="max-w-5xl mx-auto">
        <div class="flex justify-between p-3 border-b">
            @auth
                <div>
                    <a href="/admin" class="hover:underline text-blue-600">Admin</a> |
                    <a href="/user" class="hover:underline text-blue-600">User</a>
                </div>
                <div>
                    <a href="/logout" class="hover:underline text-blue-600">Logout</a>
                </div>
            @endauth

            @guest
                <div>
                    <a href="{{route('home')}}" class="hover:underline text-blue-600">Home</a>
                </div>
                <div>
                    <a href="{{route('login')}}" class="hover:underline text-blue-600">Login</a>
                </div>
            @endguest
        </div>
        {{$slot}}
    </div>
</div>

</body>
</html>
