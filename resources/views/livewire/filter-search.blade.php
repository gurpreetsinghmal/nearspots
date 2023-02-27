<div class="w-4/5 mx-auto p-2 m-4 ">

    <div class="border p-2 border-gray-300 border-dashed">
        <!-- breadcrumb -->
        <div class="my-2 flex flex-col sm:flex-row items-center">

            <nav class="flex-1" aria-label="Breadcrumb">
                <div class="flex flex-wrap justify-center items-center space-x-1 md:space-x-3">
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
                    @if($cat)
                    <span>
                        <div class="flex items-center">
                            <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <a href="/categories/{{$cat}}" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">{{$cat}}</a>
                        </div>
                    </span>
                    @endif
                    @if($subcat)
                    <span>
                        <div class="flex items-center">
                            <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <a href="/categories/{{$cat}}/{{$subcat}}" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">{{$subcat}}</a>
                        </div>
                    </span>
                    @endif

                </div>
            </nav>

        </div>

        {{-- filter dropdowns --}}
        <div class="flex flex-col md:flex-row justify-between gap-2 items-center py-4">
            <div class="flex-1 text-center">Filter Business By</div>
            <div class="flex-1 w-full">
                <select class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg " wire:model='selstate'>
                    <option value="">All States</option>
                    @foreach ($statelist as $list)
                    <option value={{$list->id}}>{{$list->name}}</option>
                    @endforeach
                </select>

            </div>
            <div class="flex-1 w-full">
                <select class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg " wire:model='selcity'>
                    <option value="">All Cities</option>
                    @foreach ($citylist as $list)
                    <option value={{$list->id}}>{{$list->name}}</option>
                    @endforeach
                </select>
            </div>
            {{-- <div class="flex-1">
                <select class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg ">
                     <option value="">Newest First</option>
                     <option value="">Oldest First</option>
                     <option value="">Highest Rated</option>

                </select>
            </div> --}}
        </div>

        <!-- filter categrories -->
        <div class="grid grid-cols-2 md:grid-cols-4">
            @if($cat==null)
            @foreach($categorylist as $list)
            <div class="flex items-center pl-3">

                <input id={{$list->id}} value="{{$list->id}}" wire:model="filtercategory" type="checkbox" class="w-4 h-4 text-pink-700 bg-gray-100 border-gray-300 rounded focus:ring-rose-800">
                <label for={{$list->id}} class=" py-2 ml-4 text-sm font-medium text-gray-900">{{$list->category_name}}</label>
            </div>
            @endforeach
            @endif
            @foreach($subcategorylist as $list)
            <div class="flex items-center pl-3">
                <div>
                    <input id={{$list->id.'x'}} value="{{$list->id}}" wire:model="filtersubcategory" type="checkbox" class="w-4 h-4 text-pink-700 bg-gray-100 border-gray-300 rounded focus:ring-rose-800">
                </div>
                <label for={{$list->id.'x'}} class="py-2 ml-4 text-sm font-medium text-gray-900">{{$list->subcat_name}}</label>
            </div>
            @endforeach

        </div>
    </div>

    <div class="flex mt-4">
        <div class="bg-gray-50 px-4 text-sm font-semibold rounded-lg text-rose-500  inline-flex items-center p-2 mr-2 border-2 border-rose-500">
            {{$shops_pages->total()}}
        </div>
        <div class="w-fit">
            <div class="font-medium text-2xl text-red-500">
                Search Results
            </div>
            <div class="w-1/3 h-1 bg-red-500">
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-2 mt-1 mx-auto">

        <!-- listings -->


        <div class="flex-1">
            @if($shops_pages->total())
            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">

                @foreach ($shops_pages as $s)
                <div onmouseover='pop({{$s->id-1}})'>
                    <div class="item drop-shadow-md  py-2">
                        <div class="ring-rose-700 hover:ring-1 rounded-lg ">
                            <a href="/profile/{{$s->slug_name}}">
                                <img class="rounded-t-lg h-36 w-full object-cover" src={{$s->banner??$placeholder}} />
                            </a>
                            <div class="bg-white p-2 rounded-b-lg">
                                <!-- button icons -->
                                <div class="my-2 text-slate-600 flex flex-col lg:flex-row text-xs gap-x-1">
                                    @if($s->category_id)
                                    <a href="categories/{{$s->category->slug_name}}">
                                        <div class="bg-slate-300 mb-1  text-grey-darkest font-semibold py-1 px-2 rounded inline-flex items-center">
                                            <img class="h-5 mr-2" src="https://www.svgrepo.com/show/393360/restaurant.svg" />
                                            <span>{{$s->category->category_name}} </span>

                                        </div>
                                    </a>
                                    @endif
                                    @if($s->subcategory_id)
                                    <a href="categories/{{$s->category->slug_name}}/{{$s->subcategory->slug_name}}">
                                        <div class="bg-slate-300 mb-1  text-grey-darkest font-semibold py-1 px-2 rounded inline-flex items-center">
                                            <img class="h-5 mr-2" src="https://www.svgrepo.com/show/410218/burger.svg" />
                                            <span>{{$s->subcategory->subcat_name}}</span>
                                        </div>
                                    </a>
                                    @endif
                                </div>
                                <!-- hotel name -->
                                <a href="/profile/{{$s->slug_name}}">
                                    <div class="text-red-500 text-lg font-medium pt-1">
                                        {{$s->name}}
                                    </div>
                                </a>
                                <div class="text-slate-500">
                                    {{$s->city->name}}
                                </div>
                                <!-- rating -->
                                <div class="flex">
                                    @php
                                    $x=1;
                                    $i=rand(1,5);
                                    while($x<=5) { if($x<=$i) { $color=" text-red-500 " ; } else { $color=" text-slate-500 " ; } echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 py-1 pr-1 my-1' .$color.'">
                                        <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                                        </svg>';
                                        $x++;
                                        }
                                        @endphp
                                </div>
                                <!-- reviews -->
                                <div class="text-slate-400 text-sm">(4 reviews)</div>
                                <!-- owner details -->
                                <div class="mt-4 border-t-2 border-gray-300 py-3 flex text-gray-500">
                                    <div class="mr-2">
                                        <img class="h-12 w-12 rounded-full" src="https://i.pravatar.cc/150?img=1>" />
                                    </div>
                                    <div class="grow text-xs">
                                        <div>Gurpreet Singh</div>
                                        <div>2 years ago</div>
                                    </div>
                                    @php
                                    $status=rand(0,1);
                                    if($status)
                                    {
                                    @endphp
                                    <div class="h-fit rounded text-green-500 p-0.5 border border-1 border-green-500">
                                        open
                                    </div>
                                    @php
                                    }
                                    else
                                    {
                                    @endphp
                                    <div class="h-fit rounded text-red-500 p-0.5 border border-1 border-red-500">
                                        close
                                    </div>
                                    @php } @endphp

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
            <div class="my-2">
                {{$shops_pages->links()}}
            </div>
            @else
            <div class="bg-rose-100 text-center p-4">{{" No Item Found"}}</div>

            @endif
        </div>


        <!-- map  -->
        <div class="flex-1">

            <div id="dvMap" wire:ignore class="rounded-lg my-2 h-96">
            </div>

            <script type="text/javascript">
                var markers = [];
                @foreach($shops as $s) {
                    var person = {
                        "title": "{{$s->name}}"
                        , "lat": "{{$s->lat}}"
                        , "lng": "{{$s->lng}}"
                        , "img": "{{$s->banner??$placeholder}}"
                        , "description": '{{$s->name}}'
                    };
                    markers.push(person);
                }
                @endforeach

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
                        , maxZoom: 15
                        , zoom: 10
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
                    height: calc(100vh - 100px);
                }

            </style>
        </div>
    </div>

</div>
