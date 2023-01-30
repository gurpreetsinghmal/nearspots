<x-guest-layout>
    <x-bigbanner />
    <x-slot name="title">Home</x-slot>
    <div class="bg-gray-100">
        <div class="min-h-screen -mt-8 lg:-mt-12  flex flex-col items-center  sm:pt-0">
            <div class="z-40 rounded w-4/5  grid grid-cols-1 col-auto md:grid-cols-3 lg:grid-cols-6 gap-1">
                @php 
                $a=array(1,2,3,4,5,6);
                @endphp
                @foreach($a as $item)
                <div class="relative hover:text-white text-center rounded-lg  transition-all duration-300">
                    <div class=" bg-white hover:bg-red-500 rounded-lg">
                        <img  class=" w-full object-contain rounded-lg p-1" src="https://img.freepik.com/free-vector/vector-cartoon-illustration-traditional-set-fast-food-meal_1441-331.jpg?w=740&t=st=1675011802~exp=1675012402~hmac=71d910620f579650681d817783c0e41e01cb6beb66dc9df0a9087fc1f9e82512" />
                        <div class="font-thin">Resturents</div>
                    </div>
                </div>
                @endforeach

                
                
            </div>

            <div class=" sm:max-w-xl mt-6 p-6 "> 
                <div>
                <a href="" class="bg-red-500 rounded p-2 text-white flex"   >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 01-1.125-1.125M3.375 19.5h7.5c.621 0 1.125-.504 1.125-1.125m-9.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-7.5A1.125 1.125 0 0112 18.375m9.75-12.75c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125m19.5 0v1.5c0 .621-.504 1.125-1.125 1.125M2.25 5.625v1.5c0 .621.504 1.125 1.125 1.125m0 0h17.25m-17.25 0h7.5c.621 0 1.125.504 1.125 1.125M3.375 8.25c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m17.25-3.75h-7.5c-.621 0-1.125.504-1.125 1.125m8.625-1.125c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M12 10.875v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125M13.125 12h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125M20.625 12c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5M12 14.625v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 14.625c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m0 1.5v-1.5m0 0c0-.621.504-1.125 1.125-1.125m0 0h7.5" />
                </svg>
                <span class="mx-3">All Categories</span>
                </a>
                </div>
            
            </div>

            <x-listings />

            <div class="w-full sm:max-w-2xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg ">
                hello
            </div>
        </div>
    </div>
</x-guest-layout>