<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khalid mizail  Mutton Shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">

    <!-- Navbar -->
    <nav class="bg-red-700 text-white px-6 py-4 flex justify-between items-center shadow-lg">
        <a href="{{ route('home') }}" class="text-2xl font-bold">🥩 Khalid Mizail Mutton Shop</a>
        <div class="flex gap-6 items-center">
            <a href="{{ route('home') }}" class="hover:text-yellow-300">Home</a>
            <a href="{{ route('menu') }}" class="hover:text-yellow-300">Menu</a>
            <a href="{{ route('gallery') }}" class="hover:text-yellow-300">Gallery</a>
            <a href="{{ route('contact') }}" class="hover:text-yellow-300">Contact</a>
            <!-- Call Button -->
            <a href="tel:+92334677122"
                class="bg-yellow-400 text-black px-4 py-2 rounded-full font-bold hover:bg-yellow-300 flex items-center gap-2">
                📞 Call Now
            </a>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @if(session('success'))
            <div class="bg-green-100 text-green-800 p-3 text-center">{{ session('success') }}</div>
        @endif
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-red-800 text-white mt-10 py-8 px-6">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <div>
                <h3 class="font-bold text-xl mb-3">🥩 Khalid Mizail Mutton Shop</h3>
                <p class="text-sm text-gray-300">Fresh mutton delivered daily. Best quality guaranteed!</p>
            </div>
            <div>
                <h3 class="font-bold text-lg mb-3">Quick Links</h3>
                <ul class="text-sm space-y-2 text-gray-300">
                    <li><a href="{{ route('home') }}" class="hover:text-yellow-300">Home</a></li>
                    <li><a href="{{ route('menu') }}" class="hover:text-yellow-300">Menu</a></li>
                    <li><a href="{{ route('gallery') }}" class="hover:text-yellow-300">Gallery</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-yellow-300">Contact</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-bold text-lg mb-3">Contact Us</h3>
                <ul class="text-sm space-y-2 text-gray-300">
                    <li>📞 +92 3346771224</li>
                    <li>📍 block 7, D.G.khan</li>
                    <li>⏰ Open: 6AM - 10PM</li>
                </ul>
            </div>
        </div>
        <div class="text-center text-gray-400 text-sm mt-6">
            © 2026 khalid Mizail Mutton Shop. All rights reserved.
        </div>
    </footer>

    <!-- Floating Call Button -->
    <a href="tel:+923346771224"
        class="fixed bottom-6 right-6 bg-red-600 text-white px-6 py-4 rounded-full shadow-lg font-bold text-lg hover:bg-red-700 flex items-center gap-2 z-50">
        📞 Call Now
    </a>

</body>
</html>