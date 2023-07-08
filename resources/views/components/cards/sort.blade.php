<x-cards.base class="{{$attributes->class}}">
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