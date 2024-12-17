<x-layout>
    <x-slot:heading>
        LOG IN
    </x-slot:heading>
    <form method="POST" action="/login">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class=" grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 block">
                    <!-- //? username -->
                    <div class="sm:col-span-4">
                        <x-form-label for="email">User Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="email" id="email" placeholder="example@gmail.com" required :value="old('email')" />
                        </div>
                        <p class="text-red-500 italic">
                            <x-form-error name="email" />
                        </p>
                    </div>
                    <!-- //? password -->
                    <div class="sm:col-span-4">
                        <x-form-label for="password">Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="password" id="password" placeholder="pa123" required />
                        </div>
                        <p class="text-red-500 italic">
                            <x-form-error name="password" />
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-6 flex items-center justify-around gap-x-6">
            <x-form-button>LOG IN</x-form-button>
        </div>
    </form>
</x-layout>