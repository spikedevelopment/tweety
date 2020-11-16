<div class="border border-blue-400 rounded-lg px-4 py-6">

    <form method="POST" action="/tweets">

        @csrf

        <textarea
            name="body"
            id="body"
            class="w-full"
            placeholder="{{__('Whats up doc')}}"></textarea>

        <hr class="my-4">

        @error('body')
        <p class="text-red-500 my-3 text-sm">{{ $message }}</p>
        @enderror

        <footer class="flex justify-between">

            <img src="{{ auth()->user()->avatar }}"
                alt="avatar"
                class="rounded-full mr-4"
                style="width: 50px; height:50px">

            <button
                type="submit"
                class="bg-blue-500 rounded-full shadow px-8 font-bold text-sm text-white hover:bg-white hover:text-gray-600">
                {{ __('Tweet-a-roo')}}
            </button>

        </footer>

    </form>



</div>
