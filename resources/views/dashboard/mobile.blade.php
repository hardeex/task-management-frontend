
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

        // Add Task Modal functionality
        const addTaskBtn = document.getElementById('add-task-btn');
        const addTaskModal = document.getElementById('add-task-modal');
        const closeModalBtn = document.getElementById('close-modal-btn');
        const cancelTaskBtn = document.getElementById('cancel-task-btn');
        const addTaskForm = document.getElementById('add-task-form');

        // Open modal
        addTaskBtn.addEventListener('click', () => {
            addTaskModal.classList.remove('hidden');
            document.body.style.overflow = 'hidden'; // Prevent background scrolling
        });

        // Close modal functions
        const closeModal = () => {
            addTaskModal.classList.add('hidden');
            document.body.style.overflow = 'auto'; // Restore scrolling
            addTaskForm.reset(); // Clear form
        };

        closeModalBtn.addEventListener('click', closeModal);
        cancelTaskBtn.addEventListener('click', closeModal);

        // Close modal when clicking outside
        addTaskModal.addEventListener('click', (e) => {
            if (e.target === addTaskModal) {
                closeModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !addTaskModal.classList.contains('hidden')) {
                closeModal();
            }
        });

        // Form submission
        addTaskForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(addTaskForm);
            const taskData = Object.fromEntries(formData.entries());
            
            // Here you would typically send the data to your Laravel backend
            console.log('Task Data:', taskData);
            
            // Show success message (you can replace this with actual Laravel handling)
            alert('Task created successfully!');
            closeModal();
            
            // I will link to the backend later:
            // fetch('/tasks', {
            //     method: 'POST',
            //     headers: {
            //         'Content-Type': 'application/json',
            //         'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            //     },
            //     body: JSON.stringify(taskData)
            // }).then(response => response.json())
            //   .then(data => {
            //       if (data.success) {
            //           closeModal();
            //           // Refresh the page or update the task list
            //           location.reload();
            //       }
            //   });
        });

        // File upload preview
        const fileUpload = document.getElementById('file-upload');
        fileUpload.addEventListener('change', (e) => {
            const files = Array.from(e.target.files);
            if (files.length > 0) {
                const fileList = files.map(file => file.name).join(', ');
                const uploadArea = fileUpload.closest('div');
                uploadArea.querySelector('p').textContent = `Selected: ${fileList}`;
            }
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
            if (checkbox.id !== 'notify-assignee') { // Skip the notify checkbox in modal
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
            }
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