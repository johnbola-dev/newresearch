<div>
    {{-- Care about people's approval and you will be their prisoner. --}}

    @include('includes.errorhandler')

    <label for="email">Email</label>
    <input type="text" id="email" wire:model.lazy='email'>
    <br>



    <br>
    {{-- @if ($email)
        {{ $email }}
    @endif --}}

    @if ($account == 1)
        <label for="name">Name</label>
        <input type="text" wire:model='name' id="name">
        <br>
        <label for="name">Password</label>
        <input type="text" wire:model='password' id="name">
        <br>
        <label for="name">Role</label>
        <select name="" wire:model='role' id="">
            @foreach ($roles as $role)
                <option value="{{ $role->id }}">{{ $role->role_name }}</option>
            @endforeach
        </select>
        <br>
        <input type="button" wire:click='register' value="Register">
    @else
        <p>Not Pre-registered</p>
    @endif

</div>
