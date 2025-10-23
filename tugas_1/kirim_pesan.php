<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: index.php');
  exit;
}
$name = htmlspecialchars(trim($_POST['name'] ?? ''));
$email = htmlspecialchars(trim($_POST['email'] ?? ''));
$message = htmlspecialchars(trim($_POST['message'] ?? ''));

// validasi sederhana
$errors = [];
if ($name === '') $errors[] = 'Nama wajib diisi';
if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Email tidak valid';
if ($message === '') $errors[] = 'Pesan wajib diisi';

?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Produk - Mutiara Bloom</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#8B4513',
            secondary: '#A0522D',
            accent: '#D2B48C',
            neutral: '#F5F5DC',
          }
        }
      }
    }
  </script>
  <link rel="stylesheet" href="style.css">
</head>

<body class="font-sans bg-neutral text-gray-800 pt-20 min-h-screen flex flex-col">
  <header class="fixed top-0 w-full z-50 bg-primary text-white shadow-md">
    <div class="container mx-auto px-4 py-4 flex flex-col md:flex-row justify-between items-center">
      <h1 class="text-2xl font-bold mb-2 md:mb-0 flex items-center">
        Mutiara Bloom
      </h1>
      <nav>
        <ul class="flex space-x-6">
          <li><a href="index.php#home" class="hover:text-accent transition">Home</a></li>
          <li><a href="index.php#about" class="hover:text-accent transition">Tentang</a></li>
          <li><a href="produk.php" class="hover:text-accent transition">Produk</a></li>
          <li><a href="index.php#testimonials" class="hover:text-accent transition">Testimoni</a></li>
          <li><a href="index.php#contact" class="hover:text-accent transition">Kontak</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="section flex-grow">
    <div class="container">
      <?php if (!empty($errors)): ?>
        <h2 class="text-3xl font-bold text-primary mb-4">Ada kesalahan</h2>
        <ul class="error-list mb-6">
          <?php foreach ($errors as $err): ?>
            <li><?php echo $err ?></li>
          <?php endforeach; ?>
        </ul>
        <p><a href="index.php#contact" class="btn">Kembali ke Form</a></p>
      <?php else: ?>
        <h2 class="text-3xl font-bold text-primary mb-4">Terima kasih, <?php echo $name ?>!</h2>
        <p>Pesan Anda sudah kami terima. Kami akan menghubungi Anda di <?php echo $email ?> jika perlu.</p>
        <p class="muted mt-4">Isi pesan:</p>
        <div class="message-box mb-6"><?php echo nl2br($message) ?></div>
      <?php endif; ?>
    </div>
  </main>

  <div class="bg-secondary py-10 text-center">
    <a href="index.php" class="bg-accent text-primary font-semibold px-8 py-3 rounded-lg hover:bg-primary hover:text-white transition shadow-md">
      ← Kembali ke Beranda
    </a>
  </div>

  <footer class="bg-primary text-white py-6 text-center">
    &copy; 2025 Mutiara Bloom. All rights reserved.
  </footer>
</body>
</html>

