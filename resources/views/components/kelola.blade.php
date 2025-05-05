<h2 class="text-xl font-semibold mb-4">Daftar Buku</h2>
<table class="min-w-full bg-white">
    <thead>
        <tr>
            <th class="py-2 px-4 border-b">Judul</th>
            <th class="py-2 px-4 border-b">Pengarang</th>
            <th class="py-2 px-4 border-b">Tahun</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($books as $book)
            <tr>
                <td class="py-2 px-4 border-b">{{ $book['judul'] }}</td>
                <td class="py-2 px-4 border-b">{{ $book['pengarang'] }}</td>
                <td class="py-2 px-4 border-b">{{ $book['tahun'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
