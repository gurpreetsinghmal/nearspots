<x-guest-layout>
    <x-bigbanner title="All Listings" subtitle="Choose category you want" />
    <x-slot name="title">Categories</x-slot>
    <div class="bg-gray-50">
        <div class="min-h-screen -mt-8  flex flex-col items-center  sm:pt-0">
            <!-- sub categories -->
            <x-maincategoryicons :list="$list" />

            <livewire:filter-search />
            
           
        </div>
    </div>
</x-guest-layout>