<?php

namespace App\Livewire;

use App\Models\Comment;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;
use Livewire\Attributes\On;



class Comments extends Component
{
    use WithPagination;

    public $new_comment;
    public $image;
    public $supportId = 1;

    protected $listeners = [
        'fileUpload',
        'ticketSelected',
    ];

    
    public function fileUpload($imageData)
    {
        $this->image = $imageData;
    }

    public function updated($field)
    {
        $this->validateOnly($field, ['new_comment' => 'required|max:255']);
    }


    public function addNewComment()
    {

        $this->validate(['new_comment' => 'required|max:255']);
        $image          = $this->storeImage();
        

        $createdComment = Comment::create([
            'body'              => $this->new_comment, 'user_id' => 1,
            'image'             => $image,
            'support_ticket_id' => $this->supportId,
        ]);
        $this->new_comment = '';
        $this->image      = '';
        session()->flash('message', 'Comment added successfully 😁');
        
    }

    public function storeImage()
    {
        if (!$this->image) {
            return null;
        }

        $img   = ImageManagerStatic::make($this->image)->encode('jpg');
        $name  = Str::random() . '.jpg';
        Storage::disk('public')->put($name, $img);
        return $name;
    }


    public function remove($commentId)
    {
        $comment = Comment::find($commentId);
        if($comment->image){
            Storage::disk('public')->delete($comment->image);
        }
        $comment->delete();
        session()->flash('message', 'Comment deleted successfully 😊');
    }

    public function render()
    {
        return view('livewire.comments',[
            'comments' => Comment::where('support_ticket_id', $this->supportId)->latest()->get(),
        ]);
    }
}
