<script>
        function toggleSidebar() {
            const sidebar = document.querySelector('.left-menu');
            const overlay = document.querySelector('.sidebar-overlay');
            sidebar.classList.toggle('active');
            overlay.classList.toggle('active');
        }

        function toggleProfileDropdown() {
            const dropdown = document.getElementById('profileDropdown');
            dropdown.classList.toggle('active');
        }

        // Close when clicking outside
        document.addEventListener('click', function(event) {
            const wrapper = document.querySelector('.profile-wrapper');
            const dropdown = document.getElementById('profileDropdown');
            if (wrapper && !wrapper.contains(event.target)) {
                dropdown.classList.remove('active');
            }
        });
    </script>