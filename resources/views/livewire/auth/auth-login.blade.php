<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

    @include('includes.errorhandler')

    <label for="Email">Email</label>
    <input type="email" wire:model='email'>
    <br>
    <label for="password">Password</label>
    <input type="password" wire:model='password'>
    <br>
    <input type="button" wire:click='login' value="Login">

</div>
