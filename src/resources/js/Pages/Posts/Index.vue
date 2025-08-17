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
      class="mx-6 mt-6 mb-8 rounded-xl backdrop-blur px-4 py-3 ring-1 ring-slate-200 bg-[#EFF6FF]"
    >
      <div class="flex items-center justify-between">
        <!-- 左侧：标题 + GitHub 链接 -->
        <div>
          <!-- 渐变“艺术字”标题 -->
          <h1
            class="text-2xl sm:text-3xl font-extrabold tracking-tight bg-gradient-to-r from-rose-500 via-fuchsia-500 to-indigo-500 bg-clip-text text-transparent drop-shadow-sm"
          >
            Kotakuのブログ
          </h1>

          <!-- GitHub 链接（带图标） -->
          <a
            href="https://github.com/Espresso521"
            target="_blank"
            rel="noopener"
            class="mt-1 inline-flex items-center gap-2 text-xs sm:text-sm text-slate-600 hover:text-slate-900"
          >
            <!-- GitHub 图标（内联 SVG，避免装依赖） -->
            <svg viewBox="0 0 16 16" width="16" height="16" aria-hidden="true" class="opacity-80">
              <path
                fill="currentColor"
                fill-rule="evenodd"
                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38
               0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52
               -.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95
               0-.87.31-1.59.82-2.15-.08-.2-.36-1.01.08-2.11 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09
               2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.91.08 2.11.51.56.82 1.27.82 2.15
               0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.19
               0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8Z"
              />
            </svg>
            github.com/Espresso521
          </a>
        </div>

        <!-- 右侧按钮 -->
        <Link
          href="/aboutme"
          class="text-sm px-3 py-2 rounded-md border border-slate-300 text-slate-700 hover:bg-rose-100 transition bg-rose-50"
        >
          私について
        </Link>
      </div>
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
