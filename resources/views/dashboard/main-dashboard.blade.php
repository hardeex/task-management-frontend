<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>

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
        
        .status-badge {
            font-size: 0.75rem;
            padding: 0.25rem 0.5rem;
            border-radius: 9999px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        
        .priority-high { background-color: var(--task-error); color: white; }
        .priority-medium { background-color: var(--task-warning); color: white; }
        .priority-low { background-color: var(--task-info); color: white; }
        
        .status-todo { background-color: var(--task-gray-200); color: var(--task-gray-700); }
        .status-progress { background-color: var(--task-secondary-light); color: white; }
        .status-review { background-color: var(--task-warning); color: white; }
        .status-done { background-color: var(--task-success); color: white; }
        
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
                transition: transform 0.3s ease;
            }
            
            .sidebar.active {
                transform: translateX(0);
            }
        }
        
        .chart-container {
            background: var(--task-gradient-light);
            border-radius: 1rem;
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
    @include('dashboard.sidebar')

    <!-- Main Content -->
    <div class="lg:ml-64 min-h-screen">
        <!-- Header -->
      @include('dashboard.header')

        <!-- Main Dashboard Content -->
        <main class="p-4 lg:p-6">
            <!-- Stats Cards -->
           @include('dashboard.stats')

            <!-- Charts and Recent Activity -->
            @include('dashboard.charts')

            <!-- Recent Tasks and Projects -->
            <div class="grid grid-cols-1 xl:grid-cols-2 gap-8">
                <!-- Recent Tasks -->
               @include('dashboard.recent-tasks')

                <!-- Active Projects -->
                @include('dashboard.active-tasks')
            </div>
        </main>
    </div>

    <!-- Mobile Overlay -->
    <div id="mobile-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-30 lg:hidden hidden"></div>

    <script>
        // Mobile menu functionality
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const sidebar = document.getElementById('sidebar');
        const mobileOverlay = document.getElementById('mobile-overlay');

        mobileMenuBtn.addEventListener('click', () => {
            sidebar.classList.add('active');
            mobileOverlay.classList.remove('hidden');
        });

        mobileOverlay.addEventListener('click', () => {
            sidebar.classList.remove('active');
            mobileOverlay.classList.add('hidden');
        });

        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', (e) => {
            if (window.innerWidth < 1024) {
                if (!sidebar.contains(e.target) && !mobileMenuBtn.contains(e.target)) {
                    sidebar.classList.remove('active');
                    mobileOverlay.classList.add('hidden');
                }
            }
        });

        // Responsive handling
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024) {
                sidebar.classList.remove('active');
                mobileOverlay.classList.add('hidden');
            }
        });

        // Task checkbox interactions
        document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
            checkbox.addEventListener('change', (e) => {
                const taskRow = e.target.closest('.flex');
                const taskText = taskRow.querySelector('p');
                
                if (e.target.checked) {
                    taskText.classList.add('line-through');
                    taskText.classList.add('text-gray-500');
                } else {
                    taskText.classList.remove('line-through');
                    taskText.classList.remove('text-gray-500');
                }
            });
        });

        // Add some interactive hover effects
        document.querySelectorAll('.task-card').forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.style.transform = 'translateY(-2px)';
            });
            
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'translateY(0)';
            });
        });
    </script>
</body>
</html>