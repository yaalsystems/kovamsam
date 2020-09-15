<div  class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            @if ($page == 'add')
                    <div class="card-header">
                        Add New God                    
                    </div>
                    <div class="card-body">
                       <div class="form-group">
                        <input wire:model.name="msg" type="text"  class="form-control">
                         <label for="name">God's List</label>
                         <input wire:model.defer="name" type="text" class="form-control" placeholder="God Name">
                        
                         <label for="selected_tasks">God's Place List</label>
                         <div wire:ignore>
                            <select id="selected_tasks" name="selected_tasks" id="selected_tasks" 
                                    class="selected_tasks form-select block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                 <option>1</option>
                                 <option>2</option>
                            </select>

                        </div>
                         <input wire:model.defer="name" type="text" class="form-control">
                         </div>
                         <div class="col-md-8">
                            <span class="float-right">
                                <button wire:click="createGod" type="button" class="btn btn-block btn-primary waves-effect waves-classic">Add God</button>
                            </span>                         
                         </div>

                    </div>

                @elseif ($page == 'edit')

                    <div class="card-header">
                        Edit  God                    
                    </div>
                    <div class="card-body">
                       <div class="form-group">
                        <input wire:model.name="msg" type="text"  class="form-control">
                         <label for="name">God name</label>
                         <input wire:model.name="sel_id"  type="hidden"  class="form-control">
                         <input wire:model.name="name" type="text"  class="form-control" placeholder="God Name">
                         </div>
                         <div class="col-md-8">
                            <span class="float-right">
                                <button wire:click="updateGod" type="button" 
                                class="btn btn-block btn-primary waves-effect waves-classic">Update God</button>
                            </span>
                         
                         </div>
                    </div>

                
            @elseif($page == 'show')


                    <div class="card-header">
                        God List
                        <span class="float-right">
                            <button wire:click="newGod" class="btn btn-sm btn-success waves-effect waves-classic">  புதியதாக சேர்க்க </button>
                        </span>
                    </div>
                    <div class="card-body">
                        <input wire:model.name="msg" type="text"  class="form-control">
                        @if ($gods)

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>பெயர்</th>
                                    <th>மாற்று</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($gods as $item)
                                <tr>
                                    <td scope="row">{{ $item->id}}</td>
                                    <td>{{ $item->name}}</td>
                                    <td>
                                        <div class="" role="group">                                          
                                            <button wire:click="editGod({{ $item->id }})" type="button" class="btn btn-floating btn-primary btn-xs waves-effect waves-classic">
                                                <i class="icon md-edit" aria-hidden="true"></i>
                                            </button> 
                                            <button  type="button"
                                                 class="btn btn-floating btn-primary btn-xs waves-effect waves-classic select2">
                                                <i class="icon md-delete" aria-hidden="true"></i>
                                            </button>
                                          </div>

                                    </td>
                                </tr>
                                @endforeach
                                
                                
                            </tbody>
                        </table>
                            
                        @else
                        <p>No God created Yet !</p>
                        @endif
                        
                       

                      
                    </div>
                    
            @endif
        </div>
    </div>
</div>
@push('scripts')
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                placeholder: '{{__('Select your option')}}',
                allowClear: true
            });
            $('.select2').on('change', function (e) {
                let elementName = $(this).attr('id');
                var data = $(this).select2("val");
                @this.set(elementName, data);
            });
        });
    </script>
@endpush
