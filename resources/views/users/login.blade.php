<x-form-layout>
    <form class="form" method="POST" action="/users/authenticate" enctype="multipart/form-data" id="add-user" name="add-user">
        @csrf
        <div class="title">Login</div>
        <div class="input-container ic2">
            <input id="email" class="input" type="email" placeholder="Email" name="email" value="{{old('email')}}"/>
            @error('email')
                <p class="error-text">{{$message}}</p>
            @enderror
        </div>
        <div class="input-container ic1">
            <input id="password" class="input" type="password" placeholder="Password" name="password" value="{{old('password')}}"/>
            @error('password')
                <p class="error-text">{{$message}}</p>
            @enderror
        </div>
        <div class="input-container ic1">
            <p class="text">Don't have an account?</p>
            <a class="sub-text" href="/register">Register</a> 
        </div>
        <button id="submit" type="submit" class="submit">Sign In</button>
    </form>
</x-form-layout>