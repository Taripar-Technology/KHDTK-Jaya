@extends('layouts.user_type.auth')

@section('content')



<body class="bg-gray-300" >
    <div class="container mx-auto  p-8 bg-white shadow-lg rounded-lg" style="border-radius: 40px;">
        <h2 class="text-3xl font-bold text-center mb-5" style="margin-top: -75px;">Detail Kalkulator Pertanian Bawang Merah </h2>
        <div class="overflow-x-auto relative">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-1x1 text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="py-3 px-6">Nama</th>
                        <th scope="col" class="py-3 px-6">Unit</th>
                        <th scope="col" class="py-3 px-6">Harga</th>

                    </tr>
                </thead>

                <tbody class="bg-white">

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px; ">
                            Persiapan Lahan :
                             <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px; ">
                          &nbsp;   &nbsp;   &nbsp;  - Traktor

                        </td>
                        <td class="py-4 px-6">{{ $kalkulator->luas * 7 }} Paket </td>
                       <td class="py-4 px-6">Rp{{ number_format($kalkulator->luas * 7 * 1010000, 0, ',', '.') }} </td>
</td>
                    </tr>



                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                            Pembibitan :
                        </td>
                          <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                           &nbsp;   &nbsp;   &nbsp;  - Kentang
                        </td>

                        <td class="py-4 px-6">{{ $kalkulator->luas * 2000 }} KG </td>
                        <td class="py-4 px-6">Rp{{ number_format($kalkulator->luas * 2000 * 28000, 0, ',','.') }} </td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                            Pemupukan :
                                                </td>
                         <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                           &nbsp;   &nbsp;   &nbsp;  - Ghana Jevamruth
                        </td>
                        <td class="py-4 px-6">{{ $kalkulator->luas * 3 }} Paket </td>
                        <td class="py-4 px-6">Rp{{ number_format($kalkulator->luas * 3 * 660000, 0, ',','.') }} </td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                           &nbsp;   &nbsp;   &nbsp;  - Drava Jevamruth
                        </td>
                        <td class="py-4 px-6">{{ $kalkulator->luas * 13 }} Paket </td>
                        <td class="py-4 px-6">Rp{{number_format ($kalkulator->luas * 13 * 480000, 0, ',', '.') }} </td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                            Pestisida :
                        </td>
                         <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                           &nbsp;   &nbsp;   &nbsp;  - Neemastram
                        </td>
                        <td class="py-4 px-6">{{ $kalkulator->luas * 13 }} Paket </td>
                        <td class="py-4 px-6">Rp{{number_format( $kalkulator->luas * 13 * 431500, 0,',','.') }} </td>
                    </tr>

                        <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                           &nbsp;   &nbsp;   &nbsp;  - Bramastram
                        </td>
                        <td class="py-4 px-6">{{ $kalkulator->luas * 13 }} Paket </td>
                        <td class="py-4 px-6">Rp{{number_format ($kalkulator->luas * 13 * 427500, 0,',','.') }} </td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 14px;">
                            Tenaga Kerja
                        </td>
                        <td class="py-4 px-6">{{ $kalkulator->luas * 361 }} HOK </td>
                        <td class="py-4 px-6">Rp{{number_format ($kalkulator->luas * 361 * 100000, 0,',','.') }} </td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 14px;">
                            Lainnya
                        </td>
                        <td class="py-4 px-6">{{ $kalkulator->luas * 1 }} Paket </td>
                        <td class="py-4 px-6">Rp{{number_format ($kalkulator->luas * 1 * 20625, 0, ',', '.') }} </td>
                    </tr>

                </tbody>

            </table>
        </div>
    </div>

</body>

<body class="bg-gray-300">
    <div class="container mx-auto my-3 p-8 bg-white shadow-lg rounded-lg" style="border-radius: 40px; ">
        <div class="overflow-x-auto relative" style="margin-top: -55px;">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-1x1 text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="py-3 px-6 ">Nama</th>
                        <th scope="col" class="py-3 px-6 ">Unit</th>
                        <th scope="col" class="py-3 px-6 ">Harga</th>

                    </tr>
                </thead>

                <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 14px;">
                            SubTotal
                        </td>
                        <td class="py-4 px-6">-</td>
                        <td class="py-4 px-6">Rp{{number_format ($kalkulator->luas * 7 * 1010000 + $kalkulator->luas * 2000 * 28000 +  $kalkulator->luas * 3 * 660000 + $kalkulator->luas * 13 * 480000 + $kalkulator->luas * 13 * 431500 + $kalkulator->luas * 13 * 427500 + $kalkulator->luas * 361 * 100000 + $kalkulator->luas * 1 * 20625, 0,',', '.') }}  </td>
                    </tr>

                   <tr class="border-b">
    <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 14px;">
        Biaya Takterduga
    </td>
    <td class="py-4 px-6">- </td>
    <td class="py-4 px-6">
        Rp{{number_format (($kalkulator->luas * 7 * 1010000 + $kalkulator->luas * 2000 * 28000 + $kalkulator->luas * 3 * 660000 + $kalkulator->luas * 13 * 480000 + $kalkulator->luas * 13 * 431500 + $kalkulator->luas * 13 * 427500 + $kalkulator->luas * 361 * 100000 + $kalkulator->luas * 1 * 20625) /10, 0, ',', '.')  }}
    </td>
</tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 14px;">
                            Total
                        </td>
                        <td class="py-4 px-6">- </td>
                        <td class="py-4 px-6"> Rp{{ number_format (($kalkulator->luas * 7 * 1010000 + $kalkulator->luas * 2000 * 28000 + $kalkulator->luas * 3 * 660000 + $kalkulator->luas * 13 * 480000 + $kalkulator->luas * 13 * 431500 + $kalkulator->luas * 13 * 427500 + $kalkulator->luas * 361 * 100000 + $kalkulator->luas * 1 * 20625) /10 + ($kalkulator->luas * 7 * 1010000 + $kalkulator->luas * 2000 * 28000 + $kalkulator->luas * 3 * 660000 + $kalkulator->luas * 13 * 480000 + $kalkulator->luas * 13 * 431500 + $kalkulator->luas * 13 * 427500 + $kalkulator->luas * 361 * 100000 + $kalkulator->luas * 1 * 20625), 0, ',', '.')  }}</td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>

</body>

</html>

<body class="bg-gray-300">
    <div class="container mx-auto my-3 p-8 bg-white shadow-lg rounded-lg" style="border-radius: 40px; ">
        <h2 class="text-2xl font-bold text-center mb-6" style="margin-top: -55px;">Estimasi Populasi</h2>
        <div class="overflow-x-auto relative">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-1x1 text-gray-700 uppercase bg-gray-50">
                </thead>

                <tbody class="bg-white">

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 14px; ">
                            Estimasi Populasi
                        </td>
                        <td class="py-4 px-6 font-bold">{{ $kalkulator->jarak }} Tumbuhan </td>

                    </tr>


            </table>
        </div>
    </div>


</body>


<style>
    body {
    background-color: #f4f4f4;
    font-family: 'Arial', sans-serif;
}
.container {
    margin-top: -20px; /* Adjust this value as needed */
    margin-left: auto;
    margin-right: auto;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 20px;
    max-width: 1000px;

}
table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
}
thead th {
    background-color: #e0e0e0;
    color: #333;
    font-weight: bold;
    padding: 10px;
    border: 1px solid #ddd;
}
tbody td {
    padding: 10px;
    border: 1px solid #ddd;
}
tr:nth-child(even) {
    background-color: #f9f9f9;
}
h2 {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
}
.text-gray-700 {
    color: #333;
}
.button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

</style>


@endsection
