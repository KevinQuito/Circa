<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{absolute_url(asset('css/dashboard.css'))}}" />
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!----====== Scripts ======= --->
    <title>Circa</title>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="{{asset('/images/logo.png')}}" alt="">
            </div>
            <span class="logo_name"><a href="/">Circa</a></span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="/dashboard">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
                <li><a href="/orderform">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Order Form</span>
                </a></li>
                <li><a href="/orderissues">
                    <i class="uil uil-bug"></i>
                    <span class="link-name">Order Issue</span>
                </a></li>
                <li><a href="/lte">
                    <i class="uil uil-circuit"></i>
                    <span class="link-name">LTE Orders</span>
                    </a>
                </li>
                <li><a href="/broadband">
                    <i class="uil uil-circuit"></i>
                    <span class="link-name">Broadband Orders</span>
                    </a>
                </li>
                <li><a href="/voip">
                    <i class="uil uil-phone-volume"></i>
                    <span class="link-name">VoIP Orders</span>
                    </a>
                </li>
                <li><a href="/analog">
                    <i class="uil uil-phone-volume"></i>
                    <span class="link-name">Analog Orders</span>
                    </a>
                </li>
            </ul>
            
            <ul class="logout-mode">
                <li><a>          
                    <i class="uil uil-signout"></i>
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit" style="background: none; border: none">
                            <span class="link-name"> Logout</span>
                        </button>
                    </form>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>
    {{$slot}} 
    {{-- THIS NEEDS TO BE AT THE BOTTOM FOR SOME REASON, OTHERWISE DARKMODE DOESNT WORK,
        script to use alpinejs makes flash message disappear after a couple seconds --}}
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="{{absolute_url(asset('js/dashboard.js'))}}"></script>
</body>
</html>
