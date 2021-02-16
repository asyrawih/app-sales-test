<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sales') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="">
                        <label>
                            <input type="date" name="start_at" />
                        </label>
                        <label>
                            <input type="date" name="end_at" />
                        </label>
                        <button type="submit" class="p-3 bg-blue-500 rounded text-white">Search</button>
                        <br>
                        <br>
                        <table class="table-auto w-full">
                            <thead>
                            <tr class="border border-2">
                                <th>Username</th>
                                <th>Date</th>
                                <th>Nilai Barang</th>
                                <th>Nilai Jasa</th>
                                <th>Total Nilai</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($products as $key => $product)
                                <tr>
                                    <td>{{ $product->username->name }}</td>
                                    <td>{{ $product->date }}</td>
                                    <td>{{ $product->format_rupiah($product->value_goods)   }}</td>
                                    <td>{{ $product->format_rupiah($product->value_service)   }}</td>
                                    <td>{{ $product->total_nilai }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td>Empty</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
