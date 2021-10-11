<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User | Login</title>
    <link rel="shortcut icon" href="{{ asset('mahardika_ticket/dist/img/logo9.png') }}">
    <link rel="stylesheet" href="{{ asset('Admin/dist/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    
    <style>
        .font-lato {
            font-family: 'Montserrat', sans-serif;
        }

        .text-blue-ticket{
            color: #181863;
        }

        .border-blue-ticket{
            border-color: #181863;
        }

        .bg-blue-ticket{
            background-color: #181863;
        }
    </style>
</head>
<body>
    <div class="h-screen min-h-screen max-h-screen bg-blue-ticket flex justify-center items-center p-4">
        <div class="bg-white shadow w-full p-4 rounded shadow-2xl text-gray-700 sm:w-96">
            
            <p class="text-center pb-2 text-3xl font-lato text-blue-ticket">Welcome</p>
            
            <form action="#" class="my-5">
            <div class="pb-5 text-sm text-center text-blue-ticket">
                <p class="text-blue-ticket font-lato">You don´t have an account? <a href="#" class="text-blue-600 font-lato">Register now!</a></p>
            </div>
            
            <div class="pb-5">
                <input type="text" class="font-lato block w-full p-2 rounded shadow bg-gray-100 focus:ring-2 focus:ring-blue-500 focus:border-transparent focus:outline-none" placeholder="Username or email">
            </div>

            <div class="pb-5">
                <input type="text" class="font-lato block w-full p-2 rounded shadow bg-gray-100 focus:ring-2 focus:ring-blue-500 focus:border-transparent focus:outline-none" placeholder="Password">
            </div>
            
            <div class="pb-5 font-lato text-blue-ticket">
                <input type="checkbox">
                <label for="">Remember password</label>
            </div>

            <div class="pb-5 text-right text-sm">
                <a href="#" class="text-blue-500 font-lato">Forgot your password?</a>
            </div>

            <button type="submit" class="bg-blue-ticket p-2 w-full font-lato text-white rounded">LogIn</button>
            </form>
            
            <hr>
            
            <div class="mt-8 relative flex justify-around">
            <div class="bg-blue-800 h-12 w-12 flex justify-center items-center rounded-full text-white">
                <i class="fab fa-facebook text-3xl"></i>
            </div>
            <div class="bg-blue-500 h-12 w-12 flex justify-center items-center rounded-full text-white">
                <i class="fab fa-twitter text-3xl"></i>
            </div>
            
            <div class="bg-red-500 h-12 w-12 flex justify-center items-center rounded-full text-white">
                <i class="fab fa-google text-3xl"></i>
            </div>
            </div>
        </div>
        </div>

        <div class="fixed bottom-0 right-0">
        <button id="switchTheme">
            <i classs="fab fa-codepen"></i>s
        </button>
        </div>
</body>
</html>