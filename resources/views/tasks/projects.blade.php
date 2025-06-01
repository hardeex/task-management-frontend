<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project - TaskFlow</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    @include('dashboard.style')
    <link rel="stylesheet" href="styles.css">
 
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
       @include('projects.header')

        <!-- Main Project Content -->
        <main class="p-4 lg:p-6">
            <!-- Tabs Navigation -->
            @include('projects.nav')

            <!-- Tab Contents -->
            
            <!-- Overview Tab -->
            @include('projects.overview')

            <!-- Tasks Tab -->
           @include('projects.tasks')
           
            <!-- Kanban Tab -->
          @include('projects.kanban')
            <!-- Timeline Tab -->
          @include('projects.timeline')

            <!-- Files Tab -->
            <div id="files" class="tab-content">
                <div class="bg-white rounded-lg shadow-sm">
                    <!-- Files Header -->
                    <div class="p-6 border-b border-gray-200 flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-gray-800">Project Files</h3>
                        <button class="brand-gradient text-white px-4 py-2 rounded-lg font-medium hover:opacity-90 transition-opacity">
                            <i class="fas fa-upload mr-2"></i>
                            Upload Files
                        </button>
                    </div>
                    
                    <!-- Files List -->
                   @include('projects.files')

            <!-- Team Tab -->
            @include('projects.team')
        </main>
    </div>

    <script>
        // Mobile Menu Toggle
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('active');
        });

        // Tab Switching
        const tabButtons = document.querySelectorAll('.tab-button');
        const tabContents = document.querySelectorAll('.tab-content');
        
        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons and contents
                tabButtons.forEach(btn => btn.classList.remove('active'));
                tabContents.forEach(content => content.classList.remove('active'));
                
                // Add active class to clicked button and corresponding content
                button.classList.add('active');
                const tabId = button.getAttribute('data-tab');
                document.getElementById(tabId).classList.add('active');
            });
        });
    </script>
</body>
</html>