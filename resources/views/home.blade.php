<x-layout :title="$title">
    <!-- Hero Section -->
    <section class="relative">
        <div class="relative mx-auto grid max-w-7xl items-center gap-16 px-6 py-24 lg:grid-cols-2 lg:px-8 lg:py-10">
            <div>
                <span
                    class="inline-flex items-center rounded-full border border-indigo-500/30 bg-indigo-500/10 px-4 py-1 text-sm text-indigo-300">
                    Blog Modern Laravel
                </span>

                <h1 class="mt-6 font-semibold text-5xl font-inter leading-tight tracking-tight lg:text-7xl">
                    Temukan Blog Menarik dan Inspiratif Setiap Hari
                </h1>

                <p class="mt-6 max-w-2xl text-lg leading-8 text-zinc-400">
                    Website blog modern berbasis Laravel dan Tailwind CSS 4.0 untuk berbagi tutorial, teknologi, desain,
                    dan berbagai insight menarik lainnya.
                </p>

                <div class="mt-10 flex flex-wrap gap-4">
                    <a href="/posts"
                        class="rounded-2xl text-white bg-indigo-600 px-7 py-4 text-sm font-semibold shadow-lg shadow-indigo-600/20 transition hover:bg-indigo-500">
                        Mulai Membaca
                    </a>

                    <a href="/dashboard/create"
                        class="rounded-2xl border border-white/10 bg-black/80 px-7 py-4 text-sm font-semibold text-white transition hover:bg-black/70">
                        Buat Blog </a>
                </div>
            </div>

            <div class="relative">
                <div class="absolute -left-10 top-10 h-40 w-40 rounded-full blur-3xl"></div>

                <div
                    class="relative overflow-hidden rounded-4xl border border-white/10 bg-white/5 p-6 backdrop-blur-xl">
                    <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?q=80&w=1200&auto=format&fit=crop"
                        alt="Blog Hero" class="h-125 w-full rounded-3xl object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Posts -->
    <section class="mx-auto max-w-7xl px-6 py-20 lg:px-8">
        <div class="flex items-end justify-between gap-6">
            <div>
                <p class="text-sm font-semibold uppercase tracking-[0.3em] text-indigo-400">
                    Featured Posts
                </p>

                <h2 class="mt-3 font-semibold text-4xl font-inter-bold tracking-tight">
                    Blog Pilihan
                </h2>
            </div>

            <a href="/posts" class="text-sm text-zinc-400 transition hover:underline">
                Lihat Semua </a>
        </div>

        <div class="mt-14 grid gap-8 md:grid-cols-2 xl:grid-cols-3">

            <!-- Card 1 -->
            <article
                class="group overflow-hidden rounded-3xl border border-white/10 bg-white/5 transition hover:-translate-y-2 hover:border-indigo-500/40 hover:bg-white/10">
                <div class="overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?q=80&w=1200&auto=format&fit=crop"
                        alt="Programming"
                        class="h-60 w-full object-cover transition duration-500 group-hover:scale-110">
                </div>

                <div class="p-7">
                    <span class="rounded-full bg-indigo-500/10 px-3 py-1 text-xs font-semibold text-indigo-300">
                        Programming
                    </span>

                    <h3 class="mt-5 text-2xl font-bold leading-snug transition group-hover:text-indigo-400">
                        Belajar Laravel dari Dasar Hingga Mahir
                    </h3>

                    <p class="mt-4 text-sm leading-7 text-zinc-400">
                        Pelajari bagaimana membangun website modern menggunakan Laravel dengan struktur yang rapi dan
                        scalable.
                    </p>

                    <div class="mt-6 flex items-center justify-between text-sm text-zinc-500">
                        <span>12 Mei 2026</span>
                        <span>5 Menit Baca</span>
                    </div>
                </div>
            </article>

            <!-- Card 2 -->
            <article
                class="group overflow-hidden rounded-3xl border border-white/10 bg-white/5 transition hover:-translate-y-2 hover:border-indigo-500/40 hover:bg-white/10">
                <div class="overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?q=80&w=1200&auto=format&fit=crop"
                        alt="Design" class="h-60 w-full object-cover transition duration-500 group-hover:scale-110">
                </div>

                <div class="p-7">
                    <span class="rounded-full bg-pink-500/10 px-3 py-1 text-xs font-semibold text-pink-300">
                        Design
                    </span>

                    <h3 class="mt-5 text-2xl font-bold leading-snug transition group-hover:text-indigo-400">
                        Tips Membuat UI Modern dengan Tailwind CSS
                    </h3>

                    <p class="mt-4 text-sm leading-7 text-zinc-400">
                        Gunakan utility-first CSS untuk membangun tampilan website yang clean, cepat, dan responsive.
                    </p>

                    <div class="mt-6 flex items-center justify-between text-sm text-zinc-500">
                        <span>10 Mei 2026</span>
                        <span>7 Menit Baca</span>
                    </div>
                </div>
            </article>

            <!-- Card 3 -->
            <article
                class="group overflow-hidden rounded-3xl border border-white/10 bg-white/5 transition hover:-translate-y-2 hover:border-indigo-500/40 hover:bg-white/10">
                <div class="overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=1200&auto=format&fit=crop"
                        alt="Technology" class="h-60 w-full object-cover transition duration-500 group-hover:scale-110">
                </div>

                <div class="p-7">
                    <span class="rounded-full bg-emerald-500/10 px-3 py-1 text-xs font-semibold text-emerald-300">
                        Technology
                    </span>

                    <h3 class="mt-5 text-2xl font-bold leading-snug transition group-hover:text-indigo-400">
                        Tren Teknologi dan AI di Tahun 2026
                    </h3>

                    <p class="mt-4 text-sm leading-7 text-zinc-400">
                        Mengenal perkembangan artificial intelligence, automation, dan berbagai teknologi terbaru.
                    </p>

                    <div class="mt-6 flex items-center justify-between text-sm text-zinc-500">
                        <span>8 Mei 2026</span>
                        <span>6 Menit Baca</span>
                    </div>
                </div>
            </article>
        </div>
    </section>
</x-layout>
