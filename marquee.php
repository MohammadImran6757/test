<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.floating-marquee {
  display: flex;
  overflow: hidden;
  width: 100%;
}

.float-item {
  flex: 0 0 50%; /* Adjust width based on the number of items */
  animation: float 3s ease-in-out infinite;
}

@keyframes float {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-20px); }
}


    </style>
</head>
<body>
<div class="floating-marquee">
  <div class="float-item">Item 1 Content</div>
  <div class="float-item">Item 2 Content</div>
  <!-- Add more items as needed -->
</div>


</body>
</html>