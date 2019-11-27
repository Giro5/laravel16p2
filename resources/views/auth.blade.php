@include("components.top")
@include("components.navbar")

<div class="container h3 mt-4 mb-4">
    Sign In
</div>

<div class="container w-75">

    <form action="/auth/action" method="POST">

        @csrf

        <div class="form-group">
            <label for="exampleInputLogin1">Login</label>
            <input type="text" name="login" class="form-control" id="exampleInputLogin1" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
        </div>
        <button type="submit" class="btn btn-danger">Sign In</button>
    </form>
</div>

@include("components.bottom")