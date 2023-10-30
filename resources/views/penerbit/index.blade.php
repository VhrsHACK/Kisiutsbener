<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container" style="margin:100px auto;">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>

                        <h1 class="px-6 py-3 text-center" style="border:2px solid rgba(0,0,0,0.2); background-color:grey;">
                            <b>Halaman Penerbit</b>
                        </h1>
                    </tr>
                </thead>
                <tr style="border-bottom:2px solid rgba(0,0,0,0.2);">
                    <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Alamat
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tahun Berdiri
                    </th>
                </tr>
                @foreach ($penerbits as $item)
                    <tbody>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $item['nama_penerbit'] }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $item['alamat'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item['tahun_berdiri'] }}
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>

    </div>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>
