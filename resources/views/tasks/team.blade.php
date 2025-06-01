<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Management - TaskFlow</title>
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
        
        .team-card {
            transition: all 0.3s ease;
        }
        
        .team-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        
        .role-badge {
            font-size: 0.75rem;
            padding: 0.25rem 0.5rem;
            border-radius: 9999px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        
        .role-admin { background-color: var(--task-primary-dark); color: white; }
        .role-manager { background-color: var(--task-secondary-dark); color: white; }
        .role-developer { background-color: var(--task-success); color: white; }
        .role-designer { background-color: var(--task-warning); color: white; }
        .role-tester { background-color: var(--task-info); color: white; }
        
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
                <li><a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-100 transition-colors">
                    <i class="fas fa-tasks w-5"></i>
                    <span>Tasks</span>
                </a></li>
                <li><a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-100 transition-colors">
                    <i class="fas fa-folder w-5"></i>
                    <span>Projects</span>
                </a></li>
                <li><a href="#" class="sidebar-active flex items-center space-x-3 p-3 rounded-lg transition-colors">
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
                    <a href="#" class="text-gray-500 hover:text-gray-700">Team</a>
                    <i class="fas fa-chevron-right text-gray-400 text-xs"></i>
                    <span class="text-gray-800 font-medium">All Members</span>
                </nav>
            </div>
            
            <!-- Team Header -->
            <div class="p-4 lg:p-6">
                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
                    <div class="lg:ml-0 ml-12">
                        <h1 class="text-3xl font-bold text-gray-800 mb-2">Team Management</h1>
                        <p class="text-gray-600 mb-4">Manage your team members, roles, and permissions</p>
                        
                        <!-- Team Stats -->
                        <div class="flex flex-wrap items-center space-x-6 text-sm text-gray-600">
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-users text-blue-500"></i>
                                <span>12 team members</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-user-shield text-purple-500"></i>
                                <span>2 administrators</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-user-tie text-green-500"></i>
                                <span>3 managers</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-code text-orange-500"></i>
                                <span>7 developers</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex items-center space-x-3">
                        <!-- Action Buttons -->
                        <button class="px-4 py-2 text-gray-700 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                            <i class="fas fa-filter mr-2"></i>
                            Filter
                        </button>
                        <button class="brand-gradient text-white px-4 py-2 rounded-lg font-medium hover:opacity-90 transition-opacity">
                            <i class="fas fa-user-plus mr-2"></i>
                            Add Member
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Team Content -->
        <main class="p-4 lg:p-6">
            <!-- Tabs Navigation -->
            <div class="bg-white rounded-lg shadow-sm mb-6">
                <div class="border-b border-gray-200">
                    <nav class="flex space-x-8 px-6">
                        <button class="tab-button active py-4 px-2 border-b-2 border-transparent font-medium text-sm transition-colors" data-tab="members">
                            <i class="fas fa-users mr-2"></i>All Members
                        </button>
                        <button class="tab-button py-4 px-2 border-b-2 border-transparent font-medium text-sm text-gray-500 hover:text-gray-700 transition-colors" data-tab="roles">
                            <i class="fas fa-user-tag mr-2"></i>Roles & Permissions
                        </button>
                        <button class="tab-button py-4 px-2 border-b-2 border-transparent font-medium text-sm text-gray-500 hover:text-gray-700 transition-colors" data-tab="departments">
                            <i class="fas fa-sitemap mr-2"></i>Departments
                        </button>
                        <button class="tab-button py-4 px-2 border-b-2 border-transparent font-medium text-sm text-gray-500 hover:text-gray-700 transition-colors" data-tab="activity">
                            <i class="fas fa-history mr-2"></i>Activity Log
                        </button>
                    </nav>
                </div>
            </div>

            <!-- Tab Contents -->
            
            <!-- Members Tab -->
            <div id="members" class="tab-content active">
                <!-- Search and Filter -->
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between space-y-4 md:space-y-0">
                        <div class="relative flex-1 md:max-w-md">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-search text-gray-400"></i>
                            </div>
                            <input type="text" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg bg-gray-50 focus:ring-2 focus:ring-purple-500 focus:border-transparent" placeholder="Search team members...">
                        </div>
                        <div class="flex items-center space-x-3">
                            <select class="border border-gray-300 rounded-lg px-3 py-2 text-sm">
                                <option>All Roles</option>
                                <option>Administrator</option>
                                <option>Manager</option>
                                <option>Developer</option>
                                <option>Designer</option>
                                <option>Tester</option>
                            </select>
                            <select class="border border-gray-300 rounded-lg px-3 py-2 text-sm">
                                <option>All Departments</option>
                                <option>Development</option>
                                <option>Design</option>
                                <option>Marketing</option>
                                <option>Operations</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <!-- Team Members Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <!-- Team Member Card 1 -->
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden team-card">
                        <div class="p-6">
                            <div class="flex flex-col items-center text-center">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg" 
                                     alt="Sarah Wilson" class="w-24 h-24 rounded-full mb-4 object-cover">
                                <h3 class="text-lg font-semibold text-gray-800">Sarah Wilson</h3>
                                <p class="text-sm text-gray-600 mb-2">Senior Backend Developer</p>
                                <span class="role-developer role-badge mb-4">Developer</span>
                                <div class="flex space-x-3">
                                    <button class="w-8 h-8 rounded-full bg-gray-100 text-gray-600 hover:bg-gray-200 transition-colors">
                                        <i class="fas fa-envelope"></i>
                                    </button>
                                    <button class="w-8 h-8 rounded-full bg-gray-100 text-gray-600 hover:bg-gray-200 transition-colors">
                                        <i class="fas fa-phone"></i>
                                    </button>
                                    <button class="w-8 h-8 rounded-full bg-gray-100 text-gray-600 hover:bg-gray-200 transition-colors">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="border-t border-gray-200 px-6 py-3 bg-gray-50">
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600">3 projects</span>
                                <button class="text-sm text-purple-600 hover:text-purple-800 font-medium">
                                    View Profile
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Team Member Card 2 -->
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden team-card">
                        <div class="p-6">
                            <div class="flex flex-col items-center text-center">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" 
                                     alt="Mike Johnson" class="w-24 h-24 rounded-full mb-4 object-cover">
                                <h3 class="text-lg font-semibold text-gray-800">Mike Johnson</h3>
                                <p class="text-sm text-gray-600 mb-2">Lead UI/UX Designer</p>
                                <span class="role-designer role-badge mb-4">Designer</span>
                                <div class="flex space-x-3">
                                    <button class="w-8 h-8 rounded-full bg-gray-100 text-gray-600 hover:bg-gray-200 transition-colors">
                                        <i class="fas fa-envelope"></i>
                                    </button>
                                    <button class="w-8 h-8 rounded-full bg-gray-100 text-gray-600 hover:bg-gray-200 transition-colors">
                                        <i class="fas fa-phone"></i>
                                    </button>
                                    <button class="w-8 h-8 rounded-full bg-gray-100 text-gray-600 hover:bg-gray-200 transition-colors">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="border-t border-gray-200 px-6 py-3 bg-gray-50">
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600">5 projects</span>
                                <button class="text-sm text-purple-600 hover:text-purple-800 font-medium">
                                    View Profile
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Team Member Card 3 -->
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden team-card">
                        <div class="p-6">
                            <div class="flex flex-col items-center text-center">
                                <img src="https://randomuser.me/api/portraits/women/68.jpg" 
                                     alt="Emma Davis" class="w-24 h-24 rounded-full mb-4 object-cover">
                                <h3 class="text-lg font-semibold text-gray-800">Emma Davis</h3>
                                <p class="text-sm text-gray-600 mb-2">Frontend Developer</p>
                                <span class="role-developer role-badge mb-4">Developer</span>
                                <div class="flex space-x-3">
                                    <button class="w-8 h-8 rounded-full bg-gray-100 text-gray-600 hover:bg-gray-200 transition-colors">
                                        <i class="fas fa-envelope"></i>
                                    </button>
                                    <button class="w-8 h-8 rounded-full bg-gray-100 text-gray-600 hover:bg-gray-200 transition-colors">
                                        <i class="fas fa-phone"></i>
                                    </button>
                                    <button class="w-8 h-8 rounded-full bg-gray-100 text-gray-600 hover:bg-gray-200 transition-colors">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="border-t border-gray-200 px-6 py-3 bg-gray-50">
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600">2 projects</span>
                                <button class="text-sm text-purple-600 hover:text-purple-800 font-medium">
                                    View Profile
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Team Member Card 4 -->
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden team-card">
                        <div class="p-6">
                            <div class="flex flex-col items-center text-center">
                                <img src="https://randomuser.me/api/portraits/men/75.jpg" 
                                     alt="Alex Brown" class="w-24 h-24 rounded-full mb-4 object-cover">
                                <h3 class="text-lg font-semibold text-gray-800">Alex Brown</h3>
                                <p class="text-sm text-gray-600 mb-2">Project Manager</p>
                                <span class="role-manager role-badge mb-4">Manager</span>
                                <div class="flex space-x-3">
                                    <button class="w-8 h-8 rounded-full bg-gray-100 text-gray-600 hover:bg-gray-200 transition-colors">
                                        <i class="fas fa-envelope"></i>
                                    </button>
                                    <button class="w-8 h-8 rounded-full bg-gray-100 text-gray-600 hover:bg-gray-200 transition-colors">
                                        <i class="fas fa-phone"></i>
                                    </button>
                                    <button class="w-8 h-8 rounded-full bg-gray-100 text-gray-600 hover:bg-gray-200 transition-colors">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="border-t border-gray-200 px-6 py-3 bg-gray-50">
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600">4 projects</span>
                                <button class="text-sm text-purple-600 hover:text-purple-800 font-medium">
                                    View Profile
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Add New Member Card -->
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden team-card border-2 border-dashed border-gray-300 hover:border-purple-500 transition-colors">
                        <div class="p-6 h-full flex flex-col items-center justify-center">
                            <div class="w-16 h-16 mb-4 rounded-full bg-purple-100 flex items-center justify-center">
                                <i class="fas fa-user-plus text-purple-600 text-xl"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-1">Add Team Member</h3>
                            <p class="text-sm text-gray-600 mb-4 text-center">Invite new members to join your team</p>
                            <button class="brand-gradient text-white px-6 py-2 rounded-lg font-medium hover:opacity-90 transition-opacity">
                                Invite
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Roles & Permissions Tab -->
            <div id="roles" class="tab-content">
                <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                    <!-- Roles Header -->
                    <div class="p-6 border-b border-gray-200 flex items-center justify-between">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">Roles & Permissions</h3>
                            <p class="text-sm text-gray-600">Manage team roles and their access levels</p>
                        </div>
                        <button class="brand-gradient text-white px-4 py-2 rounded-lg font-medium hover:opacity-90 transition-opacity">
                            <i class="fas fa-plus mr-2"></i>
                            Add Role
                        </button>
                    </div>
                    
                    <!-- Roles Table -->
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Members</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Permissions</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <span class="role-admin role-badge">Admin</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex -space-x-2">
                                            <img src="https://ui-avatars.com/api/?name=John+Doe&background=8b5cf6&color=fff" 
                                                 alt="John" class="w-8 h-8 rounded-full border-2 border-white">
                                            <img src="https://randomuser.me/api/portraits/women/90.jpg" 
                                                 alt="Lisa" class="w-8 h-8 rounded-full border-2 border-white">
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="text-sm text-gray-600">Full access to all features and settings</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <button class="text-purple-600 hover:text-purple-900 mr-3">Edit</button>
                                        <button class="text-gray-600 hover:text-gray-900">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <span class="role-manager role-badge">Manager</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex -space-x-2">
                                            <img src="https://randomuser.me/api/portraits/men/75.jpg" 
                                                 alt="Alex" class="w-8 h-8 rounded-full border-2 border-white">
                                            <img src="https://randomuser.me/api/portraits/women/33.jpg" 
                                                 alt="Sophia" class="w-8 h-8 rounded-full border-2 border-white">
                                            <div class="w-8 h-8 rounded-full bg-gray-300 border-2 border-white flex items-center justify-center text-xs font-medium text-gray-600">
                                                +1
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="text-sm text-gray-600">Can manage projects and tasks, limited settings access</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <button class="text-purple-600 hover:text-purple-900 mr-3">Edit</button>
                                        <button class="text-gray-600 hover:text-gray-900">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <span class="role-developer role-badge">Developer</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex -space-x-2">
                                            <img src="https://randomuser.me/api/portraits/women/44.jpg" 
                                                 alt="Sarah" class="w-8 h-8 rounded-full border-2 border-white">
                                            <img src="https://randomuser.me/api/portraits/women/68.jpg" 
                                                 alt="Emma" class="w-8 h-8 rounded-full border-2 border-white">
                                            <div class="w-8 h-8 rounded-full bg-gray-300 border-2 border-white flex items-center justify-center text-xs font-medium text-gray-600">
                                                +4
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="text-sm text-gray-600">Can create and update tasks, view projects</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <button class="text-purple-600 hover:text-purple-900 mr-3">Edit</button>
                                        <button class="text-gray-600 hover:text-gray-900">View</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Departments Tab -->
            <div id="departments" class="tab-content">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Development Department -->
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                        <div class="p-6 border-b border-gray-200">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-semibold text-gray-800">Development</h3>
                                <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2 py-1 rounded-full">5 members</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="space-y-4">
                                <div class="flex items-center space-x-3">
                                    <img src="https://randomuser.me/api/portraits/women/44.jpg" 
                                         alt="Sarah" class="w-10 h-10 rounded-full">
                                    <div>
                                        <h4 class="text-sm font-medium text-gray-800">Sarah Wilson</h4>
                                        <p class="text-xs text-gray-600">Senior Backend Developer</p>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <img src="https://randomuser.me/api/portraits/women/68.jpg" 
                                         alt="Emma" class="w-10 h-10 rounded-full">
                                    <div>
                                        <h4 class="text-sm font-medium text-gray-800">Emma Davis</h4>
                                        <p class="text-xs text-gray-600">Frontend Developer</p>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <img src="https://randomuser.me/api/portraits/men/22.jpg" 
                                         alt="David" class="w-10 h-10 rounded-full">
                                    <div>
                                        <h4 class="text-sm font-medium text-gray-800">David Miller</h4>
                                        <p class="text-xs text-gray-600">Full Stack Developer</p>
                                    </div>
                                </div>
                            </div>
                            <button class="mt-4 w-full py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 transition-colors">
                                View All Members
                            </button>
                        </div>
                    </div>
                    
                    <!-- Design Department -->
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                        <div class="p-6 border-b border-gray-200">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-semibold text-gray-800">Design</h3>
                                <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2 py-1 rounded-full">3 members</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="space-y-4">
                                <div class="flex items-center space-x-3">
                                    <img src="https://randomuser.me/api/portraits/men/32.jpg" 
                                         alt="Mike" class="w-10 h-10 rounded-full">
                                    <div>
                                        <h4 class="text-sm font-medium text-gray-800">Mike Johnson</h4>
                                        <p class="text-xs text-gray-600">Lead UI/UX Designer</p>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <img src="https://randomuser.me/api/portraits/women/12.jpg" 
                                         alt="Anna" class="w-10 h-10 rounded-full">
                                    <div>
                                        <h4 class="text-sm font-medium text-gray-800">Anna Clark</h4>
                                        <p class="text-xs text-gray-600">UI Designer</p>
                                    </div>
                                </div>
                            </div>
                            <button class="mt-4 w-full py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 transition-colors">
                                View All Members
                            </button>
                        </div>
                    </div>
                    
                    <!-- Add New Department -->
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden border-2 border-dashed border-gray-300 hover:border-purple-500 transition-colors">
                        <div class="p-6 h-full flex flex-col items-center justify-center">
                            <div class="w-16 h-16 mb-4 rounded-full bg-purple-100 flex items-center justify-center">
                                <i class="fas fa-plus text-purple-600 text-xl"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-1">Create New Department</h3>
                            <p class="text-sm text-gray-600 mb-4 text-center">Organize your team into departments for better management</p>
                            <button class="brand-gradient text-white px-6 py-2 rounded-lg font-medium hover:opacity-90 transition-opacity">
                                Add Department
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Activity Log Tab -->
            <div id="activity" class="tab-content">
                <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                    <!-- Activity Header -->
                    <div class="p-6 border-b border-gray-200">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold text-gray-800">Team Activity Log</h3>
                            <select class="border border-gray-300 rounded-lg px-3 py-2 text-sm">
                                <option>Last 7 days</option>
                                <option>Last 30 days</option>
                                <option>Last 90 days</option>
                                <option>All time</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Activity List -->
                    <div class="divide-y divide-gray-200">
                        <div class="p-6">
                            <div class="flex items-start space-x-4">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg" 
                                     alt="Sarah" class="w-10 h-10 rounded-full">
                                <div class="flex-1">
                                    <div class="flex items-center justify-between">
                                        <h4 class="text-sm font-medium text-gray-800">Sarah Wilson</h4>
                                        <span class="text-xs text-gray-500">2 hours ago</span>
                                    </div>
                                    <p class="text-sm text-gray-600 mt-1">Completed task "Payment Gateway Integration" in <a href="#" class="text-purple-600 hover:underline">E-commerce Platform</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-start space-x-4">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" 
                                     alt="Mike" class="w-10 h-10 rounded-full">
                                <div class="flex-1">
                                    <div class="flex items-center justify-between">
                                        <h4 class="text-sm font-medium text-gray-800">Mike Johnson</h4>
                                        <span class="text-xs text-gray-500">4 hours ago</span>
                                    </div>
                                    <p class="text-sm text-gray-600 mt-1">Uploaded 3 design files to <a href="#" class="text-purple-600 hover:underline">E-commerce Platform</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-start space-x-4">
                                <img src="https://randomuser.me/api/portraits/men/75.jpg" 
                                     alt="Alex" class="w-10 h-10 rounded-full">
                                <div class="flex-1">
                                    <div class="flex items-center justify-between">
                                        <h4 class="text-sm font-medium text-gray-800">Alex Brown</h4>
                                        <span class="text-xs text-gray-500">1 day ago</span>
                                    </div>
                                    <p class="text-sm text-gray-600 mt-1">Created new project <a href="#" class="text-purple-600 hover:underline">Marketing Website Redesign</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                                   <!-- View More Button -->
                    <div class="p-4 bg-gray-50 text-center">
                        <button class="text-purple-600 hover:text-purple-800 font-medium text-sm">
                            View More Activity
                        </button>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Modals -->
    
    <!-- Add Member Modal -->
    <div id="add-member-modal" class="fixed inset-0 z-50 hidden overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-purple-100 sm:mx-0 sm:h-10 sm:w-10">
                            <i class="fas fa-user-plus text-purple-600"></i>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                Add Team Member
                            </h3>
                            <div class="mt-2">
                                <div class="space-y-4">
                                    <div>
                                        <label for="member-name" class="block text-sm font-medium text-gray-700">Full Name</label>
                                        <input type="text" id="member-name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm">
                                    </div>
                                    <div>
                                        <label for="member-email" class="block text-sm font-medium text-gray-700">Email Address</label>
                                        <input type="email" id="member-email" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm">
                                    </div>
                                    <div>
                                        <label for="member-role" class="block text-sm font-medium text-gray-700">Role</label>
                                        <select id="member-role" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm">
                                            <option value="">Select a role</option>
                                            <option value="admin">Administrator</option>
                                            <option value="manager">Manager</option>
                                            <option value="developer">Developer</option>
                                            <option value="designer">Designer</option>
                                            <option value="tester">Tester</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="member-department" class="block text-sm font-medium text-gray-700">Department</label>
                                        <select id="member-department" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm">
                                            <option value="">Select a department</option>
                                            <option value="development">Development</option>
                                            <option value="design">Design</option>
                                            <option value="marketing">Marketing</option>
                                            <option value="operations">Operations</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">Permissions</label>
                                        <div class="mt-2 space-y-2">
                                            <div class="flex items-center">
                                                <input id="perm-project" name="perm-project" type="checkbox" class="focus:ring-purple-500 h-4 w-4 text-purple-600 border-gray-300 rounded">
                                                <label for="perm-project" class="ml-2 block text-sm text-gray-700">Manage Projects</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="perm-task" name="perm-task" type="checkbox" class="focus:ring-purple-500 h-4 w-4 text-purple-600 border-gray-300 rounded">
                                                <label for="perm-task" class="ml-2 block text-sm text-gray-700">Manage Tasks</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="perm-team" name="perm-team" type="checkbox" class="focus:ring-purple-500 h-4 w-4 text-purple-600 border-gray-300 rounded">
                                                <label for="perm-team" class="ml-2 block text-sm text-gray-700">Manage Team</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 brand-gradient text-base font-medium text-white hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Add Member
                    </button>
                    <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Invite Member Modal -->
    <div id="invite-member-modal" class="fixed inset-0 z-50 hidden overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-purple-100 sm:mx-0 sm:h-10 sm:w-10">
                            <i class="fas fa-envelope text-purple-600"></i>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">
                                Invite Team Members
                            </h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500 mb-4">
                                    Send invitations to join your team via email. They'll receive a link to create their account.
                                </p>
                                <div class="space-y-4">
                                    <div>
                                        <label for="invite-emails" class="block text-sm font-medium text-gray-700">Email Addresses</label>
                                        <textarea id="invite-emails" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm" placeholder="Enter multiple emails separated by commas"></textarea>
                                        <p class="mt-1 text-xs text-gray-500">You can add multiple email addresses separated by commas.</p>
                                    </div>
                                    <div>
                                        <label for="invite-role" class="block text-sm font-medium text-gray-700">Default Role</label>
                                        <select id="invite-role" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm">
                                            <option value="developer">Developer</option>
                                            <option value="designer">Designer</option>
                                            <option value="manager">Manager</option>
                                            <option value="tester">Tester</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="invite-message" class="block text-sm font-medium text-gray-700">Custom Message (Optional)</label>
                                        <textarea id="invite-message" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm" placeholder="Add a personal message to your invitation"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 brand-gradient text-base font-medium text-white hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Send Invitations
                    </button>
                    <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Role Modal -->
    <div id="add-role-modal" class="fixed inset-0 z-50 hidden overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-2xl sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-purple-100 sm:mx-0 sm:h-10 sm:w-10">
                            <i class="fas fa-user-tag text-purple-600"></i>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">
                                Create New Role
                            </h3>
                            <div class="mt-2">
                                <div class="space-y-4">
                                    <div>
                                        <label for="role-name" class="block text-sm font-medium text-gray-700">Role Name</label>
                                        <input type="text" id="role-name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm" placeholder="e.g. Content Manager">
                                    </div>
                                    <div>
                                        <label for="role-description" class="block text-sm font-medium text-gray-700">Description</label>
                                        <textarea id="role-description" rows="2" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm" placeholder="Brief description of this role"></textarea>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Permissions</label>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <!-- Project Permissions -->
                                            <div class="border border-gray-200 rounded-lg p-4">
                                                <h4 class="text-sm font-medium text-gray-800 mb-3">Project Permissions</h4>
                                                <div class="space-y-3">
                                                    <div class="flex items-center">
                                                        <input id="perm-project-view" name="perm-project-view" type="checkbox" class="focus:ring-purple-500 h-4 w-4 text-purple-600 border-gray-300 rounded">
                                                        <label for="perm-project-view" class="ml-2 block text-sm text-gray-700">View Projects</label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="perm-project-create" name="perm-project-create" type="checkbox" class="focus:ring-purple-500 h-4 w-4 text-purple-600 border-gray-300 rounded">
                                                        <label for="perm-project-create" class="ml-2 block text-sm text-gray-700">Create Projects</label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="perm-project-edit" name="perm-project-edit" type="checkbox" class="focus:ring-purple-500 h-4 w-4 text-purple-600 border-gray-300 rounded">
                                                        <label for="perm-project-edit" class="ml-2 block text-sm text-gray-700">Edit Projects</label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="perm-project-delete" name="perm-project-delete" type="checkbox" class="focus:ring-purple-500 h-4 w-4 text-purple-600 border-gray-300 rounded">
                                                        <label for="perm-project-delete" class="ml-2 block text-sm text-gray-700">Delete Projects</label>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Task Permissions -->
                                            <div class="border border-gray-200 rounded-lg p-4">
                                                <h4 class="text-sm font-medium text-gray-800 mb-3">Task Permissions</h4>
                                                <div class="space-y-3">
                                                    <div class="flex items-center">
                                                        <input id="perm-task-view" name="perm-task-view" type="checkbox" class="focus:ring-purple-500 h-4 w-4 text-purple-600 border-gray-300 rounded">
                                                        <label for="perm-task-view" class="ml-2 block text-sm text-gray-700">View Tasks</label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="perm-task-create" name="perm-task-create" type="checkbox" class="focus:ring-purple-500 h-4 w-4 text-purple-600 border-gray-300 rounded">
                                                        <label for="perm-task-create" class="ml-2 block text-sm text-gray-700">Create Tasks</label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="perm-task-edit" name="perm-task-edit" type="checkbox" class="focus:ring-purple-500 h-4 w-4 text-purple-600 border-gray-300 rounded">
                                                        <label for="perm-task-edit" class="ml-2 block text-sm text-gray-700">Edit Tasks</label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="perm-task-delete" name="perm-task-delete" type="checkbox" class="focus:ring-purple-500 h-4 w-4 text-purple-600 border-gray-300 rounded">
                                                        <label for="perm-task-delete" class="ml-2 block text-sm text-gray-700">Delete Tasks</label>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Team Permissions -->
                                            <div class="border border-gray-200 rounded-lg p-4">
                                                <h4 class="text-sm font-medium text-gray-800 mb-3">Team Permissions</h4>
                                                <div class="space-y-3">
                                                    <div class="flex items-center">
                                                        <input id="perm-team-view" name="perm-team-view" type="checkbox" class="focus:ring-purple-500 h-4 w-4 text-purple-600 border-gray-300 rounded">
                                                        <label for="perm-team-view" class="ml-2 block text-sm text-gray-700">View Team</label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="perm-team-invite" name="perm-team-invite" type="checkbox" class="focus:ring-purple-500 h-4 w-4 text-purple-600 border-gray-300 rounded">
                                                        <label for="perm-team-invite" class="ml-2 block text-sm text-gray-700">Invite Members</label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="perm-team-edit" name="perm-team-edit" type="checkbox" class="focus:ring-purple-500 h-4 w-4 text-purple-600 border-gray-300 rounded">
                                                        <label for="perm-team-edit" class="ml-2 block text-sm text-gray-700">Edit Members</label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="perm-team-remove" name="perm-team-remove" type="checkbox" class="focus:ring-purple-500 h-4 w-4 text-purple-600 border-gray-300 rounded">
                                                        <label for="perm-team-remove" class="ml-2 block text-sm text-gray-700">Remove Members</label>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Settings Permissions -->
                                            <div class="border border-gray-200 rounded-lg p-4">
                                                <h4 class="text-sm font-medium text-gray-800 mb-3">Settings Permissions</h4>
                                                <div class="space-y-3">
                                                    <div class="flex items-center">
                                                        <input id="perm-settings-view" name="perm-settings-view" type="checkbox" class="focus:ring-purple-500 h-4 w-4 text-purple-600 border-gray-300 rounded">
                                                        <label for="perm-settings-view" class="ml-2 block text-sm text-gray-700">View Settings</label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="perm-settings-edit" name="perm-settings-edit" type="checkbox" class="focus:ring-purple-500 h-4 w-4 text-purple-600 border-gray-300 rounded">
                                                        <label for="perm-settings-edit" class="ml-2 block text-sm text-gray-700">Edit Settings</label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="perm-roles-manage" name="perm-roles-manage" type="checkbox" class="focus:ring-purple-500 h-4 w-4 text-purple-600 border-gray-300 rounded">
                                                        <label for="perm-roles-manage" class="ml-2 block text-sm text-gray-700">Manage Roles</label>
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
                    <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 brand-gradient text-base font-medium text-white hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Create Role
                    </button>
                    <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Department Modal -->
    <div id="add-department-modal" class="fixed inset-0 z-50 hidden overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-purple-100 sm:mx-0 sm:h-10 sm:w-10">
                            <i class="fas fa-sitemap text-purple-600"></i>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">
                                Create New Department
                            </h3>
                            <div class="mt-2">
                                <div class="space-y-4">
                                    <div>
                                        <label for="department-name" class="block text-sm font-medium text-gray-700">Department Name</label>
                                        <input type="text" id="department-name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm" placeholder="e.g. Marketing">
                                    </div>
                                    <div>
                                        <label for="department-description" class="block text-sm font-medium text-gray-700">Description</label>
                                        <textarea id="department-description" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm" placeholder="Brief description of this department"></textarea>
                                    </div>
                                    <div>
                                        <label for="department-manager" class="block text-sm font-medium text-gray-700">Department Manager</label>
                                        <select id="department-manager" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm">
                                            <option value="">Select a manager</option>
                                            <option value="1">Alex Brown</option>
                                            <option value="2">Mike Johnson</option>
                                            <option value="3">Sarah Wilson</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">Initial Members</label>
                                        <div class="mt-2 space-y-2">
                                            <div class="flex items-center">
                                                <input id="member-1" name="initial-members" type="checkbox" class="focus:ring-purple-500 h-4 w-4 text-purple-600 border-gray-300 rounded">
                                                <label for="member-1" class="ml-2 block text-sm text-gray-700">Sarah Wilson</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="member-2" name="initial-members" type="checkbox" class="focus:ring-purple-500 h-4 w-4 text-purple-600 border-gray-300 rounded">
                                                <label for="member-2" class="ml-2 block text-sm text-gray-700">Mike Johnson</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="member-3" name="initial-members" type="checkbox" class="focus:ring-purple-500 h-4 w-4 text-purple-600 border-gray-300 rounded">
                                                <label for="member-3" class="ml-2 block text-sm text-gray-700">Emma Davis</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="member-4" name="initial-members" type="checkbox" class="focus:ring-purple-500 h-4 w-4 text-purple-600 border-gray-300 rounded">
                                                <label for="member-4" class="ml-2 block text-sm text-gray-700">Alex Brown</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 brand-gradient text-base font-medium text-white hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Create Department
                    </button>
                    <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- View Profile Modal -->
    <div id="profile-modal" class="fixed inset-0 z-50 hidden overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-3xl sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-purple-100 sm:mx-0 sm:h-10 sm:w-10">
                            <i class="fas fa-user text-purple-600"></i>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="profile-name">
                                        Sarah Wilson
                                    </h3>
                                    <p class="text-sm text-gray-500" id="profile-title">
                                        Senior Backend Developer
                                    </p>
                                </div>
                                <span class="role-developer role-badge" id="profile-role">Developer</span>
                            </div>
                            
                            <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-6">
                                <!-- Personal Info -->
                                <div class="col-span-1">
                                    <h4 class="text-sm font-medium text-gray-800 mb-3">Personal Information</h4>
                                    <div class="space-y-3">
                                        <div>
                                            <p class="text-xs text-gray-500">Email</p>
                                            <p class="text-sm text-gray-800">sarah.wilson@example.com</p>
                                        </div>
                                        <div>
                                            <p class="text-xs text-gray-500">Phone</p>
                                            <p class="text-sm text-gray-800">(555) 123-4567</p>
                                        </div>
                                        <div>
                                            <p class="text-xs text-gray-500">Joined</p>
                                            <p class="text-sm text-gray-800">March 12, 2021</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Department & Projects -->
                                <div class="col-span-1">
                                    <h4 class="text-sm font-medium text-gray-800 mb-3">Department & Projects</h4>
                                    <div class="space-y-3">
                                        <div>
                                            <p class="text-xs text-gray-500">Department</p>
                                            <p class="text-sm text-gray-800">Development</p>
                                        </div>
                                        <div>
                                            <p class="text-xs text-gray-500">Current Projects</p>
                                            <div class="flex flex-wrap gap-1 mt-1">
                                                <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">E-commerce Platform</span>
                                                <span class="px-2 py-1 bg-green-100 text-green-800 text-xs rounded-full">Mobile App</span>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-xs text-gray-500">Tasks Completed</p>
                                            <p class="text-sm text-gray-800">127 tasks</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Skills -->
                                <div class="col-span-1">
                                    <h4 class="text-sm font-medium text-gray-800 mb-3">Skills & Expertise</h4>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="px-2 py-1 bg-gray-100 text-gray-800 text-xs rounded-full">Node.js</span>
                                        <span class="px-2 py-1 bg-gray-100 text-gray-800 text-xs rounded-full">MongoDB</span>
                                        <span class="px-2 py-1 bg-gray-100 text-gray-800 text-xs rounded-full">API Design</span>
                                        <span class="px-2 py-1 bg-gray-100 text-gray-800 text-xs rounded-full">AWS</span>
                                    </div>
                                </div>
                                
                                <!-- Recent Activity -->
                                <div class="col-span-3">
                                    <h4 class="text-sm font-medium text-gray-800 mb-3">Recent Activity</h4>
                                    <div class="space-y-4">
                                        <div class="flex items-start space-x-3">
                                            <div class="flex-shrink-0">
                                                <div class="w-8 h-8 rounded-full bg-purple-100 flex items-center justify-center">
                                                    <i class="fas fa-check text-purple-600 text-xs"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <p class="text-sm text-gray-800">Completed task "Payment Gateway Integration"</p>
                                                <p class="text-xs text-gray-500">2 hours ago</p>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-3">
                                            <div class="flex-shrink-0">
                                                <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center">
                                                    <i class="fas fa-code text-blue-600 text-xs"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <p class="text-sm text-gray-800">Pushed 3 commits to "E-commerce Platform"</p>
                                                <p class="text-xs text-gray-500">1 day ago</p>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-3">
                                            <div class="flex-shrink-0">
                                                <div class="w-8 h-8 rounded-full bg-green-100 flex items-center justify-center">
                                                    <i class="fas fa-comment-alt text-green-600 text-xs"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <p class="text-sm text-gray-800">Commented on task "User Dashboard Redesign"</p>
                                                <p class="text-xs text-gray-500">2 days ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 brand-gradient text-base font-medium text-white hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Edit Profile
                    </button>
                    <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
  <!-- Replace the existing JavaScript section with this -->
<script>
// Mobile Menu Toggle
const mobileMenuBtn = document.getElementById('mobile-menu-btn');
const sidebar = document.getElementById('sidebar');

mobileMenuBtn.addEventListener('click', () => {
    sidebar.classList.toggle('active');
    // Toggle overlay for mobile
    if (sidebar.classList.contains('active')) {
        document.body.classList.add('overflow-hidden');
    } else {
        document.body.classList.remove('overflow-hidden');
    }
});

// Tab Switching
const tabButtons = document.querySelectorAll('.tab-button');
const tabContents = document.querySelectorAll('.tab-content');

tabButtons.forEach(button => {
    button.addEventListener('click', () => {
        // Remove active classes
        tabButtons.forEach(btn => {
            btn.classList.remove('active', 'text-gray-800', 'border-purple-500');
            btn.classList.add('text-gray-500', 'border-transparent');
        });
        tabContents.forEach(content => content.classList.add('hidden'));

        // Add active classes to clicked tab
        button.classList.add('active', 'text-gray-800', 'border-purple-500');
        button.classList.remove('text-gray-500');
        
        // Show corresponding content
        const tabId = button.getAttribute('data-tab');
        document.getElementById(tabId).classList.remove('hidden');
    });
});

// Modal Handling
const modals = {
    'add-member': {
        openBtn: document.querySelector('button.brand-gradient:has(.fa-user-plus)'),
        modal: document.getElementById('add-member-modal'),
        closeBtn: document.querySelector('#add-member-modal button:not(.brand-gradient)')
    },
    'invite': {
        openBtn: document.querySelector('.team-card:last-child button.brand-gradient'),
        modal: document.getElementById('invite-member-modal'),
        closeBtn: document.querySelector('#invite-member-modal button:not(.brand-gradient)')
    },
    'add-role': {
        openBtn: document.querySelector('#roles button.brand-gradient:has(.fa-plus)'),
        modal: document.getElementById('add-role-modal'),
        closeBtn: document.querySelector('#add-role-modal button:not(.brand-gradient)')
    },
    'add-department': {
        openBtn: document.querySelector('#departments button.brand-gradient'),
        modal: document.getElementById('add-department-modal'),
        closeBtn: document.querySelector('#add-department-modal button:not(.brand-gradient)')
    },
    'profile': {
        openBtn: document.querySelectorAll('.team-card:not(:last-child) button.text-purple-600'),
        modal: document.getElementById('profile-modal'),
        closeBtn: document.querySelector('#profile-modal button:not(.brand-gradient)')
    }
};

// Modal open/close functionality
function setupModal(modalObj) {
    if (modalObj.openBtn) {
        const openButtons = modalObj.openBtn.length ? modalObj.openBtn : [modalObj.openBtn];
        openButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                modalObj.modal.classList.remove('hidden');
                document.body.classList.add('overflow-hidden');
            });
        });
    }
    
    if (modalObj.closeBtn) {
        modalObj.closeBtn.addEventListener('click', () => {
            modalObj.modal.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        });
    }
}

// Initialize modals
Object.values(modals).forEach(setupModal);

// Close modals on outside click
document.querySelectorAll('.fixed.inset-0').forEach(overlay => {
    overlay.addEventListener('click', (e) => {
        if (e.target === overlay) {
            overlay.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }
    });
});

// Profile modal data population
document.querySelectorAll('.team-card:not(:last-child) button.text-purple-600').forEach(button => {
    button.addEventListener('click', function() {
        const card = this.closest('.team-card');
        const name = card.querySelector('h3').textContent;
        const title = card.querySelector('p').textContent;
        const role = card.querySelector('.role-badge').textContent.toLowerCase();
        
        document.getElementById('profile-name').textContent = name;
        document.getElementById('profile-title').textContent = title;
        document.getElementById('profile-role').textContent = role.charAt(0).toUpperCase() + role.slice(1);
        document.getElementById('profile-role').className = `role-badge role-${role}`;
        
        modals.profile.modal.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
    });
});

// Initialize first tab
if (tabButtons.length > 0) {
    tabButtons[0].classList.add('active', 'text-gray-800', 'border-purple-500');
    tabButtons[0].classList.remove('text-gray-500');
    tabContents.forEach(content => content.classList.add('hidden'));
    document.getElementById(tabButtons[0].getAttribute('data-tab')).classList.remove('hidden');
}

// Close sidebar when clicking outside on mobile
document.addEventListener('click', (e) => {
    if (window.innerWidth < 768 && sidebar.classList.contains('active')) {
        if (!sidebar.contains(e.target) && !mobileMenuBtn.contains(e.target)) {
            sidebar.classList.remove('active');
            document.body.classList.remove('overflow-hidden');
        }
    }
});

// Handle window resize
window.addEventListener('resize', () => {
    if (window.innerWidth >= 768) {
        sidebar.classList.remove('active');
        document.body.classList.remove('overflow-hidden');
    }
});
</script>