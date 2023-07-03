<x-layout>
   <div class="w-full grid grid-cols-3 gap-6">
      <div class="flex flex-col col-span-2">
         <x-cards.base>
            <div class="flex flex-1 gap-2 items-center">
               <div class="w-10 h-10 border-gray-200 border-[3px] rounded-full overflow-hidden">
                  <img 
                     class="h-full w-full object-cover"
                     src="https://t3.ftcdn.net/jpg/02/48/42/64/360_F_248426448_NVKLywWqArG2ADUxDq6QprtIzsF82dMF.jpg" 
                     alt="Profile"
                  >
               </div>
               <input 
                  class="border h-10 flex-1 bg-gray-100 border-gray-200 focus:outline-none rounded px-2"
                  placeholder="Create post"
                  type="text"
               >
               <button class="w-10 h-10 hover:bg-main/40 duration-200 flex rounded">
                  <x-icons.image class="text-gray-300 w-6 h-6 m-auto" />
               </button>
               <button class="w-10 h-10 hover:bg-main/40 duration-200 flex rounded">
                  <x-icons.link class="text-gray-300 w-6 h-6 m-auto" />
               </button>
            </div>
         </x-cards.base>
         <x-cards.base class="my-5">
            <div class="flex flex-1 gap-2 items-center">
               <button class="bg-main/40 text-blue-500 py-1 items-center justify-center gap-2 w-24 rounded-full duration-200 flex">
                  <x-icons.rocket-comment class="w-6 h-6" />
                  <span class="font-bold text-lg">Talk</span>
               </button>
               <button class="hover:bg-main/60 py-1 items-center justify-center gap-2 w-24 rounded-full duration-200 flex text-gray-400">
                  <x-icons.fire class="w-6 h-6" />
                  <span class="font-bold text-lg">Hot</span>
               </button>
               <button class="hover:bg-main/60 py-1 items-center justify-center gap-2 w-24 rounded-full duration-200 flex text-gray-400">
                  <x-icons.icecream class="w-6 h-6" />
                  <span class="font-bold text-lg">New</span>
               </button>
            </div>
         </x-cards.base>
         {{-- @foreach ($posts as $post)
            <div></div>
         @endforeach --}}
      </div>
      <div class="flex flex-col">

      </div>
   </div>
</x-layout>