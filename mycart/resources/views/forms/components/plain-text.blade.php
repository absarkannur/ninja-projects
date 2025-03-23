<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field">
    <div x-data="{ state: $wire.$entangle('{{ $getStatePath() }}') }">
        <em style="color: #666;font-size: 14px;">{{ $content }}</em>
    </div>
</x-dynamic-component>