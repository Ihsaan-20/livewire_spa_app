<div class="row">
   <div class="col-lg-6 mx-auto">

      @if(session('success'))
         <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>{{session('success')}}</strong>
         </div>
        @elseif(session('error'))
        <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>{{session('error')}}</strong>
         </div>
      @endif

       <div class="card mt-5">
           <div class="card-header">
               <h2 class="text-center">Login Form</h2>
           </div>
           <div class="card-body">
               <form wire:submit.prevent="login">
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

                   <div class="mb-3 mt-3">
                       <input type="submit" value="Login" class="form-control btn btn-success" >
                   </div>

               </form>
           </div>
       </div>

   </div>
</div>
