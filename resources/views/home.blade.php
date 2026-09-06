<x-app-layout>
<!-- Hero Section -->
<div class="relative" style="height:550px">
    <img src="https://images.unsplash.com/photo-1607623814075-e51df1bdc82f?w=1400"
        class="w-full h-full object-cover" alt="Mutton Shop">
    <div class="absolute inset-0 bg-black/60 flex items-center justify-center">
        <div class="text-center text-white px-4">
            <h1 class="text-5xl font-extrabold mb-4">Welcome To Khalid Mizail Mutton Shop 🥩</h1>
            <p class="text-xl mb-8 text-gray-200">Fresh • Halal • Quality Mutton Daily</p>
            <div class="flex gap-4 justify-center">
                <a href="{{ route('menu') }}"
                    class="bg-red-600 text-white px-8 py-3 rounded-full font-bold text-lg hover:bg-red-700">
                    View Menu →
                </a>
                <a href="tel:+923346771224"
                    class="bg-yellow-400 text-black px-8 py-3 rounded-full font-bold text-lg hover:bg-yellow-300">
                    📞 Call Now
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Features -->
<div class="grid grid-cols-1 sm:grid-cols-3 gap-6 max-w-6xl mx-auto px-4 py-12">
    <div class="bg-white rounded-xl shadow p-6 text-center">
        <div class="text-5xl mb-3">🥩</div>
        <h3 class="font-bold text-lg mb-2">100% Fresh Mutton</h3>
        <p class="text-gray-500 text-sm">Freshly slaughtered every morning for best quality</p>
    </div>
    <div class="bg-white rounded-xl shadow p-6 text-center">
        <div class="text-5xl mb-3">✅</div>
        <h3 class="font-bold text-lg mb-2">100% Halal</h3>
        <p class="text-gray-500 text-sm">All our meat is certified halal and hygienic</p>
    </div>
    <div class="bg-white rounded-xl shadow p-6 text-center">
        <div class="text-5xl mb-3">🚚</div>
        <h3 class="font-bold text-lg mb-2">Home Delivery</h3>
        <p class="text-gray-500 text-sm">Fresh mutton delivered to your doorstep</p>
    </div>
</div>

<!-- Popular Items -->
<div class="max-w-6xl mx-auto px-4 pb-12">
    <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">Our Popular Items 🥩</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 ghttps://iap-6">
        @php
        $items = [
            ['name'=>'Mutton Mix 1 KG','price'=>'Rs. 3,200','image'=>' mages.unsplash.com/photo-1603360946369-dc9bb6258143?w=400'],
            ['name'=>'Mutton Leg (Raan) 1 KG','price'=>'Rs. 3,450','image'=>'https://images.unsplash.com/photo-1545672955-8f24dfbe5e3e?w=400'],
            ['name'=>'Mutton Chanp 1 KG','price'=>'Rs. 3,200','image'=>'https://images.unsplash.com/photo-1544025162-d76694265947?w=400'],
            ['name'=>'Mutton Puth 1 KG','price'=>'Rs. 3,500','image'=>'https://images.unsplash.com/photo-1588168333986-5078d3ae3976?w=400'],
            ['name'=>'Mutton Paya Per Pc','price'=>'Rs. 370','image'=>'https://images.unsplash.com/photo-1518492104633-130d0cc84637?w=400'],
            ['name'=>'Mutton Neck 1 KG','price'=>'Rs. 3,100','image'=>'https://images.unsplash.com/photo-1603360946369-dc9bb6258143?w=400'],
        ];
        @endphp
        @foreach($items as $item)
        <div class="bg-white rounded-xl shadow overflow-hidden hover:shadow-lg transition">
            <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="font-bold text-lg mb-2">{{ $item['name'] }}</h3>
                <p class="text-red-600 font-bold text-xl mb-3">{{ $item['price'] }}</p>
                <a href="tel:+923346771224"
                    class="block text-center bg-red-600 text-white py-2 rounded-lg hover:bg-red-700 font-semibold">
                    📞 Call To Order
                </a>
            </div>
        </div>
        @endforeach
    </div>
    <div class="text-center mt-8">
        <a href="{{ route('menu') }}"
            class="bg-red-600 text-white px-8 py-3 rounded-full font-bold text-lg hover:bg-red-700">
            View Full Menu →
        </a>
    </div>
</div>

<!-- About Section -->
<div class="bg-red-700 text-white py-12 px-4">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-3xl font-bold mb-4">About Our Shop 🏪</h2>
        <p class="text-lg text-gray-200 mb-6">Khalid Mizail  Mutton Shop has been serving fresh and halal mutton for over 20 years. We take pride in providing the best quality meat to our customers at affordable prices.</p>
        <div class="grid grid-cols-3 gap-6 mt-8">
            <div>
                <p class="text-4xl font-bold text-yellow-400">20+</p>
                <p class="text-gray-300">Years Experience</p>
            </div>
            <div>
                <p class="text-4xl font-bold text-yellow-400">5000+</p>
                <p class="text-gray-300">Happy Customers</p>
            </div>
            <div>
                <p class="text-4xl font-bold text-yellow-400">100%</p>
                <p class="text-gray-300">Halal Certified</p>
            </div>
        </div>
    </div>
</div>
</x-app-layout>