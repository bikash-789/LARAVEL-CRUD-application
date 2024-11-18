<x-splade-flash>
    <div class="alert rounded" v-if="flash.has('message')">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
             class="stroke-info shrink-0 w-6 h-6 mr-0">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
        <span v-if="flash.has('status')" v-text="flash.status" {{ $attributes->class('font-medium text-sm text-green-600') }} />
    </div>
</x-splade-flash>
