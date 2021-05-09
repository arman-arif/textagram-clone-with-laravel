<div>
    <h1>Text Tools</h1>


    <label>
        <textarea wire:model="str" type="text" cols="100" rows="10" class="form-control" placeholder="Paste text here..."></textarea>
    </label>
    <div class="">
        <button wire:click="getLower" class="btn btn-primary">Lower Case</button>
        <button wire:click="getUpper" class="btn btn-primary">Upper Case</button>
        <button wire:click="titleCase" class="btn btn-primary">Title Case</button>
        <button wire:click="capitalize" class="btn btn-primary">Capitalize</button>
        <button wire:click="swapCase" class="btn btn-primary">Invert Case</button>
        <button wire:click="reverseText" class="btn btn-primary">Reverse Text</button>
        <button wire:click="removeAccents" class="btn btn-primary">Remove Letter Accents</button>
    </div>



</div>


