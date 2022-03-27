<div class="w-full bg-white">
    @csrf
    <input type="text" name="name" placeholder="Nome:" value="{{ $user->name ?? old('name') }}">
    <input type="email" name="email" placeholder="e-Mail:" value="{{ $user->email ?? old('email') }}">
    <input type="password" name="password" placeholder="Senha:">
</div>