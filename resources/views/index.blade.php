<x-layout>
   <div class="w-full grid grid-cols-3 gap-6">
      <div class="flex flex-col col-span-2">
         <x-cards.base>
            <div class="flex flex-1 gap-2 items-center">
               <img 
                  class="w-8 h-8 object-cover"
                  src="https://t3.ftcdn.net/jpg/02/48/42/64/360_F_248426448_NVKLywWqArG2ADUxDq6QprtIzsF82dMF.jpg" 
                  alt="Profile"
               >
               <input 
                  class="border flex-1 bg-gray-100 border-gray-200 focus:outline-none rounded px-2"
                  placeholder="Create post"
                  type="text"
               >
            </div>
         </x-cards.base>
      </div>
      <div class="flex flex-col">

      </div>
   </div>
</x-layout>