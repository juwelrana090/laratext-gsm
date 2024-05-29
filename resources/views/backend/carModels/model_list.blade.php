<div class="table-responsive">
    <table class="table mb-0">
        <thead class="thead-dark">
            <tr>
                <th style="width:5%">SL</th>
                <th style="width:15%">Name</th>
                <th style="width:15%">Brand</th>
                <th style="width:18%">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($carModels as $key => $item)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{$item->brand->name}}</td>
                    <td>
                        <a href="{{ route('admin.car_models.edit', $item->id) }}"
                            class="btn btn-sm btn-primary text-white">edit</a>
                        <a href="#" class="btn btn-sm btn-danger text-white" data-toggle="modal" data-target="#modelDelete{{$item->id}}">x</a>
                        <div class="modal fade" id="modelDelete{{$item->id}}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete Model</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are You Sure You want to delete {{ $item->name }} Model?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <a onclick="event.preventDefault();
                                  document.getElementById('delete-form-{{ $item->id }}').submit();"
                                            href="{{ route('admin.car_models.destroy', $item->id) }}"
                                            class="btn btn-danger text-white" data-toggle="modal"
                                            data-target="#colorDelete">Delete</a>
                                        <form id="delete-form-{{ $item->id }}"
                                            action="{{ route('admin.car_models.destroy', $item->id) }}" method="POST"
                                            class="d-none">
                                            @method('DELETE')
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
