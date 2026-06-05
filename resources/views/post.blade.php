<x-layout>
    <x-slot:title>
        Single Post
    </x-slot:title>

    <article class="py-8">

        <h2 class="text-3xl font-bold">
            {{ $post['title'] }}
        </h2>

        <div class="text-base text-gray-500">
            {{ $post['author'] }}
        </div>

        <p class="my-4">
            {{ $post['body'] }}
        </p>

        <a href="/blog" class="text-blue-500 hover:underline">
            &laquo; Kembali ke Blog
        </a>

    </article>
</x-layout>