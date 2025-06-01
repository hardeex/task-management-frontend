
    <style>
        .brand-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .step-indicator {
            transition: all 0.3s ease;
        }
        .step-indicator.active {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }
        .step-indicator.completed {
            background: #10b981;
            color: white;
        }
        .form-section {
            opacity: 0;
            transform: translateX(20px);
            transition: all 0.4s ease;
        }
        .form-section.active {
            opacity: 1;
            transform: translateX(0);
        }
        .drag-drop-area {
            transition: all 0.3s ease;
        }
        .drag-drop-area:hover {
            border-color: #667eea;
            background-color: #f8faff;
        }
        .floating-save {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            z-index: 1000;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }
    </style>
<div class="bg-gray-50 min-h-screen">
    <!-- Header -->
    <header class="bg-white border-b border-gray-200 sticky top-0 z-40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center space-x-4">
                    <button onclick="history.back()" class="text-gray-600 hover:text-gray-800 transition-colors">
                        <i class="fas fa-arrow-left text-xl"></i>
                    </button>
                    <div>
                        <h1 class="text-2xl font-bold text-gray-800">Create New Project</h1>
                        <p class="text-sm text-gray-600">Set up your project with all the necessary details</p>
                    </div>
                </div>
                <div class="flex items-center space-x-3">
                    <button id="save-draft-btn" class="px-4 py-2 text-gray-700 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                        <i class="fas fa-save mr-2"></i>Save Draft
                    </button>
                    <button id="preview-btn" class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors">
                        <i class="fas fa-eye mr-2"></i>Preview
                    </button>
                </div>
            </div>
        </div>
    </header>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <!-- Progress Sidebar -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 sticky top-24">
                    <h3 class="text-lg font-semibold text-gray-800 mb-6">Project Setup Progress</h3>
                    <div class="space-y-4">
                        <div class="step-indicator active flex items-center p-3 rounded-lg cursor-pointer" data-step="1">
                            <div class="w-8 h-8 rounded-full flex items-center justify-center text-sm font-medium mr-3">1</div>
                            <div>
                                <div class="font-medium text-sm">Basic Information</div>
                                <div class="text-xs opacity-75">Project details</div>
                            </div>
                        </div>
                        <div class="step-indicator flex items-center p-3 rounded-lg cursor-pointer" data-step="2">
                            <div class="w-8 h-8 rounded-full flex items-center justify-center text-sm font-medium mr-3 bg-gray-200">2</div>
                            <div>
                                <div class="font-medium text-sm">Team & Permissions</div>
                                <div class="text-xs opacity-75">Assign team members</div>
                            </div>
                        </div>
                        <div class="step-indicator flex items-center p-3 rounded-lg cursor-pointer" data-step="3">
                            <div class="w-8 h-8 rounded-full flex items-center justify-center text-sm font-medium mr-3 bg-gray-200">3</div>
                            <div>
                                <div class="font-medium text-sm">Timeline & Budget</div>
                                <div class="text-xs opacity-75">Set dates and budget</div>
                            </div>
                        </div>
                        <div class="step-indicator flex items-center p-3 rounded-lg cursor-pointer" data-step="4">
                            <div class="w-8 h-8 rounded-full flex items-center justify-center text-sm font-medium mr-3 bg-gray-200">4</div>
                            <div>
                                <div class="font-medium text-sm">Configuration</div>
                                <div class="text-xs opacity-75">Workflow & settings</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Progress Bar -->
                    <div class="mt-6">
                        <div class="flex items-center justify-between text-sm text-gray-600 mb-2">
                            <span>Completion</span>
                            <span id="progress-percent">25%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div id="progress-bar" class="brand-gradient h-2 rounded-full transition-all duration-300" style="width: 25%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Form -->
            <div class="lg:col-span-3">
                <form id="create-project-form" class="space-y-8">
                    <!-- Step 1: Basic Information -->
                    <div id="step-1" class="form-section active bg-white rounded-xl shadow-sm border border-gray-200 p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-10 h-10 brand-gradient rounded-lg flex items-center justify-center text-white font-bold mr-4">1</div>
                            <div>
                                <h2 class="text-xl font-bold text-gray-800">Basic Information</h2>
                                <p class="text-gray-600">Let's start with the fundamental details of your project</p>
                            </div>
                        </div>

                        <div class="space-y-6">
                            <!-- Project Name -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Project Name <span class="text-red-500">*</span>
                                </label>
                                <input type="text" name="project_name" required 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-lg"
                                       placeholder="Enter a descriptive project name...">
                            </div>

                            <!-- Project Description -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Project Description</label>
                                <div class="relative">
                                    <textarea name="project_description" rows="4" 
                                              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent resize-none"
                                              placeholder="Describe the project goals, scope, and key objectives..."></textarea>
                                    <div class="absolute bottom-3 right-3 text-xs text-gray-400">
                                        <span id="desc-count">0</span>/500
                                    </div>
                                </div>
                            </div>

                            <!-- Project Category and Priority -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Project Category</label>
                                    <select name="project_category" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                                        <option value="">Select Category</option>
                                        <option value="software-development">Software Development</option>
                                        <option value="web-development">Web Development</option>
                                        <option value="mobile-app">Mobile App</option>
                                        <option value="marketing">Marketing Campaign</option>
                                        <option value="research">Research & Development</option>
                                        <option value="design">Design & Creative</option>
                                        <option value="infrastructure">Infrastructure</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Project Priority</label>
                                    <select name="project_priority" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                                        <option value="low">Low Priority</option>
                                        <option value="medium" selected>Medium Priority</option>
                                        <option value="high">High Priority</option>
                                        <option value="critical">Critical</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Project Icon/Color -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-3">Project Icon</label>
                                    <div class="grid grid-cols-6 gap-3">
                                        <button type="button" class="project-icon-btn w-12 h-12 rounded-lg border-2 border-gray-300 flex items-center justify-center hover:border-purple-500 transition-colors" data-icon="fas fa-laptop-code">
                                            <i class="fas fa-laptop-code text-gray-600"></i>
                                        </button>
                                        <button type="button" class="project-icon-btn w-12 h-12 rounded-lg border-2 border-gray-300 flex items-center justify-center hover:border-purple-500 transition-colors" data-icon="fas fa-mobile-alt">
                                            <i class="fas fa-mobile-alt text-gray-600"></i>
                                        </button>
                                        <button type="button" class="project-icon-btn w-12 h-12 rounded-lg border-2 border-gray-300 flex items-center justify-center hover:border-purple-500 transition-colors" data-icon="fas fa-chart-line">
                                            <i class="fas fa-chart-line text-gray-600"></i>
                                        </button>
                                        <button type="button" class="project-icon-btn w-12 h-12 rounded-lg border-2 border-gray-300 flex items-center justify-center hover:border-purple-500 transition-colors" data-icon="fas fa-palette">
                                            <i class="fas fa-palette text-gray-600"></i>
                                        </button>
                                        <button type="button" class="project-icon-btn w-12 h-12 rounded-lg border-2 border-gray-300 flex items-center justify-center hover:border-purple-500 transition-colors" data-icon="fas fa-cog">
                                            <i class="fas fa-cog text-gray-600"></i>
                                        </button>
                                        <button type="button" class="project-icon-btn w-12 h-12 rounded-lg border-2 border-gray-300 flex items-center justify-center hover:border-purple-500 transition-colors" data-icon="fas fa-rocket">
                                            <i class="fas fa-rocket text-gray-600"></i>
                                        </button>
                                    </div>
                                    <input type="hidden" name="project_icon" value="">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-3">Project Color</label>
                                    <div class="grid grid-cols-6 gap-3">
                                        <button type="button" class="project-color-btn w-12 h-12 rounded-lg bg-purple-500 hover:scale-110 transition-transform" data-color="#8b5cf6"></button>
                                        <button type="button" class="project-color-btn w-12 h-12 rounded-lg bg-blue-500 hover:scale-110 transition-transform" data-color="#3b82f6"></button>
                                        <button type="button" class="project-color-btn w-12 h-12 rounded-lg bg-green-500 hover:scale-110 transition-transform" data-color="#10b981"></button>
                                        <button type="button" class="project-color-btn w-12 h-12 rounded-lg bg-yellow-500 hover:scale-110 transition-transform" data-color="#f59e0b"></button>
                                        <button type="button" class="project-color-btn w-12 h-12 rounded-lg bg-red-500 hover:scale-110 transition-transform" data-color="#ef4444"></button>
                                        <button type="button" class="project-color-btn w-12 h-12 rounded-lg bg-pink-500 hover:scale-110 transition-transform" data-color="#ec4899"></button>
                                    </div>
                                    <input type="hidden" name="project_color" value="#8b5cf6">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 2: Team & Permissions -->
                    <div id="step-2" class="form-section bg-white rounded-xl shadow-sm border border-gray-200 p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-10 h-10 bg-gray-200 rounded-lg flex items-center justify-center text-gray-600 font-bold mr-4">2</div>
                            <div>
                                <h2 class="text-xl font-bold text-gray-800">Team & Permissions</h2>
                                <p class="text-gray-600">Assign team members and set their roles</p>
                            </div>
                        </div>

                        <div class="space-y-6">
                            <!-- Project Manager -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Project Manager <span class="text-red-500">*</span>
                                </label>
                                <select name="project_manager" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                                    <option value="">Select Project Manager</option>
                                    <option value="1">John Doe (john@company.com)</option>
                                    <option value="2">Sarah Wilson (sarah@company.com)</option>
                                    <option value="3">Mike Johnson (mike@company.com)</option>
                                    <option value="4" selected>You (current user)</option>
                                </select>
                            </div>

                            <!-- Team Members -->
                            <div>
                                <div class="flex items-center justify-between mb-3">
                                    <label class="block text-sm font-medium text-gray-700">Team Members</label>
                                    <button type="button" id="add-member-btn" class="text-sm text-purple-600 hover:text-purple-800 font-medium">
                                        <i class="fas fa-plus mr-1"></i>Add Member
                                    </button>
                                </div>
                                <div id="team-members-list" class="space-y-3">
                                    <!-- Team member entries will be added here -->
                                </div>
                            </div>

                            <!-- Project Visibility -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-3">Project Visibility</label>
                                <div class="space-y-3">
                                    <label class="flex items-center">
                                        <input type="radio" name="project_visibility" value="private" checked class="w-4 h-4 text-purple-600 focus:ring-purple-500">
                                        <div class="ml-3">
                                            <div class="font-medium text-gray-800">Private</div>
                                            <div class="text-sm text-gray-600">Only team members can view this project</div>
                                        </div>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="radio" name="project_visibility" value="company" class="w-4 h-4 text-purple-600 focus:ring-purple-500">
                                        <div class="ml-3">
                                            <div class="font-medium text-gray-800">Company-wide</div>
                                            <div class="text-sm text-gray-600">All company members can view this project</div>
                                        </div>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="radio" name="project_visibility" value="public" class="w-4 h-4 text-purple-600 focus:ring-purple-500">
                                        <div class="ml-3">
                                            <div class="font-medium text-gray-800">Public</div>
                                            <div class="text-sm text-gray-600">Anyone with the link can view this project</div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 3: Timeline & Budget -->
                    <div id="step-3" class="form-section bg-white rounded-xl shadow-sm border border-gray-200 p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-10 h-10 bg-gray-200 rounded-lg flex items-center justify-center text-gray-600 font-bold mr-4">3</div>
                            <div>
                                <h2 class="text-xl font-bold text-gray-800">Timeline & Budget</h2>
                                <p class="text-gray-600">Set project timeline and budget constraints</p>
                            </div>
                        </div>

                        <div class="space-y-6">
                            <!-- Project Dates -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Start Date</label>
                                    <input type="date" name="start_date" 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Expected End Date</label>
                                    <input type="date" name="end_date" 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                                </div>
                            </div>

                            <!-- Budget Information -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Project Budget</label>
                                    <div class="relative">
                                        <span class="absolute left-3 top-3 text-gray-500">$</span>
                                        <input type="number" name="budget" min="0" step="0.01" 
                                               class="w-full pl-8 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                                               placeholder="0.00">
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Currency</label>
                                    <select name="currency" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                                        <option value="USD">USD ($)</option>
                                        <option value="EUR">EUR (€)</option>
                                        <option value="GBP">GBP (£)</option>
                                        <option value="NGN">NGN (₦)</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Time Estimation -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Estimated Total Hours</label>
                                <input type="number" name="estimated_hours" min="0" step="0.5" 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                                       placeholder="Enter estimated hours for the entire project">
                            </div>
                        </div>
                    </div>

                    <!-- Step 4: Configuration -->
                    <div id="step-4" class="form-section bg-white rounded-xl shadow-sm border border-gray-200 p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-10 h-10 bg-gray-200 rounded-lg flex items-center justify-center text-gray-600 font-bold mr-4">4</div>
                            <div>
                                <h2 class="text-xl font-bold text-gray-800">Configuration & Settings</h2>
                                <p class="text-gray-600">Configure workflow and project-specific settings</p>
                            </div>
                        </div>

                        <div class="space-y-6">
                            <!-- Workflow Template -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-3">Workflow Template</label>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <label class="border border-gray-300 rounded-lg p-4 cursor-pointer hover:border-purple-500 transition-colors">
                                        <input type="radio" name="workflow_template" value="basic" checked class="w-4 h-4 text-purple-600 focus:ring-purple-500 mb-2">
                                        <div class="font-medium text-gray-800">Basic Kanban</div>
                                        <div class="text-sm text-gray-600">To Do → In Progress → Done</div>
                                    </label>
                                    <label class="border border-gray-300 rounded-lg p-4 cursor-pointer hover:border-purple-500 transition-colors">
                                        <input type="radio" name="workflow_template" value="advanced" class="w-4 h-4 text-purple-600 focus:ring-purple-500 mb-2">
                                        <div class="font-medium text-gray-800">Advanced</div>
                                        <div class="text-sm text-gray-600">Backlog → To Do → In Progress → Review → Done</div>
                                    </label>
                                </div>
                            </div>

                            <!-- Project Settings -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-3">Project Settings</label>
                                <div class="space-y-3">
                                    <label class="flex items-center">
                                        <input type="checkbox" name="settings[]" value="time_tracking" class="w-4 h-4 text-purple-600 focus:ring-purple-500 rounded">
                                        <span class="ml-3 text-gray-700">Enable time tracking for tasks</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" name="settings[]" value="notifications" checked class="w-4 h-4 text-purple-600 focus:ring-purple-500 rounded">
                                        <span class="ml-3 text-gray-700">Send email notifications for updates</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" name="settings[]" value="comments" checked class="w-4 h-4 text-purple-600 focus:ring-purple-500 rounded">
                                        <span class="ml-3 text-gray-700">Allow comments on tasks</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" name="settings[]" value="file_attachments" checked class="w-4 h-4 text-purple-600 focus:ring-purple-500 rounded">
                                        <span class="ml-3 text-gray-700">Enable file attachments</span>
                                    </label>
                                </div>
                            </div>

                            <!-- Initial Tasks -->
                            <div>
                                <div class="flex items-center justify-between mb-3">
                                    <label class="block text-sm font-medium text-gray-700">Initial Tasks (Optional)</label>
                                    <button type="button" id="add-initial-task-btn" class="text-sm text-purple-600 hover:text-purple-800 font-medium">
                                        <i class="fas fa-plus mr-1"></i>Add Task
                                    </button>
                                </div>
                                <div id="initial-tasks-list" class="space-y-3">
                                    <!-- Initial tasks will be added here -->
                                </div>
                            </div>

                            <!-- Project Documentation -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-3">Project Documentation</label>
                                <div class="drag-drop-area border-2 border-dashed border-gray-300 rounded-lg p-6 text-center">
                                    <input type="file" name="documentation[]" multiple class="hidden" id="documentation-upload" accept=".pdf,.doc,.docx,.txt,.md">
                                    <label for="documentation-upload" class="cursor-pointer">
                                        <i class="fas fa-cloud-upload-alt text-4xl text-gray-400 mb-3"></i>
                                        <p class="text-gray-600 font-medium">Upload project documentation</p>
                                        <p class="text-sm text-gray-500">Drag and drop files here or click to browse</p>
                                        <p class="text-xs text-gray-400 mt-2">Supported: PDF, DOC, DOCX, TXT, MD (Max 50MB each)</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                        <div class="flex items-center justify-between">
                            <button type="button" id="prev-step-btn" class="px-6 py-3 text-gray-700 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors flex items-center" style="display: none;">
                                <i class="fas fa-arrow-left mr-2"></i>Previous Step
                            </button>
                            <div class="flex items-center space-x-4">
                                <button type="button" id="next-step-btn" class="px-8 py-3 brand-gradient text-white rounded-lg font-medium hover:opacity-90 transition-opacity flex items-center">
                                    Next Step<i class="fas fa-arrow-right ml-2"></i>
                                </button>
                                <button type="submit" id="create-project-btn" class="px-8 py-3 bg-green-600 text-white rounded-lg font-medium hover:bg-green-700 transition-colors flex items-center" style="display: none;">
                                    <i class="fas fa-rocket mr-2"></i>Create Project
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Floating Action Buttons -->
    <div class="floating-save">
        <button id="floating-save-btn" class="w-14 h-14 brand-gradient text-white rounded-full shadow-lg hover:shadow-xl transition-shadow flex items-center justify-center">
            <i class="fas fa-save text-xl"></i>
        </button>
    </div>

    <script>
        let currentStep = 1;
        const totalSteps = 4;

        // Initialize the form
        document.addEventListener('DOMContentLoaded', function() {
            updateStepUI();
            bindEventListeners();
            initializeFormFeatures();
        });

        function bindEventListeners() {
            // Step navigation
            document.getElementById('next-step-btn').addEventListener('click', nextStep);
            document.getElementById('prev-step-btn').addEventListener('click', prevStep);
            
            // Step indicators
            document.querySelectorAll('.step-indicator').forEach(indicator => {
                indicator.addEventListener('click', (e) => {
                    const step = parseInt(e.currentTarget.dataset.step);
                    if (step <= getCompletedSteps() + 1) {
                        goToStep(step);
                    }
                });
            });

            // Form submission
            document.getElementById('create-project-form').addEventListener('submit', handleFormSubmission);

            // Project icon selection
            document.querySelectorAll('.project-icon-btn').forEach(btn => {
                btn.addEventListener('click', (e) => {
                    e.preventDefault();
                    document.querySelectorAll('.project-icon-btn').forEach(b => b.classList.remove('border-purple-500', 'bg-purple-50'));
                    btn.classList.add('border-purple-500', 'bg-purple-50');
                    document.querySelector('input[name="project_icon"]').value = btn.dataset.icon;
                });
            });

            // Project color selection
            document.querySelectorAll('.project-color-btn').forEach(btn => {
                btn.addEventListener('click', (e) => {
                    e.preventDefault();
                    document.querySelectorAll('.project-color-btn').forEach(b => b.classList.remove('ring-4', 'ring-offset-2'));
                    btn.classList.add('ring-4', 'ring-offset-2', 'ring-gray-400');
                    document.querySelector('input[name="project_color"]').value = btn.dataset.color;
                });
            });

            // Add team member
            document.getElementById('add-member-btn').addEventListener('click', addTeamMember);

            // Add initial task
            document.getElementById('add-initial-task-btn').addEventListener('click', addInitialTask);

            // Save draft and floating save
            document.getElementById('save-draft-btn').addEventListener('click', saveDraft);
            document.getElementById('floating-save-btn').addEventListener('click', saveDraft);

            // Description character count
            const descTextarea = document.querySelector('textarea[name="project_description"]');
            if (descTextarea) {
                descTextarea.addEventListener('input', updateCharCount);
            }

            // File upload handling
            setupFileUpload();
        }

        function nextStep() {
            if (validateCurrentStep() && currentStep < totalSteps) {
                currentStep++;
                updateStepUI();
                updateProgress();
            }
        }

        function prevStep() {
            if (currentStep > 1) {
                currentStep--;
                updateStepUI();
                updateProgress();
            }
        }

        function goToStep(step) {
            if (step >= 1 && step <= totalSteps) {
                currentStep = step;
                updateStepUI();
                updateProgress();
            }
        }

        function updateStepUI() {
            // Hide all steps
            document.querySelectorAll('.form-section').forEach((section, index) => {
                section.classList.remove('active');
                if (index + 1 === currentStep) {
                    setTimeout(() => section.classList.add('active'), 100);
                }
            });

            // Update step indicators
            document.querySelectorAll('.step-indicator').forEach((indicator, index) => {
                const stepNum = index + 1;
                const stepDiv = indicator.querySelector('div:first-child');
                
                indicator.classList.remove('active', 'completed');
                
                if (stepNum < currentStep) {
                    indicator.classList.add('completed');
                    stepDiv.innerHTML = '<i class="fas fa-check text-sm"></i>';
                } else if (stepNum === currentStep) {
                    indicator.classList.add('active');
                    stepDiv.textContent = stepNum;
                } else {
                    stepDiv.textContent = stepNum;
                }
            });

            // Update navigation buttons
            const prevBtn = document.getElementById('prev-step-btn');
            const nextBtn = document.getElementById('next-step-btn');
            const createBtn = document.getElementById('create-project-btn');

            prevBtn.style.display = currentStep > 1 ? 'flex' : 'none';
            
            if (currentStep === totalSteps) {
                nextBtn.style.display = 'none';
                createBtn.style.display = 'flex';
            } else {
                nextBtn.style.display = 'flex';
                createBtn.style.display = 'none';
            }
        }

        function updateProgress() {
            const progress = (currentStep / totalSteps) * 100;
            document.getElementById('progress-bar').style.width = progress + '%';
            document.getElementById('progress-percent').textContent = Math.round(progress) + '%';
        }

        function validateCurrentStep() {
            const currentSection = document.getElementById(`step-${currentStep}`);
            const requiredFields = currentSection.querySelectorAll('[required]');
            
            for (let field of requiredFields) {
                if (!field.value.trim()) {
                    field.focus();
                    showNotification('Please fill in all required fields', 'error');
                    return false;
                }
            }
            
            // Additional validation based on step
            if (currentStep === 1) {
                const projectName = document.querySelector('input[name="project_name"]').value;
                if (projectName.length < 3) {
                    showNotification('Project name must be at least 3 characters long', 'error');
                    return false;
                }
            }
            
            return true;
        }

        function getCompletedSteps() {
            // Logic to determine which steps have been completed
            return currentStep - 1;
        }

        function addTeamMember() {
            const membersList = document.getElementById('team-members-list');
            const memberCount = membersList.children.length;
            
            const memberHTML = `
                <div class="flex items-center space-x-4 p-4 border border-gray-200 rounded-lg">
                    <select name="team_members[${memberCount}][user_id]" class="flex-1 px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                        <option value="">Select Team Member</option>
                        <option value="1">John Doe (john@company.com)</option>
                        <option value="2">Sarah Wilson (sarah@company.com)</option>
                        <option value="3">Mike Johnson (mike@company.com)</option>
                        <option value="4">Emma Davis (emma@company.com)</option>
                        <option value="5">Alex Brown (alex@company.com)</option>
                    </select>
                    <select name="team_members[${memberCount}][role]" class="px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                        <option value="member">Member</option>
                        <option value="lead">Team Lead</option>
                        <option value="reviewer">Reviewer</option>
                        <option value="observer">Observer</option>
                    </select>
                    <button type="button" class="remove-member-btn text-red-500 hover:text-red-700 p-2">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            `;
            
            membersList.insertAdjacentHTML('beforeend', memberHTML);
            
            // Bind remove button
            const removeBtn = membersList.lastElementChild.querySelector('.remove-member-btn');
            removeBtn.addEventListener('click', () => {
                removeBtn.closest('.flex').remove();
            });
        }

        function addInitialTask() {
            const tasksList = document.getElementById('initial-tasks-list');
            const taskCount = tasksList.children.length;
            
            const taskHTML = `
                <div class="flex items-center space-x-4 p-4 border border-gray-200 rounded-lg">
                    <input type="text" name="initial_tasks[${taskCount}][title]" 
                           class="flex-1 px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                           placeholder="Task title...">
                    <select name="initial_tasks[${taskCount}][priority]" class="px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                        <option value="low">Low</option>
                        <option value="medium" selected>Medium</option>
                        <option value="high">High</option>
                    </select>
                    <button type="button" class="remove-task-btn text-red-500 hover:text-red-700 p-2">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            `;
            
            tasksList.insertAdjacentHTML('beforeend', taskHTML);
            
            // Bind remove button
            const removeBtn = tasksList.lastElementChild.querySelector('.remove-task-btn');
            removeBtn.addEventListener('click', () => {
                removeBtn.closest('.flex').remove();
            });
        }

        function updateCharCount() {
            const textarea = document.querySelector('textarea[name="project_description"]');
            const counter = document.getElementById('desc-count');
            const count = textarea.value.length;
            counter.textContent = count;
            
            if (count > 450) {
                counter.classList.add('text-red-500');
            } else {
                counter.classList.remove('text-red-500');
            }
        }

        function setupFileUpload() {
            const uploadArea = document.querySelector('.drag-drop-area');
            const fileInput = document.getElementById('documentation-upload');
            
            // Prevent default drag behaviors
            ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                uploadArea.addEventListener(eventName, preventDefaults, false);
                document.body.addEventListener(eventName, preventDefaults, false);
            });
            
            // Highlight drop area when item is dragged over it
            ['dragenter', 'dragover'].forEach(eventName => {
                uploadArea.addEventListener(eventName, highlight, false);
            });
            
            ['dragleave', 'drop'].forEach(eventName => {
                uploadArea.addEventListener(eventName, unhighlight, false);
            });
            
            // Handle dropped files
            uploadArea.addEventListener('drop', handleDrop, false);
            
            function preventDefaults(e) {
                e.preventDefault();
                e.stopPropagation();
            }
            
            function highlight(e) {
                uploadArea.classList.add('border-purple-400', 'bg-purple-50');
            }
            
            function unhighlight(e) {
                uploadArea.classList.remove('border-purple-400', 'bg-purple-50');
            }
            
            function handleDrop(e) {
                const dt = e.dataTransfer;
                const files = dt.files;
                fileInput.files = files;
                handleFiles(files);
            }
            
            fileInput.addEventListener('change', (e) => {
                handleFiles(e.target.files);
            });
            
            function handleFiles(files) {
                ([...files]).forEach(uploadFile);
            }
            
            function uploadFile(file) {
                // Handle file upload preview/validation here
                console.log('File selected:', file.name);
                showNotification(`File "${file.name}" selected for upload`, 'success');
            }
        }

        function handleFormSubmission(e) {
            e.preventDefault();
            
            if (!validateCurrentStep()) {
                return;
            }
            
            // Show loading state
            const createBtn = document.getElementById('create-project-btn');
            const originalText = createBtn.innerHTML;
            createBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Creating Project...';
            createBtn.disabled = true;
            
            // Simulate form submission
            setTimeout(() => {
                showNotification('Project created successfully!', 'success');
                
                // Reset button
                createBtn.innerHTML = originalText;
                createBtn.disabled = false;
                
                // Redirect or handle success
                setTimeout(() => {
                    // window.location.href = '/projects';
                    console.log('Redirecting to projects page...');
                }, 1500);
            }, 2000);
        }

        function saveDraft() {
            showNotification('Draft saved successfully!', 'success');
            // Simulate saving draft to server
        }

        function showNotification(message, type = 'info') {
            // Create notification element
            const notification = document.createElement('div');
            notification.className = `fixed top-4 right-4 z-50 px-6 py-4 rounded-lg shadow-lg transition-all duration-300 transform translate-x-full`;
            
            const bgColor = type === 'success' ? 'bg-green-500' : 
                           type === 'error' ? 'bg-red-500' : 'bg-blue-500';
            
            notification.classList.add(bgColor);
            notification.innerHTML = `
                <div class="flex items-center text-white">
                    <i class="fas fa-${type === 'success' ? 'check' : type === 'error' ? 'times' : 'info'} mr-2"></i>
                    <span>${message}</span>
                </div>
            `;
            
            document.body.appendChild(notification);
            
            // Animate in
            setTimeout(() => {
                notification.classList.remove('translate-x-full');
            }, 100);
            
            // Remove after delay
            setTimeout(() => {
                notification.classList.add('translate-x-full');
                setTimeout(() => {
                    document.body.removeChild(notification);
                }, 300);
            }, 3000);
        }

        function initializeFormFeatures() {
            // Set default project icon
            document.querySelector('.project-icon-btn').click();
            
            // Set default project color
            document.querySelector('.project-color-btn').click();
            
            // Set current date as default start date
            const today = new Date().toISOString().split('T')[0];
            document.querySelector('input[name="start_date"]').value = today;
        }
        // ... (previous JavaScript code remains the same until the initializeFormFeatures function)

        function initializeFormFeatures() {
            // Set default project icon
            document.querySelector('.project-icon-btn').click();
            
            // Set default project color
            document.querySelector('.project-color-btn').click();
            
            // Set current date as default start date
            const today = new Date().toISOString().split('T')[0];
            document.querySelector('input[name="start_date"]').value = today;
            
            // Set default end date to 30 days from now
            const futureDate = new Date();
            futureDate.setDate(futureDate.getDate() + 30);
            document.querySelector('input[name="end_date"]').value = futureDate.toISOString().split('T')[0];
            
            // Initialize character count
            updateCharCount();
            
            // Add one team member by default
            addTeamMember();
            
            // Add one initial task by default
            addInitialTask();
        }

        // Add form validation for specific fields
        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        // Add support for pressing Enter to move to next step
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' && e.target.tagName !== 'TEXTAREA') {
                e.preventDefault();
                if (currentStep < totalSteps) {
                    nextStep();
                }
            }
        });

        // Add responsive behavior for smaller screens
        function handleResponsiveChanges() {
            const formSections = document.querySelectorAll('.form-section');
            if (window.innerWidth < 1024) {
                formSections.forEach(section => {
                    section.classList.remove('active');
                });
                document.getElementById(`step-${currentStep}`).classList.add('active');
            } else {
                formSections.forEach(section => {
                    section.classList.add('active');
                });
            }
        }

        // Initialize responsive behavior
        window.addEventListener('resize', handleResponsiveChanges);
        handleResponsiveChanges();

        // Add confirmation dialog when leaving the page with unsaved changes
        window.addEventListener('beforeunload', function(e) {
            // Check if form has been modified
            const form = document.getElementById('create-project-form');
            let formModified = false;
            
            // Simple check - in a real app you'd want more sophisticated tracking
            if (form.querySelector('input[name="project_name"]').value !== '') {
                formModified = true;
            }
            
            if (formModified) {
                e.preventDefault();
                e.returnValue = 'You have unsaved changes. Are you sure you want to leave?';
                return e.returnValue;
            }
        });

        // Add support for keyboard navigation between steps
        document.addEventListener('keydown', function(e) {
            if (e.ctrlKey && e.key === 'ArrowRight') {
                e.preventDefault();
                nextStep();
            } else if (e.ctrlKey && e.key === 'ArrowLeft') {
                e.preventDefault();
                prevStep();
            }
        });

        // Add support for saving with Ctrl+S
        document.addEventListener('keydown', function(e) {
            if ((e.ctrlKey || e.metaKey) && e.key === 's') {
                e.preventDefault();
                saveDraft();
            }
        });

        // Initialize tooltips for icons
        function initializeTooltips() {
            const tooltipElements = document.querySelectorAll('[data-tooltip]');
            tooltipElements.forEach(el => {
                el.addEventListener('mouseenter', showTooltip);
                el.addEventListener('mouseleave', hideTooltip);
            });
        }

        function showTooltip(e) {
            const tooltipText = e.currentTarget.getAttribute('data-tooltip');
            const tooltip = document.createElement('div');
            tooltip.className = 'absolute z-50 bg-gray-800 text-white text-xs rounded py-1 px-2 whitespace-nowrap';
            tooltip.textContent = tooltipText;
            tooltip.style.top = `${e.currentTarget.offsetTop - 30}px`;
            tooltip.style.left = `${e.currentTarget.offsetLeft + e.currentTarget.offsetWidth/2 - tooltip.offsetWidth/2}px`;
            tooltip.id = 'current-tooltip';
            document.body.appendChild(tooltip);
        }

        function hideTooltip() {
            const tooltip = document.getElementById('current-tooltip');
            if (tooltip) {
                tooltip.remove();
            }
        }

        // Call initialization functions
        initializeFormFeatures();
        initializeTooltips();
    </script>
</div>
