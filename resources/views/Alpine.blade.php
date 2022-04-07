<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <h1 x-data="{ message: 'I ❤️ Alpine' }" x-text="message"></h1>

    <div x-data="{ count: 0 }">
        <button x-on:click="count++">Increment</button>
     
        <span x-text="count"></span>
    </div>

    <div x-data="{ open: false }">
        <button @click="open = ! open">Cursos</button>
     
        <div x-show="open">
            <ol>
                <li>
                   <button @click="Link1=! Link1"> Sistemas</button>
                </li>
                <li>
                    <button>Redes</button>
                </li>
                <li>
                    <button>Programacion</button>
                </li>
                <li>
                    <button>Bases de Datos</button>
                </li>
            </ol>
        </div>
    </div>
   
    <div x-data="{ open: false, toggle() { this.open = ! this.open } }">
        <button @click="toggle()">Toggle Content</button>
     
        <div x-show="open">
            Content...
        </div>
    </div>

    
<div x-data="{ open: false }">
    <!-- Button -->
    <button x-on:click="open = true" type="button" class="bg-white-100 border border-black px-4 py-2 focus:outline-none focus:ring-4 focus:ring-aqua-400">
        Open dialog
    </button>

    <!-- Modal -->
    <div
        x-show="open"
        x-on:keydown.escape.prevent.stop="open = false"
        role="dialog"
        aria-modal="true"
        x-id="['modal-title']"
        :aria-labelledby="$id('modal-title')"
        class="fixed inset-0 overflow-y-auto"
    >
        <!-- Overlay -->
        <div x-show="open" x-transition.opacity class="fixed inset-0 bg-black bg-opacity-50"></div>

        <!-- Panel -->
        <div
            x-show="open" x-transition
            x-on:click="open = false"
            class="relative min-h-screen flex items-center justify-center p-4"
        >
            <div
                x-on:click.stop
                x-trap.noscroll.inert="open"
                class="relative max-w-2xl w-full bg-white border border-black p-8 overflow-y-auto"
            >
                <!-- Title -->
                <h2 class="text-3xl font-medium" :id="$id('modal-title')">Confirm</h2>
                <!-- Content -->
                <p class="mt-2 text-gray-600">Are you sure you want to learn how to create an awesome modal?</p>
                <!-- Buttons -->
                <div class="mt-8 flex space-x-2">
                    <button type="button" x-on:click="open = false" class="bg-white border border-black px-4 py-2 focus:outline-none focus:ring-4 focus:ring-aqua-400">
                        Confirm
                    </button>
                    <button type="button" x-on:click="open = false" class="bg-white border border-black px-4 py-2 focus:outline-none focus:ring-4 focus:ring-aqua-400">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>