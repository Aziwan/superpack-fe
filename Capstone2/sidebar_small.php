<?php

$role = isset($_SESSION['role']) ? $_SESSION['role'] : 'Guest';
$department = isset($_SESSION['user_department']) ? $_SESSION['user_department'] : 'Superpack Enterprise';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Example</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="sidebar_small.css">

</head>
<body>
    <?php include 'sidebar.php'; ?>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="container-sidebar-all">
            <div class="container-sidebar-logo" onclick="toggleBigSidebar()">
                <img src="Superpack-Enterprise-Logo.png" alt="Superpack Enterprise Logo" class="logo_image">
            </div>

            <div class="container-sidebar-options">
                <ul class="nav_list" >
                    <li onclick="window.location.href='task_management.php?department=<?php echo $department;?>'">
                        <a>
                            <i class="fas fa-chart-bar"></i>
                        </a>
                    </li>
                    <li id="small-payroll" onclick="window.location.href='payroll.php'">
                        <a>
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                    </li>
                    <li id='small-employee' onclick="window.location.href='employee_list.php';">
                        <a>
                            <i class="fas fa-cogs"></i>
                        </a>
                    </li>
                    <!-- Add other menu items here -->
                </ul>
            </div>

            
        </div>

    </div>
    <!-- JavaScript for dropdowns and scroll-to-top functionality -->
    <script>

        document.addEventListener('DOMContentLoaded', function() {
            var role = "<?php echo $role; ?>";
                
            // Select the small-employee item by its ID
            var employeeLi = document.getElementById('small-employee');

            // Select the small-payroll item by its ID
            var payrollLi = document.getElementById('small-payroll');

            // Select the Payroll menu item by its title text
            var payrollItem = Array.from(document.querySelectorAll('.sidebar ul li'))
                .find(li => li.textContent.includes('Payroll'));

            // Select the Recruitment menu item by its title text
            var recruitmentItem = Array.from(document.querySelectorAll('.sidebar ul li'))
                .find(li => li.textContent.includes('Recruitment'));

            // Select the Personnel Records menu item by its title text
            var personnelRecordsItem = Array.from(document.querySelectorAll('.sidebar ul li'))
                .find(li => li.textContent.includes('Personnel Records'));

            // Select Evaluation inside Employee dropdown
            var evaluationItem = Array.from(document.querySelectorAll('.sidebar ul li a'))
                .find(li => li.textContent.includes('Evaluation'));
            
            
            
            // Hide the Payroll item if the user is not an admin
            if (role !== 'Admin') {
                employeeLi.style.display = 'none';
                payrollLi.style.display = 'none';
                payrollItem.style.display = 'none';
                recruitmentItem.style.display = 'none';
                personnelRecordsItem.style.display = 'none';
                evaluationItem.style.display = 'none';
            }
            else {
                payrollItem.style.display = 'block';
                recruitmentItem.style.display = 'block';
                personnelRecordsItem.style.display = 'block';
                evaluationItem.style.display = 'block';
            }
        });


        // Dropdown functionality
        document.querySelectorAll('.dropdown-btn').forEach(button => {
            button.addEventListener('click', () => {
                const dropdown = button.nextElementSibling;
                dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
            });
        });

        // Function to toggle dropdown
        document.addEventListener('DOMContentLoaded', function() {
            var dropdowns = document.querySelectorAll('.dropdown-btn');
            dropdowns.forEach(function(dropdown) {
                dropdown.addEventListener('click', function() {
                    this.classList.toggle('active');
                });
            });
        });

        function toggleBigSidebar() {
            const sidebar = document.querySelector('.big-sidebar');
            sidebar.style.left = sidebar.style.left === '0px' ? '-350px' : '0px';
        }


    </script>
</body>
</html>