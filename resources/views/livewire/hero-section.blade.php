<section id="hero">
    <div class="relative bg-black overflow-hidden">
      <div class="max-w-7xl mx-auto">
        <div class="relative z-10 pb-8 bg-black sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-25 xl:pb-28">
  
          <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-black transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
            <polygon points="50,0 100,0 50,100 0,100" />
          </svg>
  
          <div x-data="{ open: false }">
            <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
              <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
                <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                  <div class="flex items-center justify-between w-full md:w-auto">

                    {{-- Small Icon towards top left. --}}
                    <a href="#">
                      <span class="sr-only">Workflow</span>
  
                      <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 70.55 116.65">
                        <defs>
                          <linearGradient id="Steel_Cylinder" x1="69" y1="97.24" x2="13.36" y2="0.86" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#b0b0b0" />
                            <stop offset="0.01" stop-color="#a8a8a8" />
                            <stop offset="0.06" stop-color="#7f7f7f" />
                            <stop offset="0.1" stop-color="#5f5f5f" />
                            <stop offset="0.15" stop-color="#484848" />
                            <stop offset="0.19" stop-color="#3b3b3b" />
                            <stop offset="0.23" stop-color="#363636" />
                            <stop offset="0.3" stop-color="#787878" />
                            <stop offset="0.32" stop-color="#6b6b6b" />
                            <stop offset="0.36" stop-color="#4f4f4f" />
                            <stop offset="0.46" stop-color="#2b2b2b" />
                            <stop offset="0.57" stop-color="#858585" />
                            <stop offset="0.69" stop-color="#f0f0f0" />
                            <stop offset="0.72" stop-color="#ebebeb" />
                            <stop offset="0.75" stop-color="#dcdcdc" />
                            <stop offset="0.78" stop-color="#c4c4c4" />
                            <stop offset="0.8" stop-color="#b3b3b3" />
                            <stop offset="0.91" stop-color="#5c5c5c" />
                            <stop offset="1" stop-color="#b5b5b5" />
                          </linearGradient>
                          <linearGradient id="Steel_Cylinder-2" x1="69.43" y1="101.37" x2="40.86" y2="51.89" xlink:href="#Steel_Cylinder" />
                          <linearGradient id="Steel_Cylinder-3" x1="35.37" y1="112.28" x2="-5.2" y2="41.99" xlink:href="#Steel_Cylinder" />
                          <linearGradient id="Steel_Cylinder-4" x1="46.75" y1="44.04" x2="22.13" y2="1.39" xlink:href="#Steel_Cylinder" />
                        </defs>
                        <g id="Layer_2" data-name="Layer 2">
                          <g id="Mattmen">
                            <path d="M48.06,81.82c1.11-2.13,2.2-4.28,3.32-6.4.47-.89,1-1.75,1.49-2.57s1.26-1.09,1.94-.68a6.76,6.76,0,0,1,.92.72c.35.31.69.65,1.08,1a2.07,2.07,0,0,0,0-.34,22.87,22.87,0,0,1,.75-7.88c.37-1.16.74-2.32,1.15-3.47.25-.71.54-1.4.84-2.08.81-1.87,1.68-3.7,2.43-5.61s1.48-4,2.1-6.08c.57-1.9,1.07-3.85,1.46-5.83a61.8,61.8,0,0,0,.91-6.39,63.07,63.07,0,0,0-.7-17.89,37.56,37.56,0,0,0-2.06-7C63.15,10,62.61,8.6,61.94,7.37A23.86,23.86,0,0,0,58.4,2.18C57.68,1.44,57,.73,56.23,0l-.1.12c.47,1.39,1,2.75,1.39,4.18A55,55,0,0,1,59,10.92a41.27,41.27,0,0,1-.25,13.89,37,37,0,0,1-1.44,5.62c-.83,2.22-1.65,4.44-2.54,6.62-.47,1.14-1,2.23-1.59,3.3-.81,1.52-1.67,3-2.52,4.49-.58,1-1.16,2.06-1.77,3.06-.92,1.52-1.87,3-2.81,4.53-.55.87-1.09,1.74-1.63,2.61-.86,1.36-1.74,2.7-2.58,4.09s-1.65,2.75-2.43,4.17c-1,1.75-1.92,3.54-2.87,5.32-.38.71-.74,1.44-1.15,2.26-.68-1.36-1.24-2.59-1.87-3.77-.91-1.68-1.85-3.34-2.79-5-.52-.92-1.06-1.82-1.61-2.71-.83-1.34-1.69-2.65-2.52-4s-1.72-2.8-2.58-4.19C23,49.49,21.84,47.78,20.79,46c-.86-1.45-1.69-2.94-2.47-4.47-1.1-2.13-2.23-4.25-3.18-6.5a61.15,61.15,0,0,1-2.25-6.44,41.56,41.56,0,0,1-1.43-7.75,42.37,42.37,0,0,1,.92-13c.5-2.29,1.19-4.46,1.87-6.65.12-.37.3-.7.45-1a.68.68,0,0,0-.49.21A25.38,25.38,0,0,0,10.27,5a37.51,37.51,0,0,0-3.89,8.2A39,39,0,0,0,5,18.44a50.17,50.17,0,0,0-1,7.89A65,65,0,0,0,4.5,37.84c.18,1.2.25,2.44.51,3.61.52,2.33,1.12,4.63,1.72,6.92.33,1.23.73,2.43,1.12,3.64.22.68.46,1.35.73,2,.94,2.25,1.89,4.48,2.83,6.72.28.65.5,1.34.8,2a20.49,20.49,0,0,1,1.63,5.79A40.13,40.13,0,0,1,14.06,73c0,.23,0,.47,0,.82.33-.33.57-.58.82-.81a10.69,10.69,0,0,1,.81-.7,1.29,1.29,0,0,1,2.06.31c.56.82,1.06,1.7,1.55,2.59.58,1.06,1.11,2.17,1.68,3.24.82,1.52,1.66,3,2.47,4.55.62,1.18,1.2,2.4,1.81,3.6,1.09,2.19,2.22,4.36,3.28,6.58.76,1.58,1.49,3.18,2.12,4.85.8,2.11,1.56,4.26,2.19,6.47.57,2,1,4.08,1.4,6.14.36,1.75.64,3.52,1,5.27,0,.21.09.41.16.72.13-.44.25-.74.31-1.06.25-1.24.46-2.5.72-3.74.58-2.73,1.1-5.5,1.81-8.17a59.77,59.77,0,0,1,2-5.69c.57-1.49,1.18-2.95,1.85-4.36,1-2.19,2.12-4.34,3.22-6.48C46.19,85.36,47.13,83.6,48.06,81.82Z" fill="url(#Steel_Cylinder)" />
                            <path d="M70,47.78c-.4-2.36-1-4.68-1.54-7-.32-1.31-.79-2.55-1.19-3.82a1.12,1.12,0,0,0-.13-.24l-.12,0a10.5,10.5,0,0,1,.25,1.54c0,1.49,0,3-.05,4.46-.14,1.76-.34,3.53-.64,5.26s-.74,3.6-1.24,5.34c-.61,2.12-1.31,4.19-2,6.25-.51,1.48-1.1,2.92-1.67,4.37-.23.56-.47,1.12-.72,1.66-.77,1.61-1.59,3.16-2.29,4.82a10.37,10.37,0,0,0-.7,5.62c.13.92.35,1.82.53,2.73a5.05,5.05,0,0,0-1-.53A2.8,2.8,0,0,0,55,79a16.83,16.83,0,0,0-4,4.8,40.68,40.68,0,0,0-2.59,4.79c-1,2.31-2,4.73-2.84,7.14a34,34,0,0,0-1.24,4.17c-.5,2.21-.94,4.45-1.3,6.7a32.33,32.33,0,0,0-.28,3.94,27.31,27.31,0,0,0,.44,6c.2-.52.34-.87.46-1.22.43-1.19.86-2.38,1.27-3.58A51.74,51.74,0,0,1,48,105a28.24,28.24,0,0,1,1.48-2.52q1.25-1.92,2.55-3.77c.74-1.06,1.51-2.09,2.3-3.09,1-1.3,2.06-2.55,3.09-3.84s2.13-2.72,3.17-4.11,2.1-2.75,3.07-4.22a38.8,38.8,0,0,0,2.4-4.18A48.56,48.56,0,0,0,68.38,74a32.9,32.9,0,0,0,1.29-5,49.9,49.9,0,0,0,.65-5.34c.14-2,.2-4,.22-5.94A55.49,55.49,0,0,0,70,47.78Z" fill="url(#Steel_Cylinder-2)" />
                            <path d="M26.9,100.48c-.41-1.51-.82-3-1.33-4.5-.62-1.8-1.27-3.6-2-5.32-.85-1.9-1.8-3.74-2.78-5.55a19.41,19.41,0,0,0-4.35-5.65c-1.24-1.06-2.55-1.72-4-.51.18-.94.39-1.82.51-2.73A10.67,10.67,0,0,0,12,70c-.58-1.19-1.19-2.37-1.74-3.58s-1.17-2.7-1.71-4.08c-.8-2-1.6-4-2.31-6.1a41.06,41.06,0,0,1-1.35-4.71C4.43,49.28,4,47,3.7,44.71a41.07,41.07,0,0,1-.11-5.09c0-.89.12-1.78.2-2.82a10.75,10.75,0,0,0-.59,1.3c-.56,1.74-1.2,3.47-1.62,5.27A47.74,47.74,0,0,0,.17,52.1a70.35,70.35,0,0,0,.09,11c.22,2,.35,4,.65,6a23.3,23.3,0,0,0,1,4.23c.73,2,1.6,4,2.48,5.92a22,22,0,0,0,1.69,3c1,1.53,2.08,3,3.16,4.48s2.1,2.7,3.17,4,2.28,2.78,3.41,4.19c.8,1,1.6,2,2.36,3.08,1.13,1.56,2.24,3.14,3.31,4.75a29,29,0,0,1,1.58,2.71c.81,1.52,1.65,3,2.35,4.64s1.19,3.22,1.78,4.83c.2.54.4,1.07.63,1.71a13.21,13.21,0,0,0,.35-1.55,32.14,32.14,0,0,0,.08-6.58A49.88,49.88,0,0,0,26.9,100.48Z" fill="url(#Steel_Cylinder-3)" />
                            <path d="M22.64,38.2c-1-.06-1.46-.93-1.21-2q.38-2.88.76-5.74c.73-5.35,1.38-10.59,2.14-15.94.59,1.18,1,2.23,1.51,3.44.55,3.32-.11,6.88,0,10.28-.24,4.29.1,8.69-.75,12.9a2.34,2.34,0,0,1-1.64,2c-.12,0-.22.2-.33.3,1.57.44,3.31.06,4.93.17.14,0,.28-.14.43-.21-.89-.87-1.7-.85-1.91-2.49a30.38,30.38,0,0,1-.29-3.8c.15-5.69.18-11.43.46-17.09,1.86,4.36,3.79,8.71,5.56,13.12.73,3.37,1.32,6.79,2,10.18.66-2.34.82-4.86,1.57-7.14,2.1-5.1,4.18-10.23,6.43-15.25l.15,0c-.09,6.37.49,12.75.21,19.11-.11,1.45-.59,2.64-1.94,3.06-.11,0-.17.24-.32.45h7.22s-.09-.39-.31-.42C45.09,43,45.34,39.88,45.1,38c-.23-7.26-.3-14.53-.52-21.8a3.09,3.09,0,0,1,.58-1.86C46,20,46.7,25.62,47.48,31.24c.24,1.83.49,3.65.71,5.48.17,1-.52,1.32-1.23,1.52,0,0,0,.15,0,.15h6.33l0-.14c-1.45-.19-1.71-.93-2-2.46-.55-3.85-1-7.71-1.56-11.57s-1.13-8-1.56-12c-.23-1.75.88-2.54,2.23-2.78V9.3c-5.16.2-3.89-1.29-5.85,3.29l-.12,0c0-2.93-.08-5.85,0-8.78A2.9,2.9,0,0,1,46.37.91c.11,0,.18-.23.33-.44H42.07C40,11.3,37.91,22.11,35.8,33.06c-.72-1.84-1.48-3.31-2-5.1C32,18.78,30.28,9.68,28.54.45c-1.6,0-3.18,0-4.77,0-.08,0-.15.15-.23.23.09.07.17.21.26.21,1.51,0,2.46,1.84,2.7,3.33a57.27,57.27,0,0,1-.2,6.15C26,9.77,26,9.17,25.25,9.25c-1.59.07-3.18-.05-4.77.06.07.14.13.18.2.19,1.49.09,2.28,1.21,2.82,2.66-.15,2.9-.78,5.83-1.11,8.73-.66,4.65-1.29,9.3-1.92,14v0c-.11.8-.27,1.59-.45,2.36s-1,.91-1.63,1v.21h4.23ZM42,4.36h.11c.16,4.06.1,8.13.31,12.19a4.51,4.51,0,0,1-.4,2.18c-1.69,3.9-3.28,7.87-5,11.77l-.1,0ZM27.07,5.83l.12,0,2.24,11.74-.09,0C26.74,11.52,26.78,12.75,27.07,5.83Z" fill="url(#Steel_Cylinder-4)" />
                          </g>
                        </g>
                      </svg>
  
                    </a>

                    {{-- Mobile NavBar --}}
                    <div class="-mr-2 flex items-center md:hidden">
                      <button @click="open = !open" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-gray-500" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!-- Heroicon name: outline/menu -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                      </button>
                    </div>
                  </div>
                </div>

                {{-- Nav link Section --}}
                <div class="hidden md:block md:ml-10 md:pr-4 md:space-x-8">
                  <a href="#about" class="font-medium text-gray-500 hover:text-gray-900">About</a>
  
                  <a href="#blog" class="hidden font-medium text-gray-500 hover:text-gray-900">Blog</a>
  
                  <a href="#projects" class="font-medium text-gray-500 hover:text-gray-900">Projects</a>
  
                  <a href="#contact" class="font-medium text-gray-500 hover:text-gray-900">Contact</a>
                </div>
              </nav>
            </div>
  
            <div class="absolute z-10 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
              <div x-show="open" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                <div class="px-5 pt-4 flex items-center justify-between">
                  <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 70.55 116.65">
                      <defs>
                        <linearGradient id="Steel_Cylinder" x1="69" y1="97.24" x2="13.36" y2="0.86" gradientUnits="userSpaceOnUse">
                          <stop offset="0" stop-color="#b0b0b0" />
                          <stop offset="0.01" stop-color="#a8a8a8" />
                          <stop offset="0.06" stop-color="#7f7f7f" />
                          <stop offset="0.1" stop-color="#5f5f5f" />
                          <stop offset="0.15" stop-color="#484848" />
                          <stop offset="0.19" stop-color="#3b3b3b" />
                          <stop offset="0.23" stop-color="#363636" />
                          <stop offset="0.3" stop-color="#787878" />
                          <stop offset="0.32" stop-color="#6b6b6b" />
                          <stop offset="0.36" stop-color="#4f4f4f" />
                          <stop offset="0.46" stop-color="#2b2b2b" />
                          <stop offset="0.57" stop-color="#858585" />
                          <stop offset="0.69" stop-color="#f0f0f0" />
                          <stop offset="0.72" stop-color="#ebebeb" />
                          <stop offset="0.75" stop-color="#dcdcdc" />
                          <stop offset="0.78" stop-color="#c4c4c4" />
                          <stop offset="0.8" stop-color="#b3b3b3" />
                          <stop offset="0.91" stop-color="#5c5c5c" />
                          <stop offset="1" stop-color="#b5b5b5" />
                        </linearGradient>
                        <linearGradient id="Steel_Cylinder-2" x1="69.43" y1="101.37" x2="40.86" y2="51.89" xlink:href="#Steel_Cylinder" />
                        <linearGradient id="Steel_Cylinder-3" x1="35.37" y1="112.28" x2="-5.2" y2="41.99" xlink:href="#Steel_Cylinder" />
                        <linearGradient id="Steel_Cylinder-4" x1="46.75" y1="44.04" x2="22.13" y2="1.39" xlink:href="#Steel_Cylinder" />
                      </defs>
                      <g id="Layer_2" data-name="Layer 2">
                        <g id="Mattmen">
                          <path d="M48.06,81.82c1.11-2.13,2.2-4.28,3.32-6.4.47-.89,1-1.75,1.49-2.57s1.26-1.09,1.94-.68a6.76,6.76,0,0,1,.92.72c.35.31.69.65,1.08,1a2.07,2.07,0,0,0,0-.34,22.87,22.87,0,0,1,.75-7.88c.37-1.16.74-2.32,1.15-3.47.25-.71.54-1.4.84-2.08.81-1.87,1.68-3.7,2.43-5.61s1.48-4,2.1-6.08c.57-1.9,1.07-3.85,1.46-5.83a61.8,61.8,0,0,0,.91-6.39,63.07,63.07,0,0,0-.7-17.89,37.56,37.56,0,0,0-2.06-7C63.15,10,62.61,8.6,61.94,7.37A23.86,23.86,0,0,0,58.4,2.18C57.68,1.44,57,.73,56.23,0l-.1.12c.47,1.39,1,2.75,1.39,4.18A55,55,0,0,1,59,10.92a41.27,41.27,0,0,1-.25,13.89,37,37,0,0,1-1.44,5.62c-.83,2.22-1.65,4.44-2.54,6.62-.47,1.14-1,2.23-1.59,3.3-.81,1.52-1.67,3-2.52,4.49-.58,1-1.16,2.06-1.77,3.06-.92,1.52-1.87,3-2.81,4.53-.55.87-1.09,1.74-1.63,2.61-.86,1.36-1.74,2.7-2.58,4.09s-1.65,2.75-2.43,4.17c-1,1.75-1.92,3.54-2.87,5.32-.38.71-.74,1.44-1.15,2.26-.68-1.36-1.24-2.59-1.87-3.77-.91-1.68-1.85-3.34-2.79-5-.52-.92-1.06-1.82-1.61-2.71-.83-1.34-1.69-2.65-2.52-4s-1.72-2.8-2.58-4.19C23,49.49,21.84,47.78,20.79,46c-.86-1.45-1.69-2.94-2.47-4.47-1.1-2.13-2.23-4.25-3.18-6.5a61.15,61.15,0,0,1-2.25-6.44,41.56,41.56,0,0,1-1.43-7.75,42.37,42.37,0,0,1,.92-13c.5-2.29,1.19-4.46,1.87-6.65.12-.37.3-.7.45-1a.68.68,0,0,0-.49.21A25.38,25.38,0,0,0,10.27,5a37.51,37.51,0,0,0-3.89,8.2A39,39,0,0,0,5,18.44a50.17,50.17,0,0,0-1,7.89A65,65,0,0,0,4.5,37.84c.18,1.2.25,2.44.51,3.61.52,2.33,1.12,4.63,1.72,6.92.33,1.23.73,2.43,1.12,3.64.22.68.46,1.35.73,2,.94,2.25,1.89,4.48,2.83,6.72.28.65.5,1.34.8,2a20.49,20.49,0,0,1,1.63,5.79A40.13,40.13,0,0,1,14.06,73c0,.23,0,.47,0,.82.33-.33.57-.58.82-.81a10.69,10.69,0,0,1,.81-.7,1.29,1.29,0,0,1,2.06.31c.56.82,1.06,1.7,1.55,2.59.58,1.06,1.11,2.17,1.68,3.24.82,1.52,1.66,3,2.47,4.55.62,1.18,1.2,2.4,1.81,3.6,1.09,2.19,2.22,4.36,3.28,6.58.76,1.58,1.49,3.18,2.12,4.85.8,2.11,1.56,4.26,2.19,6.47.57,2,1,4.08,1.4,6.14.36,1.75.64,3.52,1,5.27,0,.21.09.41.16.72.13-.44.25-.74.31-1.06.25-1.24.46-2.5.72-3.74.58-2.73,1.1-5.5,1.81-8.17a59.77,59.77,0,0,1,2-5.69c.57-1.49,1.18-2.95,1.85-4.36,1-2.19,2.12-4.34,3.22-6.48C46.19,85.36,47.13,83.6,48.06,81.82Z" fill="url(#Steel_Cylinder)" />
                          <path d="M70,47.78c-.4-2.36-1-4.68-1.54-7-.32-1.31-.79-2.55-1.19-3.82a1.12,1.12,0,0,0-.13-.24l-.12,0a10.5,10.5,0,0,1,.25,1.54c0,1.49,0,3-.05,4.46-.14,1.76-.34,3.53-.64,5.26s-.74,3.6-1.24,5.34c-.61,2.12-1.31,4.19-2,6.25-.51,1.48-1.1,2.92-1.67,4.37-.23.56-.47,1.12-.72,1.66-.77,1.61-1.59,3.16-2.29,4.82a10.37,10.37,0,0,0-.7,5.62c.13.92.35,1.82.53,2.73a5.05,5.05,0,0,0-1-.53A2.8,2.8,0,0,0,55,79a16.83,16.83,0,0,0-4,4.8,40.68,40.68,0,0,0-2.59,4.79c-1,2.31-2,4.73-2.84,7.14a34,34,0,0,0-1.24,4.17c-.5,2.21-.94,4.45-1.3,6.7a32.33,32.33,0,0,0-.28,3.94,27.31,27.31,0,0,0,.44,6c.2-.52.34-.87.46-1.22.43-1.19.86-2.38,1.27-3.58A51.74,51.74,0,0,1,48,105a28.24,28.24,0,0,1,1.48-2.52q1.25-1.92,2.55-3.77c.74-1.06,1.51-2.09,2.3-3.09,1-1.3,2.06-2.55,3.09-3.84s2.13-2.72,3.17-4.11,2.1-2.75,3.07-4.22a38.8,38.8,0,0,0,2.4-4.18A48.56,48.56,0,0,0,68.38,74a32.9,32.9,0,0,0,1.29-5,49.9,49.9,0,0,0,.65-5.34c.14-2,.2-4,.22-5.94A55.49,55.49,0,0,0,70,47.78Z" fill="url(#Steel_Cylinder-2)" />
                          <path d="M26.9,100.48c-.41-1.51-.82-3-1.33-4.5-.62-1.8-1.27-3.6-2-5.32-.85-1.9-1.8-3.74-2.78-5.55a19.41,19.41,0,0,0-4.35-5.65c-1.24-1.06-2.55-1.72-4-.51.18-.94.39-1.82.51-2.73A10.67,10.67,0,0,0,12,70c-.58-1.19-1.19-2.37-1.74-3.58s-1.17-2.7-1.71-4.08c-.8-2-1.6-4-2.31-6.1a41.06,41.06,0,0,1-1.35-4.71C4.43,49.28,4,47,3.7,44.71a41.07,41.07,0,0,1-.11-5.09c0-.89.12-1.78.2-2.82a10.75,10.75,0,0,0-.59,1.3c-.56,1.74-1.2,3.47-1.62,5.27A47.74,47.74,0,0,0,.17,52.1a70.35,70.35,0,0,0,.09,11c.22,2,.35,4,.65,6a23.3,23.3,0,0,0,1,4.23c.73,2,1.6,4,2.48,5.92a22,22,0,0,0,1.69,3c1,1.53,2.08,3,3.16,4.48s2.1,2.7,3.17,4,2.28,2.78,3.41,4.19c.8,1,1.6,2,2.36,3.08,1.13,1.56,2.24,3.14,3.31,4.75a29,29,0,0,1,1.58,2.71c.81,1.52,1.65,3,2.35,4.64s1.19,3.22,1.78,4.83c.2.54.4,1.07.63,1.71a13.21,13.21,0,0,0,.35-1.55,32.14,32.14,0,0,0,.08-6.58A49.88,49.88,0,0,0,26.9,100.48Z" fill="url(#Steel_Cylinder-3)" />
                          <path d="M22.64,38.2c-1-.06-1.46-.93-1.21-2q.38-2.88.76-5.74c.73-5.35,1.38-10.59,2.14-15.94.59,1.18,1,2.23,1.51,3.44.55,3.32-.11,6.88,0,10.28-.24,4.29.1,8.69-.75,12.9a2.34,2.34,0,0,1-1.64,2c-.12,0-.22.2-.33.3,1.57.44,3.31.06,4.93.17.14,0,.28-.14.43-.21-.89-.87-1.7-.85-1.91-2.49a30.38,30.38,0,0,1-.29-3.8c.15-5.69.18-11.43.46-17.09,1.86,4.36,3.79,8.71,5.56,13.12.73,3.37,1.32,6.79,2,10.18.66-2.34.82-4.86,1.57-7.14,2.1-5.1,4.18-10.23,6.43-15.25l.15,0c-.09,6.37.49,12.75.21,19.11-.11,1.45-.59,2.64-1.94,3.06-.11,0-.17.24-.32.45h7.22s-.09-.39-.31-.42C45.09,43,45.34,39.88,45.1,38c-.23-7.26-.3-14.53-.52-21.8a3.09,3.09,0,0,1,.58-1.86C46,20,46.7,25.62,47.48,31.24c.24,1.83.49,3.65.71,5.48.17,1-.52,1.32-1.23,1.52,0,0,0,.15,0,.15h6.33l0-.14c-1.45-.19-1.71-.93-2-2.46-.55-3.85-1-7.71-1.56-11.57s-1.13-8-1.56-12c-.23-1.75.88-2.54,2.23-2.78V9.3c-5.16.2-3.89-1.29-5.85,3.29l-.12,0c0-2.93-.08-5.85,0-8.78A2.9,2.9,0,0,1,46.37.91c.11,0,.18-.23.33-.44H42.07C40,11.3,37.91,22.11,35.8,33.06c-.72-1.84-1.48-3.31-2-5.1C32,18.78,30.28,9.68,28.54.45c-1.6,0-3.18,0-4.77,0-.08,0-.15.15-.23.23.09.07.17.21.26.21,1.51,0,2.46,1.84,2.7,3.33a57.27,57.27,0,0,1-.2,6.15C26,9.77,26,9.17,25.25,9.25c-1.59.07-3.18-.05-4.77.06.07.14.13.18.2.19,1.49.09,2.28,1.21,2.82,2.66-.15,2.9-.78,5.83-1.11,8.73-.66,4.65-1.29,9.3-1.92,14v0c-.11.8-.27,1.59-.45,2.36s-1,.91-1.63,1v.21h4.23ZM42,4.36h.11c.16,4.06.1,8.13.31,12.19a4.51,4.51,0,0,1-.4,2.18c-1.69,3.9-3.28,7.87-5,11.77l-.1,0ZM27.07,5.83l.12,0,2.24,11.74-.09,0C26.74,11.52,26.78,12.75,27.07,5.83Z" fill="url(#Steel_Cylinder-4)" />
                        </g>
                      </g>
                    </svg>
                  </div>
                  <div class="-mr-2">
                    <button @click="open = ! open" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-gray-500">
                      <span class="sr-only">Close main menu</span>
                      <!-- Heroicon name: outline/x -->
                      <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                      </svg>
                    </button>
                  </div>
                </div>
                <div class="px-2 pt-2 pb-3 space-y-1 text-center">
                  <a href="#hero" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">About</a>
  
                  <a href="#blog" class="hidden block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Blog</a>
  
                  <a href="#projects" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Projects</a>
  
                  <a href="#contacts" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Contact</a>
                </div>
                <a href="#" class="w-full px-5 py-3 text-center font-medium text-gray-600 bg-gray-50 hover:bg-gray-100 hidden">
                  Log in
                </a>
              </div>
            </div>
  
          </div>
  
          {{-- Main Hero Area --}}
          <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">

            {{-- Title --}}
            <div class="sm:text-center lg:text-left">
              <h1 class="text-4xl tracking-tight font-extrabold text-white sm:text-5xl md:text-6xl">
                <span class="block xl:inline">David Lopez</span>
                <span class="block text-gray-600 xl:inline">dba Mattmen, Inc.</span>
              </h1>
              <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                Full Stack Web/App Developer with experience as a Graphic Designer, Project Manager, and IT Managed Service Consultant.
              </p>

              {{-- Buttons Section --}}
              <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">

                {{-- Blog Button --}}
                <div class="hidden rounded-md shadow">
                  <a href="#blog" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 md:py-4 md:text-lg md:px-10">
                    Blog
                  </a>
                </div>

                {{-- Projects Button --}}
                <div class="mt-3 sm:mt-0 sm:ml-3">
                  <a href="#projects" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-gray-700 bg-gray-100 hover:bg-gray-200 md:py-4 md:text-lg md:px-10">
                    Projects
                  </a>
                </div>
              </div>
            </div>

          </main>
        </div>
      </div>
      <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 py-16">
        <img class="animate-pulse h-56 w-full sm:h-72 md:h-96" src="{{ asset('/img/SVG/mmlogo.svg') }}" alt="Mattmen Logo">
      </div>
    </div>
  </section>