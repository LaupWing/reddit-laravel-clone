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
         <div class="container py-2 mx-auto">
            <x-icons.reddit-circle class="text-accent w-10 h-10" />
         </div>
      </header>
      {{$slot}}
   </main>
</body>

</html>