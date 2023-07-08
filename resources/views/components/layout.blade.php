<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>@yield("title", "Reddit Clone Laravel")</title>
   <link rel="preconnect" href="https://fonts.bunny.net">
   <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
   @vite("resources/css/app.css")
</head>

<body class="antialiased min-h-screen w-full bg-main">
   <header class="w-full bg-secondary flex">
      <div class="container py-2 mx-auto flex gap-6">
         <a href="{{url('/')}}">
            <x-icons.reddit-circle class="text-accent w-10 h-10" />
         </a>
         <div class="flex flex-1 relative">
            <x-icons.search class="text-gray-400/70 absolute top-0 bottom-0 left-4 my-auto w-6 h-6" />
            <input 
               type="text" 
               class="border flex-1 bg-gray-100 border-gray-200 pl-12 focus:outline-none rounded-full px-2"
               placeholder="Search Reddit"
            >
         </div>
         <div
            class="border-l"
         >
         </div>
         @auth
            <button class="flex items-center gap-4">
               <img 
                  class="w-8 h-8 object-cover"
                  src="https://t3.ftcdn.net/jpg/02/48/42/64/360_F_248426448_NVKLywWqArG2ADUxDq6QprtIzsF82dMF.jpg" 
                  alt="Profile"
               >
               <div class="flex flex-col justify-between h-full text-sm">
                  <span class="font-bold">Loc Nguyen</span>
                  <span class="text-gray-400 font-semibold">Total posts 8</span>
               </div>
               <x-icons.chevron-down class="w-4 h-4 ml-10 text-gray-400" />
            </button>
            @else
            <a href="/login">
               <button class="bg-accent w-32 my-1 text-white rounded-full py-1 font-bold">
                  Log In
               </button>
            </a>
         @endauth
      </div>
   </header>
   <main class="container mx-auto">
      {{$slot}}
   </main>
</body>

</html>