<div class="card mt-3 p-3">
    <h3>Comments</h3>
    <div class="card-body">
        <div class="mb-3">

            <section>
                @if($image)
                    <img src={{$image}} width="200" />
                @endif
                {{-- <input type="file" id="image" class="form-control" wire:change="$emit('fileChoosen')"> --}}
            </section>
        </div>

        <form class="row g-3" wire:submit.prevent="addNewComment">
            <div class="col-10">
              <input type="text" class="form-control" wire:model="new_comment" id="comment" placeholder="What's in your mind...">
              @error('new_comment') <span class="text-danger mb-3 d-block">{{ $message }}</span> @enderror
            </div>
            <div class="col-2">
              <button type="submit" class="btn btn-primary mb-3 w-100">Add</button>
            </div>
          </form>

          @foreach($comments as $comment)
            <div class="card mb-3 p-2">
                <div class="d-flex justify-content-between mb-2">
                    <div>
                        <span class="fs-5 fw-bold">{{$comment->creator->name ?? 'Ihsaan'}} </span> <span class="text-muted">{{$comment->created_at->diffForHumans()}}</span>
                        
                    </div>
                    <a href="javascript:void(0)" wire:click="remove({{$comment->id}})" class="btn btn-danger btn-sm">X</a>
                </div>
                <p>
                    {{$comment->body}}
                </p>
                @if($comment->image)
                    <img src="{{$comment->imagePath}}" />
                @endif
            </div>
        @endforeach
    </div>


</div>
{{-- <script>
    Livewire.on('fileChoosen', () => {
        let inputField = document.getElementById('image');
        let file = inputField.files[0];
        let reader = new FileReader();
        reader.onloadend = () => {
            window.livewire.emit('fileUpload', reader.result);
        }
        reader.readAsDataURL(file);
    })
    </script> --}}