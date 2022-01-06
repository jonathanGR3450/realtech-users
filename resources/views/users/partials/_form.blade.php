@csrf
<div class="form-group">
    <label for="name">Name</label>
    <input class="form-control bg-light shadow-sm border-0" type="text" name="name" id="name" value="{{ old('name', $user->present()->name()) }}">
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" class="form-control bg-light shadow-sm border-0" value="{{ old('email', $user->present()->email()) }}">
</div>
@if (!$user->id)
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control bg-light shadow-sm border-0">
    </div>
    <div class="form-group">
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control bg-light shadow-sm border-0">
    </div>
@endif
<button class="btn btn-primary btn-lg btn-block" type="submit">{{ $btnAction }}</button>
<input type="hidden" name="id" value="{{ $user->id ?? '0' }}">
<a class="btn btn-block btn-warning" href="{{ route('user.index') }}">Cancel</a>