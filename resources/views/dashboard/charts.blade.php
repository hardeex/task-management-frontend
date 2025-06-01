   <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-8">
                <!-- Progress Chart -->
                <div class="lg:col-span-2 bg-white rounded-xl shadow-sm p-6">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-lg font-semibold text-gray-800">Project Progress</h3>
                        <select class="border border-gray-300 rounded-lg px-3 py-1 text-sm">
                            <option>Last 7 days</option>
                            <option>Last 30 days</option>
                            <option>Last 90 days</option>
                        </select>
                    </div>
                    
                    <!-- Mock Chart -->
                    <div class="chart-container h-64 p-6 flex items-end space-x-4 justify-center">
                        <div class="flex flex-col items-center">
                            <div class="w-8 bg-white bg-opacity-30 rounded-t mb-2" style="height: 120px;"></div>
                            <span class="text-white text-xs">Mon</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="w-8 bg-white bg-opacity-50 rounded-t mb-2" style="height: 80px;"></div>
                            <span class="text-white text-xs">Tue</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="w-8 bg-white bg-opacity-70 rounded-t mb-2" style="height: 140px;"></div>
                            <span class="text-white text-xs">Wed</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="w-8 bg-white bg-opacity-40 rounded-t mb-2" style="height: 60px;"></div>
                            <span class="text-white text-xs">Thu</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="w-8 bg-white bg-opacity-60 rounded-t mb-2" style="height: 100px;"></div>
                            <span class="text-white text-xs">Fri</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="w-8 bg-white bg-opacity-80 rounded-t mb-2" style="height: 160px;"></div>
                            <span class="text-white text-xs">Sat</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="w-8 bg-white bg-opacity-90 rounded-t mb-2" style="height: 180px;"></div>
                            <span class="text-white text-xs">Sun</span>
                        </div>
                    </div>
                </div>

                <!-- Team Activity -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-6">Team Activity</h3>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <img src="https://ui-avatars.com/api/?name=Sarah+Wilson&background=10b981&color=fff" 
                                 alt="User" class="w-8 h-8 rounded-full">
                            <div class="flex-1">
                                <p class="text-sm text-gray-800">Sarah completed "UI Design"</p>
                                <p class="text-xs text-gray-500">2 hours ago</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <img src="https://ui-avatars.com/api/?name=Mike+Johnson&background=f59e0b&color=fff" 
                                 alt="User" class="w-8 h-8 rounded-full">
                            <div class="flex-1">
                                <p class="text-sm text-gray-800">Mike started "Backend API"</p>
                                <p class="text-xs text-gray-500">4 hours ago</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <img src="https://ui-avatars.com/api/?name=Emma+Davis&background=ef4444&color=fff" 
                                 alt="User" class="w-8 h-8 rounded-full">
                            <div class="flex-1">
                                <p class="text-sm text-gray-800">Emma added new task</p>
                                <p class="text-xs text-gray-500">6 hours ago</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <img src="https://ui-avatars.com/api/?name=Alex+Brown&background=06b6d4&color=fff" 
                                 alt="User" class="w-8 h-8 rounded-full">
                            <div class="flex-1">
                                <p class="text-sm text-gray-800">Alex updated deadline</p>
                                <p class="text-xs text-gray-500">8 hours ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>