<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <h3 style="color:Red"><b><strong>Welcome {{ Auth::user()->name }}</strong></b></h3>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <p style="text-align:center;color:green;">
                <b>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. <br/>
                Consectetur nobis expedita id quidem temporibus, hic quas <br/>
                velit corrupti eaque, officia esse reiciendis necessitatibus<br/>
                fugit praesentium! Eius corrupti officiis minus esse.
                </b>
            </p>
        </div>
    </div>
</x-app-layout>
