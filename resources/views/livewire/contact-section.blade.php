<section id="contact-section" class="relative py-10 bg-gray-600 overflow-hidden">

    {{-- The form section and the button section will be separated with a space of six --}}
    <div class="space-y-6">

        {{-- Personal Information Card --}}
        <div class="bg-gray-600 px-4 py-5 sm:p-6">

            {{-- Establish a grid system for the columns.
                There will be two grid systems used for the media queries of the primary contruct of this section. 
                For screensize with a minimum width (768px), I will have six columns. --}}
            <div class="md:grid md:grid-cols-6 md:gap-6">

                {{-- The Title section will span over one column. --}}
                <div class="md:col-start-2 md:col-span-2">
                    <h3 class="text-lg font-medium leading-6 text-white">Let's Link!</h3>
                    <p class="mt-1 text-sm text-gray-400">Confirm your information is correct below before sending!</p>
                    <br>

                    {{-- Here we are going to data bind with the form. --}}
                    <div class="border rounded shadow border-white p-4 bg-black text-white">
                        <p>{{ $firstName }} {{ $lastName }}</p>
                        <p>{{ $email }}</p>
                        <p>{{ $phone }}</p>
                        <p>{{ $country }}</p>
                        <p>{{ $message }}</p>
                    </div>
                    
                </div>

                {{-- The form section will span over two columns. --}}
                <div class="mt-5 md:mt-0 md:col-end-7 md:col-span-3">

                    {{-- Form Begins --}}
                    <form wire:submit.prevent="submit">

                        {{-- Field Section --}}
                        <div class="grid grid-cols-6 gap-6">

                            {{-- First Name --}}
                            <div class="col-span-6 md:col-span-4">
                                <label for="first-name" class="block text-sm font-medium text-white">First Name</label>
                                <input wire:model="firstName" type="text" name="first-name" id="first-name"
                                    autocomplete="given-name"
                                    class="mt-1 focus:ring-gray-500 focus:border-gray-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    placeholder="ex. David" required>
                            </div>

                            {{-- Last Name --}}
                            <div class="col-span-6 md:col-span-4">
                                <label for="last-name" class="block text-sm font-medium text-white">Last Name</label>
                                <input wire:model="lastName" type="text" name="last-name" id="last-name"
                                    autocomplete="family-name"
                                    class="mt-1 focus:ring-gray-500 focus:border-gray-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    placeholder="ex. Lopez" required>
                            </div>

                            {{-- Email --}}
                            <div class="col-span-6 md:col-span-4">
                                <label for="email" class="block text-sm font-medium text-white">Email</label>
                                <input wire:model="email" type="email" name="email" id="email" autocomplete="email"
                                    class="mt-1 focus:ring-gray-500 focus:border-gray-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    placeholder="name@domain.com" required>
                            </div>

                            {{-- Phone --}}
                            <div class="col-span-6 md:col-span-4">
                                <label for="phone" class="block text-sm font-medium text-white">Phone</label>
                                <input wire:model="phone" type="text" name="phone" id="phone" autocomplete="phone"
                                    class="mt-1 focus:ring-gray-500 focus:border-gray-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    placeholder="123-45-6789" required>
                            </div>

                            {{-- Country --}}
                            <div class="col-span-6 md:col-span-4">
                                <label for="country" class="block text-sm font-medium text-white">Country</label>
                                <select wire:model="country" id="country" name="country" autocomplete="country"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm">
                                    <option default>Select Country</option>
                                    <option>United States</option>
                                    <option>Canada</option>
                                    <option>Mexico</option>
                                </select>
                            </div>

                            {{-- message --}}
                            <div class="col-span-6 md:col-span-4">
                                <label for="message" class="block text-sm font-medium text-white">Message
                                </label>
                                <textarea wire:model="message" type="message" name="message" id="message"
                                    class="mt-1 focus:ring-gray-500 focus:border-gray-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    placeholder="Enter Details of your inquiry..." rows="5"></textarea>
                            </div>
                        </div>

                        {{-- Button Section --}}
                        <div class="flex justify-start text-black py-5">

                            {{-- I used the following button tags for the next two buttons. --}}
                            <button type="reset"
                                class="ml-3 bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-black hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">Reset</button>
                            <button type="submit"
                                class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-black hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">Save</button>
                        </div>
                    </form>

                </div>

            </div>

        </div>
        
    </div>

</section>
