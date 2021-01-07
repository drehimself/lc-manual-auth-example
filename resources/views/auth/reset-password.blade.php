<x-guest-layout>
    <h2>Forgot password</h2>

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

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <form action="/reset-password" method="POST">
        @csrf

        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email', $request->email) }}" autofocus>
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
        </div>

        <div>
            <label for="password_confirmation">Password Confirmation</label>
            <input type="password" id="password_confirmation" name="password_confirmation">
        </div>

        <div>
            <button>Reset Password</button>
        </div>
    </form>

</x-guest-layout>
