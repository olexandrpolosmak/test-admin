@php
    use App\Models\User;
        /** @var User|null $user */

    $user = $user ?? null;
    $title = $user ? 'Users edit': 'Users create';
    $url = $user ? route('users.update', ['user' => $user->id]) : route('users.store');
    $method = $user ? 'PUT' : 'POST';
@endphp
    <x-form.form
        title="{{$title}}"
        url="{{$url}}"
        method="{{$method}}"
    >
        <x-form.inputs.input type="text" name="name" label="Name" placeholder="Joe" required value="{{$user?->name}}"/>
        <x-form.inputs.input type="tel" name="phone" label="Phone" placeholder="+38" required value="{{$user?->phone}}"/>
        <x-form.inputs.input type="text" name="email" label="Email" placeholder="test@gmail.com" required
                             value="{{$user?->email}}"/>
        <x-form.inputs.input type="password" name="password" label="Password" placeholder="********"/>
        <x-form.inputs.select name="level" label="Level" :options="config('cms.users.levels')" required
                              value="{{$user?->level}}"/>
        <x-form.inputs.select name="status" label="Status" :options="config('cms.users.statuses')" required
                              value="{{$user?->status}}"/>
    </x-form.form>
