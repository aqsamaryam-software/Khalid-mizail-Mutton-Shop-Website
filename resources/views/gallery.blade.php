<x-app-layout>
<div class="max-w-6xl mx-auto px-4 py-12">
    <h1 class="text-3xl font-bold text-center mb-2 text-gray-800">Our Gallery 📸</h1>
    <p class="text-center text-gray-500 mb-8">Fresh mutton cuts from our shop</p>

    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
        @php
        $images = [
            'https://images.unsplash.com/photo-1603360946369-dc9bb6258143?w=400',
            'https://images.unsplash.com/photo-1545672955-8f24dfbe5e3e?w=400',
            'https://images.unsplash.com/photo-1544025162-d76694265947?w=400',
            'https://images.unsplash.com/photo-1588168333986-5078d3ae3976?w=400',
            'https://images.unsplash.com/photo-1518492104633-130d0cc84637?w=400',
            'https://images.unsplash.com/photo-1607623814075-e51df1bdc82f?w=400',
            'https://images.unsplash.com/photo-1603360946369-dc9bb6258143?w=400',
            'https://images.unsplash.com/photo-1545672955-8f24dfbe5e3e?w=400',
            'https://images.unsplash.com/photo-1544025162-d76694265947?w=400',
            'https://images.unsplash.com/photo-1588168333986-5078d3ae3976?w=400',
            'https://images.unsplash.com/photo-1518492104633-130d0cc84637?w=400',
            'https://images.unsplash.com/photo-1607623814075-e51df1bdc82f?w=400',
        ];
        @endphp

        @foreach($images as $image)
        <div class="rounded-xl overflow-hidden shadow hover:shadow-lg transition">
            <img src="{{ $image }}" alt="Mutton" class="w-full h-48 object-cover hover:scale-105 transition">
        </div>
        @endforeach
    </div>
</div>
</x-app-layout>