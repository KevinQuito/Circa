 <x-form-layout>
    <form class="form" method="POST" action="/users" enctype="multipart/form-data" id="add-user" name="add-user">
        @csrf
        <div class="title">Register</div>
        <div class="input-container ic2">
            <input id="name" class="input" type="text" placeholder="Name" name="name" value="{{old('name')}}"/>
            @error('email')
                <p class="error-text">{{$message}}</p>
            @enderror
        </div>
        <div class="input-container ic1">
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
            <input id="password_confirmation" class="input" type="password" placeholder="Confirm Password" name="password_confirmation" value="{{old('password_confirmation')}}"/>
            @error('password_confirmation')
                <p class="error-text">{{$message}}</p>
            @enderror
        </div>
        <div class="input-container ic1">
            <p class="text">Already have an account?</p>
            <a class="sub-text" href="/login">Login</a> 
        </div>
        <button id="submit" type="submit" class="submit">Sign Up</button>
    </form>
</x-form-layout>