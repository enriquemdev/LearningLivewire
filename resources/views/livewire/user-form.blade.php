<div>
    <form wire:submit="createUser">
        <input wire:model="name" placeholder="name" required>
        <input wire:model="email" placeholder="email" type="email" required>
        <input wire:model="password" placeholder="password" required>

        <button>Save</button>
    </form>

    <div>
        @foreach ($users as $user)
            <p>{{ $user->name }}</p>
        @endforeach
        
    </div>
</div>
