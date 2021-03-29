<div>
    <form wire:submit.prevent="add()" method="POST">
        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true" wire:ignore.self>
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createModalLabel">Tambah Data Kategori</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="col-xl-12 col-lg-12">
                            <div class="form-group">
                                <label for="">Nama Kategori : </label>
                                <input wire:model.lazy="name_category" type="text" class="form-control" placeholder="Masukkan Nama Kategori..." required>
                            </div>
                        </div>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success">Simpan Data</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
