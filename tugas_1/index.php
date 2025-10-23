<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mutiara Bloom - Toko Roti Terbaik</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
</head>

<body class="font-sans bg-neutral text-gray-800 pt-20">
  <!-- Header -->
  <header class="fixed top-0 w-full z-50 bg-primary text-white shadow-md">
    <div class="container mx-auto px-4 py-4 flex flex-col md:flex-row justify-between items-center">
      <h1 class="text-2xl font-bold mb-2 md:mb-0 flex items-center">
        Mutiara Bloom
      </h1>
      <nav>
        <ul class="flex space-x-6">
          <li><a href="#home" class="hover:text-accent transition">Home</a></li>
          <li><a href="#about" class="hover:text-accent transition">Tentang</a></li>
          <li><a href="produk.php" class="hover:text-accent transition">Produk</a></li>
          <li><a href="#testimonials" class="hover:text-accent transition">Testimoni</a></li>
          <li><a href="#contact" class="hover:text-accent transition">Kontak</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Hero -->
  <section id="home" class="bg-secondary text-white py-16 md:py-24 text-center">
    <h2 class="text-4xl md:text-5xl font-bold mb-6">Roti Lezat untuk Setiap Momen</h2>
    <p class="text-xl mb-8 max-w-2xl mx-auto">Dibuat dengan bahan premium dan dipanggang dengan penuh cinta untuk memberikan pengalaman rasa terbaik bagi Anda.</p>
    <a href="produk.php" class="bg-accent text-primary px-4 py-2 rounded-lg font-semibold hover:bg-opacity-90 transition">Lihat Produk Kami</a>
  </section>

  <!-- About -->
  <section id="about" class="py-16 bg-white">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-12 text-primary">Tentang Kami</h2>
      <div class="grid md:grid-cols-2 gap-8 items-center">
        <div>
          <p class="mb-4">Sejak tahun 2020, Mutiara Bloom telah menjadi pilihan utama bagi pecinta roti autentik. Kami menggunakan resep turun-temurun yang telah disempurnakan selama bertahun-tahun.</p>
          <p class="mb-4">Setiap roti kami dibuat dari bahan pilihan tanpa pengawet, dipanggang dengan teknik khusus untuk mendapatkan tekstur dan rasa sempurna.</p>
          <p>Komitmen kami adalah memberikan produk terbaik dengan kualitas konsisten dan pelayanan ramah.</p>
        </div>
        <div class="flex justify-center">
          <img src="foto/toko.jpg" alt="Toko Roti" class="rounded-lg shadow-md">
        </div>
      </div>
    </div>
  </section>

  <!-- Testimoni -->
  <section id="testimonials" class="py-16 bg-neutral">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-primary flex items-center justify-center">
                Testimoni Pelanggan
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md relative">
                    <div class="flex items-center mb-4 pt-4">
                        <div class="w-12 h-12 bg-accent rounded-full flex items-center justify-center text-white font-bold mr-4">AS</div>
                        <div>
                            <h3 class="font-semibold">A**** S******</h3>
                            <p class="text-gray-600">Pelanggan Setia</p>
                        </div>
                    </div>
                    <p class="italic">"Roti di sini selalu fresh dan enak. Keluarga saya sudah langganan lebih dari 5 tahun. Tidak pernah kecewa!"</p>
                    <div class="flex mt-4">
                        <i class="fas fa-star text-yellow-400 mr-1"></i>
                        <i class="fas fa-star text-yellow-400 mr-1"></i>
                        <i class="fas fa-star text-yellow-400 mr-1"></i>
                        <i class="fas fa-star text-yellow-400 mr-1"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md relative">
                    <div class="flex items-center mb-4 pt-4">
                        <div class="w-12 h-12 bg-accent rounded-full flex items-center justify-center text-white font-bold mr-4">DW</div>
                        <div>
                            <h3 class="font-semibold">D**** W****</h3>
                            <p class="text-gray-600">Pelanggan Baru</p>
                        </div>
                    </div>
                    <p class="italic">"Baru pertama kali mencoba roti gandumnya, teksturnya sempurna dan rasanya authentic. Pasti akan balik lagi!"</p>
                    <div class="flex mt-4">
                        <i class="fas fa-star text-yellow-400 mr-1"></i>
                        <i class="fas fa-star text-yellow-400 mr-1"></i>
                        <i class="fas fa-star text-yellow-400 mr-1"></i>
                        <i class="fas fa-star text-yellow-400 mr-1"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <!-- Kontak -->
  <section id="contact" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-primary flex items-center justify-center">
                Hubungi Kami
            </h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-xl font-semibold mb-4 text-secondary flex items-center">
                        Informasi Kontak
                    </h3>
                    <p class="mb-2 flex items-center"><span class="font-semibold">Alamat:</span> Jl. Irian Jaya No. 123, Malang</p>
                    <p class="mb-2 flex items-center"><span class="font-semibold">Telepon:</span> (021) 1234-5678</p>
                    <p class="mb-2 flex items-center"><span class="font-semibold">Email:</span> info@MutiaraBloom.com</p>
                    <p class="mb-4 flex items-center"><span class="font-semibold">Jam Operasional:</span> Setiap hari 07.00 - 20.00</p>
                    <div class="mt-6">
                        <h3 class="text-xl font-semibold mb-4 text-secondary flex items-center">
                            Ikuti Kami
                        </h3>
                        <div class="flex space-x-4">
                            <a href="#" class="bg-primary text-white p-2 rounded-full hover:bg-secondary transition" title="Facebook"><i class="fab fa-facebook-f text-sm"></i></a>
                            <a href="#" class="bg-primary text-white p-2 rounded-full hover:bg-secondary transition" title="Instagram"><i class="fab fa-instagram text-sm"></i></a>
                            <a href="#" class="bg-primary text-white p-2 rounded-full hover:bg-secondary transition" title="Twitter"><i class="fab fa-twitter text-sm"></i></a>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4 text-secondary flex items-center">
                        Kirim Pesan
                    </h3>
                    <form action="kirim_pesan.php" method="POST" class="space-y-4">
                      <div>
                        <label for="name" class="block mb-1 flex items-center">Nama</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-accent" required>
                      </div>
                      <div>
                        <label for="email" class="block mb-1 flex items-center">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-accent" required>
                      </div>
                      <div>
                        <label for="message" class="block mb-1 flex items-center">Pesan</label>
                        <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-accent" required></textarea>
                      </div>
                      <button type="submit" class="bg-primary text-white px-6 py-2 rounded-lg hover:bg-secondary transition flex items-center mx-auto">
                        Kirim Pesan
                      </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

  <!-- Footer -->
  <footer class="bg-primary text-white py-6 text-center">
    &copy; 2025 Mutiara Bloom. All rights reserved.
  </footer>

  <!-- Script API -->
  <script>
    async function fetchRotiAPI() {
      const res = await fetch('https://www.themealdb.com/api/json/v1/1/filter.php?c=Dessert');
      const data = await res.json();
      const container = document.getElementById('api-products');

      data.meals.slice(0, 6).forEach(item => {
        const card = document.createElement('div');
        card.className = "bg-white rounded-lg shadow-md overflow-hidden";
        card.innerHTML = `
          <img src="${item.strMealThumb}" alt="${item.strMeal}" class="w-full h-48 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-2 text-secondary">${item.strMeal}</h3>
            <a href="https://www.themealdb.com/meal/${item.idMeal}" target="_blank" class="text-primary font-semibold hover:underline">Lihat Resep</a>
          </div>
        `;
        container.appendChild(card);
      });
    }
    fetchRotiAPI();
  </script>
</body>
</html>
