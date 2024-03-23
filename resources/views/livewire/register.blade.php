<div class="row">
    <div class="col-lg-6 mx-auto">

        <div class="card mt-5">
            <div class="card-header">
                <h2 class="text-center">Registration Form</h2>
            </div>
            <div class="card-body">
                <form wire:submit.prevent="add">
                    <div class="mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" wire:model="form.name" placeholder="Name...">
                        @error('form.name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Email Address</label>
                        <input type="email" class="form-control" wire:model="form.email" placeholder="Email address...">
                        @error('form.email')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Password</label>
                        <input type="password" class="form-control" wire:model="form.password" placeholder="Password...">
                        @error('form.password')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Password Confirmation</label>
                        <input type="password" class="form-control" wire:model="form.password_confirmation" placeholder="Password confirmation...">
                        @error('form.password_confirmation')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3 mt-3">
                        <input type="submit" value="Register" class="form-control btn btn-success" >
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>
