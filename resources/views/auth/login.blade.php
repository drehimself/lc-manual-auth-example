<x-guest-layout>
    <h2>Login</h2>

    @if ($errors->any())
        <div>
            <div>Something went wrong!</div>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/login" method="POST">
        @csrf

        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" autofocus>
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
        </div>

        <div>
            <label for="remember">
                <input id="remember" type="checkbox" name="remember">
                <span class="">Remember Me</span>
            </label>
        </div>

        <div>
            <button>Login</button>
        </div>
    </form>

    <a href="/forgot-password">Forgot Password?</a>

</x-guest-layout>
