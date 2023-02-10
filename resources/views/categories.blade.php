<x-guest-layout>

    <x-bigbanner class="h-96" title="All {{$topic}}" subtitle="Choose varities of {{$topic}} you want" />
    <x-slot name="title">{{Str::upper($topic)}}
    </x-slot>
    <div class="bg-gray-50">
        <div class="min-h-screen pt-8  flex flex-col items-center  sm:pt-0">
            <!-- main categories -->
            @if($level==0)
            <x-maincategoryicons :list="$list" />
            @elseif ($level==1)
            <x-subcategoryicons :cat="$cat" :list="$list" />
            @endif
            
            <livewire:filter-search :cat="$cat" :subcat="$subcat"/>
           


        </div>
    </div>
</x-guest-layout>
