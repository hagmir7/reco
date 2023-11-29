<form class="space-y-4" wire:submit.prevent="save">
    <x-input wire:model.defer="last_name" :label="__('Last Name')" :placeholder="__('Votre Nom')" required />

    <x-input wire:model.defer="first_name" :label="__('First Name')" :placeholder="__('Votre Prénom')" required />

    <x-input type="email" wire:model.defer="email" :label="__('E-mail')" :placeholder="__('Votre adresse e-mail')" required />

    <x-inputs.phone wire:model.defer="phone" :label="__('Phone Number')" mask="['## ####-####']" placeholder="0 5/6/7/8 xx xx xx xx" required />

    <x-textarea wire:model="message" :label="__('Message')" :placeholder="__('Your message')" required />

    <button type="submit" class="btn btn-sm bg-black text-white">Envoyer</button>

    @if($showSuccessMsg)
        <div class="bg-teal-50 border-t-2 border-teal-500 rounded-lg p-4 dark:bg-teal-800/30" role="alert">
            <div class="flex">
                <div class="flex-shrink-0">
                    <!-- Icon -->
                    <span class="inline-flex justify-center items-center w-8 h-8 rounded-full border-4 border-teal-100 bg-teal-200 text-teal-800 dark:border-teal-900 dark:bg-teal-800 dark:text-teal-400">
                        <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/><path d="m9 12 2 2 4-4"/></svg>
                      </span>
                    <!-- End Icon -->
                </div>
                <div class="ms-3">
                    <h3 class="text-gray-800 font-semibold dark:text-white">
                        {{ __("Message successfully sent.") }}
                    </h3>
                    <p class="text-sm text-gray-700 dark:text-gray-400">
                        {{ __("We will contact you as soon as possible.") }}
                    </p>
                </div>
            </div>
        </div>
    @endif
</form>
