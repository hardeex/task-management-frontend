
<section class="full-bleed py-0 bg-gradient-to-b from-gray-50 to-indigo-50 relative overflow-hidden">
    <!-- Floating time orbs -->
    <div class="time-orb bg-indigo-200 w-80 h-80 top-0 left-0 -translate-x-1/2 -translate-y-1/2"></div>
    <div class="time-orb bg-purple-200 w-64 h-64 bottom-0 right-0 translate-x-1/2 translate-y-1/2"></div>
    
    <!-- Mega Calendar Grid - Takes full width -->
    <div class="mega-calendar">
        <!-- Generate 42 days (6 weeks) -->
        <template x-for="i in 42" :key="i">
            <div class="mega-day" 
                 :class="{
                     'bg-indigo-50': [3,4,10,11,17,18,24,25,31,32].includes(i),
                     'bg-purple-50': [5,6,12,13,19,20,26,27,33,34].includes(i),
                     'bg-indigo-100': [7,14,21,28,35].includes(i)
                 }">
                <!-- Time chunks -->
                <template x-if="[3,10,17,24,31].includes(i)">
                    <div class="time-chunk bg-indigo-400" style="height: 25%; bottom: 15%;"></div>
                </template>
                <template x-if="[4,11,18,25,32].includes(i)">
                    <div class="time-chunk bg-purple-400" style="height: 40%; bottom: 25%;"></div>
                </template>
                <template x-if="[7,14,21,28,35].includes(i)">
                    <div class="time-chunk bg-indigo-600" style="height: 60%; bottom: 10%;"></div>
                </template>
            </div>
        </template>
    </div>
    
    <!-- Productivity Landscape - Full width grid -->
    <div class="productivity-landscape my-1">
        <!-- Generate 96 cells (12x8) -->
        <template x-for="i in 96" :key="i">
            <div class="landscape-cell" 
                 :style="`background: rgba(99, 102, 241, ${Math.random() * 0.3 + 0.1})`">
                <!-- Random time blocks -->
                <template x-if="Math.random() > 0.7">
                    <div class="absolute inset-0 bg-white opacity-20"></div>
                </template>
            </div>
        </template>
    </div>
    
    <!-- Time River - Full width animated wave -->
    <div class="time-river my-1">
        <div class="river-wave"></div>
        <!-- Floating calendar elements -->
        <div class="absolute top-1/2 left-1/4 w-24 h-32 bg-white rounded-lg shadow-xl transform -translate-y-1/2 rotate-3"></div>
        <div class="absolute top-1/3 right-1/4 w-20 h-28 bg-indigo-100 rounded-lg shadow-xl transform -translate-y-1/2 -rotate-2"></div>
    </div>
    
    <!-- Peak Performance Visualization -->
    <div class="peak-performance">
        <!-- 7 columns for each day -->
        <div class="peak-column" x-data="{ blocks: Array.from({length: 24}, (_,i) => Math.floor(Math.random() * 5) + 1) }">
            <template x-for="(block, index) in blocks" :key="index">
                <div class="peak-block" 
                     :class="{
                         'bg-indigo-100': block === 1,
                         'bg-indigo-200': block === 2,
                         'bg-indigo-300': block === 3,
                         'bg-indigo-400': block === 4,
                         'bg-indigo-500': block === 5
                     }"
                     :style="`height: ${block * 5}%`"></div>
            </template>
        </div>
        <!-- Repeat for each day -->
        <template x-for="day in 6" :key="day">
            <div class="peak-column" x-data="{ blocks: Array.from({length: 24}, (_,i) => Math.floor(Math.random() * 5) + 1) }">
                <template x-for="(block, index) in blocks" :key="index">
                    <div class="peak-block" 
                         :class="{
                             'bg-purple-100': block === 1,
                             'bg-purple-200': block === 2,
                             'bg-purple-300': block === 3,
                             'bg-purple-400': block === 4,
                             'bg-purple-500': block === 5
                         }"
                         :style="`height: ${block * 5}%`"></div>
                </template>
            </div>
        </template>
    </div>
    
    <!-- Time Block Matrix - Final full-width element --><style>
    /* Calendar Grid Animation */
    @keyframes calendar-pulse {
        0%, 100% { transform: scale(1); opacity: 1; }
        50% { transform: scale(1.03); opacity: 0.9; }
    }

    .calendar-grid {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        gap: 8px;
    }

    .calendar-day {
        aspect-ratio: 1;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        transition: all 0.3s ease;
    }

    .calendar-day.active {
        animation: calendar-pulse 2s infinite;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    }

    .time-block {
        position: absolute;
        border-radius: 6px;
        left: 10%;
        right: 10%;
    }

    /* Time visualization styles */
    .time-visualization {
        position: relative;
        height: 300px;
        background: linear-gradient(to bottom, #f8fafc, #e2e8f0);
        border-radius: 20px;
        overflow: hidden;
    }

    .time-wave {
        position: absolute;
        bottom: 0;
        width: 200%;
        height: 100%;
        background: url("data:image/svg+xml,%3Csvg viewBox='0 0 1200 120' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z' fill='%23646ff3' opacity='.25'/%3E%3Cpath d='M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z' fill='%23646ff3' opacity='.5'/%3E%3Cpath d='M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z' fill='%23646ff3'/%3E%3C/svg%3E");
        background-size: 50% 100%;
        animation: wave 12s linear infinite;
    }

    @keyframes wave {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }

    /* Productivity visualization */
    .productivity-mountain {
        position: relative;
        height: 250px;
    }

    .mountain-path {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 100%;
        fill: none;
        stroke: #4f46e5;
        stroke-width: 3;
        stroke-dasharray: 1000;
        stroke-dashoffset: 1000;
        animation: draw 8s forwards;
    }

    @keyframes draw {
        to { stroke-dashoffset: 0; }
    }

    /* Time block visualization */
    .time-block-container {
        display: flex;
        gap: 10px;
        height: 200px;
        align-items: flex-end;
    }

    .time-block-bar {
        flex: 1;
        border-radius: 8px 8px 0 0;
        transition: height 0.5s ease;
    }

    /* Floating calendar elements */
    .floating-calendar {
        position: absolute;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        transform-origin: center;
        animation: float 6s ease-in-out infinite;
    }
</style>


<section class="py-6 bg-gradient-to-br from-gray-50 to-indigo-100 relative overflow-hidden">
    <!-- Floating time orbs -->
    <div style="position: absolute; top: -100px; left: -100px; width: 200px; height: 200px; background: radial-gradient(circle, rgba(99, 102, 241, 0.3), rgba(99, 102, 241, 0.1)); border-radius: 50%; animation: float 8s ease-in-out infinite;"></div>
    <div style="position: absolute; bottom: -80px; right: -80px; width: 160px; height: 160px; background: radial-gradient(circle, rgba(139, 92, 246, 0.3), rgba(139, 92, 246, 0.1)); border-radius: 50%; animation: float 6s ease-in-out infinite 2s;"></div>
    
    <div class="max-w-7xl mx-auto px-3 sm:px-6">
        <!-- Mega Calendar Grid -->
        <div class="mb-6">
            <h3 class="text-xl font-bold text-gray-800 mb-3 text-center">Activity Calendar</h3>
            <div id="mega-calendar" style="display: grid; grid-template-columns: repeat(7, 1fr); gap: 3px; max-width: 100%; margin: 0 auto;">
                <!-- Calendar days will be generated by JavaScript -->
            </div>
        </div>
        
        <!-- Productivity Landscape -->
        <div class="mb-6">
            <h3 class="text-xl font-bold text-gray-800 mb-3 text-center">Productivity Heatmap</h3>
            <div id="productivity-landscape" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(8px, 1fr)); gap: 1px; height: 120px; background: #f3f4f6; border-radius: 8px; padding: 8px;">
                <!-- Landscape cells will be generated by JavaScript -->
            </div>
        </div>
        
        <!-- Time River Visualization -->
        <div class="mb-6">
            <h3 class="text-xl font-bold text-gray-800 mb-3 text-center">Time Flow</h3>
            <div style="position: relative; height: 150px; background: linear-gradient(135deg, #e0e7ff, #c7d2fe); border-radius: 16px; overflow: hidden;">
                <!-- Animated wave -->
                <div id="time-wave" style="position: absolute; bottom: 0; width: 200%; height: 100%; background: url('data:image/svg+xml,%3Csvg viewBox=\'0 0 1200 120\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z\' fill=\'%236366f1\' opacity=\'.6\'/%3E%3C/svg%3E'); background-size: 50% 100%; animation: wave 10s linear infinite;"></div>
                
                <!-- Floating calendar elements -->
                <div style="position: absolute; top: 30%; left: 20%; width: 40px; height: 50px; background: white; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.15); transform: rotate(3deg); animation: float 4s ease-in-out infinite;"></div>
                <div style="position: absolute; top: 60%; right: 25%; width: 35px; height: 45px; background: #e0e7ff; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.15); transform: rotate(-2deg); animation: float 5s ease-in-out infinite 1s;"></div>
            </div>
        </div>
        
        <!-- Peak Performance Visualization -->
        <div class="mb-6">
            <h3 class="text-xl font-bold text-gray-800 mb-3 text-center">Weekly Performance</h3>
            <div id="peak-performance" style="display: flex; gap: 4px; height: 200px; align-items: flex-end; justify-content: center; background: linear-gradient(to top, #f8fafc, #e2e8f0); border-radius: 12px; padding: 16px;">
                <!-- Performance columns will be generated by JavaScript -->
            </div>
        </div>
        
        <!-- Time Block Matrix -->
        <div class="mb-6">
            <h3 class="text-xl font-bold text-gray-800 mb-3 text-center">Time Distribution</h3>
            <div style="display: flex; gap: 6px; height: 180px; align-items: flex-end; justify-content: center; background: white; border-radius: 12px; padding: 16px; box-shadow: 0 4px 6px rgba(0,0,0,0.05);">
                <div id="time-block-1" style="width: 30px; background: linear-gradient(to top, #6366f1, #8b5cf6); border-radius: 6px 6px 0 0; height: 70%; transition: height 0.8s cubic-bezier(0.4, 0, 0.2, 1); cursor: pointer;" onmouseover="this.style.transform='scaleY(1.1)'" onmouseout="this.style.transform='scaleY(1)'"></div>
                <div id="time-block-2" style="width: 30px; background: linear-gradient(to top, #8b5cf6, #a78bfa); border-radius: 6px 6px 0 0; height: 40%; transition: height 0.8s cubic-bezier(0.4, 0, 0.2, 1); cursor: pointer;" onmouseover="this.style.transform='scaleY(1.1)'" onmouseout="this.style.transform='scaleY(1)'"></div>
                <div id="time-block-3" style="width: 30px; background: linear-gradient(to top, #6366f1, #8b5cf6); border-radius: 6px 6px 0 0; height: 90%; transition: height 0.8s cubic-bezier(0.4, 0, 0.2, 1); cursor: pointer;" onmouseover="this.style.transform='scaleY(1.1)'" onmouseout="this.style.transform='scaleY(1)'"></div>
                <div id="time-block-4" style="width: 30px; background: linear-gradient(to top, #a78bfa, #c4b5fd); border-radius: 6px 6px 0 0; height: 30%; transition: height 0.8s cubic-bezier(0.4, 0, 0.2, 1); cursor: pointer;" onmouseover="this.style.transform='scaleY(1.1)'" onmouseout="this.style.transform='scaleY(1)'"></div>
                <div id="time-block-5" style="width: 30px; background: linear-gradient(to top, #6366f1, #8b5cf6); border-radius: 6px 6px 0 0; height: 60%; transition: height 0.8s cubic-bezier(0.4, 0, 0.2, 1); cursor: pointer;" onmouseover="this.style.transform='scaleY(1.1)'" onmouseout="this.style.transform='scaleY(1)'"></div>
                <div id="time-block-6" style="width: 30px; background: linear-gradient(to top, #8b5cf6, #a78bfa); border-radius: 6px 6px 0 0; height: 80%; transition: height 0.8s cubic-bezier(0.4, 0, 0.2, 1); cursor: pointer;" onmouseover="this.style.transform='scaleY(1.1)'" onmouseout="this.style.transform='scaleY(1)'"></div>
                <div id="time-block-7" style="width: 30px; background: linear-gradient(to top, #6366f1, #8b5cf6); border-radius: 6px 6px 0 0; height: 50%; transition: height 0.8s cubic-bezier(0.4, 0, 0.2, 1); cursor: pointer;" onmouseover="this.style.transform='scaleY(1.1)'" onmouseout="this.style.transform='scaleY(1)'"></div>
            </div>
        </div>
        
        <!-- Productivity Mountain -->
        <div class="text-center">
            <h3 class="text-xl font-bold text-gray-800 mb-3">Productivity Peak</h3>
            <div style="position: relative; height: 120px; background: linear-gradient(to bottom, #f0f4ff, #e0e7ff); border-radius: 12px; overflow: hidden;">
                <svg style="position: absolute; bottom: 0; width: 100%; height: 100%;" viewBox="0 0 500 120" preserveAspectRatio="none">
                    <path id="mountain-path" d="M0,120 L50,90 L100,95 L150,70 L200,80 L250,40 L300,60 L350,30 L400,50 L450,20 L500,35 L500,120 Z" 
                          style="fill: linear-gradient(to top, #6366f1, #8b5cf6); stroke: none; opacity: 0.8;"></path>
                </svg>
                <div id="peak-marker" style="position: absolute; top: 25%; left: 50%; width: 8px; height: 8px; background: #ef4444; border-radius: 50%; animation: ping 2s infinite; transform: translate(-50%, -50%);"></div>
            </div>
        </div>
    </div>

    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(2deg); }
        }
        
        @keyframes wave {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        
        @keyframes ping {
            75%, 100% { transform: translate(-50%, -50%) scale(2); opacity: 0; }
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }
        
        .calendar-day {
            aspect-ratio: 1;
            border-radius: 8px;
            transition: all 0.3s ease;
            cursor: pointer;
            position: relative;
        }
        
        .calendar-day:hover {
            transform: scale(1.1);
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }
        
        .time-chunk {
            position: absolute;
            border-radius: 4px;
            left: 20%;
            right: 20%;
        }
        
        .landscape-cell {
            border-radius: 2px;
            transition: all 0.2s ease;
            cursor: pointer;
        }
        
        .landscape-cell:hover {
            transform: scale(1.2);
        }
        
        .peak-column {
            display: flex;
            flex-direction: column-reverse;
            gap: 1px;
            width: 24px;
            height: 100%;
        }
        
        .peak-block {
            border-radius: 2px;
            transition: all 0.3s ease;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Generate Mega Calendar
            const megaCalendar = document.getElementById('mega-calendar');
            const activityLevels = ['#f3f4f6', '#ddd6fe', '#a78bfa', '#8b5cf6', '#6366f1'];
            
            for (let i = 0; i < 42; i++) {
                const day = document.createElement('div');
                day.className = 'calendar-day';
                const activityLevel = Math.floor(Math.random() * activityLevels.length);
                day.style.background = activityLevels[activityLevel];
                
                // Add time chunks to some days
                if (Math.random() > 0.7) {
                    const chunk = document.createElement('div');
                    chunk.className = 'time-chunk';
                    chunk.style.background = '#6366f1';
                    chunk.style.height = `${Math.random() * 40 + 20}%`;
                    chunk.style.bottom = `${Math.random() * 30 + 10}%`;
                    day.appendChild(chunk);
                }
                
                day.addEventListener('click', function() {
                    const newLevel = Math.floor(Math.random() * activityLevels.length);
                    this.style.background = activityLevels[newLevel];
                });
                
                megaCalendar.appendChild(day);
            }
            
            // Generate Productivity Landscape
            const landscape = document.getElementById('productivity-landscape');
            for (let i = 0; i < 96; i++) {
                const cell = document.createElement('div');
                cell.className = 'landscape-cell';
                const opacity = Math.random() * 0.6 + 0.1;
                cell.style.background = `rgba(99, 102, 241, ${opacity})`;
                
                cell.addEventListener('click', function() {
                    const newOpacity = Math.random() * 0.6 + 0.1;
                    this.style.background = `rgba(99, 102, 241, ${newOpacity})`;
                });
                
                landscape.appendChild(cell);
            }
            
            // Generate Peak Performance columns
            const peakPerformance = document.getElementById('peak-performance');
            const colors = [
                ['#ddd6fe', '#c4b5fd', '#a78bfa', '#8b5cf6', '#7c3aed'],
                ['#e0e7ff', '#c7d2fe', '#a5b4fc', '#818cf8', '#6366f1']
            ];
            
            for (let day = 0; day < 7; day++) {
                const column = document.createElement('div');
                column.className = 'peak-column';
                
                const colorSet = colors[day % 2];
                for (let hour = 0; hour < 12; hour++) {
                    const block = document.createElement('div');
                    block.className = 'peak-block';
                    const intensity = Math.floor(Math.random() * 5);
                    block.style.background = colorSet[intensity];
                    block.style.height = `${(intensity + 1) * 3}%`;
                    column.appendChild(block);
                }
                
                peakPerformance.appendChild(column);
            }
            
            // Auto-update time blocks
            function updateTimeBlocks() {
                for (let i = 1; i <= 7; i++) {
                    const block = document.getElementById(`time-block-${i}`);
                    if (block) {
                        const newHeight = Math.floor(Math.random() * 70) + 20;
                        block.style.height = `${newHeight}%`;
                    }
                }
            }
            
            // Update blocks every 4 seconds
            setInterval(updateTimeBlocks, 4000);
            
            // Update peak performance every 6 seconds
            setInterval(() => {
                const columns = document.querySelectorAll('.peak-column');
                columns.forEach((column, dayIndex) => {
                    const blocks = column.querySelectorAll('.peak-block');
                    const colorSet = colors[dayIndex % 2];
                    blocks.forEach(block => {
                        const intensity = Math.floor(Math.random() * 5);
                        block.style.background = colorSet[intensity];
                        block.style.height = `${(intensity + 1) * 3}%`;
                    });
                });
            }, 6000);
        });
    </script>
</section>