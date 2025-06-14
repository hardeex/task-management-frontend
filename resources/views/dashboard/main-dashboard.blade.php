<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
   @include('dashboard.style')
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

   @include('dashboard.mobile')
</body>
</html>