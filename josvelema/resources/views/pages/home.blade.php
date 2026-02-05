@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section id="hero" class="relative">
    <header>
        <h1 class="text-center text-6xl md:text-4xl">Jos Velema<span class="text-3xl md:text-xl">.com</span></h1>
        <h2 class="text-center text-4xl md:text-2xl rj-text-primary">Phunky dev</h2>
        <p class="text-xl md:text-lg mx-auto" style="white-space: pre-line;">
            Hi! I'm Jos, a web developer based in France, originally from the Netherlands.
            I love all things code and tech, and I'm always looking to improve peoples lives and
            making an positive impact on the world.
            Whether you're looking for a new project or just want to chat, feel free to contact me.

            ltr,
            Jos


        </p>
    </header>
    <aside id="socials">
        <ul>
            <li><a href="https://github.com/codette-net" target="_blank"><i class="fab fa-github pr-4"></i>Codette-net</a></li>
            <li><a href="https://github.com/josvelema" target="_blank"><i class="fab fa-github pr-4"></i>legacy</a></li>
            <li><a href="https://www.linkedin.com/in/JosVelema/" target="_blank"><i class="fab fa-linkedin pr-4"></i></a></li>
        </ul>
    </aside>
</section>


@endsection
