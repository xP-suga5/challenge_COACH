<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Contact;

class Search extends Component
{
    use WithPagination;

    public $fullname, $email;
    public $created_at_pre, $created_at_post;
    public $gender = '';
    public $contact = [];
    public $isActive = true;

    protected $queryString = [
        'fullname' => ['except' => ''],
        'gender' => ['except' => ''],
        'email' => ['except' => ''],
        'created_at_pre' => ['except' => ''],
        'created_at_post' => ['except' => ''],
    ];


    public function delete($id)
    {
        Contact::find($id)->delete();
    }

    public function render()
    {

        $contacts = Contact::query()
            ->when($this->fullname, fn ($query, $value) => $query->where('fullname', 'LIKE', '%' . $value . '%'))
            ->when($this->gender, fn ($query, $value) => $query->where('gender', '=', $value))
            ->when($this->created_at_pre, fn ($query, $value) => $query->where('created_at', '>=',  $value ))
            ->when($this->created_at_post, fn ($query, $value) => $query->where('created_at', '<=', $value ))
            ->when($this->email, fn ($query, $value) => $query->where('email', 'LIKE', '%' . $value . '%'))
            ->paginate(10);

        return view(
            'livewire.search',
            ['contacts' => $contacts,]
        );
    }
    public function clear()
    {
        $this->reset([
            'fullname',
            'gender',
            'created_at_pre',
            'created_at_post',
            'email',
        ]);
        $contacts = Contact::all();
        return view(
            'livewire.search',
            ['contacts' => $contacts,]
        );
    }
}
