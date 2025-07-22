<form wire:submit="submit">
    <div class="form">
        <input wire:model="email" class="default-input" type="email" placeholder="Email Address" required />
        <button class="default-btn darker">&nbsp;&nbsp;Subscribe&nbsp;&nbsp;</button>
    </div>
    <label class="label" for="checkbox">
        <input type="checkbox" wire:model="checkbox" id="checkbox" /> &nbsp;I want to subscribe to your mailing list.
    </label>
    @if(!empty($message))
    <div class="ft_suc" style="background-color: #b9e7b9;padding: 4px;margin-top: 10px;border-radius: 7px;color: green;font-size: 12px;text-align: center;">{{$message}}</div>
    @script
        <script>setTimeout(function(){$('.ft_suc').hide();}, 2000);</script>
    @endscript
    @endif
</form>
