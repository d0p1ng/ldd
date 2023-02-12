<div>
    <div class="p-2 m-4 border border-1 rounded border-teal-100">
        <input 
            wire:model.lazy="propValue" 
            type="text" 
            class="
                p-2 
                m-4 
                border 
                rounded 
                {{ $validationClass === 'error' ? 'border-1 border-red-500' : 'border-teal-500' }}
            "
        >
        <div class="h-4 w-full leading-4">{{$elementaryValidationMessage}}</div>
    </div>
    <button wire:click="save">Save</button>
</div>
