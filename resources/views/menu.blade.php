<x-app-layout>
<div class="max-w-6xl mx-auto px-4 py-12">
    <h1 class="text-3xl font-bold text-center mb-2 text-gray-800">Our Menu 🥩</h1>
    <p class="text-center text-gray-500 mb-8">Fresh mutton cuts available daily</p>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @php
        $items = [
            ['name'=>'Mutton Mix 1 KG','price'=>'Rs. 3,200','desc'=>'Fresh mixed mutton cuts',
            'image'=>'/images/muttonmix.jpg'
            ['name'=>'Mutton Leg (Raan) 1 KG','price'=>'Rs. 3,450','desc'=>'Tender mutton leg piece',
            'image'=>'https://img.freepik.com/free-photo/raw-whole-lamb-leg_1220-4700.jpg'],

            ['name'=>'Mutton Chanp 1 KG','price'=>'Rs. 3,200','desc'=>'Fresh mutton chops',
            'image'=>'https://img.freepik.com/free-photo/raw-lamb-chops-with-herbs_1220-4711.jpg'],

            ['name'=>'Mutton Puth 1 KG','price'=>'Rs. 3,500','desc'=>'Premium mutton back piece',
            'image'=>'https://img.freepik.com/free-photo/raw-lamb-chops_1220-4716.jpg'],

            ['name'=>'Mutton Paya Per Pc','price'=>'Rs. 370','desc'=>'Fresh mutton trotters',
            'image'=>'https://img.freepik.com/free-photo/raw-whole-lamb-leg_1220-4700.jpg'],

            ['name'=>'Mutton Neck 1 KG','price'=>'Rs. 3,100','desc'=>'Juicy mutton neck pieces',
            'image'=>'https://img.freepik.com/free-photo/raw-lamb-chops-with-herbs_1220-4711.jpg'],

            ['name'=>'Mutton Joints 1 KG','price'=>'Rs. 3,550','desc'=>'Fresh mutton joint cuts',
            'image'=>'https://img.freepik.com/free-photo/raw-lamb-chops_1220-4716.jpg'],

            ['name'=>'Mutton Mince 1 KG','price'=>'Rs. 3,000','desc'=>'Fresh minced mutton',
            'image'=>'https://img.freepik.com/free-photo/raw-whole-lamb-leg_1220-4700.jpg'],

            ['name'=>'Mutton Liver 1 KG','price'=>'Rs. 2,500','desc'=>'Fresh mutton liver',
            'image'=>'https://img.freepik.com/free-photo/raw-lamb-chops-with-herbs_1220-4711.jpg'],

            ['name'=>'Mutton Ribs 1 KG','price'=>'Rs. 3,300','desc'=>'Tender mutton ribs',
            'image'=>'https://img.freepik.com/free-photo/raw-lamb-chops_1220-4716.jpg'],

            ['name'=>'Mutton Shoulder 1 KG','price'=>'Rs. 3,400','desc'=>'Fresh mutton shoulder',
            'image'=>'https://img.freepik.com/free-photo/raw-whole-lamb-leg_1220-4700.jpg'],

            ['name'=>'Mutton Brain','price'=>'Rs. 500','desc'=>'Fresh mutton brain',
            'image'=>'https://img.freepik.com/free-photo/raw-lamb-chops-with-herbs_1220-4711.jpg'],
        ];
        @endphp

        @foreach($items as $item)
        <div class="bg-white rounded-xl shadow overflow-hidden hover:shadow-lg transition">
            <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="font-bold text-lg mb-1">{{ $item['name'] }}</h3>
                <p class="text-gray-500 text-sm mb-2">{{ $item['desc'] }}</p>
                <p class="text-red-600 font-bold text-xl mb-3">{{ $item['price'] }}</p>
                <a href="tel:+923346771224"
                    class="block text-center bg-red-600 text-white py-2 rounded-lg hover:bg-red-700 font-semibold">
                    📞 Call To Order
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
</x-app-layout>