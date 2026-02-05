@extends('layouts.app')

@section('title', 'Curriculum Vitae')

@section('content')
    <div class="space-y-8">

        <!-- Header -->
        <section class="rounded-2xl border border-zinc-200 bg-white p-6 dark:border-zinc-800 dark:bg-zinc-950">
            <div class="flex flex-col gap-4 md:flex-row md:items-start md:justify-between">
                <div>
                    <h1 class="text-2xl font-semibold text-zinc-900 dark:text-zinc-100">Jos Velema</h1>
                    <p class="mt-1 text-zinc-700 dark:text-zinc-300">Medior Full Stack Developer (PHP / Laravel)</p>

                    <div class="mt-4 flex flex-wrap gap-2">
                        <a
                            class="inline-flex items-center rounded-lg border border-zinc-200 px-3 py-1.5 text-sm hover:bg-zinc-50 dark:border-zinc-800 dark:hover:bg-zinc-900"
                            href="/cv_pdf/Jos_Velema_CV_012026_English.pdf"
                            target="_blank"
                            rel="noopener"
                        >
                            Download CV (EN)
                        </a>
                        <a
                            class="inline-flex items-center rounded-lg border border-zinc-200 px-3 py-1.5 text-sm hover:bg-zinc-50 dark:border-zinc-800 dark:hover:bg-zinc-900"
                            href="/cv_pdf/Jos_Velema_CV_012026_Nederlands.pdf"
                            target="_blank"
                            rel="noopener"
                        >
                            Download CV (NL)
                        </a>
                    </div>
                </div>

                <!-- Socials -->
                <div class="flex flex-wrap gap-2">
                    <a class="rounded-lg border border-zinc-200 px-3 py-1.5 text-sm hover:bg-zinc-50 dark:border-zinc-800 dark:hover:bg-zinc-900"
                       href="https://github.com/codette-net" target="_blank" rel="noopener">GitHub</a>
                    <a class="rounded-lg border border-zinc-200 px-3 py-1.5 text-sm hover:bg-zinc-50 dark:border-zinc-800 dark:hover:bg-zinc-900"
                       href="https://github.com/josvelema" target="_blank" rel="noopener">GitHub (legacy)</a>
                    <a class="rounded-lg border border-zinc-200 px-3 py-1.5 text-sm hover:bg-zinc-50 dark:border-zinc-800 dark:hover:bg-zinc-900"
                       href="https://www.linkedin.com/in/JosVelema/" target="_blank" rel="noopener">LinkedIn</a>
                </div>
            </div>
        </section>

        <!-- Main grid -->
        <section class="grid gap-6 lg:grid-cols-3">

            <!-- Left column -->
            <aside class="space-y-6 lg:col-span-1">

                <!-- Contact -->
                <div class="rounded-2xl border border-zinc-200 bg-white p-6 dark:border-zinc-800 dark:bg-zinc-950">
                    <h2 class="text-lg font-semibold">Contact</h2>
                    <dl class="mt-4 space-y-3 text-sm">
                        <div class="flex items-start justify-between gap-4">
                            <dt class="text-zinc-500 dark:text-zinc-400">Phone</dt>
                            <dd class="text-zinc-900 dark:text-zinc-100">+31 (0)6 26 28 34 33</dd>
                        </div>
                        <div class="flex items-start justify-between gap-4">
                            <dt class="text-zinc-500 dark:text-zinc-400">E-mail</dt>
                            <dd class="text-zinc-900 dark:text-zinc-100">josvelema@protonmail.com</dd>
                        </div>
                        <div class="flex items-start justify-between gap-4">
                            <dt class="text-zinc-500 dark:text-zinc-400">Languages</dt>
                            <dd class="text-zinc-900 dark:text-zinc-100">Dutch (native), English (fluent), French (conversational)</dd>
                        </div>
                        <div class="flex items-start justify-between gap-4">
                            <dt class="text-zinc-500 dark:text-zinc-400">Location</dt>
                            <dd class="text-zinc-900 dark:text-zinc-100">France</dd>
                        </div>
                        <div class="flex items-start justify-between gap-4">
                            <dt class="text-zinc-500 dark:text-zinc-400">Work status</dt>
                            <dd class="text-zinc-900 dark:text-zinc-100">Available full-time (remote/hybrid NL, relocating 2026)</dd>
                        </div>
                    </dl>
                </div>

                <!-- Skills -->
                <div class="rounded-2xl border border-zinc-200 bg-white p-6 dark:border-zinc-800 dark:bg-zinc-950">
                    <h2 class="text-lg font-semibold">Technical skills</h2>
                    <div class="mt-4 space-y-4 text-sm">
                        <div>
                            <p class="font-medium text-zinc-900 dark:text-zinc-100">Backend</p>
                            <p class="text-zinc-700 dark:text-zinc-300">PHP, Laravel, Python (Django), REST APIs</p>
                        </div>
                        <div>
                            <p class="font-medium text-zinc-900 dark:text-zinc-100">Frontend</p>
                            <p class="text-zinc-700 dark:text-zinc-300">JavaScript (ES6+), HTML5, CSS3, SCSS, Tailwind, Vue (basic)</p>
                        </div>
                        <div>
                            <p class="font-medium text-zinc-900 dark:text-zinc-100">Databases</p>
                            <p class="text-zinc-700 dark:text-zinc-300">MySQL, PostgreSQL, basic NoSQL knowledge</p>
                        </div>
                        <div>
                            <p class="font-medium text-zinc-900 dark:text-zinc-100">DevOps & Tools</p>
                            <p class="text-zinc-700 dark:text-zinc-300">Git/GitHub, Docker (basic), Linux, CI/CD (GitHub Actions – basic)</p>
                        </div>
                        <div>
                            <p class="font-medium text-zinc-900 dark:text-zinc-100">Architecture</p>
                            <p class="text-zinc-700 dark:text-zinc-300">OOP, MVC, Clean Architecture, legacy migrations</p>
                        </div>
                    </div>
                </div>

                <!-- Certifications -->
                <div class="rounded-2xl border border-zinc-200 bg-white p-6 dark:border-zinc-800 dark:bg-zinc-950">
                    <h2 class="text-lg font-semibold">Certifications & training</h2>
                    <ul class="mt-4 list-disc space-y-2 pl-5 text-sm text-zinc-700 dark:text-zinc-300">
                        <li>EXIN Cybersecurity fundamentals ISO27001 (2025)</li>
                        <li>NHA Software Developer (2023–2024)</li>
                    </ul>
                </div>

            </aside>

            <!-- Right column -->
            <div class="space-y-6 lg:col-span-2">

                <!-- Profile -->
                <div class="rounded-2xl border border-zinc-200 bg-white p-6 dark:border-zinc-800 dark:bg-zinc-950">
                    <h2 class="text-lg font-semibold">Profile</h2>
                    <p class="mt-4 text-sm leading-6 text-zinc-700 dark:text-zinc-300">
                        Versatile full stack web developer with 5+ years of professional experience in PHP and web development.
                        Specialized in building and modernizing scalable web applications using Laravel, JavaScript, and SQL.
                        Experienced in migrating legacy PHP systems to modern Laravel architectures, collaborating on team projects,
                        and developing community-driven and SaaS-style platforms. Seeking a team environment to grow towards senior
                        software engineering and architecture roles.
                    </p>
                </div>

                <!-- Experience -->
                <div class="rounded-2xl border border-zinc-200 bg-white p-6 dark:border-zinc-800 dark:bg-zinc-950">
                    <h2 class="text-lg font-semibold">Work experience</h2>

                    <div class="mt-4 space-y-6">

                        <div class="border-l border-zinc-200 pl-4 dark:border-zinc-800">
                            <div class="flex flex-col gap-1 md:flex-row md:items-baseline md:justify-between">
                                <h3 class="font-semibold text-zinc-900 dark:text-zinc-100">Codette Web & Media — Freelance Full Stack Developer</h3>
                                <p class="text-sm text-zinc-500 dark:text-zinc-400">2019 – present</p>
                            </div>
                            <ul class="mt-2 list-disc space-y-1 pl-5 text-sm text-zinc-700 dark:text-zinc-300">
                                <li>Designed, built, and maintained web applications and websites for various clients.</li>
                                <li>Implemented features focused on performance, scalability, and UX.</li>
                                <li>Migrated legacy PHP applications to modern Laravel architectures.</li>
                            </ul>
                        </div>

                        <div class="border-l border-zinc-200 pl-4 dark:border-zinc-800">
                            <div class="flex flex-col gap-1 md:flex-row md:items-baseline md:justify-between">
                                <h3 class="font-semibold text-zinc-900 dark:text-zinc-100">Adriaans & Van Kerchove LDA — Projectmanager & Developer</h3>
                                <p class="text-sm text-zinc-500 dark:text-zinc-400">2021 – present</p>
                            </div>
                            <ul class="mt-2 list-disc space-y-1 pl-5 text-sm text-zinc-700 dark:text-zinc-300">
                                <li>Developed and maintained web platforms for a cultural organization.</li>
                                <li>Provided technical support for digital infrastructure (email, socials, Google Business Profile).</li>
                                <li>Acted as technical point of contact for web/platform-related questions.</li>
                            </ul>
                        </div>

                        <div class="border-l border-zinc-200 pl-4 dark:border-zinc-800">
                            <div class="flex flex-col gap-1 md:flex-row md:items-baseline md:justify-between">
                                <h3 class="font-semibold text-zinc-900 dark:text-zinc-100">Klimaathelpdesk — Volunteer Developer</h3>
                                <p class="text-sm text-zinc-500 dark:text-zinc-400">2024 – present</p>
                            </div>
                            <ul class="mt-2 list-disc space-y-1 pl-5 text-sm text-zinc-700 dark:text-zinc-300">
                                <li>Team development on a Django/Wagtail platform in a multidisciplinary team.</li>
                                <li>Setup/testing of DevOps environments and migration preparations.</li>
                                <li>Preparation/implementation of unit testing and self-hosted infrastructure.</li>
                            </ul>
                        </div>

                        <div class="border-l border-zinc-200 pl-4 dark:border-zinc-800">
                            <div class="flex flex-col gap-1 md:flex-row md:items-baseline md:justify-between">
                                <h3 class="font-semibold text-zinc-900 dark:text-zinc-100">Freelance — Theatre Technician & Technical Production</h3>
                                <p class="text-sm text-zinc-500 dark:text-zinc-400">2010 – 2019</p>
                            </div>
                            <ul class="mt-2 list-disc space-y-1 pl-5 text-sm text-zinc-700 dark:text-zinc-300">
                                <li>Lighting operator, stagehand, and head of technical production for festivals and theatres.</li>
                                <li>Coordinated technical execution for safety and audience experience.</li>
                            </ul>
                        </div>

                    </div>
                </div>

                <!-- Education -->
                <div class="rounded-2xl border border-zinc-200 bg-white p-6 dark:border-zinc-800 dark:bg-zinc-950">
                    <h2 class="text-lg font-semibold">Education</h2>
                    <ul class="mt-4 space-y-3 text-sm text-zinc-700 dark:text-zinc-300">
                        <li class="flex flex-col gap-1 md:flex-row md:items-baseline md:justify-between">
                            <span><span class="font-medium text-zinc-900 dark:text-zinc-100">Full stack Web Developer</span> — Code Institute</span>
                            <span class="text-zinc-500 dark:text-zinc-400">Dec 2018 – Feb 2020</span>
                        </li>
                        <li class="flex flex-col gap-1 md:flex-row md:items-baseline md:justify-between">
                            <span><span class="font-medium text-zinc-900 dark:text-zinc-100">VBO C Electrical Engineering</span> — Sondervick College, Veldhoven</span>
                            <span class="text-zinc-500 dark:text-zinc-400">1996 – 2000</span>
                        </li>
                    </ul>
                </div>

                <!-- Projects -->
                <div class="rounded-2xl border border-zinc-200 bg-white p-6 dark:border-zinc-800 dark:bg-zinc-950">
                    <h2 class="text-lg font-semibold">Open source & projects</h2>
                    <div class="mt-4 grid gap-4 md:grid-cols-2">
                        <a class="rounded-xl border border-zinc-200 p-4 hover:bg-zinc-50 dark:border-zinc-800 dark:hover:bg-zinc-900"
                           href="https://unitedsound.systems" target="_blank" rel="noopener">
                            <div class="font-medium text-zinc-900 dark:text-zinc-100">Unitedsound.systems</div>
                            <div class="mt-1 text-sm text-zinc-700 dark:text-zinc-300">E-commerce platform for an underground techno label.</div>
                        </a>

                        <a class="rounded-xl border border-zinc-200 p-4 hover:bg-zinc-50 dark:border-zinc-800 dark:hover:bg-zinc-900"
                           href="https://undergroundsound.cloud" target="_blank" rel="noopener">
                            <div class="font-medium text-zinc-900 dark:text-zinc-100">UndergroundSound.cloud</div>
                            <div class="mt-1 text-sm text-zinc-700 dark:text-zinc-300">
                                Open source music platform (in development): uploads, streaming, social features.
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </section>

    </div>
@endsection
