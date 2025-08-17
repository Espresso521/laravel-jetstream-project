<script setup lang="ts">
import { Link } from '@inertiajs/vue3';

const props = defineProps<{
  post: {
    title: string;
    image: string | null;
    date: string; // e.g. "17 Aug 2025"
    time: number; // e.g. 4 (分钟)
    body: string; // HTML
  };
}>();

const cover = props.post.image || '/images/default_feature.jpg';
</script>

<template>
  <div class="min-h-screen bg-slate-50 text-slate-900">
    <!-- 顶部返回栏 -->
    <header class="border-b bg-white/80 backdrop-blur">
      <div class="mx-auto max-w-screen-lg px-4 sm:px-6">
        <div class="flex h-14 items-center justify-between">
          <Link href="/" class="text-sm text-slate-600 hover:text-slate-900"> ← Back to blog </Link>
          <!-- 如果以后要放“About”之类的，也可以加在右侧 -->
        </div>
      </div>
    </header>

    <!-- 主体 -->
    <main class="mx-auto max-w-screen-lg px-4 sm:px-6 py-8 sm:py-12">
      <article class="overflow-hidden rounded-2xl bg-white ring-1 ring-slate-200 shadow-sm">
        <!-- 头图 -->
        <img :src="cover" alt="cover" class="w-full aspect-video object-cover" />

        <!-- 标题 + 元信息 -->
        <div class="p-6 sm:p-10">
          <h1 class="text-2xl sm:text-4xl font-bold tracking-tight">
            {{ props.post.title }}
          </h1>

          <div class="mt-3 flex flex-wrap items-center gap-x-4 text-xs sm:text-sm text-slate-500">
            <span>{{ props.post.date }}</span>
            <span class="h-1 w-1 rounded-full bg-slate-300"></span>
            <span>{{ props.post.time }} 分で読めます</span>
          </div>

          <!-- 正文（v-html） -->
          <!-- 如果装了 @tailwindcss/typography，可以把 prose 类解开用 -->
          <div
            class="mt-8 leading-8 tracking-wide text-slate-800 space-y-6"
            v-html="props.post.body"
          />
          <!-- 使用 typography 插件时：
          <div class="prose prose-slate mt-8 max-w-none" v-html="props.post.body" /> -->
        </div>
      </article>
    </main>
  </div>
</template>
