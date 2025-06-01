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
        
        .kanban-column {
            min-height: 500px;
            max-height: 70vh;
            overflow-y: auto;
        }
        
        .tab-content {
            display: none;
        }
        
        .tab-content.active {
            display: block;
        }
        
        .tab-button.active {
            background: var(--task-gradient);
            color: white;
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
        
        .gantt-bar {
            height: 20px;
            border-radius: 10px;
            position: relative;
            margin: 2px 0;
        }
        
        .milestone {
            width: 0;
            height: 0;
            border-left: 8px solid transparent;
            border-right: 8px solid transparent;
            border-bottom: 12px solid var(--task-warning);
            display: inline-block;
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