@extends('components.base')
@section('title', 'Join TaskFlow - Smart Task Management')

@section('content')

<div class="min-h-screen bg-gradient-to-br from-indigo-50 via-white to-cyan-50 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-30">
        <div class="absolute top-20 left-10 w-32 h-32 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full blur-3xl"></div>
        <div class="absolute top-40 right-20 w-24 h-24 bg-gradient-to-br from-cyan-400 to-blue-500 rounded-full blur-2xl"></div>
        <div class="absolute bottom-20 left-1/4 w-40 h-40 bg-gradient-to-br from-purple-400 to-pink-500 rounded-full blur-3xl"></div>
    </div>

    <div class="relative flex min-h-screen">
        <!-- Left Side - Hero Section -->
        <div class="hidden lg:flex lg:w-1/2 bg-gradient-to-br from-blue-600 via-purple-600 to-indigo-700 relative overflow-hidden">
            <!-- Hero Background Elements -->
            <div class="absolute inset-0">
                <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-white bg-opacity-10 rounded-full blur-3xl"></div>
                <div class="absolute bottom-1/4 right-1/4 w-48 h-48 bg-cyan-300 bg-opacity-20 rounded-full blur-2xl"></div>
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-purple-300 bg-opacity-10 rounded-full blur-3xl"></div>
            </div>

            <div class="relative z-10 flex flex-col justify-center items-center text-white p-12 w-full">
                <!-- Hero Content -->
                <div class="max-w-md text-center mb-8">
                    <div class="mb-8">
                        <div class="w-20 h-20 bg-white bg-opacity-20 rounded-2xl flex items-center justify-center mx-auto mb-6 backdrop-blur-sm">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                            </svg>
                        </div>
                        <h1 class="text-4xl font-bold mb-4">Welcome to TaskFlow</h1>
                        <p class="text-xl text-blue-100 mb-6">The smart way to manage your tasks and boost productivity</p>
                    </div>

                    <!-- Feature Highlights -->
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-white bg-opacity-20 rounded-lg flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <span class="text-blue-100">Lightning-fast task creation</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-white bg-opacity-20 rounded-lg flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <span class="text-blue-100">Seamless team collaboration</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-white bg-opacity-20 rounded-lg flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>
                            <span class="text-blue-100">Smart progress tracking</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-white bg-opacity-20 rounded-lg flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <span class="text-blue-100">Intelligent deadline reminders</span>
                        </div>
                    </div>
                </div>

                <!-- Task Visualization -->
                <div class="mt-8 relative">
                    <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-6 max-w-sm">
                        <div class="space-y-3">
                            <div class="flex items-center space-x-3 p-3 bg-white bg-opacity-10 rounded-lg">
                                <div class="w-4 h-4 border-2 border-green-300 rounded bg-green-300"></div>
                                <span class="text-sm text-blue-50">Complete project proposal</span>
                            </div>
                            <div class="flex items-center space-x-3 p-3 bg-white bg-opacity-10 rounded-lg">
                                <div class="w-4 h-4 border-2 border-blue-300 rounded"></div>
                                <span class="text-sm text-blue-50">Review team feedback</span>
                            </div>
                            <div class="flex items-center space-x-3 p-3 bg-white bg-opacity-10 rounded-lg">
                                <div class="w-4 h-4 border-2 border-purple-300 rounded"></div>
                                <span class="text-sm text-blue-50">Schedule client meeting</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Side - Registration Form -->
        <div class="w-full lg:w-1/2 flex items-center justify-center py-20 px-4 sm:px-6 lg:px-8">
            <div class="max-w-md w-full space-y-8">
                <!-- Header -->
                <div class="text-center">
                    <div class="mx-auto h-16 w-16 bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg relative">
                        <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                        </svg>
                        <div class="absolute -top-1 -right-1 w-4 h-4 bg-green-400 rounded-full flex items-center justify-center">
                            <svg class="w-2 h-2 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-2">Start managing tasks smarter</h2>
                    <p class="text-gray-600">Join thousands of productive teams using TaskFlow</p>
                </div>

                <!-- Registration Form -->
                <div class="bg-white rounded-2xl shadow-xl p-8 border border-gray-100">
                    <form method="POST" action="{{ route('register') }}" class="space-y-6" id="registerForm">
                        @csrf
                        
                        <!-- First Name & Last Name -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="first_name" class="block text-sm font-semibold text-gray-700 mb-2">
                                    First Name
                                </label>
                                <div class="relative">
                                    <input id="first_name" name="first_name" type="text" required 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 bg-gray-50 focus:bg-white @error('first_name') border-red-500 @enderror" 
                                           placeholder="John" value="{{ old('first_name') }}">
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                </div>
                                @error('first_name')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="last_name" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Last Name
                                </label>
                                <div class="relative">
                                    <input id="last_name" name="last_name" type="text" required 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 bg-gray-50 focus:bg-white @error('last_name') border-red-500 @enderror" 
                                           placeholder="Doe" value="{{ old('last_name') }}">
                                </div>
                                @error('last_name')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Email Address -->
                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                                Work Email Address
                            </label>
                            <div class="relative">
                                <input id="email" name="email" type="email" required 
                                       class="w-full px-4 py-3 pl-12 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 bg-gray-50 focus:bg-white @error('email') border-red-500 @enderror" 
                                       placeholder="john.doe@company.com" value="{{ old('email') }}">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                            </div>
                            @error('email')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Company Name -->
                        <div>
                            <label for="company" class="block text-sm font-semibold text-gray-700 mb-2">
                                Company Name <span class="text-gray-400 font-normal">(Optional)</span>
                            </label>
                            <div class="relative">
                                <input id="company" name="company" type="text" 
                                       class="w-full px-4 py-3 pl-12 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 bg-gray-50 focus:bg-white @error('company') border-red-500 @enderror" 
                                       placeholder="Your Company" value="{{ old('company') }}">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                </div>
                            </div>
                            @error('company')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Team Size -->
                        <div>
                            <label for="team_size" class="block text-sm font-semibold text-gray-700 mb-2">
                                Team Size
                            </label>
                            <div class="relative">
                                <select id="team_size" name="team_size" required 
                                        class="w-full px-4 py-3 pl-12 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 bg-gray-50 focus:bg-white @error('team_size') border-red-500 @enderror">
                                    <option value="">Select team size</option>
                                    <option value="1" {{ old('team_size') == '1' ? 'selected' : '' }}>Just me</option>
                                    <option value="2-5" {{ old('team_size') == '2-5' ? 'selected' : '' }}>2-5 people</option>
                                    <option value="6-20" {{ old('team_size') == '6-20' ? 'selected' : '' }}>6-20 people</option>
                                    <option value="21-50" {{ old('team_size') == '21-50' ? 'selected' : '' }}>21-50 people</option>
                                    <option value="50+" {{ old('team_size') == '50+' ? 'selected' : '' }}>50+ people</option>
                                </select>
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            @error('team_size')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div>
                            <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">
                                Password
                            </label>
                            <div class="relative">
                                <input id="password" name="password" type="password" required 
                                       class="w-full px-4 py-3 pl-12 pr-12 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 bg-gray-50 focus:bg-white @error('password') border-red-500 @enderror" 
                                       placeholder="Create a strong password">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                    </svg>
                                </div>
                                <button type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center" onclick="togglePassword('password')">
                                    <svg id="password-eye" class="h-5 w-5 text-gray-400 hover:text-gray-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </button>
                            </div>
                            <!-- Password Strength Indicator -->
                            <div class="mt-2">
                                <div class="flex space-x-1">
                                    <div id="strength-1" class="h-1 w-full bg-gray-200 rounded-full transition-colors duration-200"></div>
                                    <div id="strength-2" class="h-1 w-full bg-gray-200 rounded-full transition-colors duration-200"></div>
                                    <div id="strength-3" class="h-1 w-full bg-gray-200 rounded-full transition-colors duration-200"></div>
                                    <div id="strength-4" class="h-1 w-full bg-gray-200 rounded-full transition-colors duration-200"></div>
                                </div>
                                <p id="strength-text" class="text-xs text-gray-500 mt-1">Password strength</p>
                            </div>
                            @error('password')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div>
                            <label for="password_confirmation" class="block text-sm font-semibold text-gray-700 mb-2">
                                Confirm Password
                            </label>
                            <div class="relative">
                                <input id="password_confirmation" name="password_confirmation" type="password" required 
                                       class="w-full px-4 py-3 pl-12 pr-12 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 bg-gray-50 focus:bg-white @error('password_confirmation') border-red-500 @enderror" 
                                       placeholder="Confirm your password">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <button type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center" onclick="togglePassword('password_confirmation')">
                                    <svg id="password_confirmation-eye" class="h-5 w-5 text-gray-400 hover:text-gray-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </button>
                            </div>
                            @error('password_confirmation')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Terms and Privacy -->
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="terms" name="terms" type="checkbox" required 
                                       class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded transition-colors @error('terms') border-red-500 @enderror">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="terms" class="text-gray-600">
                                    I agree to the 
                                    <a href="{{ route('terms') }}" class="text-blue-600 hover:text-blue-500 font-semibold underline">Terms of Service</a> 
                                    and 
                                    <a href="{{ route('privacy') }}" class="text-blue-600 hover:text-blue-500 font-semibold underline">Privacy Policy</a>
                                </label>
                                @error('terms')
                                    <p class="mt-1 text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Newsletter Subscription -->
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="newsletter" name="newsletter" type="checkbox" 
                                       class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded transition-colors">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="newsletter" class="text-gray-600">
                                    Send me productivity tips and TaskFlow updates
                                </label>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button type="submit" id="submitBtn"
                                    class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-semibold rounded-xl text-white bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                    <svg id="submit-icon" class="h-5 w-5 text-blue-300 group-hover:text-blue-200 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </span>
                                <span id="submit-text">Start Your Productivity Journey</span>
                            </button>
                        </div>
                    </form>

                    <!-- Divider -->
                    <div class="mt-6">
                        <div class="relative">
                            <div class="absolute inset-0 flex items-center">
                                                               <div class="w-full border-t border-gray-300"></div>
                            </div>
                            <div class="relative flex justify-center text-sm">
                                <span class="px-2 bg-white text-gray-500">
                                    Or continue with
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Social Login Options -->
                    <div class="mt-6 grid grid-cols-2 gap-3">
                        <div>
                            <a href="{{ route('login.google') }}" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-xl shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12.545 10.239v3.821h5.445c-0.712 2.315-2.647 3.972-5.445 3.972-3.332 0-6.033-2.701-6.033-6.032s2.701-6.032 6.033-6.032c1.498 0 2.866 0.549 3.921 1.453l2.814-2.814c-1.784-1.664-4.153-2.675-6.735-2.675-5.522 0-10 4.479-10 10s4.478 10 10 10c8.396 0 10-7.496 10-10 0-0.67-0.069-1.325-0.189-1.971h-9.811z"/>
                                </svg>
                                <span class="ml-2">Google</span>
                            </a>
                        </div>
                        <div>
                            <a href="{{ route('login.microsoft') }}" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-xl shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all">
                                <svg class="w-5 h-5" viewBox="0 0 23 23" fill="currentColor">
                                    <path d="M0 0h11.5v11.5H0V0zm11.5 11.5H23V23H11.5V11.5zM0 11.5h11.5V23H0V11.5z"/>
                                </svg>
                                <span class="ml-2">Microsoft</span>
                            </a>
                        </div>
                    </div>

                    <!-- Already have an account -->
                    <div class="mt-6 text-center">
                        <p class="text-sm text-gray-600">
                            Already have an account?
                            <a href="{{ route('login') }}" class="font-semibold text-blue-600 hover:text-blue-500 transition-colors">
                                Sign in
                            </a>
                        </p>
                    </div>
                </div>

                <!-- Footer -->
                <div class="text-center text-xs text-gray-500 mt-8">
                    <p>© {{ date('Y') }} TaskFlow. All rights reserved.</p>
                    <p class="mt-1">
                        <a href="{{ route('privacy') }}" class="hover:text-gray-700 transition-colors">Privacy Policy</a> · 
                        <a href="{{ route('terms') }}" class="hover:text-gray-700 transition-colors">Terms</a> · 
                        <a href="{{ route('contact') }}" class="hover:text-gray-700 transition-colors">Contact</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Password Strength Script -->
<script>
    function togglePassword(fieldId) {
        const field = document.getElementById(fieldId);
        const eyeIcon = document.getElementById(`${fieldId}-eye`);
        
        if (field.type === 'password') {
            field.type = 'text';
            eyeIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>';
        } else {
            field.type = 'password';
            eyeIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>';
        }
    }

    document.getElementById('password').addEventListener('input', function(e) {
        const password = e.target.value;
        const strengthBars = [
            document.getElementById('strength-1'),
            document.getElementById('strength-2'),
            document.getElementById('strength-3'),
            document.getElementById('strength-4')
        ];
        const strengthText = document.getElementById('strength-text');
        
        // Reset all bars
        strengthBars.forEach(bar => bar.className = 'h-1 w-full bg-gray-200 rounded-full transition-colors duration-200');
        
        if (password.length === 0) {
            strengthText.textContent = 'Password strength';
            return;
        }
        
        // Very weak
        if (password.length < 6) {
            strengthBars[0].classList.add('bg-red-500');
            strengthText.textContent = 'Very weak';
            strengthText.className = 'text-xs text-red-500 mt-1';
            return;
        }
        
        // Check strength
        let strength = 0;
        
        // Length
        if (password.length >= 8) strength++;
        if (password.length >= 12) strength++;
        
        // Contains numbers
        if (/\d/.test(password)) strength++;
        
        // Contains special chars
        if (/[!@#$%^&*(),.?":{}|<>]/.test(password)) strength++;
        
        // Contains both lower and uppercase
        if (/[a-z]/.test(password) && /[A-Z]/.test(password)) strength++;
        
        // Visual feedback
        if (strength <= 2) {
            // Weak
            strengthBars[0].classList.add('bg-red-400');
            strengthBars[1].classList.add('bg-red-400');
            strengthText.textContent = 'Weak';
            strengthText.className = 'text-xs text-red-400 mt-1';
        } else if (strength <= 4) {
            // Medium
            strengthBars[0].classList.add('bg-yellow-400');
            strengthBars[1].classList.add('bg-yellow-400');
            strengthBars[2].classList.add('bg-yellow-400');
            strengthText.textContent = 'Medium';
            strengthText.className = 'text-xs text-yellow-500 mt-1';
        } else {
            // Strong
            strengthBars[0].classList.add('bg-green-400');
            strengthBars[1].classList.add('bg-green-400');
            strengthBars[2].classList.add('bg-green-400');
            strengthBars[3].classList.add('bg-green-400');
            strengthText.textContent = 'Strong';
            strengthText.className = 'text-xs text-green-500 mt-1';
        }
    });

    // Form submission loading state
    document.getElementById('registerForm').addEventListener('submit', function() {
        const submitBtn = document.getElementById('submitBtn');
        const submitText = document.getElementById('submit-text');
        const submitIcon = document.getElementById('submit-icon');
        
        submitBtn.disabled = true;
        submitText.textContent = 'Creating your account...';
        submitIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>';
    });
</script>
@endsection