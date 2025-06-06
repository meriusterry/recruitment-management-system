<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="flex items-center justify-center min-h-screen bg-white-90">
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8">

        <div class="flex justify-center mb-0">
            <img src="{{ asset('images/brand.gif') }}" alt="Logo" class="w-80 h-20">
        </div>

        <h2 class="text-2xl font-bold mb-4 ">Forgot Password</h2>

        <p class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </p>

        <!-- Session Status -->
        @if (session('status'))
            <div class="mb-4 text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                <x-text-input id="email" type="email" name="email" :value="old('email')" placeholder="Email Address" required autofocus
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                <x-input-error :messages="$errors->get('email')" class="text-red-600 text-sm mt-1" />
            </div>

            <div class="mb-6">
                <button type="submit"
                    class="w-full py-2 px-4 border border-transparent text-sm font-medium text-white bg-blue-600 hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-700">
                    Email Password Reset Link
                </button>
            </div>

            <div class="text-center">
                <a href="{{ route('login') }}" class="text-sm text-blue-600 hover:text-blue-800">Back to login</a>
            </div>
        </form>
    </div>
</body>

</html>
