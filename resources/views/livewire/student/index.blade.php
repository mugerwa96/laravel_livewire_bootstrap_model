<div>
    <div class="container">
        <div class="row justify-content-center align-items-center ">
            <div class="col-md-11">
                <div class="container">


                    <div class="py-4 mx-3">

                        <span class="float-start">
                            <input type="text" wire:model="search" class="form-control">
                        </span>
                        <span class="float-end">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#addModel">
                                Launch demo modal
                            </button>
                            @include('livewire.inc.formModal')
                            @include('livewire.inc.editModal')
                        </span>
                    </div>

                    @if ($students->count() > 0)
                        <div class="container">

                            <table class="table shadow my-4 p-5">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Contact</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Address</th>
                                        <th scope="col" span='3'>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                        <tr>

                                            <td>{{ $student->name }}</td>
                                            <td>{{ $student->email }}</td>
                                            <td>{{ $student->contact }}</td>
                                            <td>{{ $student->gender == 1 ? 'Male' : 'Female' }}</td>
                                            <td>{{ $student->address }}</td>
                                            <td>
                                                <button type="button" wire:click="editStudent({{ $student->id }})" class="btn btn-primary btn-sm">Edit</button>

                                            </td>
                                            <td>

                                                <a href="" class="btn btn-danger btn-sm">Delete</a>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $students->links() }}
                        </div>
                    @else
                        <div class="py-5">

                            <p class="alert alert-primary p-3 text-center text-dark">No Records found</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

</div>
