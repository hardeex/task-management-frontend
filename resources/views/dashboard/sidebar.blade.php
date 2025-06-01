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
                <li><a href="{{route('dashboard')}}" class="sidebar-active flex items-center space-x-3 p-3 rounded-lg transition-colors">
                    <i class="fas fa-chart-pie w-5"></i>
                    <span>Dashboard</span>
                </a></li>
                <li><a href="{{route('create-task')}}" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-100 transition-colors">
                    <i class="fas fa-tasks w-5"></i>
                    <span>Tasks</span>
                </a></li>
                <li><a href="{{route('projects')}}" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-100 transition-colors">
                    <i class="fas fa-folder w-5"></i>
                    <span>Projects</span>
                </a></li>
                <li><a href="{{route('invite-team')}}" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-100 transition-colors">
                    <i class="fas fa-users w-5"></i>
                    <span>Team</span>
                </a></li>
                <li><a href="{{route('calendar')}}" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-100 transition-colors">
                    <i class="fas fa-calendar w-5"></i>
                    <span>Calendar</span>
                </a></li>
                <li><a href="{{route('report')}}" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-100 transition-colors">
                    <i class="fas fa-chart-bar w-5"></i>
                    <span>Reports</span>
                </a></li>
                <li><a href="{{route('setting')}}" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-100 transition-colors">
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