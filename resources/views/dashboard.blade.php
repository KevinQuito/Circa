<x-layout>
    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            <div class="search-box">
                <form action="/dashboard/">
                    <i class="uil uil-search"></i>
                    <input type="text" name="search" placeholder="Search here...">
                </form>
            </div>
            <img src="{{asset('/images/profile.jpg')}}" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-bug"></i>
                        <span class="text">Issues</span>
                        <span class="number">{{count($totaltasks)}}</span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-phone-volume"></i>
                        <span class="text">Voice Orders</span>
                        <span class="number">15</span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-circuit"></i>
                        <span class="text">Data Orders</span>
                        <span class="number">{{count($totalorders)}}</span>
                    </div>
                </div>
            </div>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-user-circle"></i>
                    <span class="text">Users</span>
                </div>

                <div class="activity-data">
                    @unless(count($totalusers) == 0)
                    <div class="data">
                    <table>
                        <thead>
                            <tr>
                                <th class="data-title">ID</th>
                                <th class="data-title">Name</th>
                                <th class="data-title">Email</th>
                                <th class="data-title">Created</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach($totalusers as $userinfo)
                                <x-users-card :userinfo="$userinfo" />
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                    @else
                    <p>No users found</p>
                    @endunless
                </div>
            </div>
        </div>
    </section>
</x-layout>