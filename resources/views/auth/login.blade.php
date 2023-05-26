@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<form method="POST" action="{{ route('login') }}">
    @csrf

    <!-- Email Field -->
    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ session('email') }}" required autofocus>
    </div>

    <!-- Password Field -->
    <div>
        <label for="password">Password</label>
        <input id="password" type="password" name="password" value="{{ session('password') }}" required>
    </div>

    <button type="submit">Login</button>

    <div class="text-center">
        <p>Don't have an account? <a href="{{ route('register') }}">Register</a></p>
    </div>
</form>

