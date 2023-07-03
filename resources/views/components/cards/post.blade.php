<div 
   {{$attributes->merge(["class"=> "bg-secondary flex border border-line rounded flex-1"])}}
>
   <div class="flex flex-col bg-gray-100 text-gray-400 p-2 gap-1 items-center">
      <x-icons.arrow-up-circle class="w-6 h-6" />
      100
      <x-icons.arrow-down-circle class="w-6 h-6" />
   </div>
   <div class="p-3 flex flex-col flex-1">
      <div class="flex gap-2 text-xs text-gray-400 items-center mb-0.5">
         <div class="w-5 h-5 border-gray-200 border-2 rounded-full overflow-hidden">
            <img 
               class="h-full w-full object-cover"
               src="https://t3.ftcdn.net/jpg/02/48/42/64/360_F_248426448_NVKLywWqArG2ADUxDq6QprtIzsF82dMF.jpg" 
               alt="Profile"
            >
         </div>
         <a 
            class="font-bold hover:underline text-black" 
            href="/t/{{$post->topic->id}}"
         >
            t/{{$post->topic->name}}
         </a>
         <span>
            •
         </span>
         <a 
            class="hover:underline" 
            href="/user/{{$post->user->id}}"
         >
            by {{$post->user->name}}
            {{$post->created_at->diffForHumans()}}
         </a>
      </div>
      <div class="flex flex-col gap-2">
         <h2 class="text-xl font-semibold">{{$post->name}}</h2>
         @isset($post->media)
            <img 
               src="{{$post->media}}" 
               alt="media_image"
               class="mx-auto"
            >
         @endisset
         <p>{{$post->content}}</p>
      </div>
   </div>
</div>