<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table class="border-collapse border border-slate-500 ...">
        <thead>
            <tr>
                <th class="text-center border border-slate-300 ...">NO</th>
                <th class="px-2 text-center border border-slate-300 ...">Nama Kategori</th>
                <th width="220px" class="px-2 text-center border border-slate-300 ...">Tindakan</th>
            </tr>
        </thead>
        <tbody>
            @php $no = ($kategori->currentPage() - 1) * $kategori->perPage() + 1; @endphp
            @foreach ($kategori as $data)
                <tr>
                    <th class="text-center border">{{ $no++ }}</th>
                    <td class="text-center border">{{ $data->nama_kategori }}</td>
                    <form action="{{ route('kategori.destroy', $data->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <td class="border text-center">
                            <a href="{{ route('kategori.edit', $data->id) }}"
                                class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded mx-2 no-underline">
                                Edit
                            </a>
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded mx-2"
                                data-confirm-delete="true">
                                Hapus
                            </button>
                        </td>
                    </form>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
