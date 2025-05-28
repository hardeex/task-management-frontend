<style>
    /* Custom animations */
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }

    @keyframes pulse-glow {
        0%, 100% { box-shadow: 0 0 20px rgba(139, 92, 246, 0.3); }
        50% { box-shadow: 0 0 40px rgba(139, 92, 246, 0.6); }
    }

    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(-50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-float {
        animation: float 6s ease-in-out infinite;
    }

    .animate-pulse-glow {
        animation: pulse-glow 2s ease-in-out infinite;
    }

    .animate-slide-in-left {
        animation: slideInLeft 0.8s ease-out forwards;
    }

    .animate-slide-in-right {
        animation: slideInRight 0.8s ease-out forwards;
    }

    .animate-fade-in-up {
        animation: fadeInUp 0.6s ease-out forwards;
    }

    .benefit-card {
        opacity: 0;
        animation: fadeInUp 0.6s ease-out forwards;
    }

    .benefit-card:nth-child(1) { animation-delay: 0.1s; }
    .benefit-card:nth-child(2) { animation-delay: 0.2s; }
    .benefit-card:nth-child(3) { animation-delay: 0.3s; }
    .benefit-card:nth-child(4) { animation-delay: 0.4s; }
    .benefit-card:nth-child(5) { animation-delay: 0.5s; }
    .benefit-card:nth-child(6) { animation-delay: 0.6s; }

    .stat-card {
        opacity: 0;
        animation: slideInLeft 0.8s ease-out forwards;
    }

    .stat-card:nth-child(1) { animation-delay: 0.2s; }
    .stat-card:nth-child(2) { animation-delay: 0.4s; }
    .stat-card:nth-child(3) { animation-delay: 0.6s; }
    .stat-card:nth-child(4) { animation-delay: 0.8s; }

    .floating-shape {
        position: absolute;
        border-radius: 50%;
        background: linear-gradient(45deg, var(--task-primary-light), var(--task-secondary-light));
        opacity: 0.1;
        animation: float 8s ease-in-out infinite;
    }

    .floating-shape:nth-child(1) {
        width: 100px;
        height: 100px;
        top: 10%;
        left: 10%;
        animation-delay: 0s;
    }

    .floating-shape:nth-child(2) {
        width: 150px;
        height: 150px;
        top: 60%;
        right: 10%;
        animation-delay: 2s;
    }

    .floating-shape:nth-child(3) {
        width: 80px;
        height: 80px;
        bottom: 20%;
        left: 20%;
        animation-delay: 4s;
    }

    .hero-gradient {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }

    .comparison-table {
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(10px);
        border-radius: 1rem;
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .task-card {
        background: white;
        border-radius: 1.5rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }

    .task-icon-purple {
        background: linear-gradient(135deg, #8b5cf6 0%, #6366f1 100%);
    }

    .task-icon-blue {
        background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
    }

    .task-icon-green {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    }

    .task-icon-yellow {
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
    }

    .task-icon-indigo {
        background: linear-gradient(135deg, #6366f1 0%, #4f46e5 100%);
    }

    .task-icon-red {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
    }

    .task-gradient-text {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }
</style>

<div class="bg-gray-50 overflow-x-hidden">
    <!-- Benefits / Why Choose Us Section -->
    <section class="py-16 lg:py-24 relative">
        <!-- Background decorative elements -->
        <div class="floating-shape"></div>
        <div class="floating-shape"></div>
        <div class="floating-shape"></div>
        
        <!-- Hero Section -->
        <div class="hero-gradient py-16 lg:py-20 mb-16 relative overflow-hidden">
            <div class="absolute inset-0 bg-black opacity-20"></div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="text-center text-white">
                    <div class="inline-flex items-center justify-center w-20 h-20 bg-white bg-opacity-20 rounded-full mb-6 animate-pulse-glow">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                        </svg>
                    </div>
                    <h1 class="text-4xl lg:text-6xl font-bold mb-6 animate-fade-in-up">
                        Why Choose <span class="text-yellow-300">TaskFlow</span>?
                    </h1>
                    <p class="text-xl lg:text-2xl text-gray-200 max-w-3xl mx-auto leading-relaxed animate-fade-in-up">
                        Experience the difference with features designed to boost productivity, enhance collaboration, and drive results for teams of all sizes.
                    </p>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Key Benefits Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
                <!-- Benefit 1 -->
                <div class="benefit-card task-card p-8 group hover:scale-105 transition-all duration-300">
                    <div class="task-icon-purple w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:shadow-xl transition-all duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Lightning Fast Setup</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Get started in under 5 minutes. No complex configurations or lengthy onboarding processes. Import your existing data seamlessly.
                    </p>
                    <div class="flex items-center text-purple-600 font-semibold">
                        <span>5x faster than competitors</span>
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </div>
                </div>

                <!-- Benefit 2 -->
                <div class="benefit-card task-card p-8 group hover:scale-105 transition-all duration-300">
                    <div class="task-icon-blue w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:shadow-xl transition-all duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">99.9% Uptime Guarantee</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Your team never stops working. Our enterprise-grade infrastructure ensures maximum reliability with automatic backups and redundancy.
                    </p>
                    <div class="flex items-center text-blue-600 font-semibold">
                        <span>Enterprise-grade security</span>
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>

                <!-- Benefit 3 -->
                <div class="benefit-card task-card p-8 group hover:scale-105 transition-all duration-300">
                    <div class="task-icon-green w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:shadow-xl transition-all duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">24/7 Expert Support</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Our dedicated support team is always ready to help. Get personalized assistance through chat, email, or phone support.
                    </p>
                    <div class="flex items-center text-green-600 font-semibold">
                        <span>Average response: 2 minutes</span>
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>

                <!-- Benefit 4 -->
                <div class="benefit-card task-card p-8 group hover:scale-105 transition-all duration-300">
                    <div class="task-icon-yellow w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:shadow-xl transition-all duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Loved by 50K+ Teams</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Join thousands of satisfied customers who have transformed their workflow. See why teams consistently rate us 5 stars.
                    </p>
                    <div class="flex items-center text-yellow-600 font-semibold">
                        <span>4.9/5 customer rating</span>
                        <div class="ml-2 flex">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Benefit 5 -->
                <div class="benefit-card task-card p-8 group hover:scale-105 transition-all duration-300">
                    <div class="task-icon-indigo w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:shadow-xl transition-all duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Advanced Analytics</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Make data-driven decisions with comprehensive reporting, time tracking, and performance insights that help optimize your workflow.
                    </p>
                    <div class="flex items-center text-indigo-600 font-semibold">
                        <span>20+ reporting templates</span>
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                </div>

                <!-- Benefit 6 -->
                <div class="benefit-card task-card p-8 group hover:scale-105 transition-all duration-300">
                    <div class="task-icon-red w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:shadow-xl transition-all duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Bank-Level Security</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Your data is protected with AES-256 encryption, SOC 2 compliance, and regular security audits. GDPR compliant worldwide.
                    </p>
                    <div class="flex items-center text-red-600 font-semibold">
                        <span>SOC 2 & GDPR compliant</span>
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="bg-white rounded-3xl p-8 lg:p-12 mb-20 shadow-xl">
                <div class="text-center mb-12">
                    <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                        Trusted by Teams <span class="task-gradient-text">Worldwide</span>
                    </h2>
                    <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                        Join the growing community of successful teams who have transformed their productivity with TaskFlow.
                    </p>
                </div>
                
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="stat-card text-center">
                        <div class="text-4xl lg:text-5xl font-bold task-gradient-text mb-2">50K+</div>
                        <p class="text-gray-600 font-medium">Active Teams</p>
                    </div>
                    <div class="stat-card text-center">
                        <div class="text-4xl lg:text-5xl font-bold task-gradient-text mb-2">2M+</div>
                        <p class="text-gray-600 font-medium">Tasks Completed</p>
                    </div>
                    <div class="stat-card text-center">
                        <div class="text-4xl lg:text-5xl font-bold task-gradient-text mb-2">99.9%</div>
                        <p class="text-gray-600 font-medium">Uptime Record</p>
                    </div>
                    <div class="stat-card text-center">
                        <div class="text-4xl lg:text-5xl font-bold task-gradient-text mb-2">4.9★</div>
                        <p class="text-gray-600 font-medium">Customer Rating</p>
                    </div>
                </div>
            </div>

            <!-- Comparison Table -->
            <div class="comparison-table p-8 lg:p-12 mb-20">
                <div class="text-center mb-12">
                    <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                        How We <span class="task-gradient-text">Compare</span>
                    </h2>
                    <p class="text-xl text-gray-600">
                        See why TaskFlow outperforms the competition in every category that matters.
                    </p>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="border-b border-gray-200">
                                <th class="pb-4 text-left font-semibold text-gray-700">Feature</th>
                                <th class="pb-4 text-center font-semibold text-gray-700">TaskFlow</th>
                                <th class="pb-4 text-center font-semibold text-gray-700">Competitor A</th>
                                <th class="pb-4 text-center font-semibold text-gray-700">Competitor B</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr>
                                <td class="py-4 text-left font-medium text-gray-800">Setup Time</td>
                                <td class="py-4 text-center text-green-600 font-bold">5 minutes</td>
                                <td class="py-4 text-center text-gray-500">30+ minutes</td>
                                <td class="py-4 text-center text-gray-500">1 hour+</td>
                            </tr>
                            <tr>
                                <td class="py-4 text-left font-medium text-gray-800">Uptime Guarantee</td>
                                <td class="py-4 text-center text-green-600 font-bold">99.9%</td>
                                <td class="py-4 text-center text-gray-500">99.5%</td>
                                <td class="py-4 text-center text-gray-500">99%</td>
                            </tr>
                            <tr>
                                <td class="py-4 text-left font-medium text-gray-800">Customer Support</td>
                                <td class="py-4 text-center text-green-600 font-bold">24/7 Live Support</td>
                                <td class="py-4 text-center text-gray-500">Business Hours Only</td>
                                <td class="py-4 text-center text-gray-500">Email Only</td>
                            </tr>
                            <tr>
                                <td class="py-4 text-left font-medium text-gray-800">Security Compliance</td>
                                <td class="py-4 text-center text-green-600 font-bold">SOC 2 & GDPR</td>
                                <td class="py-4 text-center text-gray-500">GDPR Only</td>
                                <td class="py-4 text-center text-gray-500">Basic Encryption</td>
                            </tr>
                            <tr>
                                <td class="py-4 text-left font-medium text-gray-800">Integrations</td>
                                <td class="py-4 text-center text-green-600 font-bold">100+</td>
                                <td class="py-4 text-center text-gray-500">50+</td>
                                <td class="py-4 text-center text-gray-500">20+</td>
                            </tr>
                            <tr>
                                <td class="py-4 text-left font-medium text-gray-800">Pricing</td>
                                <td class="py-4 text-center text-green-600 font-bold">$9/user</td>
                                <td class="py-4 text-center text-gray-500">$15/user</td>
                                <td class="py-4 text-center text-gray-500">$12/user</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="text-center mb-20">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                    Ready to Transform Your <span class="task-gradient-text">Workflow</span>?
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto mb-8">
                    Join thousands of teams who have already revolutionized their productivity with TaskFlow.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#" class="px-8 py-4 bg-purple-600 hover:bg-purple-700 text-white font-semibold rounded-lg shadow-lg transition-all duration-300 transform hover:scale-105">
                        Start Free 14-Day Trial
                    </a>
                    <a href="#" class="px-8 py-4 bg-white hover:bg-gray-100 text-purple-600 font-semibold rounded-lg shadow-lg transition-all duration-300 transform hover:scale-105">
                        Schedule Demo
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>