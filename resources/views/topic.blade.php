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
         <ul class="flex gap-4 font-semibold text-gray-400">
            <li class="px-2 pb-2 border-b-[4px] border-gray-600 text-gray-600">Posts</li>
            <li class="px-2 pb-2 border-b-[4px] border-transparent">Users</li>
         </ul>
      </div>
   </div>
   <div class="w-full grid grid-cols-3 gap-6 py-10">
      <div class="flex flex-col col-span-2">
         <x-cards.sort class="mb-5"/>
      </div>
      <div class="flex flex-col">
         <div class="flex flex-col bg-white rounded overflow-hidden border shadow border-gray-300">
            <div class="flex items-center px-2 py-3 bg-gray-600 text-white">
               <h2 class="font-semibold text-xl text-whtie">About {{$topic->name}}</h2>
            </div>
            <div class="p-3 flex flex-col gap-2">
               <p>{{$topic->description}}</p>
               <span class="text-gray-400">Created {{ \Carbon\Carbon::parse($topic->created_at)->format('M d, Y') }}</span>
               <hr>
               <p>
                  <span class="font-bold">{{count($topic->followers)}}</span>
                  <span class="text-gray-400"> Members</span>
               </p>
            </div>
         </div>
      </div>
   </div>
</x-layout>