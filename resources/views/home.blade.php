<x-guest-layout>
    <x-bigbanner />
    <x-slot name="title">Home</x-slot>
    <div class="bg-gray-100">
        <div class="min-h-screen -mt-8  flex flex-col items-center  sm:pt-0">
            <div class="z-40 rounded w-4/5 lg:-mt-2  grid grid-cols-1 col-auto md:grid-cols-3 lg:grid-cols-6 gap-3 lg:gap-1">
                @php 
                $a=array(1,2,3,4,5,6);
                @endphp
                @foreach($a as $item)
                <div class="relative hover:-mt-2 hover:cursor-pointer hover:text-white text-center rounded-lg  transition-all duration-300">
                    <div class=" bg-white hover:bg-red-500 rounded-lg">
                        <img  class=" w-full object-contain rounded-lg p-1" src="https://img.freepik.com/free-vector/vector-cartoon-illustration-traditional-set-fast-food-meal_1441-331.jpg?w=740&t=st=1675011802~exp=1675012402~hmac=71d910620f579650681d817783c0e41e01cb6beb66dc9df0a9087fc1f9e82512" />
                        <div class="text-sm">Restaurants</div>
                    </div>
                </div>
                @endforeach

                
                
            </div>

            <x-btncategories name="All Categories" />
           
            <x-listings />
            
            <x-nearbylisting />

            <x-recentlisting />

            <x-btncategories name="View All Listings"/>

            <x-testimonials />

            <!-- <div class="w-full sm:max-w-2xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg ">
                hello
            </div> -->
        </div>
    </div>
</x-guest-layout>