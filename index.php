<?php

include "koneksi.php";

if(isset($_POST['submit'])){ 
$nama = $_POST["nama"];
$pesan = $_POST["pesan"];
$sqlpesan = "INSERT INTO nikahan (id_undangan, nama, pesan) VALUES (NULL,'$nama','$pesan')";
$querypesan = mysqli_query($konek, $sqlpesan);
if ($querypesan) {
    header("location:index.php");
}
}

$sqlnampilin = "SELECT * FROM nikahan";
$querynampilin = mysqli_query($konek, $sqlnampilin);





?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wedding Rovy Of The Emisan</title>
    <link rel="stylesheet" href="dist/output.css">
    <link rel="stylesheet" href="src/input.css">
    
</head>
    <style type="text/tailwindcss">    

    </style>
<body>

<!-- header section start -->
<header id="header" class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10  ">
<div class="container ">
    <div class="flex items-center justify-between relative">
        <div class="px-4">
            <a href="#" class="text-lg font-bold text-primary py-6 block mt-5">ANANDA ❤ AGUNG</a>
        </div>
        <div class="flex items-center px-4 ">
            <button id="hamburger" name="hamburger" type="button" class="right-4 absolute block lg:hidden">
                <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                <span class="hamburger-line transition duration-300 ease-in-out "></span>
                <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
            </button>

            <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px]  w-full right-4 top-full lg:block lg:static lg:max-w-full lg:shadow-none lg:rounded-none ">
                <ul class="block lg:flex font-semibold">
                    <li class="group">
                        <a href="#wedding" class="text-base py-2 mx-8 flex text-dark hover:text-primary">Beranda</a>
                    </li>
                    <li class="group">
                        <a href="#tentang" class="text-base py-2 mx-8 flex text-dark hover:text-primary">Tentang</a>
                    </li>
                    <li class="group">
                        <a href="#undangan" class="text-base py-2 mx-8 flex text-dark hover:text-primary">Undangan</a>
                    </li>
                    <li class="group">
                        <a href="#tanggal" class="text-base py-2 mx-8 flex text-dark hover:text-primary">Tanggal</a>
                    </li>
                    <li class="group">
                        <a href="#gallery" class="text-base py-2 mx-8 flex text-dark hover:text-primary">Gallery</a>
                    </li>
                    <li class="group">
                        <a href="#kasihucapan" class="text-base py-2 mx-8 flex text-dark hover:text-primary">Ucapan</a>
                    </li>
                    <li class="group">
                        <a href="#ucapan" class="text-base py-2 mx-8 flex text-dark hover:text-primary">Pesan</a>
                    </li>

                </ul>
            </nav>
        </div>
    </div>
</div>
</header>
<!-- header section end -->
    








<!-- the wedding section start -->
<section id="wedding" class="pt-36">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full px-4 self-center lg:w-1/2">
                <h1 class="text-xl font-semibold text-primary md:text-2xl text-nika">Bismillahirrahmanirrahim<span class="block font-bold text-dark text-4xl mt-1 lg:text-5xl">THE WEDDING OF</span> </h1>
                <h1 class="block font-semibold text-primary text-4xl mt-1 lg:text-5xl">Ananda Nur Aprianti & Agung Hamdani </h1>
                
                <h2 class= "mt-2 text-dark text-2xl mb-5 lg:text-3xl font-bold">13 JANUARY 2023 </h2>
                <p class="font-medium text-secondary mb-10 leading-relaxed"><span class="w-3 h-8 text-center text-base font-semibold text-whit bg-dark py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out text-white" >SAVE THE DATE</span></p>

    <a class="ukurantanggal">00</a> 
    <a class="ukurantanggal">00</a>
    <a class="ukurantanggal">00</a>
    <a class="ukurantanggal">00</a>

            </div>

            <div class="w-full self-end px-4 lg:w-1/2 ">
                <div class="relative -mt-10 lg:mt-9 lg:right-0">
                    <img src="dist/img/ananda/home1.png" alt="rovy" class=" max-w-full mx-auto ">

                    <span class="absolute -bottom-16 md:bottom-3 lg:bottom-4  -z-10 left-1/2 -translate-x-1/2  md:scale-125 ">
                        <svg width="400" height="400"  viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#14b8a6" d="M37.3,-47.9C50.1,-33.6,63.6,-23.6,67.7,-10.4C71.8,2.7,66.5,19,57,30.5C47.5,42,33.8,48.7,19.2,54.9C4.6,61,-10.9,66.7,-26.2,64.5C-41.6,62.2,-56.8,51.9,-67.7,37.1C-78.7,22.3,-85.4,3,-80.8,-12.7C-76.1,-28.4,-60.2,-40.6,-44.9,-54.5C-29.6,-68.3,-14.8,-83.8,-1.3,-82.3C12.2,-80.7,24.4,-62.2,37.3,-47.9Z" transform="translate(100 100) scale(1,1)" />
                      </svg>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- the wedding section end -->




<!-- tentang  section start -->
<section id="tentang" class="pt-36 pb-32">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full px-4 mb-10 lg:w-1/2">
                <h4 class="font-bold  text-primary text-lg mb-3 ">Tentang Kami</h4>

                <h2 class="font-bold text-dark text-3xl mb-5 max-w-md lg:text-4xl ">Ananda</h2>
                <p class="font-medium text-base text-secondary max-w-xl lg:text-lg">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem sapiente, debitis impedit vitae atque unde accusamus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti assumenda illum ratione rem quia? Sunt ullam maiores aliquam suscipit, temporibus error libero voluptates illum saepe hic nobis beatae animi vel. Iure voluptates obcaecati architecto iste nesciunt voluptate, fuga asperiores nemo doloribus mollitia labore eum, nam quas molestiae inventore quibusdam omnis lorem100 ?</p>


                <div class="flex items-center mt-5 ">
                    <!-- youtube -->
                    <a href="https://youtube.com" target="_blank" class="w-9 h-9 mr-3 flex justify-center border items-center  border-slate-300 rounded-full text-slate-300   hover:bg-primary hover:border-primary hover:text-white ">
                        <svg role="img" widht="20"  height="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>YouTube</title><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>

                    <!-- instagram -->
                    <a href="https://youtube.com" target="_blank" class="w-9 h-9 mr-3 flex justify-center border items-center  border-slate-300 rounded-full text-slate-300   hover:bg-primary hover:border-primary hover:text-white ">
                        <svg role="img" widht="20"  height="20" class="fill-current"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                    </a>

                    <!-- twitter -->
                    <a href="https://youtube.com" target="_blank" class="w-9 h-9 mr-3 flex justify-center border items-center  border-slate-300 rounded-full text-slate-300   hover:bg-primary hover:border-primary hover:text-white ">
                        <svg role="img"widht="20"  height="20" class="fill-current"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Twitter</title><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                    </a>

                <!-- facebook -->
                    <a href="https://youtube.com" target="_blank" class="w-9 h-9 mr-3 flex justify-center border items-center  border-slate-300 rounded-full text-slate-300   hover:bg-primary hover:border-primary hover:text-white ">
                        <svg role="img"widht="20"  height="20" class="fill-current"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>

                    <!-- discord -->
                    <a href="https://youtube.com" target="_blank" class="w-9 h-9 mr-3 flex justify-center border items-center  border-slate-300 rounded-full text-slate-300   hover:bg-primary hover:border-primary hover:text-white ">

                            <svg role="img"widht="20"  height="20" class="fill-current"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Discord</title><path d="M20.317 4.3698a19.7913 19.7913 0 00-4.8851-1.5152.0741.0741 0 00-.0785.0371c-.211.3753-.4447.8648-.6083 1.2495-1.8447-.2762-3.68-.2762-5.4868 0-.1636-.3933-.4058-.8742-.6177-1.2495a.077.077 0 00-.0785-.037 19.7363 19.7363 0 00-4.8852 1.515.0699.0699 0 00-.0321.0277C.5334 9.0458-.319 13.5799.0992 18.0578a.0824.0824 0 00.0312.0561c2.0528 1.5076 4.0413 2.4228 5.9929 3.0294a.0777.0777 0 00.0842-.0276c.4616-.6304.8731-1.2952 1.226-1.9942a.076.076 0 00-.0416-.1057c-.6528-.2476-1.2743-.5495-1.8722-.8923a.077.077 0 01-.0076-.1277c.1258-.0943.2517-.1923.3718-.2914a.0743.0743 0 01.0776-.0105c3.9278 1.7933 8.18 1.7933 12.0614 0a.0739.0739 0 01.0785.0095c.1202.099.246.1981.3728.2924a.077.077 0 01-.0066.1276 12.2986 12.2986 0 01-1.873.8914.0766.0766 0 00-.0407.1067c.3604.698.7719 1.3628 1.225 1.9932a.076.076 0 00.0842.0286c1.961-.6067 3.9495-1.5219 6.0023-3.0294a.077.077 0 00.0313-.0552c.5004-5.177-.8382-9.6739-3.5485-13.6604a.061.061 0 00-.0312-.0286zM8.02 15.3312c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9555-2.4189 2.157-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.9555 2.4189-2.1569 2.4189zm7.9748 0c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9554-2.4189 2.1569-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.946 2.4189-2.1568 2.4189Z"/></svg>
                        </a>

                </div>
            </div>



            <div class="w-full px-4 mb-10 lg:w-1/2 ">
     
            
                <h2 class="font-bold text-dark text-3xl mb-5 max-w-md lg:text-4xl mt-10 ">Agung</h2>
                <p class="font-medium text-base text-secondary max-w-xl lg:text-lg">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem sapiente, debitis impedit vitae atque unde accusamus? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam consequuntur inventore iste dignissimos doloremque facilis, eius quasi aliquam voluptatum, sint iusto tenetur ea officia aperiam nulla blanditiis ab cumque ipsum eum ex veritatis neque quidem totam. Molestias ad dolorem omnis deleniti aspernatur, saepe mollitia! Velit ut est accusantium perferendis doloribus?</p>


                <div class="flex items-center mt-5 ">
                    <!-- youtube -->
                    <a href="https://youtube.com" target="_blank" class="w-9 h-9 mr-3 flex justify-center border items-center  border-slate-300 rounded-full text-slate-300   hover:bg-primary hover:border-primary hover:text-white ">
                        <svg role="img" widht="20"  height="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>YouTube</title><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>

                    <!-- instagram -->
                    <a href="https://youtube.com" target="_blank" class="w-9 h-9 mr-3 flex justify-center border items-center  border-slate-300 rounded-full text-slate-300   hover:bg-primary hover:border-primary hover:text-white ">
                        <svg role="img" widht="20"  height="20" class="fill-current"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                    </a>

                    <!-- twitter -->
                    <a href="https://youtube.com" target="_blank" class="w-9 h-9 mr-3 flex justify-center border items-center  border-slate-300 rounded-full text-slate-300   hover:bg-primary hover:border-primary hover:text-white ">
                        <svg role="img"widht="20"  height="20" class="fill-current"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Twitter</title><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                    </a>

                <!-- facebook -->
                    <a href="https://youtube.com" target="_blank" class="w-9 h-9 mr-3 flex justify-center border items-center  border-slate-300 rounded-full text-slate-300   hover:bg-primary hover:border-primary hover:text-white ">
                        <svg role="img"widht="20"  height="20" class="fill-current"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>

                    <!-- discord -->
                    <a href="https://youtube.com" target="_blank" class="w-9 h-9 mr-3 flex justify-center border items-center  border-slate-300 rounded-full text-slate-300   hover:bg-primary hover:border-primary hover:text-white ">

                            <svg role="img"widht="20"  height="20" class="fill-current"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Discord</title><path d="M20.317 4.3698a19.7913 19.7913 0 00-4.8851-1.5152.0741.0741 0 00-.0785.0371c-.211.3753-.4447.8648-.6083 1.2495-1.8447-.2762-3.68-.2762-5.4868 0-.1636-.3933-.4058-.8742-.6177-1.2495a.077.077 0 00-.0785-.037 19.7363 19.7363 0 00-4.8852 1.515.0699.0699 0 00-.0321.0277C.5334 9.0458-.319 13.5799.0992 18.0578a.0824.0824 0 00.0312.0561c2.0528 1.5076 4.0413 2.4228 5.9929 3.0294a.0777.0777 0 00.0842-.0276c.4616-.6304.8731-1.2952 1.226-1.9942a.076.076 0 00-.0416-.1057c-.6528-.2476-1.2743-.5495-1.8722-.8923a.077.077 0 01-.0076-.1277c.1258-.0943.2517-.1923.3718-.2914a.0743.0743 0 01.0776-.0105c3.9278 1.7933 8.18 1.7933 12.0614 0a.0739.0739 0 01.0785.0095c.1202.099.246.1981.3728.2924a.077.077 0 01-.0066.1276 12.2986 12.2986 0 01-1.873.8914.0766.0766 0 00-.0407.1067c.3604.698.7719 1.3628 1.225 1.9932a.076.076 0 00.0842.0286c1.961-.6067 3.9495-1.5219 6.0023-3.0294a.077.077 0 00.0313-.0552c.5004-5.177-.8382-9.6739-3.5485-13.6604a.061.061 0 00-.0312-.0286zM8.02 15.3312c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9555-2.4189 2.157-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.9555 2.4189-2.1569 2.4189zm7.9748 0c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9554-2.4189 2.1569-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.946 2.4189-2.1568 2.4189Z"/></svg>
                        </a>

                </div>
            </div>

    </div>
</section>
<!-- tentang section end -->




<!--  undangan section start -->
<section id="undangan" class="pt-36 pb-32 bg-dark">
    <div class="container">
        <div class="w-full px-4">
            <div class="w-full px-4">
                <div class="mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2 ">Kartu Undangan</h4>
                    <h2 class="font-bold text-3xl text-white mb-4 sm:text-4xl lg:text-5xl">KAMI MENGUNDANG</h2>
                    <p class="text-medium text-md text-secondary md:text-lg">Tanpa mengurangi rasa hormat
                        kami bermaksud mengundang Bapak/Ibu/Saudara/ untuk menghadiri acara pernikahan kami</p>
                </div>

                <div class="container px-4">
                    <div class="flex flex-wrap items-center justify-centerr">
                        <div class=" container ">

                            <div class=" rounded-full  mx-4 py-4 opacity-60  transition hover:grayscale-0 hover:opacity-100 duration-500 lg:mx-6 xl:mx-8">
                                <img src="dist/img/ananda/anandaa1.jpg" alt="google" class="border-4 border-primary w-[200px] h-[200px] rounded-full mx-auto">
                            </div>
            
                            <h1 class="block font-semibold text-primary text-4xl mt-5 md:mt-10 lg:text-5xl justify-center text-center ">Ananda Nur Aprianti
                                <span class="text-base text-md text-secondary md:text-base">Putri dari Bapak Asep Suryana & Ibu Ika Yantika</span>
                                <div class="flex items-center mt-5 justify-center">
                                    <!-- youtube -->
                                    <a href="https://youtube.com" target="_blank" class="w-9 h-9 mr-3 flex justify-center border items-center  border-slate-300 rounded-full text-slate-300   hover:bg-primary hover:border-primary hover:text-white ">
                                        <svg role="img" widht="20"  height="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>YouTube</title><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                                    </a>
                
                                    <!-- instagram -->
                                    <a href="https://youtube.com" target="_blank" class="w-9 h-9 mr-3 flex justify-center border items-center  border-slate-300 rounded-full text-slate-300   hover:bg-primary hover:border-primary hover:text-white ">
                                        <svg role="img" widht="20"  height="20" class="fill-current"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                                    </a>
                
                                    <!-- twitter -->
                                    <a href="https://youtube.com" target="_blank" class="w-9 h-9 mr-3 flex justify-center border items-center  border-slate-300 rounded-full text-slate-300   hover:bg-primary hover:border-primary hover:text-white ">
                                        <svg role="img"widht="20"  height="20" class="fill-current"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Twitter</title><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                                    </a>
                 
                                <!-- facebook -->
                                    <a href="https://youtube.com" target="_blank" class="w-9 h-9 mr-3 flex justify-center border items-center  border-slate-300 rounded-full text-slate-300   hover:bg-primary hover:border-primary hover:text-white ">
                                        <svg role="img"widht="20"  height="20" class="fill-current"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                                    </a>
                
                                    <!-- discord -->
                                    <a href="https://youtube.com" target="_blank" class="w-9 h-9 mr-3 flex justify-center border items-center  border-slate-300 rounded-full text-slate-300   hover:bg-primary hover:border-primary hover:text-white ">
                
                                            <svg role="img"widht="20"  height="20" class="fill-current"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Discord</title><path d="M20.317 4.3698a19.7913 19.7913 0 00-4.8851-1.5152.0741.0741 0 00-.0785.0371c-.211.3753-.4447.8648-.6083 1.2495-1.8447-.2762-3.68-.2762-5.4868 0-.1636-.3933-.4058-.8742-.6177-1.2495a.077.077 0 00-.0785-.037 19.7363 19.7363 0 00-4.8852 1.515.0699.0699 0 00-.0321.0277C.5334 9.0458-.319 13.5799.0992 18.0578a.0824.0824 0 00.0312.0561c2.0528 1.5076 4.0413 2.4228 5.9929 3.0294a.0777.0777 0 00.0842-.0276c.4616-.6304.8731-1.2952 1.226-1.9942a.076.076 0 00-.0416-.1057c-.6528-.2476-1.2743-.5495-1.8722-.8923a.077.077 0 01-.0076-.1277c.1258-.0943.2517-.1923.3718-.2914a.0743.0743 0 01.0776-.0105c3.9278 1.7933 8.18 1.7933 12.0614 0a.0739.0739 0 01.0785.0095c.1202.099.246.1981.3728.2924a.077.077 0 01-.0066.1276 12.2986 12.2986 0 01-1.873.8914.0766.0766 0 00-.0407.1067c.3604.698.7719 1.3628 1.225 1.9932a.076.076 0 00.0842.0286c1.961-.6067 3.9495-1.5219 6.0023-3.0294a.077.077 0 00.0313-.0552c.5004-5.177-.8382-9.6739-3.5485-13.6604a.061.061 0 00-.0312-.0286zM8.02 15.3312c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9555-2.4189 2.157-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.9555 2.4189-2.1569 2.4189zm7.9748 0c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9554-2.4189 2.1569-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.946 2.4189-2.1568 2.4189Z"/></svg>
                                        </a>
                
                                </div>
                            </h1>
    
                        </div>

                        <div class="mt-16 mb-10 mx-auto">
                            <h1 class=" block font-semibold text-primary text-4xl mt-5 md:mt-10 lg:text-5xl justify-center text-center ">&
                            </h1>
                        </div>


                <div class=" mt-10 container">
                            <div class=" rounded-full  mx-4 py-4 opacity-60  transition hover:grayscale-0 hover:opacity-100 duration-500 lg:mx-6 xl:mx-8">
                                <img src="dist/img/ananda/anandaa2.jpg" alt="google" class="border-4 border-primary w-[200px] h-[200px] rounded-full mx-auto">
                            </a>
            
                            <h1 class="block font-semibold text-primary text-4xl mt-5 md:mt-10 lg:text-5xl justify-center ">Agung Hamdani
                                <span class="text-base text-md text-secondary md:text-base">Putra dari Bapak Maman Heryaman & Ibu Radem Maryanti</span>
                                <div class="flex items-center mt-5 justify-center ">
                                    <!-- youtube -->
                                    <a href="https://youtube.com" target="_blank" class="w-9 h-9 mr-3 flex justify-center border items-center  border-slate-300 rounded-full text-slate-300   hover:bg-primary hover:border-primary hover:text-white ">
                                        <svg role="img" widht="20"  height="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>YouTube</title><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                                    </a>
                
                                    <!-- instagram -->
                                    <a href="https://youtube.com" target="_blank" class="w-9 h-9 mr-3 flex justify-center border items-center  border-slate-300 rounded-full text-slate-300   hover:bg-primary hover:border-primary hover:text-white ">
                                        <svg role="img" widht="20"  height="20" class="fill-current"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                                    </a>
                
                                    <!-- twitter -->
                                    <a href="https://youtube.com" target="_blank" class="w-9 h-9 mr-3 flex justify-center border items-center  border-slate-300 rounded-full text-slate-300   hover:bg-primary hover:border-primary hover:text-white ">
                                        <svg role="img"widht="20"  height="20" class="fill-current"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Twitter</title><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                                    </a>
                
                                <!-- facebook -->
                                    <a href="https://youtube.com" target="_blank" class="w-9 h-9 mr-3 flex justify-center border items-center  border-slate-300 rounded-full text-slate-300   hover:bg-primary hover:border-primary hover:text-white ">
                                        <svg role="img"widht="20"  height="20" class="fill-current"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                                    </a>
                
                                    <!-- discord -->
                                    <a href="https://youtube.com" target="_blank" class="w-9 h-9 mr-3 flex justify-center border items-center  border-slate-300 rounded-full text-slate-300   hover:bg-primary hover:border-primary hover:text-white ">
                
                                            <svg role="img"widht="20"  height="20" class="fill-current"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Discord</title><path d="M20.317 4.3698a19.7913 19.7913 0 00-4.8851-1.5152.0741.0741 0 00-.0785.0371c-.211.3753-.4447.8648-.6083 1.2495-1.8447-.2762-3.68-.2762-5.4868 0-.1636-.3933-.4058-.8742-.6177-1.2495a.077.077 0 00-.0785-.037 19.7363 19.7363 0 00-4.8852 1.515.0699.0699 0 00-.0321.0277C.5334 9.0458-.319 13.5799.0992 18.0578a.0824.0824 0 00.0312.0561c2.0528 1.5076 4.0413 2.4228 5.9929 3.0294a.0777.0777 0 00.0842-.0276c.4616-.6304.8731-1.2952 1.226-1.9942a.076.076 0 00-.0416-.1057c-.6528-.2476-1.2743-.5495-1.8722-.8923a.077.077 0 01-.0076-.1277c.1258-.0943.2517-.1923.3718-.2914a.0743.0743 0 01.0776-.0105c3.9278 1.7933 8.18 1.7933 12.0614 0a.0739.0739 0 01.0785.0095c.1202.099.246.1981.3728.2924a.077.077 0 01-.0066.1276 12.2986 12.2986 0 01-1.873.8914.0766.0766 0 00-.0407.1067c.3604.698.7719 1.3628 1.225 1.9932a.076.076 0 00.0842.0286c1.961-.6067 3.9495-1.5219 6.0023-3.0294a.077.077 0 00.0313-.0552c.5004-5.177-.8382-9.6739-3.5485-13.6604a.061.061 0 00-.0312-.0286zM8.02 15.3312c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9555-2.4189 2.157-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.9555 2.4189-2.1569 2.4189zm7.9748 0c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9554-2.4189 2.1569-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.946 2.4189-2.1568 2.4189Z"/></svg>
                                        </a>
                
                                </div>
                            </h1>
    
                        </div>
                    </div>
                    </div>
                </div>
                <div class="max-w-2xl my-10 border border-slate-200 rounded-xl block mx-auto p-5 shadow-md font-sans hover:bg-primary group dark:hover:bg-slate-300">
                    <h5 class="text-slate-700 font-bold mb-3 text-lg group-hover:text-slate-800 dark:text-slate-300">My Card</h5>
                    <p class=" text-slate-600  selection:bg-yellow-200 selection:text-gray-900 first-line:underline first-line:tracking-widest first-letter:text-7xl first-letter:float-left mr-3 group-hover:text-slate-800 dark:text-slate-300 ">Aku tak pernah menunggumu. Kamu tak pernah sengaja datang. Tapi kita sengaja dipertemukan Tuhan. Entah untuk saling duduk berdampingan atau saling memberi pelajaran. Entah untuk saling mengirim undangan pernikahan, atau duduk bersama di pelaminan..</p>
                </div>  
    </div>
</section>
<!-- undangan section end -->


<!-- tanggal start -->
<section id="tanggal" class="pt-36 pb-32 bg-white">
    <div class=" container">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h4 class="font-semibold text-lg text-primary mb-2">Hari Yang Dinanti</h4>
                <h2 class="font-bold text-3xl text-dark sm:text-4xl lg:text-5xl mb-4">AKAD NIKAH</h2>
                <p class="text-medium text-md text-secondary md:text-lg">Kami sangat berharap Bapak/Ibu/Saudara/i bisa hadir di acara yang spesial ini:</p>
            </div>
        </div>
        <div class="flex text-center  ">
            <div class="w-full px-4">
                <div class="bg-slate-200 rounded-xl  shadow-lg mb-10"> 
                    <div class="py-8 px-6 ">
                        <div class="container bg-dark rounded-lg font-bold text-white p-5"><p>Sabtu, 26 November 2022</p><p>08.00 - Selesai</p><p>Rumah mempelai Wanita</p><p>Kp.Sadang 28/06 Des.Jambelaer Kec.Dawuan Subang</p></div>
                        <iframe class="w-full rounded-lg mx-auto " id="gmap_canvas" src="https://maps.google.com/maps?q=no%2075%20gang%20m.%20jiman&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
<div class="mt-5 ">
    <a href="https://maps.google.com/maps?q=no%2075%20gang%20m.%20jiman&t=k&z=13&ie=UTF8&iwloc=&output=embed" class=" w-10 h-2 mr-auto ml-auto text-center text-base font-semibold text-white bg-dark py-3 px-5 sm:px-6 md:px-7 lg:px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Kunjungi Lokasi</a>
</div></div>
            </div>
        </div>
        <div class="mt-5 w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">            
                <h2 class="font-bold text-3xl text-dark sm:text-4xl lg:text-5xl mb-4">RESEPSI NIKAH</h2>
                <p class="text-medium text-md text-secondary md:text-lg">Kami sangat berharap Bapak/Ibu/Saudara/i bisa hadir di acara yang spesial ini:</p>
            </div>
        </div>
        <div class="flex text-center  ">
            <div class="w-full px-4">
                <div class="bg-slate-200 rounded-xl  shadow-lg mb-10"> 
                    <div class="py-8 px-6 ">
                        <div class="container bg-dark rounded-lg font-bold text-white p-5"><p>Sabtu, 26 November 2022</p><p>08.00 - Selesai</p><p>Rumah mempelai Wanita</p><p>Kp.Sadang 28/06 Des.Jambelaer Kec.Dawuan Subang</p></div>
                        <iframe class="w-full rounded-lg mx-auto " id="gmap_canvas" src="https://maps.google.com/maps?q=no%2075%20gang%20m.%20jiman&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
<div class="mt-5 ">
    <a href="https://maps.google.com/maps?q=no%2075%20gang%20m.%20jiman&t=k&z=13&ie=UTF8&iwloc=&output=embed" class=" w-10 h-2 mr-auto ml-auto text-center text-base font-semibold text-white bg-dark py-3 px-5 sm:px-6 md:px-7 lg:px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Kunjungi Lokasi</a>
</div>
                </div>
            </div>
        </div>
        <div class="mt-5 w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">

                </div>
            </div>
        </div>
</section>
<!-- tanggal end -->




<!-- gallery section start -->
<section id="gallery" class="pt-36 pb-16 bg-slate-200" >
    <div class="container">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h4 class="font-semibold text-lg text-primary mb-2">Gallery Foto</h4>
                <h2 class="font-bold text-3xl text-dark sm:text-4xl lg:text-5xl mb-4">Ananda & Agung</h2>
                <p class="text-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum, quasi ut? Fuga natus sit, pariatur deserunt molestias quia voluptatibus aperiam?</p>
            </div>
        </div><div class="p-2 grid grid-cols-2 gap-2 md:grid-cols-4 md:p-4">
    <h2 class="text-xl font-semibold text-slate-700 md:col-start-4 md:row-start-2 md:flex"><span class="self-center">Welcome To Rovy</span></h2>
    <div class="text-lg font-bold text-slate-600 md:col-start-2 md:row-start-2 flex"><span class="md:self-end">@Rovy_Firmansyah</span></div>
<div class="kartu group">
        <div class="ukurankartu bg-[url('../dist/img/ananda/ananda1.jpg')]"></div>
    </div>
    <div class="kartu group md:col-start-3">
<div class="ukurankartu bg-[url('../dist/img/ananda/ananda2.jpg')]"></div>
    </div>
    <div class="kartu group">
        <div class="ukurankartu bg-[url('../dist/img/ananda/ananda3.jpg')]"></div>
    </div>
    <div class="kartu group">
        <div class="ukurankartu bg-[url('../dist/img/ananda/ananda4.jpg')]"></div>
    </div>
    <div class="kartu group">
        <div class="ukurankartu bg-[url('../dist/img/ananda/ananda5.jpg')]"></div>
    </div>
    <div class="kartu group md:col-start-2">
        <div class="ukurankartu bg-[url('../dist/img/ananda/ananda6.jpg')]"></div>
    </div>
    <div class="kartu group md:col-start-4">
        <div class="ukurankartu bg-[url('../dist/img/ananda/ananda7.jpg')]"></div>
    </div>
    <div class="kartu group">
        <div class="ukurankartu bg-[url('../dist/img/ananda/ananda8.jpg')]"></div>
    </div>
    <div class="kartu group md:col-start-3">
        <div class="ukurankartu bg-[url('../dist/img/ananda/ananda9.jpg')]"></div>
    </div>
    <div class="kartu group md:col-start-3">
        <div class="ukurankartu bg-[url('../dist/img/ananda/ananda10.jpg')]"></div>
    </div>
</div>
    </div>
</section>
<!-- gallery end section end -->

<!-- kasih ucapan Section start -->
<section id="kasihucapan" class="pt-36 pb-32">
    <div class="container">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h4 class="font-semibold text-lg text-primary mb-2">Kasih Ucapan</h4>
                <h2 class="font-bold text-3xl text-dark sm:text-4xl lg:text-5xl mb-4">Selamat Menikah</h2>
                <p class="text-medium text-md text-secondary md:text-lg">Tulis ucapan dan doa Anda di sini, karena kami sangat bersemangat untuk memulai perjalanan baru ini bersama-sama</p>
            </div>
        </div>
    <form action="index.php" method="POST">
         <div class="w-full lg:w-2/3 lg:mx-auto">
            <div class="w-full px-4 mb-8">
                <label for="nama" class="text-base text-primary font-bold uppercase">Nama</label>
                <input type="text" name="nama" id="nama" placeholder="Masukan Nama......" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
            </div>
            <div class="w-full px-4 mb-8">
                <label for="pesan" class="text-base text-primary font-bold uppercase">pesan</label>
                <textarea  type="text" name="pesan" id="pesan"class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary h-32"> </textarea>
            </div> 
    
            <div class="w-full px-4">
              <button type="submit" name="submit" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full w-full hover:opacity-80 transition shadow-lg duration-500">KIRIM</button>
            </div>
        </div>
    </form>
    </div>
    </section>
    <!-- kasih ucapan section end -->




    <!-- ucapan section start -->
<section id="ucapan" class="pt-36 pb-32 bg-slate-200">
    <div class="container">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h4 class="font-semibold text-lg text-primary mb-2">Ucapan</h4>
                <h2 class="font-bold text-3xl text-dark sm:text-4xl lg:text-5xl mb-4">Pesan Terkini</h2>
                <p class="text-medium text-md text-secondary md:text-lg">Tulis ucapan dan doa Anda di sini, karena kami sangat bersemangat untuk memulai perjalanan baru ini bersama-sama</p>
            </div>
        </div>

        <div class="flex flex-wrap">
            <?php while($ambil = mysqli_fetch_row($querynampilin)) : ?>
            <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                <div class="bg-white rounded-xl overflow-hidden shadow-lg mb-10"> 
                    <div class="py-8 px-6">
                        <p class="font-medium text-secondary text-base mb-6 "><?= $ambil[2]; ?></p>
                        <a href="#" class="font-medium text-sm text-white bg-primary py-3 px-6 rounded-lg hover:opacity-80"><?= $ambil[1]; ?></a>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<!-- ucapan section end -->



<!-- footer start -->
<footer class="bg-dark pt-24 pb-12">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/3 ">
                <h2 class="font-bold text-white text-4xl mb-5">Rovy Firmansyah</h2>
                <h3 class="font-bold text-2xl mb-2">Hubungi Saya</h3>
                <p>rovyfirmansyah1212@gmail.com</p>
                <p>kp babakan utama </p>
                <p>Cimahi</p>
            </div>
            <div class="w-full px-4 mb-12 md:w-1/3">
            <h3 class="font-semibold text-white text-xl mb-5">Kategori Tulisan</h3>
            <ul class="text-slate-300">
                <li>
                    <a href="" class="inline-block text-base hover:text-primary mb-3">Kaguya Sama</a>
                </li>
                <li>
                    <a href="" class="inline-block text-base hover:text-primary mb-3">Siesta</a>
                </li>
                <li>
                    <a href="" class="inline-block text-base hover:text-primary mb-3">Kuroniko</a>
                </li>
            </ul>
        </div>

        <div class="w-full px-4 mb-12 md:w-1/3">
            <h3 class="font-semibold text-white text-xl mb-5">Kategori Tautan</h3>
            <ul class="block lg:flex text-slate-300">
                    <li class="group">
                        <a href="#wedding" class="inline-block text-base hover:text-primary mb-3">Beranda</a>
                    </li>
                    <li class="group">
                        <a href="#tentang" class="inline-block text-base hover:text-primary mb-3">Tentang</a>
                    </li>
                    <li class="group">
                        <a href="#undangan" class="inline-block text-base hover:text-primary mb-3">Undangan</a>
                    </li>
                    <li class="group">
                        <a href="#tanggal" class="inline-block text-base hover:text-primary mb-3">Tanggal</a>
                    </li>
                    <li class="group">
                        <a href="#gallery" class="inline-block text-base hover:text-primary mb-3">Gallery</a>
                    </li>
                    <li class="group">
                        <a href="#kasihucapan" class="inline-block text-base hover:text-primary mb-3">Ucapan</a>
                    </li>
                    <li class="group">
                        <a href="#pesan" class="inline-block text-base hover:text-primary mb-3">Pesan</a>
                    </li>
                </ul>
        </div>

    
    <div class="w-full pt-10 border-t border-slate-800">
        <div class="flex items-center justify-center mb-5 ">
            <!-- youtube -->
            <a href="https://youtube.com" target="_blank" class="w-9 h-9 mr-3 flex justify-center border items-center  border-slate-300 rounded-full text-slate-300   hover:bg-primary hover:border-primary hover:text-white ">
                <svg role="img" widht="20"  height="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>YouTube</title><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
            </a>

            <!-- instagram -->
            <a href="https://youtube.com" target="_blank" class="w-9 h-9 mr-3 flex justify-center border items-center  border-slate-300 rounded-full text-slate-300   hover:bg-primary hover:border-primary hover:text-white ">
                <svg role="img" widht="20"  height="20" class="fill-current"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
            </a>

            <!-- twitter -->
            <a href="https://youtube.com" target="_blank" class="w-9 h-9 mr-3 flex justify-center border items-center  border-slate-300 rounded-full text-slate-300   hover:bg-primary hover:border-primary hover:text-white ">
                <svg role="img"widht="20"  height="20" class="fill-current"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Twitter</title><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
            </a>

             <!-- facebook -->
             <a href="https://youtube.com" target="_blank" class="w-9 h-9 mr-3 flex justify-center border items-center  border-slate-300 rounded-full text-slate-300   hover:bg-primary hover:border-primary hover:text-white ">
                <svg role="img"widht="20"  height="20" class="fill-current"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
            </a>

                   <!-- discord -->
                   <a href="https://youtube.com" target="_blank" class="w-9 h-9 mr-3 flex justify-center border items-center  border-slate-300 rounded-full text-slate-300   hover:bg-primary hover:border-primary hover:text-white ">

                    <svg role="img"widht="20"  height="20" class="fill-current"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Discord</title><path d="M20.317 4.3698a19.7913 19.7913 0 00-4.8851-1.5152.0741.0741 0 00-.0785.0371c-.211.3753-.4447.8648-.6083 1.2495-1.8447-.2762-3.68-.2762-5.4868 0-.1636-.3933-.4058-.8742-.6177-1.2495a.077.077 0 00-.0785-.037 19.7363 19.7363 0 00-4.8852 1.515.0699.0699 0 00-.0321.0277C.5334 9.0458-.319 13.5799.0992 18.0578a.0824.0824 0 00.0312.0561c2.0528 1.5076 4.0413 2.4228 5.9929 3.0294a.0777.0777 0 00.0842-.0276c.4616-.6304.8731-1.2952 1.226-1.9942a.076.076 0 00-.0416-.1057c-.6528-.2476-1.2743-.5495-1.8722-.8923a.077.077 0 01-.0076-.1277c.1258-.0943.2517-.1923.3718-.2914a.0743.0743 0 01.0776-.0105c3.9278 1.7933 8.18 1.7933 12.0614 0a.0739.0739 0 01.0785.0095c.1202.099.246.1981.3728.2924a.077.077 0 01-.0066.1276 12.2986 12.2986 0 01-1.873.8914.0766.0766 0 00-.0407.1067c.3604.698.7719 1.3628 1.225 1.9932a.076.076 0 00.0842.0286c1.961-.6067 3.9495-1.5219 6.0023-3.0294a.077.077 0 00.0313-.0552c.5004-5.177-.8382-9.6739-3.5485-13.6604a.061.061 0 00-.0312-.0286zM8.02 15.3312c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9555-2.4189 2.157-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.9555 2.4189-2.1569 2.4189zm7.9748 0c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9554-2.4189 2.1569-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.946 2.4189-2.1568 2.4189Z"/></svg>
                </a>

            

            
        </div>
    </div>
    <p class="text-medium text-[0.70rem] md:text-sm text-slate-500 font-semibold mx-auto">Dibuat Dengan <span class="text-pink-500">❤</span> Oleh <a href="https://instagram.com/Rovy_Firmansyah" target="_blank" class="text-primary font-bold">Mohammad Arrovy Firmansyah</a> Menggunakan <a href="https://tailwindcss.com/" target="_blank" class="text-primary">Tailwindcss</a></p>
    </div>
</footer>

<!-- footer end -->
<script src="dist/js/script.js"></script>

</body>
</html>




