<div>
    @include('livewire.admin.meat.modal-form')


<div class="row">
    <div class="col-md-12">
        {{-- tot hier, hetzelfde als bij dashboard.blade.php --}}

        {{-- @if ( session('message'))
          <div class="alert alert-success"><h6>{{ session('message')}}</h6></div> 
        @endif --}}

    <div class="card">
        <div class="card-header">
            <h3>Meat list 
                <a href="#"  data-bs-toggle="modal" data-bs-target="#AddMeatModal" class="btn btn-primary float-end"> Add Meat

                </a>
            </h3>
        </div>
        {{-- hier gaan we de data van elke meat gaan fetchen mbv Livewire --}}
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th><th>Name</th><th>weight(g)</th><th>Status</th><th width='50'>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($meats as $meat)
                    
                    <tr>
                        <td>{{$meat->id}}</td>
                        <td>{{$meat->name}}</td>
                        <td>{{$meat->weight}}</td>
                        <td>{{$meat->status == '1' ? 'hidden' : 'visible'}}</td>
                        <td>
                         <a href= "#" wire:click="editMeat({{$meat->id}})" data-bs-toggle="modal" data-bs-target="#UpdateMeatModal"  class="btn btn-success">Edit</a>
                         <a href="#" wire:click="deleteMeat({{$meat->id}})" data-bs-toggle="modal" data-bs-target="#DeleteMeatModal"  class="btn btn-danger">Delete</a>   
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5"> No Meats found.</td>
                    </tr>
                    @endforelse

                </tbody>
            </table>
            <div>
                {{$meats->links()}}
            </div>

           
        </div>
    </div>


    </div>
</div>

</div>
@push('script')
    <script>
        window.addEventListener('close-mondal',event =>{
            $('#AddMeatModal').modal("hide");
            $('#UpdateMeatModal').modal("hide");
            $('#DeleteMeatModal').modal("hide");
        })
    </script>
 
@endpush