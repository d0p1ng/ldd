<div>
    @foreach ($componentNames as $componentName)
        <livewire:is :component="$componentName" />
    @endforeach
</div>
