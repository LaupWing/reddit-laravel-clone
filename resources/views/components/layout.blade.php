<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>Reddit Clone Laravel</title>
   <link rel="preconnect" href="https://fonts.bunny.net">
   <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
   @vite("resources/css/app.css")
</head>

<body class="antialiased">
   <main class="min-h-screen w-full bg-main">
      <header class="w-full bg-secondary flex">
         <div class="container py-2 mx-auto flex gap-6">
            <x-icons.reddit-circle class="text-accent w-10 h-10" />
            <div class="flex flex-1">
               <input 
                  type="text" 
                  class="border flex-1 bg-gray-100 border-gray-200 pl-10 focus:outline-none rounded-full px-2"
                  placeholder="Search Reddit"
               >
            </div>
         </div>
      </header>
      {{$slot}}
   </main>
</body>

</html>