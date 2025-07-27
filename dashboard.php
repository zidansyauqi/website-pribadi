
<?php include 'header.php'; ?>
<div class="container">
    <img src="assets/profile.jpg" alt="Foto Profil" class="profile-img">
    <h2>Dashboard</h2>
    <h3>Selamat datang, <?= $_SESSION['user'] ?></h3>
 <main class="container mx-auto px-4 py-12">
        <section id="about" class="bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-4xl font-bold text-gray-900 mb-8 text-center">Tentang Saya</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div class="text-lg leading-relaxed">
                    <p class="mb-4">
                        Halo! Nama saya <span class="font-semibold">Ahmad Zidan Syauqi</span>, dan saya adalah seorang <span class="font-semibold text-blue-600">mahasiswa</span> semster <span class="font-semibold">4</span><span class="font-semibold"></span>. Saya termasuk mahasiswa yang aktif dalam berorganisasi, dan saya sekarang sedang mengikuti organisai <span class="font-semibold">senat mahasiswa</span>.
                    </p>
                    <p class="mb-4">
                        Selama saya berkuliah di <span class="font-semibold">Universitas Islam Sultan Agung Semarang</span> di <span class="font-semibold">Fakultas Teknologi Industri</span>
                        prodi<span class="font-semibold"> Teknik Informatika </span> <span class="font-semibold"></span>saya belajar banyak tentang dunia pemrograman. Hobi saya adalah <span class="font-semibold">membaca</span>. Saya selalu berusaha untuk berkembang dalam mempelajari dunia pemrograman ini.
                    </p>
                </div>
<a href="crud/create.php">Upload File</a> |
<a href="crud/index.php">Lihat File</a> |
<a href="auth/logout.php">Logout</a>
</div>