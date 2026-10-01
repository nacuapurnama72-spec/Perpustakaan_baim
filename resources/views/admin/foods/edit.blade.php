<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Menu Makanan / Minuman</h2>
    </x-slot>

    <div class="py-12 max-w-2xl mx-auto sm:px-6 lg:px-8">
        @if($errors->any())
            <div class="mb-4 p-4 bg-red-100 border-l-4 border-red-500 text-red-700 rounded shadow-sm">
                <ul class="list-disc list-inside">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('foods.update', $food->id) }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-xl shadow-sm border">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-sm font-semibold text-gray-700 mb-1">Nama Menu</label>
                <input type="text" name="name" value="{{ old('name', $food->name) }}" class="w-full border rounded-lg p-2.5 focus:ring-2 focus:ring-blue-500 outline-none" required>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-semibold text-gray-700 mb-1">Kategori</label>
                <select name="category" class="w-full border rounded-lg p-2.5 focus:ring-2 focus:ring-blue-500 outline-none" required>
                    <option value="Makanan" {{ old('category', $food->category) == 'Makanan' ? 'selected' : '' }}>Makanan</option>
                    <option value="Minuman" {{ old('category', $food->category) == 'Minuman' ? 'selected' : '' }}>Minuman</option>
                    <option value="Cemilan" {{ old('category', $food->category) == 'Cemilan' ? 'selected' : '' }}>Cemilan</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-semibold text-gray-700 mb-1">Harga (Rp)</label>
                <input type="number" name="price" value="{{ old('price', $food->price) }}" class="w-full border rounded-lg p-2.5 focus:ring-2 focus:ring-blue-500 outline-none" required>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-semibold text-gray-700 mb-1">Deskripsi</label>
                <textarea name="description" rows="3" class="w-full border rounded-lg p-2.5 focus:ring-2 focus:ring-blue-500 outline-none" required>{{ old('description', $food->description) }}</textarea>
            </div>
            <div class="mb-6">
                <label class="block text-sm font-semibold text-gray-700 mb-1">Ganti Foto Menu (Opsional)</label>
                @if($food->image)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $food->image) }}" class="w-20 h-20 object-cover rounded shadow-sm">
                    </div>
                @endif
                <input type="file" name="image" class="w-full border rounded-lg p-2 text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-xs file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
            </div>
            <div class="flex items-center gap-3">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2.5 rounded-lg font-semibold shadow-sm transition">Update Data</button>
                <a href="{{ route('foods.index') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-5 py-2.5 rounded-lg font-semibold transition">Batal</a>
            </div>
        </form>
    </div>
</x-app-layout>