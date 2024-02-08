<x-layout>
    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            <div class="search-box">
                <form action="/lte/">
                    <i class="uil uil-search"></i>
                    <input type="text" name="search" placeholder="Search here...">
                </form>
            </div>
            <img src="{{asset('/images/profile.jpg')}}" alt="">
        </div>
        <div class="dash-content">
            <div class="overview">
                {{-- for flash message below --}}
                <x-flash-message />
                <div class="title">
                    <i class="uil uil-notes"></i>
                    <span class="text">LTE Orders</span>
                </div>
                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-plus"></i>
                        <span class="text">New Orders</span>
                        <a href="/lte?lteordertype=new+lte">
                        <span class="number">{{count($totalnewstatic)+count($totalnewdynamic)}}</span>
                        </a>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-link"></i>
                        <span class="text">Change/Update Orders</span>
                        <a href="/lte?lteordertype=update+existing+lte">
                        <span class="number">{{count($totalupdate)}}</span>
                        </a>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-link-broken"></i>
                        <span class="text">Disconnect</span>
                        <a href="/lte?lteordertype=disconnect">
                        <span class="number">{{count($totaldisconnect)}}</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recent Activity</span>
                </div>

                <div class="activity-data">
                    @unless(count($information) == 0)
                    <div class="data">
                    <table>
                        <thead>
                            <tr>
                                <th class="data-title">Ticket ID</th>
                                <th class="data-title">LTE Order</th>
                                <th class="data-title">Vendor</th>
                                <th class="data-title">OpCo</th>
                                <th class="data-title">Street</th>
                                <th class="data-title">City</th>
                                <th class="data-title">State</th>
                                <th class="data-title">Zip</th>
                                <th class="data-title">Created</th>
                                <th class="data-title">Updated</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach($information as $info)
                                <x-ltes-card :info="$info" />
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                    @else
                        <p>No orders found</p>
                    @endunless
                </div>
                <div>
                    {{$information->links()}}
                </div>
            </div>





            
            </div>
        </div>
    </section>
</x-layout>