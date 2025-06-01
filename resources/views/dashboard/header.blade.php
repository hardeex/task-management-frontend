  <header class="bg-white shadow-sm border-b border-gray-200 p-4 lg:p-6">
            <div class="flex items-center justify-between">
                <div class="lg:ml-0 ml-12">
                    <h1 class="text-2xl font-bold text-gray-800">Dashboard</h1>
                    <p class="text-gray-600">Welcome back! Here's what's happening with your projects.</p>
                </div>
                
                <div class="flex items-center space-x-4">
                    <!-- Search -->
                    <div class="hidden md:block relative">
                        <input type="text" placeholder="Search tasks..." 
                               class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent w-64">
                        <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                    </div>
                    
                    <!-- Notifications -->
                    <button class="relative p-2 text-gray-600 hover:text-gray-800">
                        <i class="fas fa-bell text-xl"></i>
                        <span class="absolute -top-1 -right-1 w-5 h-5 bg-red-500 text-white text-xs rounded-full flex items-center justify-center">3</span>
                    </button>
                    
                    <!-- Quick Add Task -->
                    <button class="brand-gradient text-white px-4 py-2 rounded-lg font-medium hover:opacity-90 transition-opacity">
                        <i class="fas fa-plus mr-2"></i>
                        <span class="hidden md:inline">Add Task</span>
                    </button>
                </div>
            </div>
        </header>
