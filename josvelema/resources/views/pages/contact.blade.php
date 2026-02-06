@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <div class="mx-auto max-w-3xl space-y-8">

        <header class="space-y-3">
            <h1 class="text-2xl font-semibold">Contact</h1>
            <p class="text-zinc-600 dark:text-zinc-400">
                Feel free to reach out for freelance work, collaboration, or just tech talk.
            </p>
        </header>

        <!-- Socials -->
        <section class="grid gap-3 sm:grid-cols-2">
            <a href="https://www.linkedin.com/in/JosVelema"
               target="_blank"
               class="rounded-xl border border-zinc-200 p-4 hover:bg-zinc-50 dark:border-zinc-800 dark:hover:bg-zinc-900">
                <div class="font-medium">LinkedIn</div>
                <div class="text-sm text-zinc-600 dark:text-zinc-400">/in/JosVelema</div>
            </a>

            <a href="https://bsky.app/profile/codetter.bsky.social"
               target="_blank"
               class="rounded-xl border border-zinc-200 p-4 hover:bg-zinc-50 dark:border-zinc-800 dark:hover:bg-zinc-900">
                <div class="font-medium">Bluesky</div>
                <div class="text-sm text-zinc-600 dark:text-zinc-400">@codetter.bsky.social</div>
            </a>
        </section>

        <!-- Success message -->
        @if(session('success'))
            <div class="rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-green-800 dark:border-green-900 dark:bg-green-950 dark:text-green-200">
                {{ session('success') }}
            </div>
        @endif

        <!-- Contact form -->
        <form method="POST" action="{{ route('contact.submit') }}"
              class="space-y-5 rounded-2xl border border-zinc-200 bg-white p-6 dark:border-zinc-800 dark:bg-zinc-950">
            @csrf

            <div class="grid gap-5 sm:grid-cols-2">
                <div>
                    <label class="block text-sm font-medium">Name</label>
                    <input name="name" value="{{ old('name') }}"
                           class="mt-1 w-full rounded-lg border border-zinc-300 px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-zinc-400 dark:border-zinc-700 dark:bg-zinc-900"
                           required>
                    @error('name') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}"
                           class="mt-1 w-full rounded-lg border border-zinc-300 px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-zinc-400 dark:border-zinc-700 dark:bg-zinc-900"
                           required>
                    @error('email') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium">Subject</label>
                <input name="subject" value="{{ old('subject') }}"
                       class="mt-1 w-full rounded-lg border border-zinc-300 px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-zinc-400 dark:border-zinc-700 dark:bg-zinc-900"
                       required>
                @error('subject') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium">Message</label>
                <textarea name="message" rows="6"
                          class="mt-1 w-full rounded-lg border border-zinc-300 px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-zinc-400 dark:border-zinc-700 dark:bg-zinc-900"
                          required>{{ old('message') }}</textarea>
                @error('message') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror
            </div>

            <button type="submit"
                    class="rounded-lg bg-zinc-900 px-5 py-2 text-sm font-medium text-white hover:bg-black dark:bg-white dark:text-black dark:hover:bg-zinc-200">
                Send message
            </button>
        </form>

    </div>
@endsection
