<?php
// produk.php
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

<body>
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

  <!-- Produk Lokal -->
  <section id="products" class="py-16 bg-neutral">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-12 text-primary">Produk Unggulan Kami</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
          <img src="foto/gandum.jpg" alt="Roti Gandum" class="w-full h-48 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-2 text-secondary">Roti Gandum Utuh</h3>
            <p class="mb-4">Roti gandum padat dan kaya rasa, cocok untuk sarapan sehat.</p>
            <p class="font-bold text-primary">Rp 25.000</p>
          </div>
        </div>
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
          <img src="foto/Baguette.jpg" alt="Baguette" class="w-full h-48 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-2 text-secondary">Baguette Prancis</h3>
            <p class="mb-4">Baguette autentik dengan kulit renyah dan isi lembut.</p>
            <p class="font-bold text-primary">Rp 18.000</p>
          </div>
        </div>
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
          <img src="foto/cinnamon rolls.jpg" alt="Cinnamon Roll" class="w-full h-48 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-2 text-secondary">Cinnamon Roll</h3>
            <p class="mb-4">Roti manis dengan kayu manis dan frosting cream cheese.</p>
            <p class="font-bold text-primary">Rp 15.000</p>
          </div>
        </div>
      </div>

      <!-- Produk dari API -->
      <h2 class="text-3xl font-bold text-center my-12 text-primary">Produk dari API</h2>
      <div id="api-products" class="grid grid-cols-1 md:grid-cols-3 gap-8"></div>
    </div>
  </section>

  <footer class="bg-primary text-white py-6 text-center">
    &copy; 2025 Mutiara Bloom. All rights reserved.
  </footer>

  <script>
    // Reuse fetch API untuk halaman produk
    async function loadApiProducts() {
      try {
        const res = await fetch('https://www.themealdb.com/api/json/v1/1/filter.php?c=Dessert');
        const data = await res.json();
        const container = document.getElementById('api-products');
        const items = data.meals ? data.meals.slice(0,9) : [];
        items.forEach(meal => {
          const card = document.createElement('div');
          card.className = 'card';
          card.innerHTML = `
            <img src="${meal.strMealThumb}" alt="${meal.strMeal}">
            <h4>${meal.strMeal}</h4>
            <p><a href="https://www.themealdb.com/meal/${meal.idMeal}" target="_blank">Lihat detail</a></p>
          `;
          container.appendChild(card);
        });
      } catch (e) {
        console.error('Gagal memuat produk API', e);
      }
    }
    loadApiProducts();
  </script>
</body>
</html>



