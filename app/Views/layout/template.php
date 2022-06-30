<html ng-app>
<head>
  <title>DigiShop</title>
  <meta name="theme-color" content="#3b82f6">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.4/dist/flowbite.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Monda&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css" >
  <!--<script src="https://unpkg.com/vue@3"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
 

</head>
<body class="bg-blue-50 font-[Monda]">

  <div class="flex">
    
    <?= $this->include('layout/sidebar'); ?>
    
    <div id="main" class="w-full h-screen overflow-y-auto ">
      
      <?= $this->include('layout/navbar'); ?>
      <div id="content" class=" px-5 py-5">
        <?= $this->renderSection('content'); ?>
      </div>
      
     
    </div>
    
  </div>
  
  
  

</body>


<script>
    function togglePesan() {
      document.querySelector('#subpesan').classList.toggle('hidden');
      document.querySelector('#pesan').classList.toggle('rotate-0');
    }

    function Openbar() {
      document.querySelector('#sidebar').classList.toggle('left-0');
    }
 </script> 
<script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>
<script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>