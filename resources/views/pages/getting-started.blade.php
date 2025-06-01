@extends('components.base')
@section('title', 'Getting Started ')


@section('content')


<div class="min-h-screen bg-gradient-to-br from-gray-50 via-white to-purple-50">
    <!-- Hero Section -->
    <section class="relative overflow-hidden">
        <!-- Background Decorations -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-40 -right-32 w-80 h-80 bg-purple-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse"></div>
            <div class="absolute -bottom-40 -left-32 w-80 h-80 bg-blue-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse delay-1000"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20 pb-16">
            <div class="text-center">
                <!-- Badge -->
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-gradient-to-r from-purple-500 to-blue-500 text-white text-sm font-medium mb-8 shadow-lg transform hover:scale-105 transition-transform duration-200">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                    </svg>
                    Welcome to TaskFlow
                </div>

                <!-- Main Title -->
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-gray-900 mb-6 leading-tight">
                    Organize Your
                    <span class="bg-gradient-to-r from-purple-600 to-blue-600 bg-clip-text text-transparent">
                        Tasks Like a Pro
                    </span>
                </h1>

                <!-- Subtitle -->
                <p class="text-xl md:text-2xl text-gray-600 mb-12 max-w-3xl mx-auto leading-relaxed">
                    Get started in minutes and transform the way you manage tasks, collaborate with teams, and achieve your goals.
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="{{route('register')}}" class="bg-gradient-to-r from-purple-600 to-blue-600 text-white px-8 py-4 rounded-full font-semibold text-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-200 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Register
                    </a>
                    <a href="{{route('create-task')}}" class="border-2 border-gray-300 text-gray-700 px-8 py-4 rounded-full font-semibold text-lg hover:border-purple-600 hover:text-purple-600 transition-all duration-200">
                        Create Your First Task
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Getting Started Steps -->
    <section class="py-20 bg-white/80 backdrop-blur-sm">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Get Started in 3 Easy Steps
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Follow these quick steps to set up your workspace and start managing tasks efficiently
                </p>
            </div>

            <!-- Steps Grid -->
            <div class="grid md:grid-cols-3 gap-8 mb-16">
                <!-- Step 1 -->
                <div class="relative">
                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100">
                        <div class="absolute -top-4 left-8">
                            <div class="w-8 h-8 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center text-white font-bold text-sm">1</div>
                        </div>
                        <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Create Your Profile</h3>
                        <p class="text-gray-600 mb-4">Set up your account with basic information and preferences to personalize your task management experience.</p>
                        <a href="{{route('profile')}}" class="text-purple-600 font-semibold hover:text-purple-700 transition-colors">
                            Start Setup →
                        </a>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="relative">
                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100">
                        <div class="absolute -top-4 left-8">
                            <div class="w-8 h-8 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full flex items-center justify-center text-white font-bold text-sm">2</div>
                        </div>
                        <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Create Your Workspace</h3>
                        <p class="text-gray-600 mb-4">Set up projects, categories, and invite team members to collaborate on tasks and track progress together.</p>
                        <a href="{{route('workspace')}}" class="text-blue-600 font-semibold hover:text-blue-700 transition-colors">
                            Build Workspace →
                        </a>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="relative">
                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100">
                        <div class="absolute -top-4 left-8">
                            <div class="w-8 h-8 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full flex items-center justify-center text-white font-bold text-sm">3</div>
                        </div>
                        <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-emerald-500 rounded-2xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Add Your First Tasks</h3>
                        <p class="text-gray-600 mb-4">Start creating tasks, set priorities, deadlines, and organize them to boost your productivity from day one.</p>
                        <a href="{{route('create-task')}}" class="text-green-600 font-semibold hover:text-green-700 transition-colors">
                            Create Tasks →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Preview -->
    <section class="py-20 bg-gradient-to-r from-purple-600 to-blue-600">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                    Powerful Features at Your Fingertips
                </h2>
                <p class="text-xl text-purple-100 max-w-2xl mx-auto">
                    Discover the tools that will revolutionize your task management workflow
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Feature 1 -->
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 text-center hover:bg-white/20 transition-all duration-300">
                    <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Smart Prioritization</h3>
                    <p class="text-purple-100 text-sm">AI-powered task sorting and priority recommendations</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 text-center hover:bg-white/20 transition-all duration-300">
                    <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Team Collaboration</h3>
                    <p class="text-purple-100 text-sm">Real-time collaboration with team members</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 text-center hover:bg-white/20 transition-all duration-300">
                    <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Progress Analytics</h3>
                    <p class="text-purple-100 text-sm">Detailed insights and productivity reports</p>
                </div>

                <!-- Feature 4 -->
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 text-center hover:bg-white/20 transition-all duration-300">
                    <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5 5-5-5h5v-5a7.81 7.81 0 01-.5-2.8A7.81 7.81 0 0112 2a7.81 7.81 0 012.5 6.2A7.81 7.81 0 0114 11v6z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Smart Reminders</h3>
                    <p class="text-purple-100 text-sm">Never miss a deadline with intelligent notifications</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Actions -->
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                Ready to Boost Your Productivity?
            </h2>
            <p class="text-xl text-gray-600 mb-12 max-w-2xl mx-auto">
                Join thousands of users who have transformed their task management with our powerful platform
            </p>
            
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                <!-- Quick Action 1 -->
                <a href="{{route('create-task')}}" class="bg-gradient-to-br from-purple-50 to-blue-50 rounded-xl p-6 border border-purple-100 hover:border-purple-200 transition-all duration-300 cursor-pointer group">
                    <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-blue-500 rounded-lg flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-200">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Create Task</h3>
                    <p class="text-gray-600 text-sm">Start with your first task</p>
                </a>

                <!-- Quick Action 2 -->
                <a href="{{route('workspace')}}" class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl p-6 border border-green-100 hover:border-green-200 transition-all duration-300 cursor-pointer group">
                    <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-500 rounded-lg flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-200">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Setup Project</h3>
                    <p class="text-gray-600 text-sm">Organize tasks by project</p>
                </a>

                <!-- Quick Action 3 -->
                <a href="{{route('invite-team')}}" class="bg-gradient-to-br from-orange-50 to-red-50 rounded-xl p-6 border border-orange-100 hover:border-orange-200 transition-all duration-300 cursor-pointer group sm:col-span-2 lg:col-span-1">
                    <div class="w-12 h-12 bg-gradient-to-r from-orange-500 to-red-500 rounded-lg flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-200">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Invite Team</h3>
                    <p class="text-gray-600 text-sm">Collaborate with others</p>
                </a>
            </div>

            <!-- Final CTA -->
            <div class="bg-gradient-to-r from-purple-600 to-blue-600 rounded-2xl p-8 text-white">
                <h3 class="text-2xl font-bold mb-4">Everything Set Up?</h3>
                <p class="text-purple-100 mb-6">You're all ready to start managing your tasks like a pro!</p>
                <a href="{{route('dashboard')}}" class="bg-white text-purple-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition-colors duration-200 inline-flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    Go to Dashboard
                </a>
            </div>
        </div>
    </section>
</div>



<script>
    // Add smooth scrolling and interactive elements
    document.addEventListener('DOMContentLoaded', function() {
        // Animate cards on scroll
        const cards = document.querySelectorAll('.group');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        });

        cards.forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(card);
        });
    });
</script>

    
@endsection