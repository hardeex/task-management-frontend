<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks - TaskFlow</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            /* Primary Brand Colors */
            --task-primary: #8b5cf6;     /* Purple-500 */
            --task-primary-dark: #7c3aed; /* Purple-600 */
            --task-primary-light: #a78bfa; /* Purple-400 */
            --task-secondary: #3b82f6;   /* Blue-500 */
            --task-secondary-dark: #2563eb; /* Blue-600 */
            --task-secondary-light: #60a5fa; /* Blue-400 */
            
            /* Gradient Combinations */
            --task-gradient: linear-gradient(135deg, var(--task-secondary-dark) 0%, var(--task-primary-dark) 100%);
            --task-gradient-hover: linear-gradient(135deg, var(--task-secondary) 0%, var(--task-primary) 100%);
            --task-gradient-light: linear-gradient(135deg, var(--task-secondary-light) 0%, var(--task-primary-light) 100%);
            
            /* Status Colors */
            --task-success: #10b981;
            --task-warning: #f59e0b;
            --task-error: #ef4444;
            --task-info: #06b6d4;
            
            /* Neutral Colors */
            --task-gray-50: #f9fafb;
            --task-gray-100: #f3f4f6;
            --task-gray-200: #e5e7eb;
            --task-gray-300: #d1d5db;
            --task-gray-600: #4b5563;
            --task-gray-700: #374151;
            --task-gray-800: #1f2937;
            --task-gray-900: #111827;
        }

        .brand-gradient {
            background: var(--task-gradient);
        }
        
        .brand-gradient-hover:hover {
            background: var(--task-gradient-hover);
        }
        
        .brand-gradient-light {
            background: var(--task-gradient-light);
        }
        
        .sidebar-active {
            background: var(--task-gradient-light);
            color: white;
        }
        
        .task-card {
            transition: all 0.3s ease;
        }
        
        .task-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        
        .priority-high { background-color: #fee2e2; color: #dc2626; }
        .priority-medium { background-color: #fef3c7; color: #d97706; }
        .priority-low { background-color: #ecfdf5; color: #059669; }
        
        .status-todo { background-color: #e5e7eb; color: #4b5563; }
        .status-in-progress { background-color: #dbeafe; color: #1d4ed8; }
        .status-review { background-color: #fef3c7; color: #d97706; }
        .status-done { background-color: #dcfce7; color: #16a34a; }
        
        .task-badge {
            font-size: 0.75rem;
            padding: 0.25rem 0.5rem;
            border-radius: 9999px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
                transition: transform 0.3s ease;
            }
            
            .sidebar.active {
                transform: translateX(0);
            }
        }
    </style>
</head>
<body class="bg-gray-100 font-sans">
    <!-- Mobile Menu Button -->
    <div class="lg:hidden fixed top-4 left-4 z-50">
        <button id="mobile-menu-btn" class="bg-white p-3 rounded-lg shadow-lg">
            <i class="fas fa-bars text-gray-700"></i>
        </button>
    </div>

    <!-- Sidebar -->
    <div id="sidebar" class="sidebar fixed left-0 top-0 h-full w-64 bg-white shadow-xl z-40 lg:translate-x-0">
        <div class="p-6 border-b border-gray-200">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 brand-gradient rounded-lg flex items-center justify-center">
                    <i class="fas fa-tasks text-white text-lg"></i>
                </div>
                <div>
                    <h1 class="text-xl font-bold text-gray-800">TaskFlow</h1>
                    <p class="text-sm text-gray-500">Project Manager</p>
                </div>
            </div>
        </div>
        
        <nav class="p-4">
            <ul class="space-y-2">
                <li><a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-100 transition-colors">
                    <i class="fas fa-chart-pie w-5"></i>
                    <span>Dashboard</span>
                </a></li>
                <li><a href="#" class="sidebar-active flex items-center space-x-3 p-3 rounded-lg transition-colors">
                    <i class="fas fa-tasks w-5"></i>
                    <span>Tasks</span>
                </a></li>
                <li><a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-100 transition-colors">
                    <i class="fas fa-folder w-5"></i>
                    <span>Projects</span>
                </a></li>
                <li><a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-100 transition-colors">
                    <i class="fas fa-users w-5"></i>
                    <span>Team</span>
                </a></li>
                <li><a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-100 transition-colors">
                    <i class="fas fa-calendar w-5"></i>
                    <span>Calendar</span>
                </a></li>
                <li><a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-100 transition-colors">
                    <i class="fas fa-chart-bar w-5"></i>
                    <span>Reports</span>
                </a></li>
                <li><a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-100 transition-colors">
                    <i class="fas fa-cog w-5"></i>
                    <span>Settings</span>
                </a></li>
            </ul>
        </nav>
        
        <!-- User Profile -->
        <div class="absolute bottom-0 left-0 right-0 p-4 border-t border-gray-200">
            <div class="flex items-center space-x-3">
                <img src="https://ui-avatars.com/api/?name=John+Doe&background=8b5cf6&color=fff" 
                     alt="User" class="w-10 h-10 rounded-full">
                <div class="flex-1">
                    <p class="text-sm font-medium text-gray-800">John Doe</p>
                    <p class="text-xs text-gray-500">Administrator</p>
                </div>
                <button class="text-gray-400 hover:text-gray-600">
                    <i class="fas fa-sign-out-alt"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="lg:ml-64 min-h-screen">
        <!-- Header -->
        <header class="bg-white shadow-sm border-b border-gray-200">
            <!-- Breadcrumb -->
            <div class="px-4 lg:px-6 py-3 border-b border-gray-100">
                <nav class="flex items-center space-x-2 text-sm">
                    <a href="#" class="text-gray-500 hover:text-gray-700">Tasks</a>
                    <i class="fas fa-chevron-right text-gray-400 text-xs"></i>
                    <span class="text-gray-800 font-medium">All Tasks</span>
                </nav>
            </div>
            
            <!-- Tasks Header -->
            <div class="p-4 lg:p-6">
                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
                    <div class="lg:ml-0 ml-12">
                        <h1 class="text-3xl font-bold text-gray-800 mb-2">Task Management</h1>
                        <p class="text-gray-600 mb-4">View, create, and manage all your tasks in one place</p>
                        
                        <!-- Task Stats -->
                        <div class="flex flex-wrap items-center space-x-6 text-sm text-gray-600">
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-tasks text-purple-500"></i>
                                <span>24 total tasks</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-circle-notch text-blue-500"></i>
                                <span>8 in progress</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-check-circle text-green-500"></i>
                                <span>12 completed</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-exclamation-triangle text-red-500"></i>
                                <span>4 overdue</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex items-center space-x-3">
                        <!-- Action Buttons -->
                        <button class="px-4 py-2 text-gray-700 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                            <i class="fas fa-filter mr-2"></i>
                            Filter
                        </button>
                        <button id="create-task-btn" class="brand-gradient text-white px-4 py-2 rounded-lg font-medium hover:opacity-90 transition-opacity">
                            <i class="fas fa-plus mr-2"></i>
                            Create Task
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Tasks Content -->
        <main class="p-4 lg:p-6">
            <!-- Tabs Navigation -->
            <div class="bg-white rounded-lg shadow-sm mb-6">
                <div class="border-b border-gray-200">
                    <nav class="flex space-x-8 px-6">
                        <button class="tab-button active py-4 px-2 border-b-2 border-purple-500 font-medium text-sm text-purple-600 transition-colors" data-tab="all-tasks">
                            <i class="fas fa-list mr-2"></i>All Tasks
                        </button>
                        <button class="tab-button py-4 px-2 border-b-2 border-transparent font-medium text-sm text-gray-500 hover:text-gray-700 transition-colors" data-tab="my-tasks">
                            <i class="fas fa-user mr-2"></i>My Tasks
                        </button>
                        <button class="tab-button py-4 px-2 border-b-2 border-transparent font-medium text-sm text-gray-500 hover:text-gray-700 transition-colors" data-tab="assigned">
                            <i class="fas fa-users mr-2"></i>Assigned
                        </button>
                        <button class="tab-button py-4 px-2 border-b-2 border-transparent font-medium text-sm text-gray-500 hover:text-gray-700 transition-colors" data-tab="completed">
                            <i class="fas fa-check-circle mr-2"></i>Completed
                        </button>
                    </nav>
                </div>
            </div>

            <!-- Task Filters -->
            <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between space-y-4 md:space-y-0">
                    <div class="relative flex-1 md:max-w-md">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-search text-gray-400"></i>
                        </div>
                        <input type="text" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg bg-gray-50 focus:ring-2 focus:ring-purple-500 focus:border-transparent" placeholder="Search tasks...">
                    </div>
                    <div class="flex items-center space-x-3">
                        <select id="status-filter" class="border border-gray-300 rounded-lg px-3 py-2 text-sm">
                            <option value="">All Statuses</option>
                            <option value="todo">To Do</option>
                            <option value="in-progress">In Progress</option>
                            <option value="review">In Review</option>
                            <option value="done">Done</option>
                        </select>
                        <select id="priority-filter" class="border border-gray-300 rounded-lg px-3 py-2 text-sm">
                            <option value="">All Priorities</option>
                            <option value="high">High</option>
                            <option value="medium">Medium</option>
                            <option value="low">Low</option>
                        </select>
                        <select id="project-filter" class="border border-gray-300 rounded-lg px-3 py-2 text-sm">
                            <option value="">All Projects</option>
                            <option value="ecommerce">E-commerce Platform</option>
                            <option value="marketing">Marketing Website</option>
                            <option value="mobile">Mobile App</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <!-- Tasks List -->
            <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                <!-- Tasks Table Header -->
                <div class="grid grid-cols-12 gap-4 px-6 py-3 bg-gray-50 border-b border-gray-200">
                    <div class="col-span-5 md:col-span-6">
                        <span class="text-xs font-medium text-gray-500 uppercase tracking-wider">Task</span>
                    </div>
                    <div class="col-span-2 md:col-span-1 text-center">
                        <span class="text-xs font-medium text-gray-500 uppercase tracking-wider">Priority</span>
                    </div>
                    <div class="col-span-2 md:col-span-1 text-center">
                        <span class="text-xs font-medium text-gray-500 uppercase tracking-wider">Status</span>
                    </div>
                    <div class="col-span-2 hidden md:block text-center">
                        <span class="text-xs font-medium text-gray-500 uppercase tracking-wider">Due Date</span>
                    </div>
                    <div class="col-span-1 hidden md:block text-center">
                        <span class="text-xs font-medium text-gray-500 uppercase tracking-wider">Assignee</span>
                    </div>
                </div>
                
                <!-- Task Items -->
                <div class="divide-y divide-gray-200">
                    <!-- Task 1 -->
                    <div class="task-card grid grid-cols-12 gap-4 px-6 py-4 hover:bg-gray-50 cursor-pointer" data-task-id="1">
                        <div class="col-span-5 md:col-span-6 flex items-center">
                            <div class="flex items-center">
                                <input type="checkbox" class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded">
                            </div>
                            <div class="ml-3">
                                <div class="flex items-center">
                                    <span class="text-sm font-medium text-gray-900">Implement payment gateway</span>
                                    <span class="ml-2 px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">E-commerce</span>
                                </div>
                                <p class="text-xs text-gray-500 mt-1">#TASK-101 · Created 2 days ago</p>
                            </div>
                        </div>
                        <div class="col-span-2 md:col-span-1 flex items-center justify-center">
                            <span class="priority-high task-badge">High</span>
                        </div>
                        <div class="col-span-2 md:col-span-1 flex items-center justify-center">
                            <span class="status-in-progress task-badge">In Progress</span>
                        </div>
                        <div class="col-span-2 hidden md:flex items-center justify-center">
                            <span class="text-sm text-gray-900">Jun 15</span>
                        </div>
                        <div class="col-span-1 hidden md:flex items-center justify-center">
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Sarah Wilson" class="w-6 h-6 rounded-full">
                        </div>
                    </div>
                    
                    <!-- Task 2 -->
                    <div class="task-card grid grid-cols-12 gap-4 px-6 py-4 hover:bg-gray-50 cursor-pointer" data-task-id="2">
                        <div class="col-span-5 md:col-span-6 flex items-center">
                            <div class="flex items-center">
                                <input type="checkbox" class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded">
                            </div>
                            <div class="ml-3">
                                <div class="flex items-center">
                                    <span class="text-sm font-medium text-gray-900">Redesign user dashboard</span>
                                    <span class="ml-2 px-2 py-1 bg-green-100 text-green-800 text-xs rounded-full">Mobile</span>
                                </div>
                                <p class="text-xs text-gray-500 mt-1">#TASK-102 · Created 1 week ago</p>
                            </div>
                        </div>
                        <div class="col-span-2 md:col-span-1 flex items-center justify-center">
                            <span class="priority-medium task-badge">Medium</span>
                        </div>
                        <div class="col-span-2 md:col-span-1 flex items-center justify-center">
                            <span class="status-review task-badge">Review</span>
                        </div>
                        <div class="col-span-2 hidden md:flex items-center justify-center">
                            <span class="text-sm text-gray-900">Jun 10</span>
                        </div>
                        <div class="col-span-1 hidden md:flex items-center justify-center">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Mike Johnson" class="w-6 h-6 rounded-full">
                        </div>
                    </div>
                    
                    <!-- Task 3 -->
                    <div class="task-card grid grid-cols-12 gap-4 px-6 py-4 hover:bg-gray-50 cursor-pointer" data-task-id="3">
                        <div class="col-span-5 md:col-span-6 flex items-center">
                            <div class="flex items-center">
                                <input type="checkbox" class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded" checked>
                            </div>
                            <div class="ml-3">
                                <div class="flex items-center">
                                    <span class="text-sm font-medium text-gray-900 line-through">Update documentation</span>
                                    <span class="ml-2 px-2 py-1 bg-purple-100 text-purple-800 text-xs rounded-full">Marketing</span>
                                </div>
                                <p class="text-xs text-gray-500 mt-1">#TASK-103 · Created 3 days ago</p>
                            </div>
                        </div>
                        <div class="col-span-2 md:col-span-1 flex items-center justify-center">
                            <span class="priority-low task-badge">Low</span>
                        </div>
                        <div class="col-span-2 md:col-span-1 flex items-center justify-center">
                            <span class="status-done task-badge">Done</span>
                        </div>
                        <div class="col-span-2 hidden md:flex items-center justify-center">
                            <span class="text-sm text-gray-900">Jun 5</span>
                        </div>
                        <div class="col-span-1 hidden md:flex items-center justify-center">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Emma Davis" class="w-6 h-6 rounded-full">
                        </div>
                    </div>
                    
                    <!-- Task 4 -->
                    <div class="task-card grid grid-cols-12 gap-4 px-6 py-4 hover:bg-gray-50 cursor-pointer" data-task-id="4">
                        <div class="col-span-5 md:col-span-6 flex items-center">
                            <div class="flex items-center">
                                <input type="checkbox" class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded">
                            </div>
                            <div class="ml-3">
                                <div class="flex items-center">
                                    <span class="text-sm font-medium text-gray-900">Fix login authentication bug</span>
                                    <span class="ml-2 px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">E-commerce</span>
                                </div>
                                <p class="text-xs text-gray-500 mt-1">#TASK-104 · Created yesterday</p>
                            </div>
                        </div>
                        <div class="col-span-2 md:col-span-1 flex items-center justify-center">
                            <span class="priority-high task-badge">High</span>
                        </div>
                        <div class="col-span-2 md:col-span-1 flex items-center justify-center">
                            <span class="status-todo task-badge">To Do</span>
                        </div>
                        <div class="col-span-2 hidden md:flex items-center justify-center">
                            <span class="text-sm text-red-600">Jun 8 (Overdue)</span>
                        </div>
                        <div class="col-span-1 hidden md:flex items-center justify-center">
                            <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Alex Brown" class="w-6 h-6 rounded-full">
                        </div>
                    </div>
                    
                    <!-- Task 5 -->
                    <div class="task-card grid grid-cols-12 gap-4 px-6 py-4 hover:bg-gray-50 cursor-pointer" data-task-id="5">
                        <div class="col-span-5 md:col-span-6 flex items-center">
                            <div class="flex items-center">
                                <input type="checkbox" class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded">
                            </div>
                            <div class="ml-3">
                                <div class="flex items-center">
                                    <span class="text-sm font-medium text-gray-900">Create API endpoints for products</span>
                                    <span class="ml-2 px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">E-commerce</span>
                                </div>
                                <p class="text-xs text-gray-500 mt-1">#TASK-105 · Created 5 days ago</p>
                            </div>
                        </div>
                        <div class="col-span-2 md:col-span-1 flex items-center justify-center">
                            <span class="priority-medium task-badge">Medium</span>
                        </div>
                        <div class="col-span-2 md:col-span-1 flex items-center justify-center">
                            <span class="status-in-progress task-badge">In Progress</span>
                        </div>
                        <div class="col-span-2 hidden md:flex items-center justify-center">
                            <span class="text-sm text-gray-900">Jun 18</span>
                        </div>
                        <div class="col-span-1 hidden md:flex items-center justify-center">
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Sarah Wilson" class="w-6 h-6 rounded-full">
                        </div>
                    </div>
                </div>
                
                <!-- Pagination -->
                <div class="bg-gray-50 px-6 py-3 flex items-center justify-between border-t border-gray-200">
                    <div class="flex-1 flex justify-between sm:hidden">
                        <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                            Previous
                        </a>
                        <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                            Next
                        </a>
                    </div>
                    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                        <div>
                            <p class="text-sm text-gray-700">
                                Showing <span class="font-medium">1</span> to <span class="font-medium">5</span> of <span class="font-medium">24</span> tasks
                            </p>
                        </div>
                        <div>
                            <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                    <span class="sr-only">Previous</span>
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                                <a href="#" aria-current="page" class="z-10 bg-purple-50 border-purple-500 text-purple-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                    1
                                </a>
                                <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                    2
                                </a>
                                <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                    3
                                </a>
                                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                    <span class="sr-only">Next</span>
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Task Detail Modal -->
    <div id="task-detail-modal" class="fixed inset-0 z-50 hidden overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-4xl sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mt-3 text-center sm:mt-0 sm:text-left w-full">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="task-title">
                                        Implement payment gateway
                                    </h3>
                                    <p class="text-sm text-gray-500 mt-1">#TASK-101 · Created by Alex Brown on Jun 5, 2023</p>
                                </div>
                                <div class="flex space-x-2">
                                    <span class="priority-high task-badge">High</span>
                                    <span class="status-in-progress task-badge">In Progress</span>
                                </div>
                            </div>
                            
                            <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-6">
                                <!-- Task Details -->
                                <div class="col-span-2">
                                    <h4 class="text-sm font-medium text-gray-800 mb-3">Description</h4>
                                    <div class="prose prose-sm max-w-none text-gray-600">
                                        <p>Integrate Stripe payment gateway into the e-commerce platform to enable secure credit card transactions. The implementation should support:</p>
                                        <ul>
                                            <li>Credit/debit card payments</li>
                                            <li>Apple Pay and Google Pay</li>
                                            <li>Subscription billing</li>
                                            <li>PCI compliance</li>
                                        </ul>
                                        <p>Document all API endpoints and provide test cases for the QA team.</p>
                                    </div>
                                    
                                    <h4 class="text-sm font-medium text-gray-800 mt-6 mb-3">Comments</h4>
                                    <div class="space-y-4">
                                        <div class="flex items-start space-x-3">
                                            <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Alex Brown" class="w-8 h-8 rounded-full">
                                            <div class="flex-1 bg-gray-50 p-3 rounded-lg">
                                                <div class="flex items-center justify-between">
                                                    <p class="text-sm font-medium text-gray-800">Alex Brown</p>
                                                    <p class="text-xs text-gray-500">2 hours ago</p>
                                                </div>
                                                <p class="text-sm text-gray-600 mt-1">Have you checked the API documentation I shared? Let me know if you need any clarification.</p>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-3">
                                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Sarah Wilson" class="w-8 h-8 rounded-full">
                                            <div class="flex-1 bg-gray-50 p-3 rounded-lg">
                                                <div class="flex items-center justify-between">
                                                    <p class="text-sm font-medium text-gray-800">Sarah Wilson</p>
                                                    <p class="text-xs text-gray-500">1 hour ago</p>
                                                </div>
                                                <p class="text-sm text-gray-600 mt-1">Yes, I've reviewed it. The subscription part seems a bit unclear. Can we schedule a quick call tomorrow?</p>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-3">
                                            <img src="https://ui-avatars.com/api/?name=John+Doe&background=8b5cf6&color=fff" alt="You" class="w-8 h-8 rounded-full">
                                            <div class="flex-1">
                                                <textarea rows="3" class="block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm" placeholder="Add a comment..."></textarea>
                                                <button class="mt-2 brand-gradient text-white px-4 py-2 rounded-md text-sm font-medium hover:opacity-90">
                                                    Post Comment
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Task Meta -->
                                <div class="col-span-1">
                                    <div class="space-y-6">
                                        <div>
                                            <h4 class="text-sm font-medium text-gray-800 mb-3">Details</h4>
                                            <div class="space-y-3">
                                                <div class="flex items-center justify-between">
                                                    <span class="text-sm text-gray-600">Assignee</span>
                                                    <div class="flex items-center">
                                                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Sarah Wilson" class="w-5 h-5 rounded-full mr-2">
                                                        <span class="text-sm font-medium text-gray-800">Sarah Wilson</span>
                                                    </div>
                                                </div>
                                                <div class="flex items-center justify-between">
                                                    <span class="text-sm text-gray-600">Due Date</span>
                                                    <span class="text-sm font-medium text-gray-800">Jun 15, 2023</span>
                                                </div>
                                                <div class="flex items-center justify-between">
                                                    <span class="text-sm text-gray-600">Project</span>
                                                    <span class="text-sm font-medium text-gray-800">E-commerce Platform</span>
                                                </div>
                                                <div class="flex items-center justify-between">
                                                    <span class="text-sm text-gray-600">Estimated Time</span>
                                                    <span class="text-sm font-medium text-gray-800">8 hours</span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div>
                                            <h4 class="text-sm font-medium text-gray-800 mb-3">Attachments</h4>
                                            <div class="space-y-2">
                                                <div class="flex items-center justify-between p-2 border border-gray-200 rounded-md">
                                                    <div class="flex items-center">
                                                        <i class="fas fa-file-pdf text-red-500 mr-2"></i>
                                                        <span class="text-sm text-gray-800">API_Spec.pdf</span>
                                                    </div>
                                                    <button class="text-purple-600 hover:text-purple-800 text-sm">
                                                        Download
                                                    </button>
                                                </div>
                                                <div class="flex items-center justify-between p-2 border border-gray-200 rounded-md">
                                                    <div class="flex items-center">
                                                        <i class="fas fa-file-code text-blue-500 mr-2"></i>
                                                        <span class="text-sm text-gray-800">Stripe_Integration.md</span>
                                                    </div>
                                                    <button class="text-purple-600 hover:text-purple-800 text-sm">
                                                        Download
                                                    </button>
                                                </div>
                                            </div>
                                            <button class="mt-2 w-full border border-dashed border-gray-300 rounded-md py-2 px-3 text-sm text-gray-600 hover:bg-gray-50">
                                                <i class="fas fa-plus mr-1"></i> Add Attachment
                                            </button>
                                        </div>
                                        
                                        <div>
                                            <h4 class="text-sm font-medium text-gray-800 mb-3">Activity</h4>
                                            <div class="space-y-3">
                                                <div class="flex items-start">
                                                    <div class="flex-shrink-0 mr-3">
                                                        <div class="w-6 h-6 rounded-full bg-purple-100 flex items-center justify-center">
                                                            <i class="fas fa-user-plus text-purple-600 text-xs"></i>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <p class="text-sm text-gray-800">Task assigned to Sarah Wilson</p>
                                                        <p class="text-xs text-gray-500">Jun 5, 2023 · 10:30 AM</p>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex-shrink-0 mr-3">
                                                        <div class="w-6 h-6 rounded-full bg-blue-100 flex items-center justify-center">
                                                            <i class="fas fa-arrow-right text-blue-600 text-xs"></i>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <p class="text-sm text-gray-800">Status changed from "To Do" to "In Progress"</p>
                                                                                                               <p class="text-xs text-gray-500">Jun 7, 2023 · 2:15 PM</p>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex-shrink-0 mr-3">
                                                        <div class="w-6 h-6 rounded-full bg-green-100 flex items-center justify-center">
                                                            <i class="fas fa-paperclip text-green-600 text-xs"></i>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <p class="text-sm text-gray-800">API_Spec.pdf was attached</p>
                                                        <p class="text-xs text-gray-500">Jun 8, 2023 · 9:45 AM</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="button" class="brand-gradient text-white px-4 py-2 rounded-md text-sm font-medium hover:opacity-90 sm:ml-3 sm:w-auto">
                        Save Changes
                    </button>
                    <button type="button" id="close-task-modal" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Close
                    </button>
                    <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-white text-base font-medium hover:bg-red-700 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Delete Task
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Create Task Modal -->
    <div id="create-task-modal" class="fixed inset-0 z-50 hidden overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-2xl sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mt-3 text-center sm:mt-0 sm:text-left w-full">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">
                                Create New Task
                            </h3>
                            <div class="mt-6 space-y-4">
                                <div>
                                    <label for="task-name" class="block text-sm font-medium text-gray-700">Task Name</label>
                                    <input type="text" id="task-name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm">
                                </div>
                                
                                <div>
                                    <label for="task-description" class="block text-sm font-medium text-gray-700">Description</label>
                                    <textarea id="task-description" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm"></textarea>
                                </div>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label for="task-project" class="block text-sm font-medium text-gray-700">Project</label>
                                        <select id="task-project" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm">
                                            <option>E-commerce Platform</option>
                                            <option>Marketing Website</option>
                                            <option>Mobile App</option>
                                            <option>Internal Tools</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="task-assignee" class="block text-sm font-medium text-gray-700">Assignee</label>
                                        <select id="task-assignee" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm">
                                            <option>Unassigned</option>
                                            <option>Sarah Wilson</option>
                                            <option>Mike Johnson</option>
                                            <option>Emma Davis</option>
                                            <option>Alex Brown</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                    <div>
                                        <label for="task-priority" class="block text-sm font-medium text-gray-700">Priority</label>
                                        <select id="task-priority" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm">
                                            <option>Low</option>
                                            <option>Medium</option>
                                            <option>High</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="task-status" class="block text-sm font-medium text-gray-700">Status</label>
                                        <select id="task-status" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm">
                                            <option>To Do</option>
                                            <option>In Progress</option>
                                            <option>In Review</option>
                                            <option>Done</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="task-due-date" class="block text-sm font-medium text-gray-700">Due Date</label>
                                        <input type="date" id="task-due-date" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm">
                                    </div>
                                </div>
                                
                                <div>
                                    <label for="task-estimate" class="block text-sm font-medium text-gray-700">Estimated Time (hours)</label>
                                    <input type="number" id="task-estimate" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="button" class="brand-gradient text-white px-4 py-2 rounded-md text-sm font-medium hover:opacity-90 sm:ml-3 sm:w-auto">
                        Create Task
                    </button>
                    <button type="button" id="close-create-modal" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('active');
        });

        // Tab switching
        const tabButtons = document.querySelectorAll('.tab-button');
        tabButtons.forEach(button => {
            button.addEventListener('click', function() {
                tabButtons.forEach(btn => btn.classList.remove('active', 'border-purple-500', 'text-purple-600'));
                tabButtons.forEach(btn => btn.classList.add('border-transparent', 'text-gray-500'));
                this.classList.add('active', 'border-purple-500', 'text-purple-600');
                this.classList.remove('border-transparent', 'text-gray-500');
            });
        });

        // Task detail modal
        const taskCards = document.querySelectorAll('.task-card');
        const taskModal = document.getElementById('task-detail-modal');
        const closeTaskModal = document.getElementById('close-task-modal');
        
        taskCards.forEach(card => {
            card.addEventListener('click', function() {
                taskModal.classList.remove('hidden');
            });
        });
        
        closeTaskModal.addEventListener('click', function() {
            taskModal.classList.add('hidden');
        });

        // Create task modal
        const createTaskBtn = document.getElementById('create-task-btn');
        const createModal = document.getElementById('create-task-modal');
        const closeCreateModal = document.getElementById('close-create-modal');
        
        createTaskBtn.addEventListener('click', function() {
            createModal.classList.remove('hidden');
        });
        
        closeCreateModal.addEventListener('click', function() {
            createModal.classList.add('hidden');
        });

        // Close modals when clicking outside
        window.addEventListener('click', function(event) {
            if (event.target === taskModal) {
                taskModal.classList.add('hidden');
            }
            if (event.target === createModal) {
                createModal.classList.add('hidden');
            }
        });
    </script>
</body>
</html>