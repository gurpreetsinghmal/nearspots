<div class="bg-white w-full">
    <div class="w-4/5 mx-auto my-4">

        <div class="text-center my-4">
            <div class="font-medium text-2xl text-red-500 p-3">Testimonials</div>
            <div class="text-slate-400">Popular Listing around you</div>
            <div class="mt-3 mb-6 h-1 bg-red-500 w-24 mx-auto"></div>
        </div>

        <script>
            $(function() {
                // Owl Carousel
                var owl = $(".owl-test").owlCarousel({
                    items: 2,
                    margin: 10,
                    loop: true,
                    nav: true,
                    //autoplay: true,
                    navText: ['<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 p-2 rounded-full text-white bg-red-500"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" /></svg>',
                        '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 p-2 rounded-full text-white bg-red-500"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>'
                    ],
                    responsive: {
                        0: {
                            items: 1,
                        },
                        800: {
                            items: 2,
                        },
                    }
                });
            });
        </script>
        <style>
            .owl-test .owl-nav .owl-prev,
            .owl-test .owl-nav .owl-next {
                position: absolute;
                top: 40%;
                transform: translateY(-50%);
                display: block !important;
                border: 0px solid black;
            }

            .owl-test .owl-nav .owl-prev {
                left: -50px;
            }

            .owl-test .owl-nav .owl-next {
                right: -50px;
            }
        </style>

        <div class="my-6">
            <div class="home-demo text-white">
                <div class="owl-carousel owl-theme owl-test">
                    @php
                    $a=array(1,2,3,4,5,6,7,8);
                    @endphp
                    @foreach($a as $i)
                    <a href="#">
                        <div class="item h-fit drop-shadow-md m-3 bg-slate-100 rounded-lg">
                            <div class="rounded-lg ">
                                <div class="flex flex-cols justify-center">
                                    <div class="m-3 h-24 w-24 rounded-full overflow-hidden">
                                    <img src="https://picsum.photos/200/300?random=@php echo rand(1,100); @endphp>" />
                                    </div>
                                </div>
                                <div class="text-center p-2 rounded-lg">
                                   
                                    <!-- hotel name -->
                                    <div class="text-red-500 text-lg font-medium pt-1">
                                        The Royal Moose
                                    </div>
                                    <div class="text-slate-500">
                                        near Mata Sundri, Mansa
                                    </div>
                                    
                                    <div class="text-slate-700 p-4">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, iure a! Mollitia quia sint perferendis architecto ipsa quaerat, officiis quisquam itaque ullam dolores quod veritatis error quo officia ab laudantium!
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
</div>