 <div id="add-task-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-xl shadow-2xl w-full max-w-2xl max-h-[90vh] overflow-y-auto">
            <!-- Modal Header -->
            <div class="flex items-center justify-between p-6 border-b border-gray-200">
                <div>
                    <h2 class="text-2xl font-bold text-gray-800">Create New Task</h2>
                    <p class="text-gray-600 text-sm">Add a new task to your project</p>
                </div>
                <button id="close-modal-btn" class="text-gray-400 hover:text-gray-600 text-2xl">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <!-- Modal Body -->
            <form id="add-task-form" class="p-6 space-y-6">
                <!-- Basic Information Section -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-info-circle mr-2 text-purple-600"></i>
                        Basic Information
                    </h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Task Title -->
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Task Title <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="title" required 
                                   class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                                   placeholder="Enter task title...">
                        </div>
                        
                        <!-- Project Assignment -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Project</label>
                            <select name="project_id" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                                <option value="">Select Project</option>
                                <option value="1">E-commerce Platform</option>
                                <option value="2">Mobile App Redesign</option>
                                <option value="3">Marketing Campaign</option>
                                <option value="4">API Development</option>
                            </select>
                        </div>
                        
                        <!-- Category/Type -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Category</label>
                            <select name="category" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                                <option value="">Select Category</option>
                                <option value="task">Task</option>
                                <option value="bug">Bug</option>
                                <option value="feature">Feature</option>
                                <option value="enhancement">Enhancement</option>
                                <option value="research">Research</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Description -->
                    <div class="mt-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                        <textarea name="description" rows="3" 
                                  class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                                  placeholder="Describe the task in detail..."></textarea>
                    </div>
                </div>
                
                <!-- Assignment & Priority Section -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-users mr-2 text-blue-600"></i>
                        Assignment & Priority
                    </h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <!-- Assigned To -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Assigned To</label>
                            <select name="assigned_to" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                                <option value="">Select Assignee</option>
                                <option value="1">John Doe</option>
                                <option value="2">Sarah Wilson</option>
                                <option value="3">Mike Johnson</option>
                                <option value="4">Emma Davis</option>
                                <option value="5">Alex Brown</option>
                            </select>
                        </div>
                        
                        <!-- Priority -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Priority</label>
                            <select name="priority" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                                <option value="low">Low</option>
                                <option value="medium" selected>Medium</option>
                                <option value="high">High</option>
                            </select>
                        </div>
                        
                        <!-- Status -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                            <select name="status" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                                <option value="todo" selected>To Do</option>
                                <option value="progress">In Progress</option>
                                <option value="review">Review</option>
                                <option value="done">Done</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <!-- Scheduling Section -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-calendar mr-2 text-green-600"></i>
                        Scheduling
                    </h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <!-- Start Date -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Start Date</label>
                            <input type="date" name="start_date" 
                                   class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                        </div>
                        
                        <!-- Due Date -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Due Date</label>
                            <input type="date" name="due_date" 
                                   class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                        </div>
                        
                        <!-- Estimated Hours -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Estimated Hours</label>
                            <input type="number" name="estimated_hours" min="0" step="0.5" 
                                   class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                                   placeholder="0.0">
                        </div>
                    </div>
                </div>
                
                <!-- Additional Details Section -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-cog mr-2 text-orange-600"></i>
                        Additional Details
                    </h3>
                    
                    <div class="space-y-4">
                        <!-- Tags -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Tags</label>
                            <input type="text" name="tags" 
                                   class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                                   placeholder="Enter tags separated by commas (e.g., frontend, urgent, bug-fix)">
                        </div>
                        
                        <!-- Dependencies -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Dependencies</label>
                            <select name="dependencies[]" multiple class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                                <option value="">No dependencies</option>
                                <option value="1">Task: Setup database schema</option>
                                <option value="2">Task: Design user interface</option>
                                <option value="3">Task: API endpoint creation</option>
                                <option value="4">Task: User authentication</option>
                            </select>
                            <p class="text-xs text-gray-500 mt-1">Hold Ctrl/Cmd to select multiple dependencies</p>
                        </div>
                        
                        <!-- File Attachments -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Attachments</label>
                            <div class="border-2 border-dashed border-gray-300 rounded-lg p-4 text-center hover:border-purple-400 transition-colors">
                                <input type="file" name="attachments[]" multiple class="hidden" id="file-upload">
                                <label for="file-upload" class="cursor-pointer">
                                    <i class="fas fa-cloud-upload-alt text-3xl text-gray-400 mb-2"></i>
                                    <p class="text-gray-600">Click to upload files or drag and drop</p>
                                    <p class="text-xs text-gray-500">PNG, JPG, PDF, DOC up to 10MB each</p>
                                </label>
                            </div>
                        </div>
                        
                        <!-- Comments/Notes -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Initial Comments</label>
                            <textarea name="comments" rows="3" 
                                      class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                                      placeholder="Add any initial comments or special instructions..."></textarea>
                        </div>
                    </div>
                </div>
                
                <!-- Form Actions -->
                <div class="flex items-center justify-between pt-6 border-t border-gray-200">
                    <div class="flex items-center space-x-3">
                        <input type="checkbox" id="notify-assignee" name="notify_assignee" class="w-4 h-4 text-purple-600 rounded focus:ring-purple-500">
                        <label for="notify-assignee" class="text-sm text-gray-700">Notify assignee via email</label>
                    </div>
                    
                    <div class="flex items-center space-x-3">
                        <button type="button" id="cancel-task-btn" class="px-4 py-2 text-gray-700 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                            Cancel
                        </button>
                        <button type="submit" class="brand-gradient text-white px-6 py-2 rounded-lg font-medium hover:opacity-90 transition-opacity">
                            <i class="fas fa-plus mr-2"></i>
                            Create Task
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
