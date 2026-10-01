<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Master Data Makanan</h2>
            <a href="{{ route('customer.index') }}" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 shadow-sm transition">
                Lihat Menu Customer
            </a>
        </div>
    </x-slot>

    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="mb-4 flex justify-between items-center">
            <a href="{{ route('foods.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded inline-block font-semibold shadow-sm transition">+ Tambah Makanan</a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded shadow-sm mb-4 font-medium">{{ session('success') }}</div>
        @endif

        <div class="bg-white border shadow-sm rounded-lg overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-100 border-b text-gray-700 uppercase text-xs">
                        <th class="p-4 text-center">Gambar</th>
                        <th class="p-4">Nama</th>
                        <th class="p-4">Kategori</th>
                        <th class="p-4">Harga</th>
                        <th class="p-4 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y text-sm">
                    @forelse($foods as $food)
                    <tr class="hover:bg-gray-50 text-gray-700">
                        <td class="p-4 text-center">
                            @if($food->image)
                                <img src="{{ asset('storage/' . $food->image) }}" class="w-16 h-16 object-cover mx-auto rounded shadow-sm">
                            @else
                                <span class="text-gray-400 text-xs italic">No Image</span>
                            @endif
                        </td>
                        <td class="p-4 font-semibold text-gray-900">{{ $food->name }}</td>
                        <td class="p-4">
                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded">
                                {{ $food->category }}
                            </span>
                        </td>
                        <td class="p-4 font-bold text-green-600">Rp {{ number_format($food->price) }}</td>
                        <td class="p-4 text-center whitespace-nowrap">
                            <a href="{{ route('foods.edit', $food->id) }}" class="text-blue-600 hover:text-blue-900 font-semibold mr-3">Edit</a>
                            <form action="{{ route('foods.destroy', $food->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus menu ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900 font-semibold">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="p-6 text-center text-gray-500">Belum ada data menu makanan.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-4">{{ $foods->links() }}</div>
    </div>
</x-app-layout>
