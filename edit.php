<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $nama = mysqli_query($koneksi, "SELECT * FROM hasil WHERE id='$id'");
        while($d = mysqli_fetch_array($nama)){
    ?>
    <title>Edit | <?php echo $d['nama']; ?></title>
    <?php
        }
    ?>

    <link rel="apple-touch-icon" sizes="180x180" href="asset/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="asset/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="asset/favicon/favicon-16x16.png">
    <link rel="manifest" href="asset/favicon/site.webmanifest">
    <link rel="mask-icon" href="asset/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- CSS -->
    <link rel="stylesheet" href="asset/css/style.css">

    <!-- Tailwind -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.14.0/dist/full.css" rel="stylesheet" type="text/css" />

    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

</head>
<body class="m-0 p-0">

    <!-- Navbar -->
    <div class="navbar mb-2 shadow-sm d-bg-gradient text-neutral-content">
        <div class="px-2 mx-2 navbar-start">
            <div class="avatar">
                <div class="rounded-full w-10 h-10 m-1">
                    <img src="asset/image/dp.png" alt="Dewa Programming" title="Dewa Programming">
                </div>
            </div>
        </div> 
        <div class="hidden px-2 mx-2 navbar-center lg:flex">
            <div class="flex items-stretch">
                <a href="index.php" class="btn btn-ghost btn-sm rounded-btn tracking-widest">Home</a> 
            </div>
        </div> 
        <div class="navbar-end">
            <span class="text-lg font-bold mr-4">-_-</span>
        </div>
    </div>

    <!-- Content -->
    <div class="container my-40 m-auto bg-white px-4">
        <?php 

        include 'koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi, "SELECT * FROM hasil WHERE id='$id'");
        while($d = mysqli_fetch_array($data)){

        ?>
        <div class="text-sm breadcrumbs mb-6 px-4">
            <ul>
                <li>
                    <a href="index.php">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-2 stroke-current">          
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>                
                        </svg>Home
                    </a>
                </li> 
                <li>
                    <a href="profile.php?id=<?php echo $d['id']; ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-2 stroke-current">          
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>                
                        </svg>Profile
                    </a>
                </li> 
                <li>
                    Edit
                </li>
            </ul>
        </div>
        <form action="proses-update.php" method="POST" enctype="multipart/form-data">

            <!-- Foto -->
            Preview: <img id="thumb" src="<?php echo "asset/image/post-img/".$d['image']; ?>" width="100" height="100" />
            <input class="form-control mt-3" type="file" id="image" name="berkas" value="<?php echo $d['image']; ?>" onchange="preview()">

            <script>
                function preview() {
                    thumb.src=URL.createObjectURL(event.target.files[0]);
                }
            </script>

            <input type="hidden" name="id" value="<?php echo $d['id']; ?>">

            <!-- Nama -->
            <div class="form-control mt-4">
                <label class="label" for="nama">
                    <span class="label-text">Nama</span>
                </label> 
                <input type="text" value="<?php echo $d['nama']; ?>" id="nama" name="nama" class="input input-primary input-bordered" required>
            </div>

            <!-- Nick Game -->
            <div class="form-control mt-4">
                <label class="label" for="nilai">
                    <span class="label-text">Nilai</span>
                </label>
                <input type="number" value="<?php echo $d['nilai']; ?>" id="nilai" name="nilai" class="input input-primary input-bordered" required>
            </div>

            <div class="modal-action">
                <button type="submit" class="btn btn-primary tracking-widest">Accept</button>
            </div>

        </form>
        <?php
        }
        ?>
    </div>

    <!-- Footer -->
    <footer class="text-center m-auto p-10 d-bg-gradient text-white">
        <div class="flex w-full m-auto justify-center gap-4">
            <a href="https://dewa-drawing.netlify.app/" class="link link-hover">Drawing</a> 
            <a href="https://dewaprogramming.netlify.app/" class="link link-hover">Portfolio</a> 
            <a href="https://saweria.co/AdityawarmanDewaP" class="link link-hover">Saweria</a> 
            <a href="https://discord.gg/xJXJPmCAst" class="link link-hover">Discord</a>
        </div> 
        <div class="w-full py-8">
            <div class="flex m-auto justify-center gap-6">
            <a href="https://twitter.com/adityawarman_P" target="_blank" title="Twitter">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                </svg>
            </a> 
            <a href="https://www.youtube.com/c/DGDewa" target="_blank" title="Youtube">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
                </svg>
            </a> 
            <a href="https://web.facebook.com/profile.php?id=100014747381182" target="_blank" title="Facebook">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
                </svg>
            </a>
            </div>
        </div> 
        <div class="w-full">
            <p>Copyright © 2021 - All right reserved by Dewa</p>
        </div>
    </footer>

</body>
</html>