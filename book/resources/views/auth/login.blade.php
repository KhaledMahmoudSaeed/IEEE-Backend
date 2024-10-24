<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-slate-800 text-amber-500 border border-gray-200 shadow-md">
                    <div class="card-header text-amber-500">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end text-amber-500">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control bg-slate-700 text-amber-500 @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email"
                                        autofocus>

                                    @error('email')
                                        <span class="invalid-feedback text-amber-500" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end text-amber-500">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control bg-slate-700 text-amber-500 @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback text-amber-500" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input bg-slate-700 text-amber-500" type="checkbox"
                                            name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label text-amber-500" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit"
                                        class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75 cursor-pointer">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link text-blue-400 hover:text-blue-600"
                                            href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
