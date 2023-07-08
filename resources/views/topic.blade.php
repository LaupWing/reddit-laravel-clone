<x-layout>
   <div class="w-full flex flex-col">
      <div class="max-h-60 h-[30vh] relative">
         <img 
            class="h-full w-full object-cover"
            src="{{$topic->thumbnail ? $topic->thumbnail : 'https://t3.ftcdn.net/jpg/02/48/42/64/360_F_248426448_NVKLywWqArG2ADUxDq6QprtIzsF82dMF.jpg'}}" 
            alt="Profile"
         >
      </div>
      <div class="bg-white p-4 relative">
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
      </div>
   </div>
</x-layout>