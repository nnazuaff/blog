<x-layout :title="$title">

    <!-- Hero -->
    <section class="relative overflow-hidden">
        <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8 lg:py-10">

            <div class="max-w-3xl">


                <h1 class="mt-6 text-5xl font-semibold leading-tight tracking-tight lg:text-6xl">
                    Hubungi Kami Kapan Saja
                </h1>

                <p class="mt-6 text-lg leading-8 text-zinc-400">
                    Punya pertanyaan, kritik, saran, atau ingin bekerja sama?
                    Silahkan hubungi kami melalui form di bawah ini.
                </p>
            </div>

        </div>
    </section>

    <!-- Contact Section -->
    <section class="mx-auto max-w-7xl px-6 pb-20 lg:px-8">

        <div class="grid gap-10 lg:grid-cols-2">

            <!-- Contact Info -->
            <div class="space-y-6">

                <div class="rounded-4xl border border-white/10 bg-white/5 p-8">
                    <div
                        class="flex h-14 w-14 items-center justify-center rounded-2xl bg-indigo-500/10 text-2xl text-indigo-400">
                        📧
                    </div>

                    <h2 class="mt-6 text-3xl font-semibold">
                        Email
                    </h2>

                    <p class="mt-4 text-zinc-400">
                        contact@blogspace.com
                    </p>
                </div>

                <div class="rounded-4xl border border-white/10 bg-white/5 p-8">
                    <div
                        class="flex h-14 w-14 items-center justify-center rounded-2xl bg-indigo-500/10 text-2xl text-indigo-400">
                        📱
                    </div>

                    <h2 class="mt-6 text-3xl font-semibold">
                        WhatsApp
                    </h2>

                    <p class="mt-4 text-zinc-400">
                        +62 812-3456-7890
                    </p>
                </div>

                <div class="rounded-4xl border border-white/10 bg-white/5 p-8">
                    <div
                        class="flex h-14 w-14 items-center justify-center rounded-2xl bg-indigo-500/10 text-2xl text-indigo-400">
                        📍
                    </div>

                    <h2 class="mt-6 text-3xl font-semibold">
                        Lokasi
                    </h2>

                    <p class="mt-4 text-zinc-400">
                        Indonesia
                    </p>
                </div>

            </div>

            <!-- Contact Form -->
            <div class="rounded-4xl border border-white/10 bg-white/5 p-8 backdrop-blur-xl">

                <h2 class="text-4xl font-semibold tracking-tight">
                    Kirim Pesan
                </h2>

                <p class="mt-3 text-zinc-400">
                    Isi form berikut dan kami akan segera membalas pesan kamu.
                </p>

                <form action="#" method="POST" class="mt-10 space-y-6">

                    <!-- Name -->
                    <div>
                        <label class="mb-2 block text-sm font-medium text-black/300">
                            Nama Lengkap
                        </label>

                        <input type="text" placeholder="Masukkan nama kamu"
                            class="h-14 w-full rounded-2xl border border-white/10 bg-white/5 px-5 text-black outline-none transition focus:border-indigo-500">
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="mb-2 block text-sm font-medium text-black/300">
                            Email
                        </label>

                        <input type="email" placeholder="Masukkan email kamu"
                            class="h-14 w-full rounded-2xl border border-white/10 bg-white/5 px-5 text-black outline-none transition focus:border-indigo-500">
                    </div>

                    <!-- Subject -->
                    <div>
                        <label class="mb-2 block text-sm font-medium text-black/300">
                            Subject
                        </label>

                        <input type="text" placeholder="Masukkan subject"
                            class="h-14 w-full rounded-2xl border border-white/10 bg-white/5 px-5 text-black outline-none transition focus:border-indigo-500">
                    </div>

                    <!-- Message -->
                    <div>
                        <label class="mb-2 block text-sm font-medium text-black/300">
                            Pesan
                        </label>

                        <textarea rows="6" placeholder="Tulis pesan kamu..."
                            class="w-full rounded-2xl border border-white/10 bg-white/5 px-5 py-4 text-black outline-none transition focus:border-indigo-500"></textarea>
                    </div>

                    <!-- Button -->
                    <button
                        class="h-14 text-white w-full rounded-2xl bg-indigo-600 text-sm font-semibold transition hover:bg-indigo-500">
                        Kirim Pesan
                    </button>

                </form>

            </div>

        </div>

    </section>

</x-layout>
