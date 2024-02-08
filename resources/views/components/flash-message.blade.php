<link rel="stylesheet" href="{{asset('css/flash-message.css')}}" />

@if(session()->has('message'))
    <div id="flash-message" x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show">
        <p>
            {{session('message')}}
        </p>
    </div>
@endif