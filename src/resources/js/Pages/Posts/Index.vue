<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { route } from 'ziggy-js';

type PostCard = {
  title: string;
  slug: string;
  summary: string;
  image: string | null;
  body: string;
  time: number;
  date: string;
};

const props = defineProps<{ posts: PostCard[] }>();
const hasFeatured = props.posts && props.posts.length > 0;
const featured = hasFeatured ? props.posts[0] : null;
const rest = hasFeatured ? props.posts.slice(1) : [];
</script>

<template>
  <div class="mx-auto w-full min-h-screen max-w-screen-lg text-slate-900 mb-6">
    <!-- Header 淡蓝色（calm blue）-->
    <header
      class="mx-6 mt-6 mb-8 flex items-center justify-between rounded-xl backdrop-blur px-4 py-3 ring-1 ring-slate-200 bg-[#EFF6FF]"
    >
      <h1 class="text-xl sm:text-2xl font-bold tracking-tight">Kotakuのブログ</h1>
      <Link
        href="/about"
        class="text-sm px-3 py-2 rounded-md border border-slate-300 text-slate-700 hover:bg-slate-50 transition"
      >
        私について
      </Link>
    </header>

    <div class="mx-6 space-y-12">
      <!-- Featured 淡绿色（mint green） -->
      <section v-if="featured" aria-labelledby="featured-title" class="space-y-4">
        <div class="flex items-center gap-2">
          <span
            class="inline-flex items-center rounded-full bg-emerald-100 px-2.5 py-0.5 text-xs font-semibold text-emerald-700 ring-1 ring-inset ring-emerald-200"
          >
            Featured
          </span>
          <h2 id="featured-title" class="text-base font-semibold text-slate-700">注目の記事</h2>
        </div>

        <article
          class="grid grid-cols-1 md:grid-cols-3 gap-8 rounded-2xl shadow-xl shadow-slate-200/70 ring-1 ring-slate-200 p-4 bg-[#ECFDF5]"
        >
          <Link class="md:col-span-2" :href="route('posts.show', { post: featured.slug })">
            <img
              class="w-full aspect-video md:h-full object-cover rounded-xl"
              :src="featured.image || '/images/default_feature.jpg'"
              alt="thumbnail"
            />
          </Link>

          <div class="flex flex-col justify-between">
            <div>
              <p class="text-xs text-slate-500">{{ featured.date }}</p>
              <Link :href="route('posts.show', { post: featured.slug })">
                <h3 class="mt-3 text-2xl font-bold leading-snug hover:underline">
                  {{ featured.title }}
                </h3>
              </Link>
              <p class="mt-4 text-sm leading-6 text-slate-700 line-clamp-6">
                {{ featured.summary }}
              </p>
            </div>

            <div class="mt-6">
              <Link
                class="inline-flex items-center rounded-md bg-emerald-600 px-4 py-2 text-xs font-medium text-white hover:bg-emerald-700 transition"
                :href="route('posts.show', { post: featured.slug })"
              >
                続きを読む
              </Link>
            </div>
          </div>
        </article>
      </section>

      <!-- Divider Title -->
      <div v-if="rest.length" class="flex items-center gap-3">
        <h2 class="text-sm font-semibold text-slate-700">最新の記事</h2>
        <div class="h-px flex-1 bg-gradient-to-r from-slate-200 to-transparent"></div>
      </div>

      <!-- Latest list 淡紫色（lavender）-->
      <section>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
          <article
            v-for="post in rest"
            :key="post.slug"
            class="rounded-2xl ring-1 ring-slate-200 shadow-md shadow-slate-200/60 p-4 hover:shadow-lg hover:ring-slate-300 transition bg-[#F5F3FF]"
          >
            <Link :href="route('posts.show', { post: post.slug })">
              <img
                class="w-full aspect-video object-cover rounded-xl"
                :src="post.image || '/images/default_feature.jpg'"
                alt="thumbnail"
              />
            </Link>

            <p class="mt-3 text-xs text-slate-500">{{ post.date }}</p>
            <Link :href="route('posts.show', { post: post.slug })">
              <h3 class="mt-2 text-lg font-semibold leading-snug hover:underline">
                {{ post.title }}
              </h3>
            </Link>
            <p class="mt-3 text-sm leading-6 text-slate-700 line-clamp-3">
              {{ post.summary }}
            </p>

            <div class="mt-4 flex justify-end">
              <Link
                class="text-xs px-3 py-1.5 rounded-md border border-slate-300 text-slate-700 hover:bg-slate-50 transition"
                :href="route('posts.show', { post: post.slug })"
              >
                続きを読む
              </Link>
            </div>
          </article>
        </div>
      </section>
    </div>
  </div>
</template>
