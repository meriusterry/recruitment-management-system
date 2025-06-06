<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="flex items-center justify-center min-h-screen bg-white-90">
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8">

        <div class="flex justify-center mb-0">
            <img src="{{ asset('images/brand.gif') }}" alt="Logo" class="w-80 h-20">
        </div>

        <h2 class="text-2xl font-bold mb-4">Register</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <x-text-input id="name" type="text" name="name" placeholder="Full Name" :value="old('name')" required autofocus autocomplete="name"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 shadow-sm rounded-none focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                <x-input-error :messages="$errors->get('name')" class="text-red-600 text-sm mt-1" />
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                <x-text-input id="email" type="email" name="email" placeholder="Email Address" :value="old('email')" required autocomplete="username"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 shadow-sm rounded-none focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                <x-input-error :messages="$errors->get('email')" class="text-red-600 text-sm mt-1" />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <x-text-input id="password" type="password" name="password" placeholder="Password" required autocomplete="new-password"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 shadow-sm rounded-none focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                <x-input-error :messages="$errors->get('password')" class="text-red-600 text-sm mt-1" />
            </div>

            <!-- Confirm Password -->
            <div class="mb-6">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                <x-text-input id="password_confirmation" type="password" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 shadow-sm rounded-none focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="text-red-600 text-sm mt-1" />
            </div>

            <div class="mb-6">
                <button type="submit"
                    class="w-full py-2 px-4 border border-transparent text-sm font-medium text-white bg-blue-600 hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-700">
                    REGISTER ->
                </button>
            </div>

            <div class="text-center">
                <p class="text-sm text-gray-600">Already registered?
                    <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Login</a>
                </p>
            </div>
        </form>
    </div>
</body>

</html>
