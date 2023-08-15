<div wire:ignore.self class="modal fade" id="AddMeatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">add Meat</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal" aria-label="Close">
                </button>
            </div>

            <form action="" wire:submit.prevent="storeMeat()">

                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name"> Meat name </label>
                        <input type="text" wire:model.defer="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="weight"> Weight </label>
                        <input type="text" wire:model.defer="weight" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="description"> Description </label>
                        <textarea type="text" wire:model.defer="description" class="form-control"> </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="status"> Status </label>
                        <input type="checkbox" wire:model.defer="status" > checked = hidden, unchecked = visible
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit " class="btn btn-primary">Save</button>
                </div>

            </form>
        </div>
    </div>
</div>

{{-- meat uppate modal --}}

<div wire:ignore.self class="modal fade" id="UpdateMeatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">add Meat</h5>
                <button type="button" class="btn-close" wire:click="closeModal" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>

            <form action="" wire:submit.prevent="updateMeat()">

                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name"> Meat name </label>
                        <input type="text" wire:model.defer="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="weight"> Weight </label>
                        <input type="text" wire:model.defer="weight" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="description"> Description </label>
                        <textarea type="text" wire:model.defer="description" class="form-control"> </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="status"> Status </label>
                        <input type="checkbox" wire:model.defer="status" > checked = hidden, unchecked = visible
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"  wire:click="closeModal" data-bs-dismiss="modal">Close</button>
                    <button type="submit " class="btn btn-primary">update</button>
                </div>

            </form>
        </div>
    </div>
</div>

{{-- meat delete modal --}}

<div wire:ignore.self class="modal fade" id="DeleteMeatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Meat</h5>
                <button type="button" class="btn-close" wire:click="closeModal" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>

            <form action="" wire:submit.prevent="destroyMeat">
                <h4>u sure u wnt to delelete this fine date ? 

                </h4>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"  wire:click="closeModal" data-bs-dismiss="modal">Close</button>
                    <button type="submit " class="btn btn-primary" >Delete</button>
                </div>

            </form>
        </div>
    </div>
</div>