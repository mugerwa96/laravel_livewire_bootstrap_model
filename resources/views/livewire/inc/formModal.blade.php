<!-- Modal -->
<div wire:ignore.self class="modal fade " id="addModel" tabindex="-1" aria-labelledby="addModelLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mx-auto fw-bold" id="addModelLabel">Add Student</h5>

            </div>
            <div class="modal-body">
                <form wire:submit.prevent="save">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="text" wire:model="name"class="form-control @error('name') is-invalid @enderror">
                        @error('name') <span class="text-danger fw-bold">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="text" wire:model="email"class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                            @error('email') <span class="text-danger fw-bold">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">contact</label>
                        <input type="text" wire:model="contact"class="form-control @error('contact') is-invalid @enderror" id="exampleInputPassword1">
                        @error('contact') <span class="text-danger fw-bold">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3 form-check d-flex justify-content-space">
                        <div class="row">
                            <div class="col">
                                <input type="radio" wire:model="gender" value="Male"class="form-check-input @error('gender') is-invalid @enderror"
                                    id="exampleCheck1">
                                <span>Male</span>
                            </div>
                            <div class="col">
                                <input type="radio" wire:model="gender" value="Female"class="form-check-input @error('gender') is-invalid @enderror"
                                    id="exampleCheck1">
                                <span>Female</span>
                            </div>
                            @error('gender') <span class="text-danger fw-bold">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                        <textarea class="form-control @error('address') is-invalid @enderror" wire:model="address"id="exampleFormControlTextarea1" rows="3"></textarea>
                        @error('address') <span class="text-danger fw-bold">{{ $message }}</span> @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-secondary" wire:click="close" data-bs-dismiss="modal">Close</button>
                </form>
            </div>

        </div>
    </div>
</div>
