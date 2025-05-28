{{-- Integration Showcase Section --}}
<section class="py-16 px-4 bg-gradient-to-br from-blue-50 to-indigo-100">
    <div class="max-w-6xl mx-auto">
        {{-- Section Header --}}
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Seamless Calendar Integration
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Connect your favorite calendar apps and manage all your tasks in one place. 
                Never miss a deadline again with our powerful synchronization.
            </p>
        </div>

        {{-- Integration Visual --}}
        <div class="relative">
            {{-- Central Task Manager --}}
            <div class="flex justify-center mb-8">
                <div class="bg-white rounded-2xl shadow-xl p-6 border-2 border-indigo-200 relative z-10">
                    {{-- Task Manager Icon --}}
                    <div class="flex items-center justify-center w-16 h-16 bg-indigo-600 rounded-xl mb-4 mx-auto">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 text-center">Your Task Hub</h3>
                </div>
            </div>

            {{-- Integration Cards --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 relative">
                {{-- Sync Lines (Desktop) --}}
                <div class="hidden md:block absolute inset-0 pointer-events-none">
                    {{-- Left Line --}}
                    <div class="absolute top-1/2 left-1/3 w-1/6 h-0.5 bg-gradient-to-r from-indigo-300 to-transparent transform -translate-y-1/2"></div>
                    {{-- Right Line --}}
                    <div class="absolute top-1/2 right-1/3 w-1/6 h-0.5 bg-gradient-to-l from-indigo-300 to-transparent transform -translate-y-1/2"></div>
                </div>

                {{-- Google Calendar --}}
                <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-shadow duration-300 group">
                    <div class="flex items-center justify-center w-12 h-12 bg-red-100 rounded-lg mb-4 group-hover:bg-red-200 transition-colors">
                        <svg class="w-8 h-8 text-red-600" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/>
                        </svg>
                    </div>
                    <h4 class="text-lg font-semibold text-gray-900 mb-2">Google Calendar</h4>
                    <p class="text-gray-600 text-sm mb-4">Sync your tasks with Google Calendar events automatically</p>
                    <div class="flex items-center text-green-600 text-sm font-medium">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Connected
                    </div>
                </div>

                {{-- Outlook --}}
                <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-shadow duration-300 group">
                    <div class="flex items-center justify-center w-12 h-12 bg-blue-100 rounded-lg mb-4 group-hover:bg-blue-200 transition-colors">
                        <svg class="w-8 h-8 text-blue-600" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M7 2v20l-5-5v-10l5-5zm8.5 2c-1.4 0-2.5 1.1-2.5 2.5s1.1 2.5 2.5 2.5 2.5-1.1 2.5-2.5-1.1-2.5-2.5-2.5zm6.5 6v8c0 1.1-.9 2-2 2h-8v-2h8v-6h-6v-2h6zm-12 2v8h-2v-8h2z"/>
                        </svg>
                    </div>
                    <h4 class="text-lg font-semibold text-gray-900 mb-2">Outlook Calendar</h4>
                    <p class="text-gray-600 text-sm mb-4">Seamless integration with Microsoft Outlook scheduling</p>
                    <div class="flex items-center text-green-600 text-sm font-medium">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Connected
                    </div>
                </div>

                {{-- Apple Calendar --}}
                <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-shadow duration-300 group">
                    <div class="flex items-center justify-center w-12 h-12 bg-gray-100 rounded-lg mb-4 group-hover:bg-gray-200 transition-colors">
                        <svg class="w-8 h-8 text-gray-700" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/>
                        </svg>
                    </div>
                    <h4 class="text-lg font-semibold text-gray-900 mb-2">Apple Calendar</h4>
                    <p class="text-gray-600 text-sm mb-4">Perfect sync with your iPhone and Mac calendar apps</p>
                    <div class="flex items-center text-green-600 text-sm font-medium">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Connected
                    </div>
                </div>
            </div>
        </div>

        {{-- Features List --}}
        <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="text-center">
                <div class="flex items-center justify-center w-12 h-12 bg-green-100 rounded-full mb-3 mx-auto">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v18m9-9H3"></path>
                    </svg>
                </div>
                <h5 class="font-semibold text-gray-900 mb-1">Two-Way Sync</h5>
                <p class="text-sm text-gray-600">Updates flow both ways instantly</p>
            </div>

            <div class="text-center">
                <div class="flex items-center justify-center w-12 h-12 bg-purple-100 rounded-full mb-3 mx-auto">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h5 class="font-semibold text-gray-900 mb-1">Real-time Updates</h5>
                <p class="text-sm text-gray-600">Changes sync immediately</p>
            </div>

            <div class="text-center">
                <div class="flex items-center justify-center w-12 h-12 bg-orange-100 rounded-full mb-3 mx-auto">
                    <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5 5v-5zM4 19l5-5 5 5H4z"></path>
                    </svg>
                </div>
                <h5 class="font-semibold text-gray-900 mb-1">Smart Notifications</h5>
                <p class="text-sm text-gray-600">Get reminded across all platforms</p>
            </div>

            <div class="text-center">
                <div class="flex items-center justify-center w-12 h-12 bg-blue-100 rounded-full mb-3 mx-auto">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h5 class="font-semibold text-gray-900 mb-1">One-Click Setup</h5>
                <p class="text-sm text-gray-600">Connect in under 30 seconds</p>
            </div>
        </div>

        {{-- CTA Button --}}
        <div class="text-center mt-12">
            <button class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-8 rounded-lg transition-colors duration-200 shadow-lg hover:shadow-xl">
                Connect Your Calendar Now
            </button>
            <p class="text-sm text-gray-500 mt-2">Free setup • No credit card required</p>
        </div>
    </div>
</section>








<style>
    /* Full-bleed container */
    .full-bleed {
        width: 100%;
        margin: 0;
        padding: 0;
    }
    
    /* Mega Calendar Grid */
    .mega-calendar {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
        gap: 1px;
        background: #e2e8f0;
        border: 1px solid #e2e8f0;
    }
    
    .mega-day {
        aspect-ratio: 1;
        background: white;
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
    }
    
    .mega-day:hover {
        transform: scale(1.05);
        z-index: 10;
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
    
    .time-chunk {
        position: absolute;
        left: 5%;
        right: 5%;
        border-radius: 4px;
    }
    
    /* Productivity Landscape */
    .productivity-landscape {
        display: grid;
        grid-template-columns: repeat(12, 1fr);
        grid-template-rows: repeat(8, 1fr);
        height: 60vh;
        min-height: 500px;
        gap: 2px;
    }
    
    .landscape-cell {
        background: rgba(255,255,255,0.9);
        position: relative;
    }
    
    /* Time River */
    .time-river {
        height: 200px;
        background: linear-gradient(90deg, #f0f4ff 0%, #e0e7ff 100%);
        position: relative;
        overflow: hidden;
    }
    
    .river-wave {
        position: absolute;
        bottom: 0;
        width: 200%;
        height: 100%;
        background: url("data:image/svg+xml,%3Csvg viewBox='0 0 1200 120' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z' fill='%23646ff3' opacity='.25'/%3E%3Cpath d='M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z' fill='%23646ff3' opacity='.5'/%3E%3Cpath d='M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z' fill='%23646ff3'/%3E%3C/svg%3E");
        background-size: 50% 100%;
        animation: river-flow 15s linear infinite;
    }
    
    @keyframes river-flow {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }
    
    /* Peak Performance Visualization */
    .peak-performance {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        height: 40vh;
        min-height: 400px;
        gap: 1px;
        background: #e2e8f0;
    }
    
    .peak-column {
        display: flex;
        flex-direction: column-reverse;
        align-items: stretch;
    }
    
    .peak-block {
        flex: 1;
        min-height: 20px;
        background: white;
        transition: all 0.5s ease;
    }
    
    /* Floating Time Elements */
    .time-orb {
        position: absolute;
        border-radius: 50%;
        opacity: 0.8;
        filter: blur(20px);
        z-index: 0;
    }
</style>

<section class="py-16 bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50 relative overflow-hidden" x-data="taskManager()">
    <!-- Floating Task Elements -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="floating-task absolute top-20 left-10 w-12 h-12 bg-blue-100 rounded-lg opacity-20" style="animation-delay: 0s;"></div>
        <div class="floating-task absolute top-40 right-16 w-8 h-8 bg-purple-100 rounded-full opacity-30" style="animation-delay: 2s;"></div>
        <div class="floating-task absolute bottom-32 left-1/4 w-10 h-10 bg-green-100 rounded-lg opacity-25" style="animation-delay: 4s;"></div>
        <div class="floating-task absolute top-1/3 right-1/3 w-6 h-6 bg-yellow-100 rounded-full opacity-20" style="animation-delay: 1s;"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-12">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-600 rounded-2xl mb-6 shadow-lg">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                </svg>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Task <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Management</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Visualize your productivity, track progress, and achieve your goals with intelligent task management
            </p>
        </div>

        <!-- Stats Overview -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-12">
            <div class="bg-white/70 backdrop-blur-sm rounded-2xl p-6 border border-white/20 shadow-lg hover:shadow-xl transition-all duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-600">Total Tasks</p>
                        <p class="text-3xl font-bold text-gray-900" x-text="stats.total">24</p>
                    </div>
                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-white/70 backdrop-blur-sm rounded-2xl p-6 border border-white/20 shadow-lg hover:shadow-xl transition-all duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-600">Completed</p>
                        <p class="text-3xl font-bold text-green-600" x-text="stats.completed">18</p>
                    </div>
                    <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-white/70 backdrop-blur-sm rounded-2xl p-6 border border-white/20 shadow-lg hover:shadow-xl transition-all duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-600">In Progress</p>
                        <p class="text-3xl font-bold text-blue-600" x-text="stats.inProgress">4</p>
                    </div>
                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-white/70 backdrop-blur-sm rounded-2xl p-6 border border-white/20 shadow-lg hover:shadow-xl transition-all duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-600">Overdue</p>
                        <p class="text-3xl font-bold text-red-600" x-text="stats.overdue">2</p>
                    </div>
                    <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center priority-high">
                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 15.5c-.77.833.192 2.5 1.732 2.5z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Progress Ring and Weekly Chart -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
            <!-- Completion Progress Ring -->
            <div class="bg-white/70 backdrop-blur-sm rounded-2xl p-8 border border-white/20 shadow-lg">
                <h3 class="text-xl font-semibold text-gray-900 mb-6">Overall Progress</h3>
                <div class="flex items-center justify-center">
                    <div class="relative w-48 h-48">
                        <svg class="w-full h-full" viewBox="0 0 100 100">
                            <circle cx="50" cy="50" r="45" stroke="rgb(229, 231, 235)" stroke-width="8" fill="none"/>
                            <circle 
                                cx="50" cy="50" r="45" 
                                stroke="url(#progressGradient)" 
                                stroke-width="8" 
                                fill="none"
                                class="completion-ring animate"
                                style="--completion-percent: 75"
                            />
                            <defs>
                                <linearGradient id="progressGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" stop-color="#3b82f6"/>
                                    <stop offset="100%" stop-color="#8b5cf6"/>
                                </linearGradient>
                            </defs>
                        </svg>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <div class="text-3xl font-bold text-gray-900">75%</div>
                                <div class="text-sm text-gray-600">Complete</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Weekly Progress Chart -->
            {{-- <div class="bg-white/70 backdrop-blur-sm rounded-2xl p-8 border border-white/20 shadow-lg">
                <h3 class="text-xl font-semibold text-gray-900 mb-6">Weekly Progress</h3>
                <div class="flex items-end justify-between h-40 space-x-3">
                    <template x-for="(day, index) in weeklyData" :key="index">
                        <div class="flex flex-col items-center flex-1">
                            <div class="w-full bg-gray-200 rounded-t-lg relative overflow-hidden">
                                <div 
                                    class="chart-bar bg-gradient-to-t from-blue-500 to-purple-600 rounded-t-lg"
                                    :style="`height: ${day.completed}px`"
                                    x-transition:enter="transition-all duration-1000"
                                    x-transition:enter-start="h-0"
                                ></div>
                            </div>
                            <span class="text-xs text-gray-600 mt-2" x-text="day.name"></span>
                        </div>
                    </template>
                </div>
            </div> --}}
            <div class="bg-white/70 backdrop-blur-sm rounded-2xl p-8 border border-white/20 shadow-lg">
    <h3 class="text-xl font-semibold text-gray-900 mb-6">Weekly Progress</h3>
    
    <div class="flex items-end justify-between h-40 space-x-3" id="weekly-chart">
        <!-- Bars will be inserted here dynamically -->
    </div>
</div>

        </div>

        <!-- Kanban Board Preview -->
        <div class="bg-white/70 backdrop-blur-sm rounded-2xl p-8 border border-white/20 shadow-lg mb-12">
            <h3 class="text-xl font-semibold text-gray-900 mb-6">Task Board</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- To Do Column -->
                <div class="kanban-column bg-gray-50/50 rounded-xl p-4">
                    <div class="flex items-center justify-between mb-4">
                        <h4 class="font-medium text-gray-700">To Do</h4>
                        <span class="bg-gray-200 text-gray-700 text-xs px-2 py-1 rounded-full">3</span>
                    </div>
                    <div class="space-y-3">
                        <div class="task-card bg-white rounded-lg p-4 border border-gray-200 cursor-pointer">
                            <div class="flex items-start justify-between">
                                <div class="flex-1">
                                    <h5 class="font-medium text-gray-900 text-sm">Design new dashboard</h5>
                                    <p class="text-xs text-gray-600 mt-1">Create wireframes and mockups</p>
                                </div>
                                <span class="bg-red-100 text-red-700 text-xs px-2 py-1 rounded-full">High</span>
                            </div>
                            <div class="mt-3">
                                <div class="progress-bar bg-gray-200 rounded-full h-2">
                                    <div class="progress-fill bg-red-500" style="--progress-width: 20%; width: 20%;"></div>
                                </div>
                            </div>
                        </div>

                        <div class="task-card bg-white rounded-lg p-4 border border-gray-200 cursor-pointer">
                            <div class="flex items-start justify-between">
                                <div class="flex-1">
                                    <h5 class="font-medium text-gray-900 text-sm">Update documentation</h5>
                                    <p class="text-xs text-gray-600 mt-1">API endpoints and examples</p>
                                </div>
                                <span class="bg-yellow-100 text-yellow-700 text-xs px-2 py-1 rounded-full">Med</span>
                            </div>
                            <div class="mt-3">
                                <div class="progress-bar bg-gray-200 rounded-full h-2">
                                    <div class="progress-fill bg-yellow-500" style="--progress-width: 0%; width: 0%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- In Progress Column -->
                <div class="kanban-column bg-blue-50/50 rounded-xl p-4">
                    <div class="flex items-center justify-between mb-4">
                        <h4 class="font-medium text-gray-700">In Progress</h4>
                        <span class="bg-blue-200 text-blue-700 text-xs px-2 py-1 rounded-full">2</span>
                    </div>
                    <div class="space-y-3">
                        <div class="task-card bg-white rounded-lg p-4 border border-blue-200 cursor-pointer timer-active">
                            <div class="flex items-start justify-between">
                                <div class="flex-1">
                                    <h5 class="font-medium text-gray-900 text-sm">Build user authentication</h5>
                                    <p class="text-xs text-gray-600 mt-1">Laravel Sanctum integration</p>
                                </div>
                                <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full">High</span>
                            </div>
                            <div class="mt-3">
                                <div class="progress-bar bg-gray-200 rounded-full h-2">
                                    <div class="progress-fill bg-blue-500" style="--progress-width: 65%; width: 65%;"></div>
                                </div>
                            </div>
                            <div class="flex items-center mt-2 text-xs text-blue-600">
                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                                </svg>
                                2h 15m active
                            </div>
                        </div>

                        <div class="task-card bg-white rounded-lg p-4 border border-blue-200 cursor-pointer">
                            <div class="flex items-start justify-between">
                                <div class="flex-1">
                                    <h5 class="font-medium text-gray-900 text-sm">Code review</h5>
                                    <p class="text-xs text-gray-600 mt-1">Review pull requests</p>
                                </div>
                                <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full">Low</span>
                            </div>
                            <div class="mt-3">
                                <div class="progress-bar bg-gray-200 rounded-full h-2">
                                    <div class="progress-fill bg-green-500" style="--progress-width: 40%; width: 40%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Done Column -->
                <div class="kanban-column bg-green-50/50 rounded-xl p-4">
                    <div class="flex items-center justify-between mb-4">
                        <h4 class="font-medium text-gray-700">Done</h4>
                        <span class="bg-green-200 text-green-700 text-xs px-2 py-1 rounded-full">5</span>
                    </div>
                    <div class="space-y-3">
                        <div class="task-card bg-white rounded-lg p-4 border border-green-200 cursor-pointer completed">
                            <div class="flex items-start justify-between">
                                <div class="flex-1">
                                    <h5 class="font-medium text-gray-900 text-sm line-through">Setup project structure</h5>
                                    <p class="text-xs text-gray-600 mt-1">Laravel 10 with Tailwind</p>
                                </div>
                                <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="mt-3">
                                <div class="progress-bar bg-gray-200 rounded-full h-2">
                                    <div class="progress-fill bg-green-500" style="--progress-width: 100%; width: 100%;"></div>
                                </div>
                            </div>
                        </div>

                        <div class="task-card bg-white rounded-lg p-4 border border-green-200 cursor-pointer completed">
                            <div class="flex items-start justify-between">
                                <div class="flex-1">
                                    <h5 class="font-medium text-gray-900 text-sm line-through">Database migration</h5>
                                    <p class="text-xs text-gray-600 mt-1">Users and tasks tables</p>
                                </div>
                                <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="mt-3">
                                <div class="progress-bar bg-gray-200 rounded-full h-2">
                                    <div class="progress-fill bg-green-500" style="--progress-width: 100%; width: 100%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="text-center">
            <button class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-xl hover:from-blue-700 hover:to-purple-700 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                Create New Task
            </button>
        </div>
    </div>
</section>
<script>
    const weeklyData = [
        { name: 'Mon', completed: 40 },
        { name: 'Tue', completed: 60 },
        { name: 'Wed', completed: 80 },
        { name: 'Thu', completed: 50 },
        { name: 'Fri', completed: 90 },
        { name: 'Sat', completed: 70 },
        { name: 'Sun', completed: 30 },
    ];

    const chartContainer = document.getElementById("weekly-chart");

    weeklyData.forEach(day => {
        const column = document.createElement("div");
        column.className = "flex flex-col items-center flex-1";

        column.innerHTML = `
            <div class="w-full bg-gray-200 rounded-t-lg relative overflow-hidden h-full">
                <div class="chart-bar bg-gradient-to-t from-blue-500 to-purple-600 rounded-t-lg transition-all duration-700"
                    style="height: 0;">
                </div>
            </div>
            <span class="text-xs text-gray-600 mt-2">${day.name}</span>
        `;

        chartContainer.appendChild(column);

        // Animate the bar height after insertion
        setTimeout(() => {
            column.querySelector(".chart-bar").style.height = `${day.completed}px`;
        }, 50);
    });
</script>

<script>
    function taskManager() {
        return {
            stats: {
                total: 24,
                completed: 18,
                inProgress: 4,
                overdue: 2
            },
            weeklyData: [
                { name: 'Mon', completed: 120 },
                { name: 'Tue', completed: 100 },
                { name: 'Wed', completed: 140 },
                { name: 'Thu', completed: 80 },
                { name: 'Fri', completed: 160 },
                { name: 'Sat', completed: 60 },
                { name: 'Sun', completed: 90 }
            ],
            
            init() {
                // Animate progress rings on load
                setTimeout(() => {
                    const rings = document.querySelectorAll('.completion-ring');
                    rings.forEach(ring => ring.classList.add('animate'));
                }, 500);

                // Simulate real-time updates
                setInterval(() => {
                    this.updateStats();
                }, 10000);
            },

            updateStats() {
                // Simulate task completion
                if (Math.random() > 0.7) {
                    this.stats.completed++;
                    this.stats.inProgress--;
                }
            }
        }
    }

    // Initialize animations when DOM is loaded
    document.addEventListener('DOMContentLoaded', function() {
        // Stagger animation of chart bars
        const bars = document.querySelectorAll('.chart-bar');
        bars.forEach((bar, index) => {
            setTimeout(() => {
                bar.style.opacity = '1';
                bar.style.transform = 'scaleY(1)';
            }, index * 200);
        });

        // Add hover effects to task cards
        const taskCards = document.querySelectorAll('.task-card');
        taskCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-4px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });
    });
</script>
