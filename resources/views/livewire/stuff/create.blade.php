<div>
    <form wire:submit.prevent="add()" method="POST">
            <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true" wire:ignore.self>
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="createModalLabel">Tambah Data Barang</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
            
                        <div class="modal-body">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Nama Barang : </label>
                                    <input wire:model.lazy="name" type="text" class="form-control" placeholder="Masukkan Nama Barang..." required>
                                </div>

                                <div class="form-group">
                                    <label for="">Deskripsi Barang : </label>
                                    <input wire:model.lazy="desc" type="text" class="form-control" placeholder="Masukkan Deskripsi Jika Diperlukan...">
                                </div>

                                <div class="form-group">
                                    <label for="">Nama Kategori : </label>
                                    <select name="category_id" id="category_id" wire:model="category_id" class="form-control">
                                        <option value="">- PILIH -</option>
                                        @foreach ($data_category as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="">Stok Modal</label>
                                    <input class="form-control" wire:model="stock_modal" type="number" name="stok" id="stok">
                                </div>
                            </div>
                        </div>
                            
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Simpan Data</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
</div>
