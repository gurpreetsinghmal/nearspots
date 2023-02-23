<div class="my-6  w-4/5 ">
    <!-- listing title -->
    <div class="w-fit">
        <div class="font-medium text-2xl text-red-500">
            Recent Listings
        </div>
        <div class="w-1/3 h-1 bg-red-500">
        </div>
    </div>
    <div class="mt-5 p-2 grid grid-cols-1 md:grid-cols-2 gap-3">
                @php
                $a=array(1,2,3,4,5,6,7,8,9,10);
                @endphp
                @foreach($a as $i)
                <a href="#">
        <div class="flex drop-shadow-md flex-row bg-white rounded-lg overflow-hidden">
            <!-- image -->
            <div class="w-3/4">
                <img class="w-full h-full" src="https://picsum.photos/100/100?random=@php echo rand(1,100); @endphp>" />
            </div>
            <div class="px-4 py-2 w-full">
                <!-- button      -->

                <div class="my-2 text-slate-600 font-normal flex lg:flex-row flex-col  text-xs gap-x-1">
                    <div class="bg-slate-300 mb-1 hover:bg-red-500 hover:text-white font-bold py-1 px-2 rounded inline-flex items-center">
                        <img class="h-5 mr-2" src="https://www.svgrepo.com/show/393360/restaurant.svg" />
                        <span>Restaurant </span>
                    </div>

                    <div class="bg-slate-300 mb-1 hover:bg-red-500 hover:text-white font-bold py-1 px-2 rounded inline-flex items-center">
                        <img class="h-5 mr-2" src="https://www.svgrepo.com/show/410218/burger.svg" />
                        <span>Burger</span>
                    </div>
                </div>
                <!-- title  -->
                <div class="my-2 text-red-500 font-bold text-medium">
                    The Royal Moose
                </div>

                <!-- owner details -->
                <div class="mt-4 border-t-2 border-slate-300 py-3 flex items-center text-slate-800">
                                    <div class="mr-2">
                                        <img class="h-12 w-12 rounded-full" src="https://i.pravatar.cc/150?img=@php echo $i; @endphp" />
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
        </div>
                                    </a>
            @endforeach


    </div>
</div>