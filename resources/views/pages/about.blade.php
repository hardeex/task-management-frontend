@extends('components.base')
@section('title', 'About')

@section('content')

<div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100">
    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-gradient-to-br from-blue-600 via-purple-600 to-purple-700 text-white py-20">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                About <span class="bg-gradient-to-r from-white to-purple-200 bg-clip-text text-transparent">Our Company</span>
            </h1>
            <p class="text-xl md:text-2xl max-w-3xl mx-auto text-purple-100 leading-relaxed">
                Innovating the future through cutting-edge technology and passionate dedication to excellence
            </p>
        </div>
        <!-- Decorative Elements -->
        <div class="absolute top-10 left-10 w-20 h-20 bg-white opacity-10 rounded-full blur-xl"></div>
        <div class="absolute bottom-10 right-10 w-32 h-32 bg-purple-300 opacity-20 rounded-full blur-2xl"></div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="py-16 lg:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16">
                <!-- Mission -->
                <div class="bg-white rounded-2xl p-8 lg:p-12 shadow-lg hover:shadow-xl transition-all duration-300 border-l-4 border-purple-600">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h2 class="text-3xl font-bold text-gray-800">Our Mission</h2>
                    </div>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        To empower businesses and individuals through innovative technology solutions that simplify complex challenges and drive meaningful growth. We believe in creating tools that not only meet today's needs but anticipate tomorrow's opportunities.
                    </p>
                </div>

                <!-- Vision -->
                <div class="bg-white rounded-2xl p-8 lg:p-12 shadow-lg hover:shadow-xl transition-all duration-300 border-l-4 border-blue-500">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-cyan-400 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </div>
                        <h2 class="text-3xl font-bold text-gray-800">Our Vision</h2>
                    </div>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        To be the leading catalyst for digital transformation, recognized globally for our commitment to innovation, quality, and customer success. We envision a world where technology seamlessly enhances human potential.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-16 lg:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Our Core Values</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    The principles that guide our decisions and shape our culture
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Innovation -->
                <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center mb-6 mx-auto">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 text-center mb-4">Innovation</h3>
                    <p class="text-gray-600 text-center leading-relaxed">
                        We constantly push boundaries and explore new possibilities to deliver groundbreaking solutions.
                    </p>
                </div>

                <!-- Quality -->
                <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-cyan-400 rounded-2xl flex items-center justify-center mb-6 mx-auto">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 text-center mb-4">Quality</h3>
                    <p class="text-gray-600 text-center leading-relaxed">
                        Excellence is our standard. We deliver products and services that exceed expectations every time.
                    </p>
                </div>

                <!-- Collaboration -->
                <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-emerald-400 rounded-2xl flex items-center justify-center mb-6 mx-auto">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 text-center mb-4">Collaboration</h3>
                    <p class="text-gray-600 text-center leading-relaxed">
                        We believe in the power of teamwork and building strong partnerships with our clients.
                    </p>
                </div>

                <!-- Integrity -->
                <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gradient-to-r from-yellow-500 to-orange-400 rounded-2xl flex items-center justify-center mb-6 mx-auto">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 text-center mb-4">Integrity</h3>
                    <p class="text-gray-600 text-center leading-relaxed">
                        Honesty and transparency form the foundation of all our relationships and business practices.
                    </p>
                </div>

                <!-- Customer Focus -->
                <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gradient-to-r from-red-500 to-pink-500 rounded-2xl flex items-center justify-center mb-6 mx-auto">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 text-center mb-4">Customer Focus</h3>
                    <p class="text-gray-600 text-center leading-relaxed">
                        Our customers' success is our success. We prioritize their needs in everything we do.
                    </p>
                </div>

                <!-- Growth -->
                <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-2xl flex items-center justify-center mb-6 mx-auto">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 text-center mb-4">Continuous Growth</h3>
                    <p class="text-gray-600 text-center leading-relaxed">
                        We embrace learning and evolution, constantly improving ourselves and our solutions.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-16 lg:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Meet Our Team</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    The talented individuals behind our success
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Team Member 1 -->
                <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 text-center">
                    <div class="w-24 h-24 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full mx-auto mb-6 flex items-center justify-center">
                        <span class="text-white text-2xl font-bold">JD</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">John Doe</h3>
                    <p class="text-purple-600 font-semibold mb-3">CEO & Founder</p>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Visionary leader with 15+ years of experience in technology and business development.
                    </p>
                </div>

                <!-- Team Member 2 -->
                <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 text-center">
                    <div class="w-24 h-24 bg-gradient-to-r from-blue-500 to-cyan-400 rounded-full mx-auto mb-6 flex items-center justify-center">
                        <span class="text-white text-2xl font-bold">JS</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Jane Smith</h3>
                    <p class="text-blue-600 font-semibold mb-3">CTO</p>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Technical expert passionate about building scalable solutions and leading innovative projects.
                    </p>
                </div>

                <!-- Team Member 3 -->
                <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 text-center">
                    <div class="w-24 h-24 bg-gradient-to-r from-green-500 to-emerald-400 rounded-full mx-auto mb-6 flex items-center justify-center">
                        <span class="text-white text-2xl font-bold">MJ</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Mike Johnson</h3>
                    <p class="text-green-600 font-semibold mb-3">Head of Design</p>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Creative designer focused on user experience and creating beautiful, functional interfaces.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 lg:py-24 bg-gradient-to-r from-blue-600 via-purple-600 to-purple-700 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold mb-4">Our Impact</h2>
                <p class="text-xl text-purple-100">Numbers that tell our story</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-4xl lg:text-5xl font-bold mb-2">500+</div>
                    <div class="text-purple-200 font-semibold">Projects Completed</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl lg:text-5xl font-bold mb-2">50+</div>
                    <div class="text-purple-200 font-semibold">Happy Clients</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl lg:text-5xl font-bold mb-2">5+</div>
                    <div class="text-purple-200 font-semibold">Years Experience</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl lg:text-5xl font-bold mb-2">24/7</div>
                    <div class="text-purple-200 font-semibold">Support Available</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 lg:py-24 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-6">Ready to Work Together?</h2>
            <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
                Let's discuss how we can help bring your vision to life with our expertise and dedication.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#" class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-8 py-4 rounded-full font-semibold hover:from-blue-700 hover:to-purple-700 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl">
                    Get In Touch
                </a>
                <a href="#" class="border-2 border-purple-600 text-purple-600 px-8 py-4 rounded-full font-semibold hover:bg-purple-600 hover:text-white transition-all duration-200">
                    Our Services
                </a>
            </div>
        </div>
    </section>
</div>


@endsection