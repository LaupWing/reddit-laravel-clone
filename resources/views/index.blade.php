<x-layout>
   <div class="w-full grid grid-cols-3 gap-6 p-10">
      <div class="flex flex-col col-span-2">
         @auth
            <x-cards.base class="mb-5">
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
         @endauth
         <x-cards.sort class="mb-2"/>
         <div class="flex flex-col gap-3">
            @foreach ($posts as $post)
               <x-cards.post 
                  :post="$post"
               />
            @endforeach
         </div>
      </div>
      <div class="flex flex-col">
         @auth
            <x-cards.base class="mb-5">
               <div class="flex flex-col gap-4">
                  <div class="flex items-center gap-2">
                     <x-icons.reddit-circle class="text-accent w-10 h-10" />
                     <h2 class="font-semibold text-xl">Home</h2>
                  </div>
                  <p>Your personal Reddit frontpage. Come here to check in with your favorite communities.</p>
                  <hr>
                  <button class="border-blue-500 border-[3px] bg-blue-500 text-white rounded-full py-1 font-bold">
                     Create Post
                  </button>
                  <button class="border-blue-500 border-[3px] text-blue-500 rounded-full py-1 font-bold">
                     Create Community
                  </button>
               </div>
            </x-cards.base>
         @endauth
         <x-cards.base>
            <div class="flex flex-col text-sm">
               <div class="grid grid-cols-2 flex-1">
                  <ul class="flex flex-col gap-2">
                     <li class="leading-5">User Agreement</li>
                     <li class="leading-5">Privacy Policy</li>
                  </ul>
                  <ul class="flex flex-col gap-2">
                     <li class="leading-5">Content Policy</li>
                     <li class="leading-5">Moderator Code of Conduct</li>
                  </ul>
               </div>
               <hr class="my-4">
               <div class="grid grid-cols-2 flex-1">
                  <ul class="flex flex-col gap-2">
                     <li class="leading-5">English</li>
                     <li class="leading-5">Français</li>
                     <li class="leading-5">Italiano</li>
                  </ul>
                  <ul class="flex flex-col gap-2">
                     <li class="leading-5">Deutsch</li>
                     <li class="leading-5">Español</li>
                     <li class="leading-5">Português</li>
                  </ul>
               </div>
               <hr class="my-4">
               <span>Reddit, Inc. © 2023. All rights reserved.</span>
            </div>
         </x-cards.base>
      </div>
   </div>
</x-layout>