<x-layout>
   <form 
      class="mx-auto mt-12 gap-6 bg-white flex flex-col rounded shadow px-6 py-8 w-full max-w-sm"
      method="POST"
      action="/users/authenticate"
   >
      @csrf
      <div class="flex flex-col">
         <h2 class="ml-1 font-bold text-gray-300 uppercase tracking-wide">Email</h2>
         <input 
            class="border h-10 flex-1 bg-gray-100 border-gray-200 focus:outline-none rounded px-2"
            placeholder="Email"
            type="email"
         >
      </div>
      <div class="flex flex-col">
         <h2 class="ml-1 font-bold text-gray-300 uppercase tracking-wide">Password</h2>
         <input 
            class="border h-10 flex-1 bg-gray-100 border-gray-200 focus:outline-none rounded px-2"
            placeholder="Password"
            type="password"
         >
      </div>
      <button class="bg-accent w-32 my-1 mx-auto text-white rounded-full py-1 font-bold">
         Log In
      </button>
   </form>
</x-layout>