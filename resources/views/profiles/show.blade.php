<x-app-layout>

    <header class="mb-4 relative">

        <img
            src="/images/profile-banner.jpg"
            alt="banner"
            class="rounded-3xl mb-4"
            style="max-height: 280px; width: 100%; object-fit: cover">

        <img
            src="{{ $user->avatar}}"
            class="rounded-full shadow"
            style="width:150px; height:150px; object-fit:cover; position:absolute; left: calc(50% - 75px); bottom:10px" alt="">

        <div class="flex justify-between items-center">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm text-gray-500">Joined: {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div>
                <a href="" class="rounded-full border py-2 px-5 text-xs">{{__('Edit Profile')}}</a>
                <a href="" class="bg-blue-500 rounded-full shadow py-2 px-5 text-white text-xs font-bold">{{__('Follow Me')}}</a>
            </div>
        </div>

    </header>

    <p class="text-sm mb-8">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad quidem doloremque cupiditate exercitationem,
        perspiciatis, ducimus eaque iste accusamus dignissimos quo, sit magni totam repellat aliquid? Explicabo
        eaque commodi qui, quisquam similique, aperiam omnis laborum, ipsam dolore impedit veniam atque illum
        nemo quod! Quos illo omnis molestias adipisci atque. Nihil similique debitis aliquam, impedit omnis sit.
        Animi nobis minima a itaque. Natus repellendus, minus dolorum corporis ducimus maxime aspernatur,
        laudantium odit debitis, blanditiis numquam beatae nesciunt sunt aperiam earum quis possimus tempora
        expedita culpa! Velit ipsam sit vero. Impedit, quam nisi? Eius ab doloremque eos nesciunt quam cum.
    </p>

    <x-timeline :tweets="$user->tweets" />

</x-app-layout>
