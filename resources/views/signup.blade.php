@extends('layout.master')

@section('content')

    <div class="flex items-center justify-center min-h-screen 2xl:ml-20 bg-slate-100">
        <div class="relative flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0">
            <div class="flex flex-col justify-center p-8 md:p-14">
                <span class="mb-3 text-4xl font-bold text-center">Welcome to Kriss Software!</span>
                <span class="text-sm text-center">Sign up to get your gear started!!!</span>

                <form action="signup" method="POST" class="mt-8 space">
                    @csrf
                    <div class="py-4">
                        <label for="name" class="mb-2 text-md font-bold">Name</label>
                        <input type="text" name="name" id="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="Enter your name">
                    </div>

                    <div class="py-4">
                        <label for="phone" class="mb-2 text-md font-bold">Password</label>
                        <input type="text" name="phone" id="phone" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="Enter your phone number">
                    </div>

                    <div class="py-4">
                        <label for="email" class="mb-2 text-md font-bold">Email</label>
                        <input type="email" name="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="Enter your email">
                    </div>

                    <div class="py-4">
                        <label for="password" class="mb-2 text-md font-bold">Password</label>
                        <input type="password" name="password" id="password" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="Enter your password">
                    </div>

                    <div class="py-4">
                        <label for="conf-password" class="mb-2 text-md font-bold">Confirm Password</label>
                        <input type="password" name="password" id="password" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="Enter your confirm password">
                    </div>

                    <div class="py-4">
                        <button type="submit" class="w-full px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-700">Sign Up</button>
                </form>

                <div class="flex items-start justify-between mt-4">
                    <div class="flex items-center space-x-2">
                        <input type="checkbox" name="remember" id="remember" class="rounded-md">
                        <label for="remember" class="text-sm">I agree to the terms & conditions!</label>
                        <a href="#" class="hover:underline text-blue-500">Click for more</a>
                    </div>

                    
                </div>
                <div class="mt-8 text-center">
                    <span class="text-sm">Already have an Account?</span>
                    <a href="signin" class="text-blue-500 hover:underline">Sign In</a>
                </div>
            </div>
        </div>
    </div>
   
@endsection