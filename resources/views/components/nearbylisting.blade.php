<div class="my-6 bg-white w-full my-2">
    <!-- listing title -->
    <div class="text-center my-4">
        <div class="font-medium text-2xl text-red-500 p-3">Nearby Listings</div>
        <div class="text-slate-400">Popular Listing around you</div>
        <div class="mt-3 mb-6 h-1 bg-red-500 w-24 mx-auto"></div>
    </div>
    <style>
        .item:hover .bg-img{
            transform: scale(1.2);
        
        }
        .item:hover .bg-img::after{
            content: '';
            position: absolute;
            top:0;
            width:100%;
            height: 100%;
            background-color: rgba(255,255,255,0.7);
        }
        .bg-img{
            transition: all 0.5s;
            top:0;
            left:0;
            z-index: -1;
        }
    </style>
    <div class="w-4/5 mx-auto p-2 grid grid-cols-1 md:grid-cols-3 gap-2">
    @php
                $a=array(1,2,3,4,5,6,7,8,9,10);
                @endphp
                @foreach($a as $i)
                <a href="#">
                    <div class="item rounded-lg overflow-hidden h-fit drop-shadow-md py-2">
                        <div class="relative rounded-lg p-3" >
                            
                            <div class="rounded-lg text-center">
                                <!-- button icons -->
                                <div class="my-2 text-slate-600 font-normal flex flex-row justify-center text-xs gap-x-1">
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
                                <div class="text-red-500 text-lg font-bold pt-1">
                                    The Royal Moose
                                </div>
                                <div class="text-slate-800">
                                    near Mata Sundri, Mansa
                                </div>
                                <!-- rating -->
                                <div class="flex justify-center">
                                    @php
                                    $x=1;
                                    $i=rand(1,5);
                                    while($x<=5) { if($x<=$i) { $color=" text-red-500 " ; } else { $color=" text-slate-800 " ; } echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 py-1 pr-1 my-1' .$color.'">
                                        <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                                        </svg>';
                                        $x++;
                                        }
                                        @endphp




                                </div>
                                <!-- reviews -->
                                <div class="text-slate-800 text-sm">(4 reviews)</div>
                                <!-- owner details -->
                                <div class="mt-4 border-t-2 border-slate-400 py-3 flex text-slate-800">
                                    <div class="mr-2">
                                        <img class="h-12 w-12 rounded-full" src="https://i.pravatar.cc/150?img=@php echo $i; @endphp>" />
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
                                    <div class="h-fit rounded text-white p-0.5 px-2 bg-green-500">
                                        open
                                    </div>
                                    @php
                                    }
                                    else
                                    {
                                    @endphp
                                    <div class="h-fit rounded text-white p-0.5 px-2 bg-red-500">
                                        close
                                    </div>
                                    @php } @endphp

                                </div>

                            </div>
                            <div class="absolute bg-img rounded-lg" style="background-image: url('https://picsum.photos/200/300?random=@php echo rand(1,100); @endphp>');background-repeat: no-repeat, no-repeat;width:100%;height:100%;
                        background-position:center;background-size: cover;">
                                
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
    </div>
</div>