<?php
$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest';

// Check if the 'department' key exists in the URL query parameters
if (isset($_GET['department'])) {
    $department_name = $_GET['department'];

    switch ($department_name) {
        case 'sales':
            $department_name = 'Sales Department';
            break;
        case 'purchasing':
            $department_name = 'Purchasing Department';
            break;
        case 'proddev':
            $department_name = 'Product Development Department';
            break;
        case 'warehouse':
            $department_name = 'Warehouse Department';
            break;
        case 'logistics':
            $department_name = 'Logistics Department';
            break;
        case 'accounting':
            $department_name = 'Accounting Department';
            break;
        default:
            $department_name = 'Superpack Enterprise';
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<style>
    .header {
        position: relative;
        top: 0;
        left: 0;
        width: 100%;
        height: 90px;
    }

    .header-bar {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        padding: 15px;
    }

    .logo_details {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
        margin-left: 30px;
        background-color: #64A651;
        z-index: -1;
    }

    .logo_image {
        height: 45px;
        width: 45px;
        border-radius: 50%;
        margin-right: 8px;
    }


    img {
        cursor:pointer;
    }
    
    .logo_name {
        font-size: 15px;
        font-weight: bold;
        color: #ffffff;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    .user_info {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .user_logo {
        height: 35px;
        width: 35px;
        border-radius: 50%;
        margin-left: 16px;
        margin-right: 10px;

    }

    .user_name{
        display: block;
        color: #ffffff;
        font-weight: bold;
        font-family: 'Roboto', sans-serif;
        background-color: #c0392b;
        cursor: pointer;
        padding: 5px;
        border-radius: 10px;
    }
    .user_name:hover {
        color: #000000;
        background-color: #e74c3c;
    }
    .clock {
        display: block;
        align-items: center;
        color: #ffffff;
        font-size: 16px;
        font-family: 'Roboto', sans-serif;
        font-weight: bold;
        
        margin-bottom: 20px;
    }

    .user_name_text {
        font-size: 24px;
        font-weight: bold;
        font-family: 'Roboto', sans-serif;
        color: #ffffff;
    }



</style>
<body>
    <div class="header">
        <div class="header-bar">
            <div class="user_info">
                <span class="user_name_text"><?php echo $username?></span>
                <img src="cina.jpg" alt="User Logo" class="user_logo" onclick="window.location.href='logout.php'">
            </div>
        </div>
    </div>
    <script>


        const clock = document.querySelector('.current-time');
        const options = {hour: '2-digit', minute: '2-digit'};
        const locale = 'en-PH';
        setInterval(() => {
            const now = new Date();
            clock.textContent = now.toLocaleTimeString(locale, options);
        }, 1000);

        // Select the element with the class 'logo_name'
        const logoName = document.querySelector('.logo_name');

        // Define department name
        const departmentName = '<?php echo $department_name;?>';

        // Update the text content of the element
        logoName.textContent = departmentName;
    </script>
</body>
</html>