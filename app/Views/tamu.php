<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>RW</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- STYLES -->

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            max-width: 100%;
            overflow-x: hidden;
        }

        .logo {
            position: absolute;
            margin-top: 2px;
            margin-left: 15px;
            width: 52px;
            height: 50px;
            z-index: 1000;
            max-width: 100%;
        }

        .judul1 {
            position: absolute;
            z-index: 1001;
        }

        .judul1 h1 {
            margin-top: 0px;
            margin-left: 70px;
            font-size: 15px;
            color: white;
        }

        .judul2 {
            position: absolute;
            z-index: 1001;
        }

        .judul2 h2 {
            font-weight: 500;
            margin-top: 37px;
            margin-left: 70px;
            font-size: 10px;
            color: white;
        }

        nav {
            background-color: #0a3323;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 60px;
            font-family: 'Poppins', sans-serif;
            max-width: 100%;
            transition: border-bottom 0.3s ease;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;

        }

        .navbar-nav {
            display: flex;
            justify-content: flex-end;
            width: 100%;
        }

        .menu {
            list-style-type: none;
            padding: 0;
        }

        .menu>li {
            position: relative;
            display: inline-block;
        }

        .menu a {
            text-decoration: none;
            padding: 15px;
            display: block;
        }

        .dropdown {
            display: none;
            position: absolute;
            background-color: #0a3323;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .menu>li:hover .dropdown {
            display: block;
            /* Tampilkan dropdown saat hover */
        }

        .dropdown li {
            display: block;
            /* Tampilkan item dropdown dalam baris */
        }

        .dropdown a {
            padding: 10px 5px;
            /* Padding untuk item dropdown */
            white-space: nowrap;
            /* Mencegah teks membungkus */
        }

        .menu {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: flex-end;
            width: 100%;
        }

        .menu li {
            margin-left: 5px;
        }

        .menu li a {
            color: white;
            text-decoration: none;
            font-size: 15px;
            padding-right: 50px;
        }

        .menu a:hover {
            font-weight: bold;
            color: #E27602;
        }

        .image-container {
            width: 1263px;
            height: 550px;
            position: relative;
        }

        .image-container img {
            width: 100%;
            height: 106%;
            object-fit: cover;
        }

        .text-over-image3 {
            position: absolute;
            top: 40%;
            left: 375px;
            right: 30%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            font-size: 10px;
            padding: 10px;
            font-family: 'Poppins', sans-serif;
        }

        .text-over-image2 {
            position: absolute;
            top: 27%;
            left: 375px;
            right: 30%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 25px;
            font-weight: bold;
            padding: 10px;
            font-family: 'Poppins', sans-serif;
        }

        .text-over-image {
            position: absolute;
            top: 20%;
            left: 20%;
            transform: translate(-50%, -50%);
            color: white;
            padding: 10px;
            font-weight: bold;
            font-size: 25px;
        }
h1 {
            text-align: center;
            color: #0a3323;
            font-size: 17px;
        }

        h1.p {
            text-align: center;
            color: #FFA500;
            font-size: 15px;
        }


        label {
            display: block;
            margin: 10px 0 5px;
            font-size: 12px;
        }

        input[type="text"],
        input[type="tel"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 12px;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .simpan {
            background-color: #FFA500;
            color: white;
        }

        .batal {
            background-color: white;
            border: 1px solid #0a3323;
            color: #0a3323;
        }
        textarea {
            border: 1px solid #ddd;
        }
.mb-3 {
            margin-bottom: 1.5rem;
        }
</style>

    </style>

    <style {csp-style-nonce}>
        * {
            transition: background-color 300ms ease, color 300ms ease;
            font-family: 'Poppins', sans-serif;
            /* Changed to Poppins */
        }
    </style>
    <?= view('partials/tailwind_head') ?>
</head>

<body>

    <!-- HEADER: MENU + HEROE SECTION -->
    <style>
h2 {
            text-align: center;
            color: #2d3436;
            font-size: 20px;
        }

        h3 {
            text-align: center;
            color: #2d3436;
            font-size: 15px;
        }

        .qna-item {
            margin-bottom: 20px;
        }

        .question {
            background: #dfe6e9;
            padding: 15px;
            border-radius: 8px;
            font-weight: bold;
            color: #2d3436;
            font-size: 15px;
        }

        .answer {
            background: #f1f2f6;
            padding: 15px;
            border-radius: 8px;
            margin-top: 5px;
            color: #636e72;
            font-size: 15px;
        }

        form {
            margin-top: 30px;
        }

        textarea,
        input[type="text"] {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            resize: vertical;
            font-size: 15px;
        }

        button {
            padding: 10px 20px;
            background-color: #0984e3;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            margin-top: 20px;
        }

        button:hover {
            background-color: #74b9ff;
        }
    </style>
</head>

    <body>
        <?php if (session()->getFlashdata('success')): ?>
            <div style="background-color: #dff0d8; padding: 10px; border-radius: 5px; margin-top: 10px;">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>


        <div class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
            <!-- <h2>QnA & Pengaduan Warga</h2>

            <div class="qna-item">
                <div class="question">❓ Bagaimana cara melaporkan sampah menumpuk?</div>
                <div class="answer">✅ Anda bisa mengisi formulir pengaduan di bawah ini atau menghubungi petugas RT setempat.</div>
            </div>

            <div class="qna-item">
                <div class="question">❓ Apakah pengaduan saya akan diproses cepat?</div>
                <div class="answer">✅ Kami berkomitmen menindaklanjuti laporan dalam 1x24 jam kerja.</div>
            </div> -->

            <form action="<?= base_url('/tamu/kirim') ?>" method="post">
                <h3>Kirim Pengaduan Anda</h3>
                <input type="text" name="nama" placeholder="Nama Anda" required>
                <textarea name="laporan" rows="5" placeholder="Tulis pengaduan atau pertanyaan Anda..." required></textarea>
                <input type="date" name="tanggal" required>
                <button type="submit">Kirim Pengaduan</button>
            </form>
        </div>


    </body>
    </header>

    <!-- CONTENT -->








    <!-- FOOTER: DEBUG INFO + COPYRIGHTS -->



    <!-- SCRIPTS -->



    <!-- -->

    <?= view('partials/public_footer') ?>


</body>


</html>

