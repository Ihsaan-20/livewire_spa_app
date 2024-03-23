<?php

namespace App\Livewire;

use App\Models\Comment;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;



class Comments extends Component
{
    use WithPagination, WithFileUploads;

    public $new_comment;
    public $image;
    public $supportId;
    public $active;


    protected $listeners = [
        'fileUpload',
        'ticketSelected',
    ];


    #[On('ticket-selected')]
    public function ticketSelected($id)
    {
        
        $this->supportId = $id;
    }
    
    // public function fileUpload($imageData)
    // {
    //     $this->image = $imageData;
    // }

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
        $name = $this->image->getClientOriginalName();
        $path = $this->image->storeAs('images', $name, 'public');
        return $path;
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
