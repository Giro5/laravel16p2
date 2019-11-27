@include("components.top")
@include("components.navbar")

<div class="container h3 mt-4 mb-4">
    Sign Up
</div>

<div class="container w-75">

    <span class="h3">
        @if(session()->get("reg") == true)
            Thank for registration
            {{session()->put("reg", false)}}
        @endif
    </span>

    <form action="/reg/action" method="POST">

        @csrf

        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
        </div>
        <div class="form-group">
            <label for="exampleInputLogin1">Login</label>
            <input type="text" name="login" class="form-control" id="exampleInputLogin1" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
        </div>
        <button type="submit" class="btn btn-danger">Sign Up</button>
    </form>
</div>

@include("components.bottom")