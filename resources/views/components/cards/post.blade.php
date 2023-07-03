<div 
   {{$attributes->merge(["class"=> "bg-secondary flex items-center border border-line rounded"])}}
>
   <div class="flex flex-col">
      <x-icons.arrow-up-circle class="w-6 h-6" />
      <x-icons.arrow-down-circle class="w-6 h-6" />
   </div>
   {{$slot}}
</div>