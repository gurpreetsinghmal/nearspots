<div class="w-4/5">

    <div class="w-fit">
        <div class="font-medium text-2xl text-red-500">
            Featured Listings
        </div>
        <div class="w-1/3 h-1 bg-red-500">
        </div>
    </div>

    <script>
        $(function() {
            // Owl Carousel
            var owl = $(".owl-carousel");
            owl.owlCarousel({
                items: 4,
                margin: 10,
                loop: true,
                nav: true,
                navText: ['<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 p-2 rounded-full text-white bg-red-500"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" /></svg>',
                    '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 p-2 rounded-full text-white bg-red-500"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>'
                ],
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 2,
                    },
                    1000: {
                        items: 3,
                    },
                    1200: {
                        items: 4,
                    }

                }
            });
        });
    </script>

    <div class="my-6">
        <div class="home-demo text-white">
            <div class="owl-carousel owl-theme">
                @php
                $a=array(1,2,3,4,5,6,7,8);
                @endphp
                @foreach($a as $i)
                <a href="#">
                    <div class="item h-fit drop-shadow-md py-2">
                        <div class="bg-white rounded-lg ">
                            <img class="rounded-t-lg h-36 object-cover" src="https://picsum.photos/200/300?random=@php echo rand(1,100); @endphp>" />
                            <div class="bg-white p-2 rounded-lg">
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
                                        <img class="h-12 w-12 rounded-full" src="https://i.pravatar.cc/150?img=@php echo $a[$i]; @endphp>" />
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
        </div>
    </div>



</div>