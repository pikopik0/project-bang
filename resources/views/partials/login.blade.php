<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Sign Up Page
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    * {
            font-family: "Raleway", serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }
  </style>
 </head>
 <body class="bg-gray-900 text-white">
  <div class="min-h-screen flex items-center justify-center">
   <div class="bg-gray-800 p-8 rounded-lg shadow-lg flex flex-col md:flex-row w-full max-w-4xl">
    <!-- Left Section -->
    <div class="md:w-1/2 mb-8 md:mb-0">
     <h2 class="text-2xl font-bold mb-6">
      Get Started Now
     </h2>
     <p class="mb-6">
      Welcome to our service. Create account to start your experience.
     </p>
     {{-- <div class="flex flex-col space-y-4">
      <button class="flex items-center justify-center bg-gray-700 hover:bg-gray-600 text-white py-2 px-4 rounded">
       <i class="fab fa-apple mr-2">
       </i>
       Sign up with Apple
      </button>
      <button class="flex items-center justify-center bg-gray-700 hover:bg-gray-600 text-white py-2 px-4 rounded">
       <i class="fab fa-google mr-2">
       </i>
       Sign up with Google
      </button>
     </div> --}}
     <form class="mt-6 space-y-4" action="{{route('process-login')}}" method="POST">
        @csrf
      <input class="w-full p-3 bg-gray-700 rounded text-white focus:outline-none focus:ring-2 focus:ring-blue-500" name="email" placeholder="Email" type="email"/>
      <input class="w-full p-3 bg-gray-700 rounded text-white focus:outline-none focus:ring-2 focus:ring-blue-500"  name="password" placeholder="Password" type="password"/>
      <div class="flex items-center">
       {{-- <input class="mr-2" id="terms" type="checkbox"  > --}}
       {{-- <label class="text-sm" for="terms">
        I agree to the
        <a class="text-blue-500" href="#">
         Privacy Policy
        </a>
       </label> --}}
      </div>
      <button class="w-full bg-blue-600 hover:bg-blue-500 text-white py-3 rounded" type="submit">
       Sign In
      </button>
     </form>
     <p class="mt-4 text-sm">
      Don't have an account?
      <a class="text-blue-500" href="{{route('register')}}">
       Sign Up
      </a>
     </p>
    </div>
    <!-- Right Section -->
    <div class="md:w-1/2 flex flex-col items-center justify-center text-center">
     <h2 class="text-xl font-bold mb-4">
      Intelligent Platform For
     </h2>
     <h1 class="text-3xl font-bold mb-4 text-blue-500">
      more efficient communication
     </h1>
     <p class="mb-4">
      With this platform you can share, review and approve cases
     </p>
     <p class="mb-8">
      Communication is the key to a job to be done
     </p>
     <img alt="Illustration of people communicating through devices" class="w-64 h-64" src="{{asset('assets/pp_deafult.jpg')}}"/>
    </div>
   </div>
  </div>
 </body>
</html>
