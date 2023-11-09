<div class="flex flex-col gap-4 md:flex-row">
    {{-- The whole world belongs to you. --}}
    <input wire:model.defer="quantity" placeholder="Quantity" class="px-4 py-2 rounded-md border border-gray-200">
    <button class="btn btn-black" wire:click="add">Ajouter au panier</button>
</div>
