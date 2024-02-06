<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
          @media (max-width: 600px) {
            .logout ul {
                position: relative;
                display: inline-block;
            }

            .logout ul ul {
                display: none;
                position: absolute;
                top: 60% !important;
                right: 85% !important;
                background-color: #f9f9f9;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                z-index: 1;
            }

            .logout ul ul li {
                display: block;
            }
        }
    </style>
</head>
<body>
   
    <div class="header">
        <div class="logo left">
            <img src="img/forgot.png" alt="">
            <span>Random</span>
        </div>
        <div class="dropdown-div left">
            <div class="drop-btn"><a href="#">Our Branches</a><img src="img/dropdown.svg" alt=""></div>
            <div class="dropdown-content">
                <a href="#">Varanasi</a><a href="#">Allahabad</a><a href="#">Lucknow</a>
            </div>
        </div>
        <div class="logout right">
            <ul>
                <li>
                    <a href="#"><img src="img/logout.svg" alt=""></a>
                    <ul class="option-color">
                      <li><a href="#">Change Password</a></li>
                      <li><a href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

  
   
        <script>
            // Function to toggle the dropdown menu on click
            function toggleDropdown() {
                var dropdownContent = document.querySelector('.logout ul ul');
                dropdownContent.style.display = (dropdownContent.style.display === 'block') ? 'none' : 'block';
            }

            // Attach the toggleDropdown function to the click event of the logout button
            document.querySelector('.logout ul li a').addEventListener('click', toggleDropdown);
          
        </script>
        <!-- <script>
            document.addEventListener('DOMContentLoaded', function () {
        // Get the element with the class "logout"
        var logoutElement = document.querySelector('.logout ul ul');

        // Add a click event listener to it
        logoutElement.addEventListener('click', function () {
            // Hide the parent HTML tag
            logoutElement.style.display = 'none';
        });
    });
        </script> -->
   
</body>
</html>