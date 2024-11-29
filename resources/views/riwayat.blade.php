@extends('base')

@section('content')
<div class="p-6">
    <!-- Tabel Container -->
    <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
        <table class="min-w-full table-auto border-collapse">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 border text-sm font-semibold text-gray-700">No</th>
                    <th class="px-4 py-2 border text-sm font-semibold text-gray-700">Tanggal</th>
                    <th class="px-4 py-2 border text-sm font-semibold text-gray-700">Jam</th>
                    <th class="px-4 py-2 border text-sm font-semibold text-gray-700">Phone Number</th>
                    <th class="px-4 py-2 border text-sm font-semibold text-gray-700">Note</th>
                    <th class="px-4 py-2 border text-sm font-semibold text-gray-700">Metode Pembayaran</th>
                    <th class="px-4 py-2 border text-sm font-semibold text-gray-700">Total Biaya</th>
                </tr>
            </thead>
            <tbody>
                <!-- Baris 1 -->
                <tr class="bg-white">
                    <td class="px-4 py-2 border text-sm text-gray-700">1</td>
                    <td class="px-4 py-2 border text-sm text-gray-700">2024-11-29</td>
                    <td class="px-4 py-2 border text-sm text-gray-700">10:00 - 11:00</td>
                    <td class="px-4 py-2 border text-sm text-gray-700">08123456789</td>
                    <td class="px-4 py-2 border text-sm text-gray-700">-</td>
                    <td class="px-4 py-2 border text-sm text-gray-700">OVO</td>
                    <td class="px-4 py-2 border text-sm text-gray-700">Rp 50.000</td>
                </tr>
                <!-- Baris 2 -->
                <tr class="bg-gray-50">
                    <td class="px-4 py-2 border text-sm text-gray-700">2</td>
                    <td class="px-4 py-2 border text-sm text-gray-700">2024-11-30</td>
                    <td class="px-4 py-2 border text-sm text-gray-700">14:00 - 16.00</td>
                    <td class="px-4 py-2 border text-sm text-gray-700">08234567890</td>
                    <td class="px-4 py-2 border text-sm text-gray-700">Telat 15 menit</td>
                    <td class="px-4 py-2 border text-sm text-gray-700">OVO</td>
                    <td class="px-4 py-2 border text-sm text-gray-700">Rp 100.000</td>
                </tr>
                <!-- Tambahkan baris lainnya sesuai kebutuhan -->
            </tbody>
        </table>
    </div>
</div>
@endsection
