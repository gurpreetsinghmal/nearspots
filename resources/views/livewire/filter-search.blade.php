<div class="w-4/5 mx-auto p-2 m-4 ">
    <div class="border p-2 border-gray-200 border-dashed">
        <!-- breadcrumb -->
        <div class="my-2 flex flex-col sm:flex-row items-center">

            <nav class="flex-1" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="#" class="inline-flex items-center text-sm font-medium text-rose-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <svg aria-hidden="true" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                            </svg>
                            Home
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">All Categories</a>
                        </div>
                    </li>

                </ol>
            </nav>
            <div>

                <span class="bg-gray-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 dark:bg-gray-700 dark:text-gray-400 border border-gray-500">
                    <svg class="w-3 h-3 mr-1" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M10.035,18.069a7.981,7.981,0,0,0,3.938-1.035l3.332,3.332a2.164,2.164,0,0,0,3.061-3.061l-3.332-3.332A8.032,8.032,0,0,0,4.354,4.354a8.034,8.034,0,0,0,5.681,13.715ZM5.768,5.768A6.033,6.033,0,1,1,4,10.035,5.989,5.989,0,0,1,5.768,5.768Z"></path>
                        </g>
                    </svg>
                    25 Results
                </span>

            </div>
        </div>

        <!-- filter categrories -->
        <div class="grid grid-cols-2 md:grid-cols-4">

            @foreach($categorylist as $list)
            <div class="flex items-center pl-3">

                <input id={{$list->id}} value="{{$list->id}}" wire:model="filtercategory" type="checkbox" class="w-4 h-4 text-pink-700 bg-gray-100 border-gray-300 rounded focus:ring-rose-800">
                <label for={{$list->id}} class=" py-2 ml-4 text-sm font-medium text-gray-900">{{$list->category_name}}</label>
            </div>
            @endforeach

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


    <!-- listing title -->
    <div class="w-fit  mt-4">
        <div class="font-medium text-2xl text-red-500">
            Search Results
        </div>
        <div class="w-1/3 h-1 bg-red-500">
        </div>
    </div>
    <div class="flex gap-2 mt-1">

        <!-- listings -->
        <div class="w-1/2 grid grid-cols-2 gap-2">

            <livewire:filter-listing />
            <livewire:filter-listing />
            <livewire:filter-listing />
            <livewire:filter-listing />
        </div>
        <!-- map  -->
        <div class="w-1/2">
            
            <div id="dvMap" class="rounded-lg mt-2" style="width:100%;height:600px">
            </div>
           
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=
            AIzaSyDTOP0SjF8I8QIdGDv6wINnJ06De8dJDlI&callback=initMap">
            </script>
            <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
            <script type="text/javascript">
                var markers = [{
                        "title": 'Aksa Beach',
                        "lat": '19.1759668',
                        "lng": '72.79504659999998',
                        "description": 'Aksa Beach is a popular beach and a vacation spot in Aksa village at Malad, Mumbai.'
                    },
                    {
                        "title": 'Juhu Beach',
                        "lat": '19.0883595',
                        "lng": '72.82652380000002',
                        "description": 'Juhu Beach is one of favourite tourist attractions situated in Mumbai.'
                    },
                    {
                        "title": 'Girgaum Beach',
                        "lat": '18.9542149',
                        "lng": '72.81203529999993',
                        "description": 'Girgaum Beach commonly known as just Chaupati is one of the most famous public beaches in Mumbai.'
                    },
                    {
                        "title": 'Jijamata Udyan',
                        "lat": '18.979006',
                        "lng": '72.83388300000001',
                        "description": 'Jijamata Udyan is situated near Byculla station is famous as Mumbai (Bombay) Zoo.'
                    },
                    {
                        "title": 'Sanjay Gandhi National Park',
                        "lat": '19.2147067',
                        "lng": '72.91062020000004',
                        "description": 'Sanjay Gandhi National Park is a large protected area in the northern part of Mumbai city.'
                    }
                ];
                window.onload = function() {
                    LoadMap();
                }

                function LoadMap() {
                    var mapOptions = {
                        center: new google.maps.LatLng(markers[0].lat, markers[0].lng),
                        zoom: 10,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };
                    var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);

                    //Create and open InfoWindow.
                    var infoWindow = new google.maps.InfoWindow();

                    for (var i = 0; i < markers.length; i++) {
                        var data = markers[i];
                        var myLatlng = new google.maps.LatLng(data.lat, data.lng);
                        var marker = new google.maps.Marker({
                            position: myLatlng,
                            map: map,
                            title: data.title
                        });

                        //Attach click event to the marker.
                        (function(marker, data) {
                            google.maps.event.addListener(marker, "click", function(e) {
                                //Wrap the content inside an HTML DIV in order to set height and width of InfoWindow.
                                infoWindow.setContent("<div style = 'width:200px;min-height:40px'>" + data.description + "</div>");
                                infoWindow.open(map, marker);
                            });
                        })(marker, data);
                    }
                }
            </script>
           
        </div>


    </div>

</div>