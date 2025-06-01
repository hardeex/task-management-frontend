     <div id="kanban" class="tab-content">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                                       <!-- To Do Column -->
                    <div class="bg-gray-50 rounded-lg shadow-sm p-4 kanban-column">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="font-medium text-gray-800">To Do</h3>
                            <span class="bg-gray-200 text-gray-700 text-xs font-medium px-2 py-1 rounded-full">5 tasks</span>
                        </div>
                        
                        <div class="space-y-4">
                            <!-- Task Card -->
                            <div class="bg-white rounded-lg shadow-sm p-4 task-card">
                                <div class="flex justify-between items-start mb-2">
                                    <h4 class="font-medium text-gray-800">Product Catalog Design</h4>
                                    <span class="priority-medium status-badge">Medium</span>
                                </div>
                                <p class="text-sm text-gray-600 mb-3">Create responsive product listing page</p>
                                <div class="flex items-center justify-between">
                                    <img src="https://ui-avatars.com/api/?name=Mike+Johnson&background=f59e0b&color=fff" 
                                         alt="Mike" class="w-6 h-6 rounded-full">
                                    <span class="text-xs text-gray-500">Due Dec 2</span>
                                </div>
                            </div>
                            
                            <!-- Task Card -->
                            <div class="bg-white rounded-lg shadow-sm p-4 task-card">
                                <div class="flex justify-between items-start mb-2">
                                    <h4 class="font-medium text-gray-800">Inventory Management</h4>
                                    <span class="priority-low status-badge">Low</span>
                                </div>
                                <p class="text-sm text-gray-600 mb-3">Set up stock tracking system</p>
                                <div class="flex items-center justify-between">
                                    <img src="https://ui-avatars.com/api/?name=Alex+Brown&background=06b6d4&color=fff" 
                                         alt="Alex" class="w-6 h-6 rounded-full">
                                    <span class="text-xs text-gray-500">Due Dec 5</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- In Progress Column -->
                    <div class="bg-gray-50 rounded-lg shadow-sm p-4 kanban-column">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="font-medium text-gray-800">In Progress</h3>
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2 py-1 rounded-full">3 tasks</span>
                        </div>
                        
                        <div class="space-y-4">
                            <!-- Task Card -->
                            <div class="bg-white rounded-lg shadow-sm p-4 task-card">
                                <div class="flex justify-between items-start mb-2">
                                    <h4 class="font-medium text-gray-800">User Authentication</h4>
                                    <span class="priority-high status-badge">High</span>
                                </div>
                                <p class="text-sm text-gray-600 mb-3">Implement secure login/logout functionality</p>
                                <div class="flex items-center justify-between">
                                    <img src="https://ui-avatars.com/api/?name=Sarah+Wilson&background=10b981&color=fff" 
                                         alt="Sarah" class="w-6 h-6 rounded-full">
                                    <span class="text-xs text-gray-500">Due Nov 30</span>
                                </div>
                            </div>
                            
                            <!-- Task Card -->
                            <div class="bg-white rounded-lg shadow-sm p-4 task-card">
                                <div class="flex justify-between items-start mb-2">
                                    <h4 class="font-medium text-gray-800">Checkout Process</h4>
                                    <span class="priority-high status-badge">High</span>
                                </div>
                                <p class="text-sm text-gray-600 mb-3">Develop multi-step checkout flow</p>
                                <div class="flex items-center justify-between">
                                    <img src="https://ui-avatars.com/api/?name=Emma+Davis&background=ef4444&color=fff" 
                                         alt="Emma" class="w-6 h-6 rounded-full">
                                    <span class="text-xs text-gray-500">Due Dec 3</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Review Column -->
                    <div class="bg-gray-50 rounded-lg shadow-sm p-4 kanban-column">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="font-medium text-gray-800">Review</h3>
                            <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2 py-1 rounded-full">2 tasks</span>
                        </div>
                        
                        <div class="space-y-4">
                            <!-- Task Card -->
                            <div class="bg-white rounded-lg shadow-sm p-4 task-card">
                                <div class="flex justify-between items-start mb-2">
                                    <h4 class="font-medium text-gray-800">Mobile Responsiveness</h4>
                                    <span class="priority-medium status-badge">Medium</span>
                                </div>
                                <p class="text-sm text-gray-600 mb-3">Test and optimize for mobile devices</p>
                                <div class="flex items-center justify-between">
                                    <img src="https://ui-avatars.com/api/?name=Mike+Johnson&background=f59e0b&color=fff" 
                                         alt="Mike" class="w-6 h-6 rounded-full">
                                    <span class="text-xs text-gray-500">Due Dec 1</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Done Column -->
                    <div class="bg-gray-50 rounded-lg shadow-sm p-4 kanban-column">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="font-medium text-gray-800">Done</h3>
                            <span class="bg-green-100 text-green-800 text-xs font-medium px-2 py-1 rounded-full">7 tasks</span>
                        </div>
                        
                        <div class="space-y-4">
                            <!-- Task Card -->
                            <div class="bg-white rounded-lg shadow-sm p-4 task-card">
                                <div class="flex justify-between items-start mb-2">
                                    <h4 class="font-medium text-gray-800 line-through">Payment Gateway</h4>
                                    <span class="priority-high status-badge">High</span>
                                </div>
                                <p class="text-sm text-gray-600 mb-3 line-through">Integrate Stripe payment processing</p>
                                <div class="flex items-center justify-between">
                                    <img src="https://ui-avatars.com/api/?name=Emma+Davis&background=ef4444&color=fff" 
                                         alt="Emma" class="w-6 h-6 rounded-full">
                                    <span class="text-xs text-gray-500">Completed Nov 28</span>
                                </div>
                            </div>
                            
                            <!-- Task Card -->
                            <div class="bg-white rounded-lg shadow-sm p-4 task-card">
                                <div class="flex justify-between items-start mb-2">
                                    <h4 class="font-medium text-gray-800 line-through">Database Schema</h4>
                                    <span class="priority-medium status-badge">Medium</span>
                                </div>
                                <p class="text-sm text-gray-600 mb-3 line-through">Design and implement database structure</p>
                                <div class="flex items-center justify-between">
                                    <img src="https://ui-avatars.com/api/?name=Sarah+Wilson&background=10b981&color=fff" 
                                         alt="Sarah" class="w-6 h-6 rounded-full">
                                    <span class="text-xs text-gray-500">Completed Nov 25</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>