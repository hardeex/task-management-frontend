 <div id="tasks" class="tab-content">
                <div class="bg-white rounded-lg shadow-sm">
                    <!-- Filters -->
                    <div class="p-6 border-b border-gray-200">
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between space-y-3 sm:space-y-0">
                            <div class="flex items-center space-x-4">
                                <select class="border border-gray-300 rounded-lg px-3 py-2 text-sm">
                                    <option>All Status</option>
                                    <option>To Do</option>
                                    <option>In Progress</option>
                                    <option>Review</option>
                                    <option>Done</option>
                                </select>
                                <select class="border border-gray-300 rounded-lg px-3 py-2 text-sm">
                                    <option>All Priority</option>
                                    <option>High</option>
                                    <option>Medium</option>
                                    <option>Low</option>
                                </select>
                                <select class="border border-gray-300 rounded-lg px-3 py-2 text-sm">
                                    <option>All Assignees</option>
                                    <option>Sarah Wilson</option>
                                    <option>Mike Johnson</option>
                                    <option>Emma Davis</option>
                                </select>
                            </div>
                            <div class="flex items-center space-x-2">
                                <button class="px-3 py-2 text-gray-600 hover:text-gray-800">
                                    <i class="fas fa-th-list"></i>
                                </button>
                                <button class="px-3 py-2 text-gray-600 hover:text-gray-800">
                                    <i class="fas fa-th-large"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Task List -->
                    <div class="divide-y divide-gray-200">
                        <div class="p-6 hover:bg-gray-50 transition-colors">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-4">
                                    <input type="checkbox" class="w-4 h-4 text-purple-600 rounded">
                                    <div>
                                        <h4 class="font-medium text-gray-800">User Authentication System</h4>
                                        <p class="text-sm text-gray-600">Implement secure login/logout functionality</p>
                                        <div class="flex items-center space-x-4 mt-2">
                                            <img src="https://ui-avatars.com/api/?name=Sarah+Wilson&background=10b981&color=fff" 
                                                 alt="Sarah" class="w-6 h-6 rounded-full">
                                            <span class="text-xs text-gray-500">Due: Nov 30</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <span class="priority-high status-badge">High</span>
                                    <span class="status-progress status-badge">In Progress</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="p-6 hover:bg-gray-50 transition-colors">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-4">
                                    <input type="checkbox" class="w-4 h-4 text-purple-600 rounded">
                                    <div>
                                        <h4 class="font-medium text-gray-800">Product Catalog Design</h4>
                                        <p class="text-sm text-gray-600">Create responsive product listing page</p>
                                        <div class="flex items-center space-x-4 mt-2">
                                            <img src="https://ui-avatars.com/api/?name=Mike+Johnson&background=f59e0b&color=fff" 
                                                 alt="Mike" class="w-6 h-6 rounded-full">
                                            <span class="text-xs text-gray-500">Due: Dec 2</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <span class="priority-medium status-badge">Medium</span>
                                    <span class="status-todo status-badge">To Do</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="p-6 hover:bg-gray-50 transition-colors">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-4">
                                    <input type="checkbox" checked class="w-4 h-4 text-purple-600 rounded">
                                    <div>
                                        <h4 class="font-medium text-gray-800 line-through">Payment Gateway Integration</h4>
                                        <p class="text-sm text-gray-600">Integrate Stripe payment processing</p>
                                        <div class="flex items-center space-x-4 mt-2">
                                            <img src="https://ui-avatars.com/api/?name=Emma+Davis&background=ef4444&color=fff" 
                                                 alt="Emma" class="w-6 h-6 rounded-full">
                                            <span class="text-xs text-gray-500">Completed: Nov 28</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <span class="priority-high status-badge">High</span>
                                    <span class="status-done status-badge">Done</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
