<x-layout :title="$title">

    <!-- Hero -->
    <section class="relative overflow-hidden">
        <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8 lg:py-10">

            <div class="max-w-3xl">
                <span
                    class="inline-flex items-center rounded-full border border-indigo-500/30 bg-indigo-500/10 px-4 py-1 text-sm text-indigo-300">
                    Tentang Kami
                </span>

                <h1 class="mt-6 text-5xl font-semibold leading-tight tracking-tight lg:text-6xl">
                    Membangun Blog Modern untuk Berbagi Insight dan Inspirasi
                </h1>

                <p class="mt-6 text-lg leading-8 text-zinc-400">
                    Kami percaya bahwa teknologi, kreativitas, dan pengetahuan harus mudah diakses oleh semua orang.
                    Blog ini hadir untuk membagikan tutorial, pengalaman, dan berbagai informasi menarik seputar dunia
                    digital.
                </p>
            </div>

        </div>
    </section>

    <!-- About Content -->
    <section class="mx-auto max-w-7xl px-6 py-10 lg:px-8">
        <div class="grid gap-12 lg:grid-cols-2 lg:items-center">

            <!-- Image -->
            <div class="relative">
                <div class="overflow-hidden rounded-4xl border border-white/10 bg-white/5 p-4 backdrop-blur-xl">
                    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=1200&auto=format&fit=crop"
                        alt="About Us" class="h-125 w-full rounded-3xl object-cover">
                </div>
            </div>

            <!-- Text -->
            <div>
                <p class="text-sm font-semibold uppercase tracking-[0.3em] text-indigo-400">
                    Siapa Kami
                </p>

                <h2 class="mt-4 font-semibold text-4xl tracking-tight">
                    Platform Blog Modern Berbasis Laravel
                </h2>

                <p class="mt-6 leading-8 text-zinc-400">
                    Website ini dibuat menggunakan Laravel dan Tailwind CSS dengan fokus pada performa,
                    tampilan modern, dan pengalaman pengguna yang nyaman.
                </p>

                <p class="mt-4 leading-8 text-zinc-400">
                    Kami membahas berbagai topik seperti programming, artificial intelligence,
                    UI/UX design, teknologi terbaru, hingga pengembangan website modern.
                </p>

                <!-- Stats -->
                <div class="mt-10 grid grid-cols-2 gap-6">

                    <div class="rounded-3xl border border-white/10 bg-white/5 p-6">
                        <h3 class="text-4xl font-black text-indigo-400">
                            150+
                        </h3>

                        <p class="mt-2 text-sm text-zinc-400">
                            Blog Dipublikasikan
                        </p>
                    </div>

                    <div class="rounded-3xl border border-white/10 bg-white/5 p-6">
                        <h3 class="text-4xl font-black text-indigo-400">
                            20K+
                        </h3>

                        <p class="mt-2 text-sm text-zinc-400">
                            Pembaca Aktif
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- Vision Mission -->
    <section class="mx-auto max-w-7xl px-6 py-20 lg:px-8">

        <div class="grid gap-8 md:grid-cols-2">

            <!-- Vision -->
            <div class="rounded-4xl border border-white/10 bg-white/5 p-8">
                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-indigo-500/10 text-indigo-400">
                    ✨
                </div>

                <h3 class="mt-6 text-3xl font-semibold">
                    Visi
                </h3>

                <p class="mt-4 leading-8 text-zinc-400">
                    Menjadi platform blog modern yang memberikan edukasi teknologi berkualitas,
                    mudah dipahami, dan bermanfaat bagi semua kalangan.
                </p>
            </div>

            <!-- Mission -->
            <div class="rounded-4xl border border-white/10 bg-white/5 p-8">
                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-indigo-500/10 text-indigo-400">
                    🚀
                </div>

                <h3 class="mt-6 text-3xl font-semibold">
                    Misi
                </h3>

                <p class="mt-4 leading-8 text-zinc-400">
                    Membagikan konten berkualitas seputar teknologi, programming, dan digital creativity
                    dengan tampilan modern serta pengalaman membaca yang nyaman.
                </p>
            </div>

        </div>

    </section>

</x-layout>
