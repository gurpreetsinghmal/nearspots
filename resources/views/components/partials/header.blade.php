<nav class="sticky top-0 z-50 p-3 mt-0 bg-white shadow md:flex md:items-center md:justify-between z-1 relative">
    <div class="flex justify-between items-center ">
      <span class="text-2xl font-[Poppins] font-bold cursor-pointer">
        <img class="h-10 mr-2 inline"
          src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Wikimedia-logo.png/480px-Wikimedia-logo.png">
        NEAR<span class="text-pink-600">SPOTS</span>
      </span>

      <span name="menu" onclick="Menu(this)"   class="text-3xl  cursor-pointer mx-2  md:hidden block ">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </span>
    </div>

    <ul class="md:flex md:items-center z-[999] md:z-auto md:static absolute bg-white w-full left-0 md:w-auto md:py-0 py-2 md:pl-0 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500 ">
      <li class="mx-4 my-2 md:my-0 md:mx-1">
       <a href="#" class="block px-3 py-2 rounded-md text-base text-slate-700 font-normal hover:bg-gray-900  hover:text-white duration-500">Home</a>
      </li>
      <li class="mx-4 my-2 md:my-0 md:mx-1">
       <a href="#" class="block px-3 py-2 rounded-md text-base text-slate-700 font-normal hover:bg-gray-900  hover:text-white duration-500">About</a>
      </li>
      <li class="mx-4 my-2 md:my-0 md:mx-1">
       <a href="#" class="block px-3 py-2 rounded-md text-base text-slate-700 font-normal hover:bg-gray-900  hover:text-white duration-500">Contact</a>
      </li>
      <li class="mx-4 my-2 md:my-0 md:mx-1">
       <a href="#" class="block px-3 py-2 rounded-md text-base text-slate-700 font-normal hover:bg-gray-900  hover:text-white duration-500">demo</a>
      </li>
      <li class="mx-4 my-2 md:my-0 md:mx-1">
       <a href="#" class="block px-3 py-2 rounded-md text-base text-slate-700 font-normal hover:bg-gray-900  hover:text-white duration-500">demo</a>
      </li>
      <li class="mx-4 my-2 md:my-0 md:mx-1">
       <a href="#" class="block px-3 py-2 rounded-md text-base text-slate-700 font-normal hover:bg-gray-900  hover:text-white duration-500">demo</a>
      </li>
      <li class="mx-4 my-2 md:my-0 md:mx-1">
       <a href="#" class="block px-3 py-2 rounded-md text-base text-slate-700 font-normal hover:bg-gray-900  hover:text-white duration-500">demo</a>
      </li>
     
     
     

    </ul>
  </nav>
   <script>
    function Menu(e){
      let list = document.querySelector('ul');
      e.name == 'menu' ? (e.name = "close",list.classList.add('top-14') , list.classList.add('opacity-100')) :( e.name = "menu" ,list.classList.remove('top-14'),list.classList.remove('opacity-100'))
    }
  </script>





