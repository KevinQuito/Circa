<x-layout>
    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            <div class="search-box">
                <form action="/orderissues/">
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
                    <i class="uil uil-table"></i>
                    <span class="text">Order Issues</span>
                </div>
                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-process"></i>
                        <span class="text">In Progress</span>
                        <a href="/orderissues?status=in+progress">
                        <span class="number">{{count($totalinprogress)}}</span>
                        </a>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-ellipsis-h"></i>
                        <span class="text">On Hold</span>
                        <a href="/orderissues?status=on+hold">
                        <span class="number">{{count($totalonhold)}}</span>
                        </a>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-check-circle"></i>
                        <span class="text">Complete</span>
                        <a href="/orderissues?status=complete">
                        <span class="number">{{count($totalcomplete)}}</span>
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
                                <th class="data-title">Task</th>
                                <th class="data-title">Description</th>
                                <th class="data-title">Priority</th>
                                <th class="data-title">Department</th>
                                <th class="data-title">Status</th>
                                <th class="data-title">Created</th>
                                <th class="data-title">Updated</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach($information as $info)
                                <x-tasks-card :info="$info" />
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                    @else
                        <p>No tasks found</p>
                    @endunless
                </div>
                <div>
                    {{$information->links()}}
                </div>
            </div>
        </div>
    </section>
    
</x-layout>



