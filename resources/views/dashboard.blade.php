<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasbor Admin - Rasa Nusantara</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Google Fonts for better typography -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        /* Custom animation for table rows */
        .fade-in-up {
            animation: fadeInUp 0.5s ease-out forwards;
            opacity: 0;
            transform: translateY(20px);
        }
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body class="bg-gradient-to-br from-orange-50 via-amber-50 to-orange-100 min-h-screen antialiased text-gray-800">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        
        <!-- Header Section with Animation -->
        <div class="text-center mb-10 fade-in-up" style="animation-delay: 0.1s;">
            <div class="inline-flex items-center justify-center p-3 bg-orange-500 rounded-full mb-4 shadow-lg shadow-orange-500/30 animate-bounce">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <h1 class="text-4xl md:text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-orange-600 to-red-600 tracking-tight mb-2">
                Dasbor Admin Rasa Nusantara
            </h1>
            <p class="text-lg text-gray-600 font-medium">Sistem Manajemen Pesanan Katering Cerdas</p>
        </div>

        <!-- Table Card -->
        <div class="bg-white/80 backdrop-blur-xl shadow-2xl rounded-3xl overflow-hidden border border-white/40 fade-in-up" style="animation-delay: 0.2s;">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gradient-to-r from-orange-500 to-orange-400 text-white text-sm uppercase tracking-wider">
                            <th class="px-6 py-5 font-semibold rounded-tl-3xl">ID Order</th>
                            <th class="px-6 py-5 font-semibold">Pelanggan</th>
                            <th class="px-6 py-5 font-semibold">Pesanan</th>
                            <th class="px-6 py-5 font-semibold rounded-tr-3xl">Pengiriman & Pembayaran</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100/50">
                        @forelse($orders as $index => $order)
                        <tr class="hover:bg-orange-50/50 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-md group fade-in-up" style="animation-delay: {{ 0.3 + ($index * 0.05) }}s;">
                            <!-- ID Order -->
                            <td class="px-6 py-4 align-top">
                                <span class="inline-flex items-center justify-center px-3 py-1 rounded-full text-xs font-bold bg-orange-100 text-orange-700 shadow-sm group-hover:scale-110 transition-transform duration-300">
                                    #{{ str_pad($order->id, 4, '0', STR_PAD_LEFT) }}
                                </span>
                            </td>
                            
                            <!-- Pelanggan -->
                            <td class="px-6 py-4 align-top">
                                <div class="flex items-start space-x-3">
                                    <div class="flex-shrink-0 w-10 h-10 rounded-full bg-gradient-to-br from-orange-400 to-red-400 flex items-center justify-center text-white font-bold shadow-md transform group-hover:rotate-12 transition-transform duration-300">
                                        {{ substr($order->customer->name, 0, 1) }}
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold text-gray-900">{{ $order->customer->name }}</p>
                                        <p class="text-xs flex items-center text-gray-500 mt-1">
                                            <svg class="w-3 h-3 mr-1 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                            </svg>
                                            {{ $order->customer->city->name }}
                                        </p>
                                    </div>
                                </div>
                            </td>

                            <!-- Pesanan -->
                            <td class="px-6 py-4 align-top">
                                <ul class="space-y-2">
                                    @foreach($order->orderItems as $item)
                                    <li class="flex items-center text-sm bg-white p-2 rounded-lg shadow-sm border border-gray-50 group-hover:border-orange-100 transition-colors">
                                        <span class="flex items-center justify-center bg-orange-100 text-orange-700 font-bold rounded-md w-6 h-6 text-xs mr-3">
                                            {{ $item->qty }}x
                                        </span>
                                        <div>
                                            <span class="font-semibold text-gray-800 block leading-tight">{{ $item->menu->name }}</span>
                                            <span class="text-xs text-orange-500 font-medium">{{ $item->menu->category->name }}</span>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </td>

                            <!-- Pengiriman & Pembayaran -->
                            <td class="px-6 py-4 align-top">
                                <div class="space-y-3">
                                    <div class="flex items-center text-sm p-2 bg-blue-50/50 rounded-lg border border-blue-100">
                                        <div class="p-1.5 bg-blue-100 text-blue-600 rounded-md mr-3">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"></path></svg>
                                        </div>
                                        <span class="font-medium text-gray-700">{{ $order->courier->name }}</span>
                                    </div>
                                    <div class="flex items-center text-sm p-2 bg-emerald-50/50 rounded-lg border border-emerald-100">
                                        <div class="p-1.5 bg-emerald-100 text-emerald-600 rounded-md mr-3">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                                        </div>
                                        <span class="font-medium text-gray-700">{{ $order->paymentMethod->name }}</span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="px-6 py-10 text-center text-gray-500 font-medium">
                                <div class="flex flex-col items-center justify-center">
                                    <svg class="w-12 h-12 text-gray-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                                    Belum ada data pesanan
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            <div class="px-6 py-4 bg-gray-50/50 border-t border-gray-100">
                {{ $orders->links() }}
            </div>
        </div>

        <div class="mt-8 text-center text-sm text-gray-500 fade-in-up" style="animation-delay: 0.8s;">
            N+1 Query Problem successfully resolved using Nested Eager Loading. 🚀
        </div>
    </div>
</body>
</html>
