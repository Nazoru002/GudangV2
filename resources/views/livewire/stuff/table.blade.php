<div>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <th class="text-center">No</th>
                <th>Nama Barang</th>
                <th>Deskripsi</th>
                <th>Nama Kategori</th>
                <th class="text-center">Aksi</th>
            </thead>
            <tbody>
                @forelse ($data as $item)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>    
                        <td>{{ $item->name }}</td>    
                        <td>{{ $item->description == null ? 'Tidak ada Deskripsi': $item->description }}</td>    
                        <td>{{ $item->category->name }}</td>
                        <td class="text-center">
                            <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#editModal" wire:click="$emit('edit-data', '{{ $item->id }}' )">
                                Edit Data
                            </button>
                            <button type="submit" class="btn btn-sm btn-danger" wire:click="hapusData({{ $item->id }})">Hapus Data</button>
                        </td>    
                    </tr>                    
                @empty
                    <tr>
                        <td class="text-center text-danger" colspan="5" style="font-style: italic">Belum Ada Data...</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
