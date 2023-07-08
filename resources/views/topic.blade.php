<x-layout>
   <div class="w-full flex flex-col">
      <div class="max-h-60 h-[30vh]">
         <img 
            class="h-full w-full object-cover"
            src="{{$topic->profile_picture ? $topic->profile_picture : 'https://t3.ftcdn.net/jpg/02/48/42/64/360_F_248426448_NVKLywWqArG2ADUxDq6QprtIzsF82dMF.jpg'}}" 
            alt="Profile"
         >
      </div>
   </div>
</x-layout>