<x-guest-layout>
    <x-bigbanner title="Find the Best Businesses in Mansa"
     subtitle="Browse our top categories and locations."/>
    <x-slot name="title">Home</x-slot>
    <div class="bg-gray-100">
        <div class="min-h-screen -mt-8  flex flex-col items-center  sm:pt-0">
           
            <x-maincategoryicons :list="$list" />

            <x-iconbutton link="/categories">All Categories </x-iconbutt>
           
            <x-listings />
            
            <x-nearbylisting />

            <x-recentlisting />

            <x-iconbutton link="#">View All Listings</x-iconbutton>

            <x-testimonials />

            <!-- <div class="w-full sm:max-w-2xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg ">
                hello
            </div> -->
        </div>
    </div>
</x-guest-layout>