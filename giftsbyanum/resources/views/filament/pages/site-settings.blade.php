{{-- <x-filament-panels::page>

</x-filament-panels::page>
 --}}

<div style="padding: 50px 0">
    <style>
        .site_cu_form{
            padding: 0 0 30px 0;
            border-bottom: solid 1px #DDD;
            overflow: hidden;
        }
        .site_cu_input{
            line-height: 1.5rem;
            font-size: .875rem;
            color: #111111;
            padding-bottom: .375rem;
            padding-top: .375rem;
            border: solid 1px #71717a;
            border-radius: .5rem;
        }
        .site_cu_button{
            font-weight: 600;
            font-size: .875rem;
            line-height: 1.25rem;
            padding-bottom: .5rem;
            padding-top: .5rem;
            padding-left: .75rem;
            padding-right: .75rem;
            background-color: #2563eb;
            color: #fff;
            border-radius: .5rem;
        }
        .site_cu_error{
            font-size: 10px;
            color: red;
            display: block;
        }
        .site_cu_label{
            display: block;
            font-size: .875rem;
            line-height: 1.8rem;
            color: #09090b;
            font-weight: 500;
        }
        .site_cu_float{
            float: left;
            padding-right: 10px;
        }
    </style>

    <form wire:submit.prevent="submit" class="site_cu_form">
        <div class="site_cu_float">
            <label class="site_cu_label">Above</label>
            <input wire:model="delivery_condition" type="text" class="site_cu_input" />
            @error('delivery_condition')
                <span class="site_cu_error">{{ $message }}</span>
            @enderror
        </div>
        <div class="site_cu_float">
            <label class="site_cu_label">Delivery Charge</label>
            <input wire:model="delivery_charge" type="text" class="site_cu_input" />
            @error('delivery_charge')
                <span class="site_cu_error">{{ $message }}</span>
            @enderror
        </div>
        <div class="site_cu_float">
            <label class="site_cu_label">&nbsp;</label>
            <button class="site_cu_button">Update</button>
        </div>
    </form>

</div>
