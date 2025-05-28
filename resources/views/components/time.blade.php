{{-- Visual Time Management Showcase --}}
<section class="py-20 px-4 bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 overflow-hidden">
    <div class="max-w-7xl mx-auto">
        {{-- Minimal Header --}}
        {{-- <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Master Your Time</h2>
        </div> --}}

        {{-- Main Visual Grid --}}
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4 md:gap-6 mb-12">
            
            {{-- Large Calendar Widget --}}
            <div class="col-span-2 row-span-2 bg-white rounded-2xl shadow-xl p-6 hover:shadow-2xl transition-all duration-300 hover:scale-105">
                <div class="flex justify-between items-center mb-4">
                   <h3 id="dateHeading" class="font-semibold text-gray-800"></h3>
                    <div class="flex space-x-1">
                        <div class="w-2 h-2 bg-red-400 rounded-full"></div>
                        <div class="w-2 h-2 bg-yellow-400 rounded-full"></div>
                        <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                    </div>
                </div>
                <div class="grid grid-cols-7 gap-1 text-xs text-gray-500 mb-2">
                    <div class="text-center py-1">S</div>
                    <div class="text-center py-1">M</div>
                    <div class="text-center py-1">T</div>
                    <div class="text-center py-1">W</div>
                    <div class="text-center py-1">T</div>
                    <div class="text-center py-1">F</div>
                    <div class="text-center py-1">S</div>
                </div>
                <div class="grid grid-cols-7 gap-1 text-sm">
                    <div class="text-center py-2 text-gray-400">25</div>
                    <div class="text-center py-2 text-gray-400">26</div>
                    <div class="text-center py-2 text-gray-400">27</div>
                    <div class="text-center py-2 text-gray-400">28</div>
                    <div class="text-center py-2">1</div>
                    <div class="text-center py-2">2</div>
                    <div class="text-center py-2">3</div>
                    <div class="text-center py-2">4</div>
                    <div class="text-center py-2 bg-blue-100 rounded-md text-blue-700 font-medium">5</div>
                    <div class="text-center py-2">6</div>
                    <div class="text-center py-2 bg-green-100 rounded-md text-green-700">7</div>
                    <div class="text-center py-2">8</div>
                    <div class="text-center py-2">9</div>
                    <div class="text-center py-2">10</div>
                    <div class="text-center py-2">11</div>
                    <div class="text-center py-2 bg-purple-100 rounded-md text-purple-700">12</div>
                    <div class="text-center py-2">13</div>
                    <div class="text-center py-2">14</div>
                    <div class="text-center py-2 bg-red-100 rounded-md text-red-700">15</div>
                    <div class="text-center py-2">16</div>
                    <div class="text-center py-2">17</div>
                    <div class="text-center py-2 bg-yellow-100 rounded-md text-yellow-700">18</div>
                    <div class="text-center py-2">19</div>
                    <div class="text-center py-2 bg-indigo-500 rounded-md text-white font-bold">20</div>
                    <div class="text-center py-2">21</div>
                    <div class="text-center py-2">22</div>
                    <div class="text-center py-2 bg-pink-100 rounded-md text-pink-700">23</div>
                    <div class="text-center py-2">24</div>
                    <div class="text-center py-2">25</div>
                    <div class="text-center py-2">26</div>
                    <div class="text-center py-2">27</div>
                    <div class="text-center py-2">28</div>
                    <div class="text-center py-2">29</div>
                    <div class="text-center py-2">30</div>
                    <div class="text-center py-2">31</div>
                </div>
            </div>

            {{-- Clock Widget --}}
            <div class="bg-white rounded-xl shadow-lg p-4 hover:shadow-xl transition-all duration-300 hover:scale-105">
                <svg class="w-full h-24" viewBox="0 0 100 100">
                    <circle cx="50" cy="50" r="45" fill="none" stroke="#e5e7eb" stroke-width="2"/>
                    <circle cx="50" cy="50" r="35" fill="none" stroke="#3b82f6" stroke-width="1" stroke-dasharray="5,5"/>
                    <line x1="50" y1="50" x2="50" y2="25" stroke="#1f2937" stroke-width="3" stroke-linecap="round"/>
                    <line x1="50" y1="50" x2="70" y2="50" stroke="#1f2937" stroke-width="2" stroke-linecap="round"/>
                    <circle cx="50" cy="50" r="3" fill="#1f2937"/>
                    <text x="50" y="15" text-anchor="middle" class="text-xs fill-gray-600">12</text>
                    <text x="85" y="55" text-anchor="middle" class="text-xs fill-gray-600">3</text>
                    <text x="50" y="90" text-anchor="middle" class="text-xs fill-gray-600">6</text>
                    <text x="15" y="55" text-anchor="middle" class="text-xs fill-gray-600">9</text>
                </svg>
            </div>

            {{-- Progress Ring --}}
            <div class="bg-white rounded-xl shadow-lg p-4 hover:shadow-xl transition-all duration-300 hover:scale-105 flex items-center justify-center">
                <svg class="w-20 h-20" viewBox="0 0 42 42">
                    <circle cx="21" cy="21" r="15.915" fill="transparent" stroke="#e5e7eb" stroke-width="2"/>
                    <circle cx="21" cy="21" r="15.915" fill="transparent" stroke="#10b981" stroke-width="2" 
                            stroke-dasharray="75 25" stroke-dashoffset="25" transform="rotate(-90 21 21)"/>
                    <text x="21" y="25" text-anchor="middle" class="text-sm font-bold fill-gray-700">75%</text>
                </svg>
            </div>

            {{-- Task List Mini --}}
            <div class="bg-white rounded-xl shadow-lg p-4 hover:shadow-xl transition-all duration-300 hover:scale-105">
                <div class="space-y-2">
                    <div class="flex items-center space-x-2">
                        <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                        <div class="h-2 bg-gray-200 rounded flex-1"></div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-3 h-3 bg-blue-500 rounded-full"></div>
                        <div class="h-2 bg-gray-200 rounded flex-1"></div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                        <div class="h-2 bg-gray-200 rounded flex-1"></div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-3 h-3 border-2 border-gray-300 rounded-full"></div>
                        <div class="h-2 bg-gray-100 rounded flex-1"></div>
                    </div>
                </div>
            </div>

            {{-- Timeline Widget --}}
            <div class="col-span-2 bg-white rounded-xl shadow-lg p-4 hover:shadow-xl transition-all duration-300 hover:scale-105">
                <div class="flex items-center justify-between mb-3">
                    <div class="text-sm font-medium text-gray-700">Today</div>
                    <div class="text-xs text-gray-500">9:00 AM - 6:00 PM</div>
                </div>
                <div class="space-y-2">
                    <div class="flex items-center space-x-3">
                        <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                        <div class="h-3 bg-red-100 rounded flex-1"></div>
                        <div class="text-xs text-gray-500">9:00</div>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                        <div class="h-3 bg-blue-100 rounded flex-1 mr-8"></div>
                        <div class="text-xs text-gray-500">11:00</div>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                        <div class="h-3 bg-green-100 rounded flex-1 mr-16"></div>
                        <div class="text-xs text-gray-500">2:00</div>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                        <div class="h-3 bg-purple-100 rounded flex-1 mr-4"></div>
                        <div class="text-xs text-gray-500">4:30</div>
                    </div>
                </div>
            </div>

            {{-- Stats Donut --}}
            <div class="bg-white rounded-xl shadow-lg p-4 hover:shadow-xl transition-all duration-300 hover:scale-105 flex items-center justify-center">
                <svg class="w-24 h-24" viewBox="0 0 42 42">
                    <circle cx="21" cy="21" r="15.915" fill="transparent" stroke="#f3f4f6" stroke-width="4"/>
                    <circle cx="21" cy="21" r="15.915" fill="transparent" stroke="#ef4444" stroke-width="4" 
                            stroke-dasharray="25 75" stroke-dashoffset="25" transform="rotate(-90 21 21)"/>
                    <circle cx="21" cy="21" r="15.915" fill="transparent" stroke="#3b82f6" stroke-width="4" 
                            stroke-dasharray="35 65" stroke-dashoffset="-50" transform="rotate(-90 21 21)"/>
                    <circle cx="21" cy="21" r="15.915" fill="transparent" stroke="#10b981" stroke-width="4" 
                            stroke-dasharray="40 60" stroke-dashoffset="-85" transform="rotate(-90 21 21)"/>
                </svg>
            </div>

            {{-- Weekly View --}}
            <div class="bg-white rounded-xl shadow-lg p-4 hover:shadow-xl transition-all duration-300 hover:scale-105">
                <div class="grid grid-cols-7 gap-1">
                    <div class="text-center text-xs text-gray-500 mb-2">M</div>
                    <div class="text-center text-xs text-gray-500 mb-2">T</div>
                    <div class="text-center text-xs text-gray-500 mb-2">W</div>
                    <div class="text-center text-xs text-gray-500 mb-2">T</div>
                    <div class="text-center text-xs text-gray-500 mb-2">F</div>
                    <div class="text-center text-xs text-gray-500 mb-2">S</div>
                    <div class="text-center text-xs text-gray-500 mb-2">S</div>
                    
                    <div class="h-8 bg-blue-200 rounded-sm"></div>
                    <div class="h-12 bg-green-200 rounded-sm"></div>
                    <div class="h-6 bg-yellow-200 rounded-sm"></div>
                    <div class="h-10 bg-purple-200 rounded-sm"></div>
                    <div class="h-8 bg-red-200 rounded-sm"></div>
                    <div class="h-4 bg-pink-200 rounded-sm"></div>
                    <div class="h-2 bg-gray-200 rounded-sm"></div>
                </div>
            </div>

            {{-- Productivity Meter --}}
            <div class="bg-white rounded-xl shadow-lg p-4 hover:shadow-xl transition-all duration-300 hover:scale-105 flex flex-col items-center justify-center">
                <div class="relative w-16 h-8 mb-2">
                    <div class="absolute inset-0 bg-gray-200 rounded-full"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-red-400 via-yellow-400 to-green-400 rounded-full" style="width: 85%"></div>
                    <div class="absolute right-0 top-1/2 transform -translate-y-1/2 w-3 h-3 bg-white border-2 border-green-500 rounded-full shadow"></div>
                </div>
                <div class="text-xs font-medium text-gray-700">85%</div>
            </div>

            {{-- Mini Calendar Grid --}}
            <div class="bg-white rounded-xl shadow-lg p-3 hover:shadow-xl transition-all duration-300 hover:scale-105">
                <div class="grid grid-cols-4 gap-1">
                    <div class="aspect-square bg-blue-100 rounded text-xs flex items-center justify-center text-blue-700">1</div>
                    <div class="aspect-square bg-gray-50 rounded text-xs flex items-center justify-center">2</div>
                    <div class="aspect-square bg-green-100 rounded text-xs flex items-center justify-center text-green-700">3</div>
                    <div class="aspect-square bg-gray-50 rounded text-xs flex items-center justify-center">4</div>
                    <div class="aspect-square bg-yellow-100 rounded text-xs flex items-center justify-center text-yellow-700">5</div>
                    <div class="aspect-square bg-gray-50 rounded text-xs flex items-center justify-center">6</div>
                    <div class="aspect-square bg-purple-100 rounded text-xs flex items-center justify-center text-purple-700">7</div>
                    <div class="aspect-square bg-red-100 rounded text-xs flex items-center justify-center text-red-700">8</div>
                </div>
            </div>

            {{-- Focus Timer --}}
            <div class="bg-white rounded-xl shadow-lg p-4 hover:shadow-xl transition-all duration-300 hover:scale-105 flex items-center justify-center">
                <div class="relative">
                    <svg class="w-16 h-16 transform -rotate-90" viewBox="0 0 32 32">
                        <circle cx="16" cy="16" r="14" fill="none" stroke="#e5e7eb" stroke-width="2"/>
                        <circle cx="16" cy="16" r="14" fill="none" stroke="#f59e0b" stroke-width="2" 
                                stroke-dasharray="60 40" stroke-linecap="round"/>
                    </svg>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-xs font-bold text-gray-700">25:00</div>
                    </div>
                </div>
            </div>

        </div>

        {{-- Floating Elements --}}
        <div class="relative">
            {{-- Animated Checkmarks --}}
            <div class="absolute -top-8 left-1/4 animate-bounce">
                <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center shadow-lg">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
            </div>
            
            <div class="absolute -top-4 right-1/3 animate-bounce" style="animation-delay: 0.5s;">
                <div class="w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center shadow-lg">
                    <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
            </div>

            <div class="absolute -top-6 right-1/4 animate-bounce" style="animation-delay: 1s;">
                <div class="w-7 h-7 bg-purple-500 rounded-full flex items-center justify-center shadow-lg">
                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
            </div>
        </div>

        {{-- Bottom Visual Elements --}}
        <div class="flex justify-center items-center space-x-8 mt-16">
            <div class="w-16 h-1 bg-gradient-to-r from-blue-400 to-purple-400 rounded-full"></div>
            <div class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full flex items-center justify-center shadow-xl">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
            </div>
            <div class="w-16 h-1 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full"></div>
        </div>
    </div>

    <script>
  const dateHeading = document.getElementById("dateHeading");
  const now = new Date();
  const options = { year: 'numeric', month: 'long' }; // e.g., "May 2025"
  dateHeading.textContent = now.toLocaleDateString(undefined, options);
</script>

</section>
