<x-layout>
    <x-slot:heading>
        REGISTER
    </x-slot:heading>
    <form method="POST" action="/register">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class=" grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 block">
                    <!-- //? firstname -->
                    <div class="sm:col-span-4">
                        <x-form-label for="first_name">First Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="first_name" id="first_name" placeholder="name" required value="pass111" />
                        </div>
                        <p class="text-red-500 italic">
                            <x-form-error name="first_name" />
                        </p>
                    </div>
                    <!-- //? lastname -->
                    <div class="sm:col-span-4">
                        <x-form-label for="last_name">Last Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="last_name" id="last_name" placeholder="last name" required value="pass111" />
                        </div>
                        <p class="text-red-500 italic">
                            <x-form-error name="last_name" />
                        </p>
                    </div>
                    <!-- //? username -->
                    <div class="sm:col-span-4">
                        <x-form-label for="email">User Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="email" id="email" placeholder="example@gmail.com" required value="example@gmail.com" />
                        </div>
                        <p class="text-red-500 italic">
                            <x-form-error name="email" />
                        </p>
                    </div>
                    <!-- //? password -->
                    <div class="sm:col-span-4">
                        <x-form-label for="password">Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="password" id="password" placeholder="pa123" required value="pass111" />
                        </div>
                        <p class="text-red-500 italic">
                            <x-form-error name="password" />
                        </p>
                    </div>
                    <!-- //? confrm password -->
                    <div class="sm:col-span-4">
                        <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="password" name="password_confirmation" id="password_confirmation" placeholder="pa123" required value="pass111" />
                        </div>
                        <p class="text-red-500 italic">
                            <x-form-error name="password_confirmation" />
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <div class="mt-6 flex items-center justify-around gap-x-6">
        <x-form-button>REGISTER</x-form-button>
        </div>
    </form>
</x-layout>