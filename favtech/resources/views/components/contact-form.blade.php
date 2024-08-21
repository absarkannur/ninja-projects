<div>
    <h3>Fill the form, and our sales team will get in touch with you shortly.</h3>
    <form wire:submit="submit" class="home_screen_form">
        <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input wire:model="name" name="name" type="name" class="form-control" id="name">
            @error('name')
            <span style="display: block;position: relative;color: red;margin-top: -15px;font-size: 11px;">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input wire:model="email" name="email" type="email" class="form-control" id="email">
            @error('phone')
            <span style="display: block;position: relative;color: red;margin-top: -15px;font-size: 11px;">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input wire:model="phone" name="phone" type="phone" class="form-control" id="phone">
            @error('email')
            <span style="display: block;position: relative;color: red;margin-top: -15px;font-size: 11px;">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea wire:model="message" name="message" class="form-control" id="message" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </div>
    </form>

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

</div>