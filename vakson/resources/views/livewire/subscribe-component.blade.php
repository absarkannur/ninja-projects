<form wire:submit="submit">
    <div class="form">
        <input wire:model="email" class="default-input" type="email" placeholder="Email Address" required />
        <button class="default-btn darker">&nbsp;&nbsp;Subscribe&nbsp;&nbsp;</button>
    </div>
    <label class="label" for="">
        <input type="checkbox" wire:model="checkbox" /> &nbsp;I want to subscribe to your mailing list.
    </label>
    @if(!empty($message))
    <div class="ft_suc" style="background-color: #b9e7b9;padding: 6px;border-radius: 7px;color: #000;">{{$message}}</div>
    @script
        <script>setTimeout(function(){$('.ft_suc').hide();}, 2000);</script>
    @endscript
    @endif
</form>
