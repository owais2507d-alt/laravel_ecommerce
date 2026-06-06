@extends('layouts.app')

@section('title', 'Register')

@section('content')

<div class="max-w-md mx-auto">
    <div class="bg-gray-900 border border-yellow-500 rounded-2xl p-8 shadow-lg">

        <h2 class="text-3xl font-bold text-yellow-500 text-center mb-6">
            Create Account
        </h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-4">
                <label class="block mb-2 text-yellow-500">Name</label>
                <input
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    required
                    class="w-full bg-black border border-gray-700 rounded-lg px-4 py-3 text-white focus:border-yellow-500 focus:outline-none"
                >
            </div>

            <div class="mb-4">
                <label class="block mb-2 text-yellow-500">Email</label>
                <input
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    class="w-full bg-black border border-gray-700 rounded-lg px-4 py-3 text-white focus:border-yellow-500 focus:outline-none"
                >
            </div>

            <div class="mb-4">
                <label class="block mb-2 text-yellow-500">Password</label>
                <input
                    type="password"
                    name="password"
                    required
                    class="w-full bg-black border border-gray-700 rounded-lg px-4 py-3 text-white focus:border-yellow-500 focus:outline-none"
                >
            </div>

            <div class="mb-6">
                <label class="block mb-2 text-yellow-500">Confirm Password</label>
                <input
                    type="password"
                    name="password_confirmation"
                    required
                    class="w-full bg-black border border-gray-700 rounded-lg px-4 py-3 text-white focus:border-yellow-500 focus:outline-none"
                >
            </div>

            <button
                type="submit"
                class="w-full bg-yellow-500 text-black font-bold py-3 rounded-lg hover:bg-yellow-400 transition"
            >
                Register
            </button>

        </form>

        <p class="text-center text-gray-400 mt-6">
            Already have an account?
            <a href="{{ route('login') }}" class="text-yellow-500 hover:underline">
                Login
            </a>
        </p>

    </div>
</div>

@endsection