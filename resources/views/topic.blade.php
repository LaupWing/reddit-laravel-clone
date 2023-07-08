<x-layout>
   <div class="w-full flex flex-col">
      <div class="max-h-60 h-[30vh] relative">
         <img 
            class="h-full w-full object-cover"
            src="{{$topic->thumbnail ? $topic->thumbnail : 'https://t3.ftcdn.net/jpg/02/48/42/64/360_F_248426448_NVKLywWqArG2ADUxDq6QprtIzsF82dMF.jpg'}}" 
            alt="Profile"
         >
      </div>
      <div class="bg-white p-4 pb-0 relative">
         <div class="absolute left-10 top-0">
            <img 
               class="w-24 h-24 rounded-full border-gray-300 border-[5px] transform -translate-y-1/2 object-cover"
               src="{{$topic->profile_picture ? $topic->profile_picture : 'https://t3.ftcdn.net/jpg/02/48/42/64/360_F_248426448_NVKLywWqArG2ADUxDq6QprtIzsF82dMF.jpg'}}" 
               alt="Profile"
            >
         </div>
         <div class="ml-32 flex flex-col">
            <div class="flex gap-6">
               <h2 class="text-3xl font-bold">{{$topic->name}}</h2>
               <button class="text-white bg-gray-600 px-8 font-bold rounded-full">Join</button>
            </div>
            <p>/t/{{$topic->id}}</p>
         </div>
         <ul class="flex gap-4 font-bold text-gray-400">
            <li class="px-2 pb-2 border-b-[4px] border-gray-600 text-gray-600">Posts</li>
            <li class="px-2 pb-2 border-b-[4px] border-transparent">Users</li>
         </ul>
      </div>
   </div>
</x-layout>