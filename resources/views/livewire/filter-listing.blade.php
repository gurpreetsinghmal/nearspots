<div class="w-full">

    <script type="text/javascript">
        var markers = [{
                "title": 'Aksa Beach',
                "lat": '19.1759668',
                "lng": '72.79504659999998',
                "img": 'https://picsum.photos/200/300?random=28',
                "description": 'Aksa Beach is a popular beach and a vacation spot in Aksa village at Malad, Mumbai.'
            },
            {
                "title": 'Juhu Beach',
                "lat": '19.0883595',
                "lng": '72.82652380000002',
                "img": 'https://picsum.photos/200/300?random=27',
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
                center: new google.maps.LatLng(markers[0].lat, markers[0].lng),
                zoom: 10,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);

            //Create and open InfoWindow.

            for (var i = 0; i < markers.length; i++) {
                var infowindow = new google.maps.InfoWindow();
                var data = markers[i];

                var myLatlng = new google.maps.LatLng(data.lat, data.lng);
                marker[i] = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    title: data.title
                });


                //Attach click event to the marker.
                (function(marker, data, i) {
                    google.maps.event.addListener(marker[i], "click", function(e) {
                        //Wrap the content inside an HTML DIV in order to set height and width of InfoWindow.
                        infowindow.setContent("<div><img style='width:100%;height:100px' alt='noimg' src='" + data.img + "' /><div style = 'width:200px;min-height:40px;text-align:justify;padding:3px'>" + data.description + "</div>");

                        infowindow.open(map, marker[i]);
                    });
                })(marker, data, i);
                infowindow.setContent("<div><img style='width:100%;height:100px' alt='noimg' src='" + data.img + "' /><div style = 'width:200px;min-height:40px;text-align:justify;padding:3px'>" + data.description + "</div>");
                popdata[i] = infowindow;
            }
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=
    AIzaSyDTOP0SjF8I8QIdGDv6wINnJ06De8dJDlI&callback=LoadMap">

    </script>
    <style>
        #dvMap {
            position: -webkit-sticky;
            position: sticky !important;
            top: 70px;
        }
    </style>

    <div class="w-4/5 flex gap-2 mt-1 mx-auto">
        <!-- listings -->
        <div class="w-1/2 ">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">

                @foreach($json as $i)
                <a onmouseover='pop({{$i->id%5}})' href="#">
                    <div class="item drop-shadow-md  py-2">
                        <div class="ring-rose-700 hover:ring-1 rounded-lg ">
                            <img class="rounded-t-lg h-36 w-full object-cover" src="https://picsum.photos/200/300?random=@php echo rand(1,100); @endphp>" />
                            <div class="bg-white p-2 rounded-b-lg">
                                <!-- button icons -->
                                <div class="my-2 text-slate-600 font-normal flex flex-row text-xs gap-x-1">
                                    <div class="bg-slate-300  text-grey-darkest font-bold py-1 px-2 rounded inline-flex items-center">
                                        <img class="h-5 mr-2" src="https://www.svgrepo.com/show/393360/restaurant.svg" />
                                        <span>Restaurant </span>
                                    </div>

                                    <div class="bg-slate-300  text-grey-darkest font-bold py-1 px-2 rounded inline-flex items-center">
                                        <img class="h-5 mr-2" src="https://www.svgrepo.com/show/410218/burger.svg" />
                                        <span>Burger</span>
                                    </div>
                                </div>
                                <!-- hotel name -->
                                <div class="text-red-500 text-lg font-medium pt-1">
                                    The Royal Moose
                                </div>
                                <div class="text-slate-500">
                                    near Mata Sundri, Mansa
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
                </a>
                @endforeach



            </div>
            <div class="my-2">
                {{$json->links()}}
            </div>
        </div>

        <!-- map  -->
        <div class="w-1/2">

            <div id="dvMap" class="rounded-lg my-2 h-96" style="width:100%;">
            </div>
        </div>
    </div>


</div>