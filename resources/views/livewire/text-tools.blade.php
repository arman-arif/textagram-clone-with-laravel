<div>
    <h1>Text Tools</h1>


    <label>
        <textarea wire:model="string" type="text" cols="110" rows="10" class="form-control"
            placeholder="Paste text here..."></textarea>
    </label>
    <p>
        Total Character: {{ $stringCharCount }} |
        Total Words: {{ $stringWordCount }} |
        Total Line: {{ $stringLineCount }} |
        Total Paragraphs: {{ $stringParaCount }}
    </p>
    <div class="my-2">
        <div class="mb-2">
            <button wire:click="getLower" class="btn btn-primary">Lower Case</button>
            <button wire:click="getUpper" class="btn btn-primary">Upper Case</button>
            <button wire:click="titleCase" class="btn btn-primary">Title Case</button>
            <button wire:click="capitalize" class="btn btn-primary">Capitalize</button>
            <button wire:click="swapCase" class="btn btn-primary">Invert Case</button>
            <button wire:click="reverseText" class="btn btn-primary">Reverse Text</button>
            <button wire:click="removeAccents" class="btn btn-primary">Remove Letter Accents</button>
        </div>
        <div class="mb-2">
            <button wire:click="spacesToTabs" class="btn btn-primary">Spaces to Tabs</button>
            <button wire:click="tabsToSpaces" class="btn btn-primary">Tabs to Spaces</button>
            <button wire:click="spacesToNewlines" class="btn btn-primary">Spaces to New Lines</button>
            <button wire:click="newlinesToSpaces" class="btn btn-primary">New Lines to Spaces</button>
            <button wire:click="removeExtraWhiteSpace" class="btn btn-primary">Remove Extra White Space</button>
        </div>
        <div class="mb-2">
            <button wire:click="removeAllWhiteSpace" class="btn btn-primary">Remove All White Space</button>
            <button wire:click="extractEmails" class="btn btn-primary">Extract Emails</button>
            <button wire:click="extractURLs" class="btn btn-primary">Extract URLs</button>
            <button wire:click="extractNumbers" class="btn btn-primary">Extract Numbers</button>
        </div>
    </div>

</div>
