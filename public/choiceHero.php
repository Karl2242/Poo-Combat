<?php include_once "./assets/headerfooter/header.php";
session_start();
?>

<main class="w-full flex justify-center h-[700px]">
<div class="flex flex-col hover:scale-110 transition-all justify-center items-center mt-8 shadow-xl gap-10">
    <img class="w-[50%]" src="<?= $_SESSION['img']?>" alt="">
    <a class="bg-blue-500 hover:scale-125 transition-all rounded-lg p-7 text-white" href="./mainpage.php">Choisir !</a>
</div>

</main>
    
</body>