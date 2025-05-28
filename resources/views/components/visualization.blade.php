<section class="py-8 bg-gradient-to-br from-slate-50 to-indigo-50 relative overflow-hidden">
    <!-- Floating Elements -->
    <div style="position: absolute; top: 20px; left: 20px; width: 60px; height: 60px; background: rgba(99, 102, 241, 0.1); border-radius: 50%; animation: float 4s ease-in-out infinite;"></div>
    <div style="position: absolute; bottom: 30px; right: 30px; width: 40px; height: 40px; background: rgba(139, 92, 246, 0.1); border-radius: 50%; animation: float 6s ease-in-out infinite 2s;"></div>

    <div class="max-w-6xl mx-auto px-3 sm:px-6">
        <!-- Compact Header -->
        <div class="text-center mb-6">
            <div style="display: inline-flex; align-items: center; justify-content: center; width: 48px; height: 48px; background: linear-gradient(135deg, #6366f1, #8b5cf6); border-radius: 12px; margin-bottom: 12px;">
                <svg style="width: 24px; height: 24px; color: white;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 00-2-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                </svg>
            </div>
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-2">
                Productivity <span style="color: #6366f1;">Dashboard</span>
            </h2>
        </div>

        <!-- Main Grid Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mb-6">
            
            <!-- Calendar Heatmap -->
            <div class="lg:col-span-2 bg-white rounded-xl p-4 shadow-sm border border-gray-100">
                <h3 class="text-lg font-semibold text-gray-800 mb-3">Activity Calendar</h3>
                <div style="display: grid; grid-template-columns: repeat(7, 1fr); gap: 2px; max-width: 100%;">
                    <!-- Generate calendar cells with inline styling for activity levels -->
                    <div style="aspect-ratio: 1; background: #f3f4f6; border-radius: 4px; position: relative; transition: all 0.2s;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'"></div>
                    <div style="aspect-ratio: 1; background: #ddd6fe; border-radius: 4px; position: relative; transition: all 0.2s;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'"></div>
                    <div style="aspect-ratio: 1; background: #6366f1; border-radius: 4px; position: relative; transition: all 0.2s;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'"></div>
                    <div style="aspect-ratio: 1; background: #a78bfa; border-radius: 4px; position: relative; transition: all 0.2s;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'"></div>
                    <div style="aspect-ratio: 1; background: #f3f4f6; border-radius: 4px; position: relative; transition: all 0.2s;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'"></div>
                    <div style="aspect-ratio: 1; background: #8b5cf6; border-radius: 4px; position: relative; transition: all 0.2s;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'"></div>
                    <div style="aspect-ratio: 1; background: #ddd6fe; border-radius: 4px; position: relative; transition: all 0.2s;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'"></div>
                    <div style="aspect-ratio: 1; background: #6366f1; border-radius: 4px; position: relative; transition: all 0.2s;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'"></div>
                    <div style="aspect-ratio: 1; background: #f3f4f6; border-radius: 4px; position: relative; transition: all 0.2s;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'"></div>
                    <div style="aspect-ratio: 1; background: #a78bfa; border-radius: 4px; position: relative; transition: all 0.2s;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'"></div>
                    <div style="aspect-ratio: 1; background: #8b5cf6; border-radius: 4px; position: relative; transition: all 0.2s;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'"></div>
                    <div style="aspect-ratio: 1; background: #ddd6fe; border-radius: 4px; position: relative; transition: all 0.2s;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'"></div>
                    <div style="aspect-ratio: 1; background: #6366f1; border-radius: 4px; position: relative; transition: all 0.2s;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'"></div>
                    <div style="aspect-ratio: 1; background: #f3f4f6; border-radius: 4px; position: relative; transition: all 0.2s;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'"></div>
                    <div style="aspect-ratio: 1; background: #a78bfa; border-radius: 4px; position: relative; transition: all 0.2s;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'"></div>
                    <div style="aspect-ratio: 1; background: #f3f4f6; border-radius: 4px; position: relative; transition: all 0.2s;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'"></div>
                    <div style="aspect-ratio: 1; background: #8b5cf6; border-radius: 4px; position: relative; transition: all 0.2s;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'"></div>
                    <div style="aspect-ratio: 1; background: #ddd6fe; border-radius: 4px; position: relative; transition: all 0.2s;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'"></div>
                    <div style="aspect-ratio: 1; background: #6366f1; border-radius: 4px; position: relative; transition: all 0.2s;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'"></div>
                    <div style="aspect-ratio: 1; background: #a78bfa; border-radius: 4px; position: relative; transition: all 0.2s;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'"></div>
                    <div style="aspect-ratio: 1; background: #f3f4f6; border-radius: 4px; position: relative; transition: all 0.2s;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'"></div>
                </div>
                <div class="flex items-center justify-between mt-3 text-xs text-gray-500">
                    <span>Less</span>
                    <div class="flex gap-1">
                        <div style="width: 10px; height: 10px; background: #f3f4f6; border-radius: 2px;"></div>
                        <div style="width: 10px; height: 10px; background: #ddd6fe; border-radius: 2px;"></div>
                        <div style="width: 10px; height: 10px; background: #a78bfa; border-radius: 2px;"></div>
                        <div style="width: 10px; height: 10px; background: #8b5cf6; border-radius: 2px;"></div>
                        <div style="width: 10px; height: 10px; background: #6366f1; border-radius: 2px;"></div>
                    </div>
                    <span>More</span>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="space-y-4">
                <!-- Tasks Completed -->
                <div class="bg-white rounded-xl p-4 shadow-sm border border-gray-100" style="background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm font-medium text-gray-600">Tasks Today</span>
                        <div style="width: 32px; height: 32px; background: linear-gradient(135deg, #10b981, #059669); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                            <svg style="width: 16px; height: 16px; color: white;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="text-2xl font-bold text-gray-900 mb-1">12/15</div>
                    <div style="width: 100%; height: 6px; background: #e5e7eb; border-radius: 3px; overflow: hidden;">
                        <div id="progress-bar" style="width: 0%; height: 100%; background: linear-gradient(90deg, #10b981, #059669); border-radius: 3px; transition: width 2s ease-out;"></div>
                    </div>
                </div>

                <!-- Focus Time -->
                <div class="bg-white rounded-xl p-4 shadow-sm border border-gray-100" style="background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm font-medium text-gray-600">Focus Time</span>
                        <div style="width: 32px; height: 32px; background: linear-gradient(135deg, #f59e0b, #d97706); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                            <svg style="width: 16px; height: 16px; color: white;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="text-2xl font-bold text-gray-900">4h 32m</div>
                </div>

                <!-- Streak Counter -->
                <div class="bg-white rounded-xl p-4 shadow-sm border border-gray-100" style="background: linear-gradient(135deg, #fecaca 0%, #fca5a5 100%);">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm font-medium text-gray-600">Streak</span>
                        <div style="width: 32px; height: 32px; background: linear-gradient(135deg, #ef4444, #dc2626); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                            <svg style="width: 16px; height: 16px; color: white;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="text-2xl font-bold text-gray-900">7 days</div>
                </div>
            </div>
        </div>

        <!-- Weekly Chart -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            <!-- Time Distribution -->
            <div class="bg-white rounded-xl p-4 shadow-sm border border-gray-100">
                <h3 class="text-lg font-semibold text-gray-800 mb-3">Weekly Activity</h3>
                <div style="display: flex; align-items: end; justify-content: space-between; height: 120px; gap: 4px;">
                    <div class="flex flex-col items-center">
                        <div id="bar-1" style="width: 20px; background: linear-gradient(to top, #6366f1, #8b5cf6); border-radius: 4px 4px 0 0; height: 60%; transition: height 1s ease-out; cursor: pointer;" onmouseover="this.style.transform='scaleY(1.1)'" onmouseout="this.style.transform='scaleY(1)'"></div>
                        <span class="text-xs text-gray-500 mt-1">M</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div id="bar-2" style="width: 20px; background: linear-gradient(to top, #6366f1, #8b5cf6); border-radius: 4px 4px 0 0; height: 85%; transition: height 1s ease-out 0.1s; cursor: pointer;" onmouseover="this.style.transform='scaleY(1.1)'" onmouseout="this.style.transform='scaleY(1)'"></div>
                        <span class="text-xs text-gray-500 mt-1">T</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div id="bar-3" style="width: 20px; background: linear-gradient(to top, #6366f1, #8b5cf6); border-radius: 4px 4px 0 0; height: 45%; transition: height 1s ease-out 0.2s; cursor: pointer;" onmouseover="this.style.transform='scaleY(1.1)'" onmouseout="this.style.transform='scaleY(1)'"></div>
                        <span class="text-xs text-gray-500 mt-1">W</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div id="bar-4" style="width: 20px; background: linear-gradient(to top, #6366f1, #8b5cf6); border-radius: 4px 4px 0 0; height: 75%; transition: height 1s ease-out 0.3s; cursor: pointer;" onmouseover="this.style.transform='scaleY(1.1)'" onmouseout="this.style.transform='scaleY(1)'"></div>
                        <span class="text-xs text-gray-500 mt-1">T</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div id="bar-5" style="width: 20px; background: linear-gradient(to top, #6366f1, #8b5cf6); border-radius: 4px 4px 0 0; height: 90%; transition: height 1s ease-out 0.4s; cursor: pointer;" onmouseover="this.style.transform='scaleY(1.1)'" onmouseout="this.style.transform='scaleY(1)'"></div>
                        <span class="text-xs text-gray-500 mt-1">F</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div id="bar-6" style="width: 20px; background: linear-gradient(to top, #a78bfa, #c4b5fd); border-radius: 4px 4px 0 0; height: 30%; transition: height 1s ease-out 0.5s; cursor: pointer;" onmouseover="this.style.transform='scaleY(1.1)'" onmouseout="this.style.transform='scaleY(1)'"></div>
                        <span class="text-xs text-gray-500 mt-1">S</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div id="bar-7" style="width: 20px; background: linear-gradient(to top, #a78bfa, #c4b5fd); border-radius: 4px 4px 0 0; height: 25%; transition: height 1s ease-out 0.6s; cursor: pointer;" onmouseover="this.style.transform='scaleY(1.1)'" onmouseout="this.style.transform='scaleY(1)'"></div>
                        <span class="text-xs text-gray-500 mt-1">S</span>
                    </div>
                </div>
            </div>

            <!-- Productivity Score -->
            <div class="bg-white rounded-xl p-4 shadow-sm border border-gray-100">
                <h3 class="text-lg font-semibold text-gray-800 mb-3">Productivity Score</h3>
                <div class="flex items-center justify-center">
                    <div style="position: relative; width: 120px; height: 120px;">
                        <svg style="width: 100%; height: 100%; transform: rotate(-90deg);" viewBox="0 0 100 100">
                            <!-- Background circle -->
                            <circle cx="50" cy="50" r="40" fill="none" stroke="#e5e7eb" stroke-width="8"></circle>
                            <!-- Progress circle -->
                            <circle id="progress-circle" cx="50" cy="50" r="40" fill="none" stroke="url(#gradient)" stroke-width="8" 
                                    style="stroke-dasharray: 251.2; stroke-dashoffset: 251.2; transition: stroke-dashoffset 2s ease-out;"
                                    stroke-linecap="round"></circle>
                            <defs>
                                <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
                                    <stop offset="0%" stop-color="#6366f1" />
                                    <stop offset="100%" stop-color="#8b5cf6" />
                                </linearGradient>
                            </defs>
                        </svg>
                        <div style="position: absolute; inset: 0; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                            <span id="score-text" class="text-2xl font-bold text-gray-900">0%</span>
                            <span class="text-xs text-gray-500">Score</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Animate progress bar
            setTimeout(() => {
                document.getElementById('progress-bar').style.width = '80%';
            }, 500);

            // Animate circular progress
            setTimeout(() => {
                const circle = document.getElementById('progress-circle');
                const scoreText = document.getElementById('score-text');
                const targetScore = 78;
                const circumference = 251.2;
                const offset = circumference - (targetScore / 100 * circumference);
                
                circle.style.strokeDashoffset = offset;
                
                // Animate counter
                let current = 0;
                const increment = targetScore / 60;
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= targetScore) {
                        current = targetScore;
                        clearInterval(timer);
                    }
                    scoreText.textContent = Math.round(current) + '%';
                }, 30);
            }, 1000);

            // Add random activity to calendar on interaction
            const calendarCells = document.querySelectorAll('[style*="aspect-ratio"]');
            calendarCells.forEach(cell => {
                cell.addEventListener('click', function() {
                    const colors = ['#f3f4f6', '#ddd6fe', '#a78bfa', '#8b5cf6', '#6366f1'];
                    this.style.background = colors[Math.floor(Math.random() * colors.length)];
                });
            });

            // Auto-update bars every 5 seconds
            setInterval(() => {
                for(let i = 1; i <= 7; i++) {
                    const bar = document.getElementById(`bar-${i}`);
                    const newHeight = Math.floor(Math.random() * 60) + 20;
                    bar.style.height = `${newHeight}%`;
                }
            }, 5000);
        });
    </script>
</section>