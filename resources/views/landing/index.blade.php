<x-landing-layout>
    <style>
            .mask-image-gradient {
                -webkit-mask-image: linear-gradient(to bottom, rgba(0, 0, 0, 1) 60%, rgba(45, 55, 72, 0) 100%);
                mask-image: linear-gradient(to bottom, rgba(0, 0, 0, 1) 60%, rgba(45, 55, 72, 0) 100%);
            }
    </style>

    <div class="w-full inset-0 bg-gradient-to-b from-transparent to-gray-800">
    <img class="w-full h-full object-cover mask-image-gradient" src="{{asset('/MASJID.png')}}"/>
    </div>
    
    <div class="w-full p-12 bg-gray-800">
        <h1 class="text-4xl text-center font-bold mb-8 text-white">KEUANGAN MASJID</h1>

        <div class="flex gap-6">
            <div class="p-8 m-4 mr-0 bg-white rounded-md shadow-sm w-1/2">
                <h2>Total Pemasukan : </h2>
                <p class="font-bold text-4xl">Rp. {{ $pemasukan->sum('nominal') }}</p>

                <table class="mt-8 table-auto border w-full">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="text-left py-3 px-4 uppercase font-semibold">No</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold">Tanggal</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold">Nominal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pemasukan as $d)
                            <tr>
                                <td class="text-left py-3 px-4 font-semibold">{{ $loop->iteration }}</td>
                                <td class="text-left py-3 px-4 font-semibold">{{ $d->created_at }}</td>
                                <td class="text-left py-3 px-4 font-semibold">{{ $d->nominal }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="p-8 m-4 ml-0 bg-white rounded-md shadow-sm w-1/2">
                <h2>Total Pengeluaran : </h2>
                <p class="font-bold text-4xl">Rp. {{ $pengeluaran->sum('nominal') }}</p>

                <table class="mt-8 table-auto border w-full">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="text-left py-3 px-4 uppercase font-semibold">No</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold">Tanggal</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold">Nominal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengeluaran as $d)
                            <tr>
                                <td class="text-left py-3 px-4 font-semibold">{{ $loop->iteration }}</td>
                                <td class="text-left py-3 px-4 font-semibold">{{ $d->created_at }}</td>
                                <td class="text-left py-3 px-4 font-semibold">{{ $d->nominal }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-landing-layout>