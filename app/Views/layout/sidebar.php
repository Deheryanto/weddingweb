  <div id="sidebar" class="transition-all duration-700 fixed md:relative z-30 p-3 bg-white left-[-280px] md:left-0 w-[280px] h-screen overflow-y-auto">
    <div class="text-slate-900 text-xl">
      <div class="grid grid-cols-5 p-2.5 mt-1 items-center rounded-md">
        <div class="col-span-4 flex">
          <i class="bi bi-app-indicator text-white p-2 bg-blue-600 rounded-md"></i>
          <h1 class="ml-3 text-xl text-blue-600 font-bold">Digishop</h1>
        </div>
        <div>
          <i class="md:hidden bi bi-x ml-7 cursor-pointer" onclick="Openbar()"></i>
        </div>
      </div>

      <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-100">
         <i class="bi bi-house-door-fill"></i>
         <span class="text-[15px] ml-4 text-gray-600">Beranda</span>
      </div>
        
      <!--Produk-->
      <a href="/produk">
      <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
        <i class="bi bi-person-fill"></i>
        <div class="flex justify-between w-full items-center">
          <span class="text-[15px] ml-4 text-gray-600">Produk</span>
        </div>
      </div>
      </a>
      <!--Produk-->
        
        
       <!--Kategori-->
       <a href="/kategori">
       <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-100">
          <i class="bi bi-house-fill"></i>
          <div class="flex justify-between w-full items-center">
            <span class="text-[15px] ml-4 text-gray-600">Kategori</span>
          </div>
        </div>
        </a>
        <!--Kayegori-->
      
       <!--Rules-->
       <a href="/rules">
       <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-100">
          <i class="bi bi-people-fill"></i>
          <div class="flex justify-between w-full items-center">
            <span class="text-[15px] ml-4 text-slate-600">Rules</span>
          </div>
        </div>
        </a>
        <!--Rules-->
      
      <hr class="my-4 text-gray-600">
      <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-100">
        <i class="bi bi-envelope-fill"></i>
        <span class="text-[15px] ml-4 text-gray-600">Messages</span>
      </div>
  
      <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-100">
        <i class="bi bi-chat-left-text-fill"></i>
        <div class="flex justify-between w-full items-center" onclick="togglePesan()">
          <span class="text-[15px] ml-4 text-gray-600">Chatbox</span>
          <span class="text-sm rotate-90" id="pesan">
            <i class="bi bi-chevron-down"></i>
          </span>
        </div>
      </div>
      <div class=" leading-7 text-left text-sm font-thin mt-2 w-4/5 mx-auto hidden" id="subpesan">
        <h1 class="cursor-pointer p-2 hover:bg-blue-100 rounded-md mt-1">Social</h1>
        <h1 class="cursor-pointer p-2 hover:bg-blue-100 rounded-md mt-1">Personal</h1>
        <h1 class="cursor-pointer p-2 hover:bg-blue-100  rounded-md mt-1">Friends</h1>
      </div>
      <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-100">
        <i class="bi bi-box-arrow-in-right"></i>
        <span class="text-[15px] ml-4 text-gray-600">Logout</span>
      </div>
    </div>
  </div>