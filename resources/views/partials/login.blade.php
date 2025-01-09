<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            background: url('{{asset('assets/bg.jpg')}}') no-repeat center center fixed;
            background-size: cover;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }
        * {
            font-family: "Raleway", serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }

        /* .glass-effect {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.3);
        } */
    </style>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-900 bg-opacity-50">
    <div class="w-full max-w-xs glass-effect p-8 rounded-lg">
        {{-- <h1 class="text-2xl font-bold text-white  ">Welcome To Kasirku</h1>
        <p class="text-md  text-white mb-12 ">Tempat Untuk Melakukan Transaksi</p> --}}
        <form method="POST" action="{{route('process-login')}}">
            @csrf
            <div class="mb-4">
                <div class="flex items-center bg-white bg-opacity-20 rounded-lg px-4 py-2">
                    <i class="fas fa-envelope text-white mr-3"></i>
                    <input class="bg-transparent border-none w-full text-white placeholder-white focus:outline-none" name="email" type="email" placeholder="Email">
                </div>
            </div>
            <div class="mb-6">
                <div class="flex items-center bg-white bg-opacity-20 rounded-lg px-4 py-2">
                    <i class="fas fa-lock text-white mr-3"></i>
                    <input class="bg-transparent border-none w-full text-white placeholder-white focus:outline-none" name="password" type="password" placeholder="Password">
                </div>
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-white bg-opacity-20 w-full hover:bg-opacity-30 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline" type="submit">
                    Log in
                </button>
            </div>
            <div class="flex items-center justify-between mt-4">
                
                <a class="inline-block align-baseline  text-sm text-white hover:text-gray-300" href="{{route('register')}}">
                    Belum Punya Akun ? 
                </a>
            </div>
        </form>
    </div>
</body>
</html>