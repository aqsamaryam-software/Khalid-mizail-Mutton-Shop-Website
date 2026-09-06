<x-app-layout>
<div class="max-w-4xl mx-auto px-4 py-12">
    <h1 class="text-3xl font-bold text-center mb-2 text-gray-800">Contact Us 📞</h1>
    <p class="text-center text-gray-500 mb-8">Get in touch with us for orders and inquiries</p>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
        <!-- Contact Info -->
        <div class="bg-red-700 text-white rounded-xl p-8">
            <h2 class="text-2xl font-bold mb-6">Shop Information</h2>
            <ul class="space-y-4">
                <li class="flex items-center gap-3">
                    <span class="text-2xl">📞</span>
                    <div>
                        <p class="font-semibold">Phone</p>
                        <a href="tel:+923346771224" class="text-yellow-300">+923346771224</a>
                    </div>
                </li>
                <li class="flex items-center gap-3">
                    <span class="text-2xl">📍</span>
                    <div>
                        <p class="font-semibold">Address</p>
                        <p class="text-gray-300">Block 7,D.G.khan, Pakistan</p>
                    </div>
                </li>
                <li class="flex items-center gap-3">
                    <span class="text-2xl">⏰</span>
                    <div>
                        <p class="font-semibold">Opening Hours</p>
                        <p class="text-gray-300">6:00 AM - 10:00 PM</p>
                    </div>
                </li>
                <li class="flex items-center gap-3">
                    <span class="text-2xl">📅</span>
                    <div>
                        <p class="font-semibold">Days Open</p>
                        <p class="text-gray-300">Monday - Sunday</p>
                    </div>
                </li>
            </ul>
            <a href="tel:+923346771224"
                class="mt-8 block text-center bg-yellow-400 text-black px-6 py-3 rounded-full font-bold hover:bg-yellow-300">
                📞 Call Now
            </a>
        </div>

        <!-- Contact Form -->
        <div class="bg-white rounded-xl shadow p-8">
            <h2 class="text-2xl font-bold mb-6 text-gray-800">Send Message</h2>
            <form method="POST" action="{{ route('contact.send') }}">
                @csrf
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                    <input type="text" name="name"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-500">
                    @error('name')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" name="email"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-500">
                    @error('email')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                    <input type="text" name="phone"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-500">
                    @error('phone')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                    <textarea name="message" rows="4"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-500"></textarea>
                    @error('message')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
                </div>
                <button type="submit"
                    class="w-full bg-red-600 text-white py-3 rounded-lg font-bold hover:bg-red-700">
                    Send Message ✅
                </button>
            </form>
        </div>
    </div>
</div>
</x-app-layout>