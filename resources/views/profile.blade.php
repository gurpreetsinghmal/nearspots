<x-guest-layout>
    <div class='h-96 w-full relative flex items-center justify-center '>
        <img class=" object-cover blur-sm md:w-full h-full " src="{{$shop->banner}}" />

        <div class="absolute bg-black/50 h-full w-full">
            <div class="relative h-full flex items-center ">
                <div class="w-4/5 mx-auto  flex flex-col md:flex-row items-top justify-center">
                    <div class="flex  justify-center items-center">
                        <img class="m-2 p-1 ring-1 ring-white w-24 h-24 rounded-full md:rounded-lg md:w-48 md:h-48" src="{{$shop->banner}}" />
                    </div>
                    <div class="flex-1 ml-2 mb-2">
                        <div class="pt-2">
                            <div class="text-white md:text-5xl text-3xl ">
                                {{$shop->name}}
                            </div>
                            <div class="mt-1 text-white md:text-2xl text-large mb-2">
                                <!-- rating -->
                                <div class="flex items-center">
                                    @php
                                    $x=1;
                                    $i=rand(1,5);
                                    while($x<=5) { if($x<=$i) { $color=" text-rose-500 " ; } else { $color=" text-slate-300 " ; } echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 py-1 pr-1 mt-1' .$color.'">
                                        <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                                        </svg>';
                                        $x++;
                                        }
                                        @endphp
                                        <span class="text-xs font-light ml-2">(2 reviews)</span>
                                </div>

                                <!-- rating -->
                            </div>
                            @if($shop->address)
                            <div class="text-white">
                                {{$shop->address}}
                            </div>
                            @endif
                            <div class="my-2">
                                <a href="/categories/{{$shop->state->name}}"><span class="text-white text-xs rounded border border-rose-500 p-1 hover:bg-rose-500 mr-1">{{$shop->state->name}}</span></a>
                                <a href="/categories/{{$shop->state->name}}/{{$shop->city->name}}"><span class="text-white text-xs rounded border border-rose-500 p-1 hover:bg-rose-500 mr-1">{{$shop->city->name}}</span></a>

                            </div>
                            <div>
                                <a href="/categories/{{$shop->category->slug_name}}"><span class="text-white text-xs rounded border border-rose-500 p-1 hover:bg-rose-500 mr-1">{{$shop->category->category_name}}</span></a>
                                <a href="/categories/{{$shop->category->slug_name}}/{{$shop->subcategory->slug_name}}"><span class="text-white text-xs rounded border border-rose-500 p-1 hover:bg-rose-500 mr-1">{{$shop->subcategory->subcat_name}}</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="m-2 flex flex-col">
                        <div class="flex items-center justify-center mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="red" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 md:h-6 md:w-6 text-rose-500 -rotate-90">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>

                            <span class="ml-2 text-white text-xs md:text-xl">878-908-7654</span>
                        </div>
                        <div class="flex justify-center">
                            @if($shop->website)
                            <a target="_blank" href="{{$shop->website}}" class="mr-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-white bg-red-500 rounded p-1 hover:text-red-500 hover:bg-white cursor-pointer">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                                </svg>
                            </a>
                            @endif

                            @if($shop->facebook)
                            <a target="_blank" href="{{$shop->facebook}}" class="mr-1">
                                <svg fill="#000000" class="w-8 h-8 bg-red-500 fill-white rounded p-1 hover:fill-red-500 hover:bg-white cursor-pointer" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-337 273 123.5 256" xml:space="preserve">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M-260.9,327.8c0-10.3,9.2-14,19.5-14c10.3,0,21.3,3.2,21.3,3.2l6.6-39.2c0,0-14-4.8-47.4-4.8c-20.5,0-32.4,7.8-41.1,19.3 c-8.2,10.9-8.5,28.4-8.5,39.7v25.7H-337V396h26.5v133h49.6V396h39.3l2.9-38.3h-42.2V327.8z"></path>
                                    </g>
                                </svg>
                            </a>
                            @endif
                            @if($shop->whatsapp)
                            <a target="_blank" href="https://wa.me/91{{$shop->whatsapp}}" class="mr-1">

                                <svg fill="#000000" class="w-8 h-8 bg-red-500 fill-white rounded p-1 hover:fill-red-500 hover:bg-white cursor-pointer" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M11.42 9.49c-.19-.09-1.1-.54-1.27-.61s-.29-.09-.42.1-.48.6-.59.73-.21.14-.4 0a5.13 5.13 0 0 1-1.49-.92 5.25 5.25 0 0 1-1-1.29c-.11-.18 0-.28.08-.38s.18-.21.28-.32a1.39 1.39 0 0 0 .18-.31.38.38 0 0 0 0-.33c0-.09-.42-1-.58-1.37s-.3-.32-.41-.32h-.4a.72.72 0 0 0-.5.23 2.1 2.1 0 0 0-.65 1.55A3.59 3.59 0 0 0 5 8.2 8.32 8.32 0 0 0 8.19 11c.44.19.78.3 1.05.39a2.53 2.53 0 0 0 1.17.07 1.93 1.93 0 0 0 1.26-.88 1.67 1.67 0 0 0 .11-.88c-.05-.07-.17-.12-.36-.21z"></path>
                                        <path d="M13.29 2.68A7.36 7.36 0 0 0 8 .5a7.44 7.44 0 0 0-6.41 11.15l-1 3.85 3.94-1a7.4 7.4 0 0 0 3.55.9H8a7.44 7.44 0 0 0 5.29-12.72zM8 14.12a6.12 6.12 0 0 1-3.15-.87l-.22-.13-2.34.61.62-2.28-.14-.23a6.18 6.18 0 0 1 9.6-7.65 6.12 6.12 0 0 1 1.81 4.37A6.19 6.19 0 0 1 8 14.12z"></path>
                                    </g>
                                </svg>
                            </a>
                            @endif
                            @if($shop->instagram)
                            <a target="_blank" href="https://wa.me/91{{$shop->instagram}}" class="mr-1">

                                <svg viewBox="0 0 24 24" fill="#fff" class="w-8 h-8 bg-red-500 fill-white rounded p-1 hover:fill-red-500 hover:bg-white cursor-pointer" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M16.19 2H7.81C4.17 2 2 4.17 2 7.81V16.18C2 19.83 4.17 22 7.81 22H16.18C19.82 22 21.99 19.83 21.99 16.19V7.81C22 4.17 19.83 2 16.19 2ZM12 15.88C9.86 15.88 8.12 14.14 8.12 12C8.12 9.86 9.86 8.12 12 8.12C14.14 8.12 15.88 9.86 15.88 12C15.88 14.14 14.14 15.88 12 15.88ZM17.92 6.88C17.87 7 17.8 7.11 17.71 7.21C17.61 7.3 17.5 7.37 17.38 7.42C17.26 7.47 17.13 7.5 17 7.5C16.73 7.5 16.48 7.4 16.29 7.21C16.2 7.11 16.13 7 16.08 6.88C16.03 6.76 16 6.63 16 6.5C16 6.37 16.03 6.24 16.08 6.12C16.13 5.99 16.2 5.89 16.29 5.79C16.52 5.56 16.87 5.45 17.19 5.52C17.26 5.53 17.32 5.55 17.38 5.58C17.44 5.6 17.5 5.63 17.56 5.67C17.61 5.7 17.66 5.75 17.71 5.79C17.8 5.89 17.87 5.99 17.92 6.12C17.97 6.24 18 6.37 18 6.5C18 6.63 17.97 6.76 17.92 6.88Z"></path>
                                    </g>
                                </svg>
                            </a>
                            @endif
                            @if($shop->twitter)
                            <a target="_blank" href="https://wa.me/91{{$shop->twitter}}" class="mr-1">


                                <svg fill="#000000" class="w-8 h-8 bg-red-500 fill-white rounded p-1 hover:fill-red-500 hover:bg-white cursor-pointer" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M1920 311.856c-70.701 33.769-146.598 56.47-226.221 66.86 81.317-52.517 143.774-135.529 173.252-234.691-76.236 48.678-160.716 84.028-250.391 103.002-71.718-82.56-174.268-134.06-287.435-134.06-217.75 0-394.165 189.966-394.165 424.206 0 33.318 3.614 65.619 10.165 96.678C617.9 616.119 327.304 447.385 133.045 190.67c-33.77 62.57-53.309 135.53-53.309 213.233 0 147.162 91.031 276.818 196.744 353.054-64.602-2.26-157.101-21.46-157.101-53.309v5.648c0 205.327 114.41 376.658 294.55 415.849-32.978 9.487-78.38 14.795-114.409 14.795-25.412 0-55.454-2.71-79.624-7.793 50.26 168.509 193.13 291.163 365.478 294.777-134.852 113.506-306.07 181.383-490.616 181.383-31.85 0-64.038-2.033-94.758-5.873 174.494 120.17 381.176 190.532 603.67 190.532 724.97 0 1121.055-646.136 1121.055-1206.55 0-18.41-.452-36.932-1.356-55.116 77.026-59.746 143.887-134.4 196.631-219.444" fill-rule="evenodd"></path>
                                    </g>
                                </svg>
                            </a>

                            @endif
                            @if($shop->linkedin)
                            <a target="_blank" href="https://wa.me/91{{$shop->twitter}}" class="mr-1">

                                <svg fill="#000000" class="w-8 h-8 bg-red-500 fill-white rounded p-1 hover:fill-red-500 hover:bg-white cursor-pointer" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M478.234 600.75V1920H.036V600.75h478.198Zm720.853-2.438v77.737c69.807-45.056 150.308-71.249 272.38-71.249 397.577 0 448.521 308.666 448.521 577.562v737.602h-480.6v-700.836c0-117.867-42.173-140.215-120.15-140.215-74.134 0-120.151 23.55-120.151 140.215v700.836h-480.6V598.312h480.6ZM239.099 0c131.925 0 239.099 107.294 239.099 239.099s-107.174 239.099-239.1 239.099C107.295 478.198 0 370.904 0 239.098 0 107.295 107.294 0 239.099 0Z" fill-rule="evenodd"></path>
                                    </g>
                                </svg>
                            </a>

                            @endif

                        </div>

                    </div>
                </div>


            </div>
        </div>

    </div>


    <x-slot name="title">{{Str::upper($name)}}
    </x-slot>
    <div class="bg-gray-50">
        <div class="min-h-screen pt-8  flex flex-col items-center  sm:pt-0">
            <div class="w-5/7 md:w-4/5 mx-auto p-2 m-4 ">

                <div class="border p-2 my-2 border-gray-300 border-dashed">
                    <!-- breadcrumb -->
                    <div class="my-2 flex flex-col sm:flex-row items-center">

                        <nav class="flex-1" aria-label="Breadcrumb">
                            <div class="flex flex-wrap  items-center space-x-1 md:space-x-3">
                                <span class="inline-flex items-center">
                                    <a href="/" class="inline-flex items-center text-sm font-medium text-rose-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                                        <svg aria-hidden="true" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                                        </svg>
                                        Home
                                    </a>
                                </span>
                                <span>
                                    <div class="flex items-center">
                                        <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        <a href="/categories/" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">All Categories</a>
                                    </div>
                                </span>

                                <span>
                                    <div class="flex items-center">
                                        <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        <a href="/categories/{{$shop->state->name}}" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">{{$shop->state->name}}</a>
                                    </div>
                                </span>

                                <span>
                                    <div class="flex items-center">
                                        <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        <a href="/categories/{{$shop->state->name}}/{{$shop->city->name}}" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">{{$shop->city->name}}</a>
                                    </div>
                                </span>
                                <span>
                                    <div class="flex items-center">
                                        <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        <a href="/profile/{{$shop->slug_name}}" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">{{$shop->name}}</a>
                                    </div>
                                </span>


                            </div>
                        </nav>

                    </div>
                </div>

                <div class="mt-4 flex flex-col md:flex-row">
                    <div class="flex-1 mr-2 mb-4">
                        {{-- 5 gallery images --}}
                        <div>
                            <div class="py-4 font-semibold">
                                Gallery
                            </div>
                            <div class="flex flex-wrap pb-4 border-b-2">
                                @php $a=array(1,2,3,4,5) @endphp
                                @foreach ($a as $i)
                                <img class="rounded flex-1 m-1 w-48" src="https://picsum.photos/id/{{$i+237}}/400/300" />
                                @endforeach
                            </div>
                        </div>

                        {{-- youtube video --}}
                        <div>
                            <div class="py-4 font-semibold">
                                Video
                            </div>
                            <div class="flex flex-wrap pb-4 border-b-2">
                                <iframe class="w-full h-72 md:h-96 rounded" src="https://www.youtube.com/embed/glMLsIn5ONc?controls=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                        </div>

                        {{-- Description --}}
                        <div>
                            <div class="py-4 font-semibold">
                                Description
                            </div>
                            <div class="text-sm text-justify pb-4 border-b-2">
                                {{$shop->short_description}}
                            </div>
                        </div>

                        {{-- Map --}}
                        <div>
                            <div class="py-4 font-semibold">
                                Location
                            </div>
                            <div class="text-sm text-justify ">
                                <div id="dvMap" wire:ignore class="rounded-lg my-2 h-24">
                                </div>

                                <script type="text/javascript">
                                    var markers = [];

                                    var person = {
                                        "title": "{{$shop->name}}"
                                        , "lat": "{{$shop->lat}}"
                                        , "lng": "{{$shop->lng}}"
                                        , "img": "{{$shop->banner??$placeholder}}"
                                        , "description": '{{$shop->name}}'
                                    };
                                    markers.push(person);



                                    var popdata = [];
                                    var map;
                                    var marker = [];

                                    function pop(i) {
                                        for (var h = 0; h < markers.length; h++) {
                                            popdata[h].close(map, marker[h]);
                                        }
                                        popdata[i].open(map, marker[i]);

                                    }

                                    function LoadMap() {
                                        var mapOptions = {
                                            center: new google.maps.LatLng(markers[0].lat, markers[0].lng)
                                            , minZoom: 5
                                            , maxZoom: 10
                                            , zoom: 8
                                            , mapTypeId: google.maps.MapTypeId.ROADMAP
                                        };
                                        var bounds = new google.maps.LatLngBounds();
                                        for (i = 0; i < markers.length; i++) {
                                            position = new google.maps.LatLng(markers[i].lat, markers[i].lng);
                                            bounds.extend(position);
                                        }


                                        map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);

                                        map.fitBounds(bounds);

                                        //Create and open InfoWindow.

                                        for (var i = 0; i < markers.length; i++) {
                                            var infowindow = new google.maps.InfoWindow();
                                            var data = markers[i];

                                            var myLatlng = new google.maps.LatLng(data.lat, data.lng);
                                            marker[i] = new google.maps.Marker({
                                                position: myLatlng
                                                , map: map
                                                , title: data.title
                                            });


                                            //Attach click event to the marker.
                                            (function(marker, data, i) {
                                                google.maps.event.addListener(marker[i], "click", function(e) {
                                                    //Wrap the content inside an HTML DIV in order to set height and width of InfoWindow.
                                                    infowindow.setContent("<div><img style='object-fit:contain;width:100% ;height:100px' alt='noimg' src='" + data.img + "' /><div style = 'width:200px;min-height:40px;text-align:justify;padding:3px'>" + data.description + "</div>");

                                                    infowindow.open(map, marker[i]);
                                                });
                                            })(marker, data, i);
                                            infowindow.setContent("<div><img style='object-fit:contain;width:100%;height:100px' alt='noimg' src='" + data.img + "' /><div style = 'width:200px;min-height:40px;text-align:justify;padding:3px'>" + data.description + "</div>");
                                            popdata[i] = infowindow;
                                        }
                                    }

                                </script>
                                <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTOP0SjF8I8QIdGDv6wINnJ06De8dJDlI&callback=LoadMap">
                                </script>
                                <style>
                                    #dvMap {
                                        position: -webkit-sticky;
                                        position: sticky !important;
                                        top: 70px;
                                        width: 100%;
                                        height: 50vh;
                                    }

                                </style>

                            </div>
                            <div class="py-4 border-b-2 flex justify-between">
                                <div class="text-sm">
                                    {{$shop->address}}
                                </div>
                                <a class="text-white border-2 border-rose-500 bg-rose-500 hover:border-2  hover:bg-white hover:text-rose-500 p-1  rounded flex items-center justify-center" target="_blank" href="https://www.google.com/maps/dir/?api=1&destination={{$shop->lat}},{{$shop->lng}}">
                                    <div>

                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                            <path fill-rule="evenodd" d="M8.157 2.175a1.5 1.5 0 00-1.147 0l-4.084 1.69A1.5 1.5 0 002 5.251v10.877a1.5 1.5 0 002.074 1.386l3.51-1.453 4.26 1.763a1.5 1.5 0 001.146 0l4.083-1.69A1.5 1.5 0 0018 14.748V3.873a1.5 1.5 0 00-2.073-1.386l-3.51 1.452-4.26-1.763zM7.58 5a.75.75 0 01.75.75v6.5a.75.75 0 01-1.5 0v-6.5A.75.75 0 017.58 5zm5.59 2.75a.75.75 0 00-1.5 0v6.5a.75.75 0 001.5 0v-6.5z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div class="px-2">Get Directions</div>


                                </a>
                            </div>


                        </div>

                        {{-- Features --}}
                        <div>
                            <div class="pb-4 border-b-2">
                                <div class="py-4 font-semibold">
                                    Features
                                </div>
                                <div class="overflow-x-auto  shadow-md sm:rounded-lg">
                                    <table class=" w-full text-sm text-left text-gray-500 ">

                                        <tbody>
                                            <tr class="bg-white border-b w-full hover:bg-gray-50">
                                                <td scope="row" class="w-1/3 px-2 py-2  text-gray-900 whitespace-nowrap ">
                                                    Price Range
                                                </td>
                                                <td class="px-2 py-4 ">
                                                    $
                                                </td>

                                            </tr>
                                            <tr class="bg-white border-b hover:bg-gray-50">
                                                <td scope="row" class="px-2 py-2  text-gray-900 whitespace-nowrap ">
                                                    General Features
                                                </td>
                                                <td class="px-2 py-4 ">
                                                    $
                                                </td>

                                            </tr>
                                            <tr class="bg-white border-b hover:bg-gray-50">
                                                <td scope="row" class="px-2 py-2  text-gray-900 whitespace-nowrap ">
                                                    Official Website
                                                </td>
                                                <td class="px-2 py-4 ">
                                                    $
                                                </td>

                                            </tr>
                                            <tr class="bg-white border-b hover:bg-gray-50">
                                                <td scope="row" class="px-2 py-2  text-gray-900 whitespace-nowrap ">
                                                    Parking
                                                </td>
                                                <td class="px-2 py-4 ">
                                                    $
                                                </td>

                                            </tr>
                                            <tr class="bg-white border-b hover:bg-gray-50">
                                                <td scope="row" class="px-2 py-2  text-gray-900 whitespace-nowrap ">
                                                    Wifi
                                                </td>
                                                <td class="px-2 py-4 ">
                                                    $
                                                </td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        {{-- Ratings --}}
                        <div>
                            <div class="py-4 font-semibold">
                                Ratings
                            </div>
                            <div class="flex flex-wrap pb-4 border-b-2">
                                <div class="h-36 w-full mb-2 md:w-48 rounded flex flex-col items-center justify-center text-white bg-rose-500">
                                    <div class="pb-1 text-center text-4xl">3.5</div>
                                    <div class="pb-1 text-center text-xs"> Based on </div>
                                    <div class="pb-1 text-center text-xs"> 55 Reviews </div>
                                </div>
                                <div class="flex-1 px-4">
                                    <div class="flex ">
                                        <div class="flex-1 items-center ">
                                            <div class=" bg-gray-200 rounded-full h-2.5 my-2 dark:bg-gray-700">
                                                <div class="bg-green-600 h-2.5 items-center rounded-full dark:bg-gray-300" style="width: {{rand(1,90)}}%"></div>
                                            </div>
                                        </div>
                                        <div class="p-2 text-xs">5 Star</div>
                                    </div>
                                    <div class="flex ">
                                        <div class="flex-1 items-center ">
                                            <div class=" bg-gray-200 rounded-full h-2.5 my-2 dark:bg-gray-700">
                                                <div class="bg-blue-600 h-2.5 items-center rounded-full dark:bg-gray-300" style="width: {{rand(1,90)}}%"></div>
                                            </div>
                                        </div>
                                        <div class="p-2 text-xs">4 Star</div>
                                    </div>
                                    <div class="flex ">
                                        <div class="flex-1 items-center ">
                                            <div class=" bg-gray-200 rounded-full h-2.5 my-2 dark:bg-gray-700">
                                                <div class="bg-yellow-600 h-2.5 items-center rounded-full dark:bg-gray-300" style="width: {{rand(1,90)}}%"></div>
                                            </div>
                                        </div>
                                        <div class="p-2 text-xs">3 Star</div>
                                    </div>
                                    <div class="flex ">
                                        <div class="flex-1 items-center ">
                                            <div class=" bg-gray-200 rounded-full h-2.5 my-2 dark:bg-gray-700">
                                                <div class="bg-indigo-600 h-2.5 items-center rounded-full dark:bg-gray-300" style="width: {{rand(1,90)}}%"></div>
                                            </div>
                                        </div>
                                        <div class="p-2 text-xs">2 Star</div>
                                    </div>
                                    <div class="flex ">
                                        <div class="flex-1 items-center ">
                                            <div class=" bg-gray-200 rounded-full h-2.5 my-2 dark:bg-gray-700">
                                                <div class="bg-rose-600 h-2.5 items-center rounded-full dark:bg-gray-300" style="width: {{rand(1,90)}}%"></div>
                                            </div>
                                        </div>
                                        <div class="p-2 text-xs">1 Star</div>
                                    </div>


                                </div>

                            </div>
                        </div>

                        {{-- Reviews --}}
                        <div>
                            <div class="py-4 font-semibold">
                                Reviews
                            </div>
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-2">
                                <div class="flex mb-4">
                                    <div class="w-30">
                                        <img src={{$shop->banner}} class="p-2 w-24 h-24 rounded-full" />
                                    </div>
                                    <div class="flex-1 px-2">
                                        <div class="font-semibold py-1">Rohan Singh
                                            <span class="text-gray-400 font-normal text-sm">- 3 min ago
                                            </span></div>
                                        <div class="text-justify text-xs">
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                                        </div>

                                    </div>
                                </div>
                                <div class="flex mb-4">
                                    <div class="w-30">
                                        <img src={{$shop->banner}} class="w-24 p-2 h-24 rounded-full" />
                                    </div>
                                    <div class="flex-1 px-2">
                                        <div class="font-semibold py-1">Rohan Singh
                                            <span class="text-gray-400 font-normal text-sm">- 3 min ago
                                            </span></div>
                                        <div class="text-justify text-xs">
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                                        </div>

                                    </div>
                                </div>
                                <div class="flex mb-4">
                                    <div class="w-30">
                                        <img src={{$shop->banner}} class="p-2 w-24 h-24 rounded-full" />
                                    </div>
                                    <div class="flex-1 px-2">
                                        <div class="font-semibold py-1">Rohan Singh
                                            <span class="text-gray-400 font-normal text-sm">- 3 min ago
                                            </span></div>
                                        <div class="text-justify text-xs">
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                                        </div>

                                    </div>
                                </div>
                                <div class="flex mb-4">
                                    <div class="w-30">
                                        <img src={{$shop->banner}} class="w-24 p-2 h-24 rounded-full" />
                                    </div>
                                    <div class="flex-1 px-2">
                                        <div class="font-semibold py-1">Rohan Singh
                                            <span class="text-gray-400 font-normal text-sm">- 3 min ago
                                            </span></div>
                                        <div class="text-justify text-xs">
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    {{-- right pannel  --}}
                    <div class="md:w-1/3 lg:w-1/4">
                        <div class="text-center">Opening Hours</div>
                        <div class="my-2 p-2 bg-orange-200 rounded-lg flex items-center">
                            <div class="w-10 h-10">
                                <svg aria-hidden="true" fill="currentColor" class="fill-orange-700" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path clip-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a.75.75 0 000 1.5h.253a.25.25 0 01.244.304l-.459 2.066A1.75 1.75 0 0010.747 15H11a.75.75 0 000-1.5h-.253a.25.25 0 01-.244-.304l.459-2.066A1.75 1.75 0 009.253 9H9z" fill-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="text-justify text-sm pl-2">Closed since Sunday 23:30. It will re-open at Tuesday 06:00.
                            </div>
                        </div>
                        {{--table--}}
                        <div>

                            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                <table class=" w-full text-sm text-left text-gray-500 ">

                                    <tbody>
                                        <tr class="bg-white border-b hover:bg-gray-50">
                                            <td scope="row" class="px-2 py-2  text-gray-900 whitespace-nowrap ">
                                                Monday
                                            </td>
                                            <td class="px-2 py-4 text-right">
                                                Closed
                                            </td>

                                        </tr>
                                        <tr class="bg-white border-b hover:bg-gray-50">
                                            <td scope="row" class="px-2 py-2   text-gray-900 whitespace-nowrap ">
                                                Tuesday
                                            </td>
                                            <td class="px-2 py-4 text-right">
                                                Closed
                                            </td>

                                        </tr>
                                        <tr class="bg-white border-b hover:bg-gray-50">
                                            <td scope="row" class="px-2 py-2  text-gray-900 whitespace-nowrap ">
                                                Wednesday
                                            </td>
                                            <td class="px-2 py-4 text-right">
                                                Closed
                                            </td>

                                        </tr>
                                        <tr class="bg-white border-b hover:bg-gray-50">
                                            <td scope="row" class="px-2 py-2  text-gray-900 whitespace-nowrap ">
                                                Thrusday
                                            </td>
                                            <td class="px-2 py-4 text-right">
                                                Closed
                                            </td>

                                        </tr>
                                        <tr class="bg-white border-b hover:bg-gray-50">
                                            <td scope="row" class="px-2 py-2   text-gray-900 whitespace-nowrap ">
                                                Friday
                                            </td>
                                            <td class="px-2 py-4 text-right">
                                                Closed
                                            </td>

                                        </tr>
                                        <tr class="bg-white border-b hover:bg-gray-50">
                                            <td scope="row" class="px-2 py-2  text-gray-900 whitespace-nowrap ">
                                                Saturday
                                            </td>
                                            <td class="px-2 py-4 text-right">
                                                Closed
                                            </td>

                                        </tr>
                                        <tr class="bg-white border-b hover:bg-gray-50">
                                            <td scope="row" class="px-2 py-2   text-gray-900 whitespace-nowrap ">
                                                Sunday
                                            </td>
                                            <td class="px-2 py-4 text-right">
                                                06:00-23:30
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        {{-- manager --}}
                        <div class="my-4">
                            <div>Owner</div>
                            <div class="flex items-center">
                                <div><img class="w-12 h-12 rounded-full p-1" src="{{$shop->banner}}" /></div>
                                <div>{{$shop->owner}}</div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- near by listings -->
   <div class="bg-white pt-8 ">
        <div class="flex flex-col items-center  sm:pt-0">
          <x-nearbylisting />
        </div>
    </div>
    <!-- listings -->
   <div class="bg-white pt-8 ">
        <div class="flex flex-col items-center  sm:pt-0">
          <x-listings />
        </div>
    </div>
     <!-- Recent -->
    <div class="bg-gray-50">
        <div class=" pt-8 flex flex-col items-center  sm:pt-0">
          <x-recentlisting />
        </div>
    </div>
   


</x-guest-layout>
