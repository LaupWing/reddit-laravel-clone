<x-layout>
   <div class="w-full flex flex-col">
      <div class="max-h-60 h-[30vh] relative">
         <img 
            class="h-full w-full object-cover"
            src="{{$topic->thumbnail ? $topic->thumbnail : 'https://t3.ftcdn.net/jpg/02/48/42/64/360_F_248426448_NVKLywWqArG2ADUxDq6QprtIzsF82dMF.jpg'}}" 
            alt="Profile"
         >
         <div class="absolute left-10 bottom-0">
            <img 
               class="w-24 h-24 rounded-full border-gray-300 border-[5px] transform translate-y-1/2 object-cover"
               src="{{$topic->profile_picture ? $topic->profile_picture : 'https://t3.ftcdn.net/jpg/02/48/42/64/360_F_248426448_NVKLywWqArG2ADUxDq6QprtIzsF82dMF.jpg'}}" 
               alt="Profile"
            >
         </div>
      </div>
   </div>
</x-layout>