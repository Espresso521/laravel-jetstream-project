<script setup lang="ts">
import { computed, onBeforeUnmount, onMounted, ref } from 'vue';

const isPlaying = ref(false);
const audioRef = ref<HTMLAudioElement | null>(null);
const scrollY = ref(0);

// 轻微视差
const heroTranslate = computed(() => `translateY(${scrollY.value * 0.15}px)`);
const heroOpacity = computed(() => Math.max(0.6, 1 - scrollY.value / 600));

const togglePlay = async () => {
  const a = audioRef.value;
  if (!a) return;
  try {
    if (a.paused) {
      await a.play();
      isPlaying.value = true;
    } else {
      a.pause();
      isPlaying.value = false;
    }
  } catch (e) {
    // 某些浏览器首次需用户手势，失败可在此提示或静默
    console.debug('Play blocked by browser:', e);
  }
};

const onScroll = () => {
  scrollY.value = window.scrollY || 0;
};

onMounted(() => {
  window.addEventListener('scroll', onScroll, { passive: true });
  // 初始音量稍小，体验更柔和
  if (audioRef.value) audioRef.value.volume = 0.6;
});

onBeforeUnmount(() => {
  window.removeEventListener('scroll', onScroll);
});
</script>

<template>
  <div class="min-h-screen bg-gradient-to-b from-rose-50 via-white to-indigo-50 text-slate-900">
    <!-- Hero -->
    <header class="relative h-[44vh] sm:h-[56vh] overflow-hidden rounded-b-3xl shadow-sm">
      <img
        src="/images/aboutme_hero.jpg"
        alt="hero"
        class="absolute inset-0 w-full h-full object-cover motion-safe:will-change-transform"
        :style="{ transform: heroTranslate, opacity: heroOpacity }"
        loading="eager"
      />
      <div class="absolute inset-0 bg-gradient-to-b from-black/20 via-black/30 to-black/50"></div>

      <div class="relative z-10 h-full flex items-end">
        <div class="container mx-auto px-6 pb-6 sm:pb-10">
          <div class="flex items-end gap-4 sm:gap-6">
            <!-- 头像 -->
            <img
              src="/images/default_feature.jpg"
              alt="avatar"
              class="w-20 h-20 sm:w-28 sm:h-28 rounded-2xl ring-2 ring-white/70 shadow-lg object-cover"
              loading="lazy"
            />

            <div class="text-white drop-shadow">
              <h1 class="text-2xl sm:text-4xl font-extrabold tracking-tight">Kotaku</h1>
              <p class="text-sm sm:text-base opacity-90">
                世上只有一种真正的英雄主义，那就是在认清生活真相之后依然热爱生活。
              </p>

              <!-- 社交链接 -->
              <div class="mt-2 flex items-center gap-4 text-white/90">
                <a
                  href="https://github.com/Espresso521"
                  target="_blank"
                  rel="noopener"
                  class="hover:text-white inline-flex items-center gap-2 text-sm focus:outline-none focus:ring-2 focus:ring-white/70 rounded-md px-1"
                >
                  <svg viewBox="0 0 16 16" width="18" height="18" aria-hidden="true">
                    <path
                      fill="currentColor"
                      fill-rule="evenodd"
                      d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38
                      0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13
                      -.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82
                      .72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07
                      -1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15
                      -.08-.2-.36-1.01.08-2.11 0 0 .67-.21 2.2.82
                      .64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27
                      1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.91.08 2.11
                      .51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95
                      .29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.19
                      0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8
                      c0-4.42-3.58-8-8-8Z"
                    />
                  </svg>
                  <span class="hidden sm:inline">github.com/Espresso521</span>
                </a>

                <a
                  href="mailto:kotaku20220424@gmail.com"
                  class="hover:text-white inline-flex items-center gap-2 text-sm focus:outline-none focus:ring-2 focus:ring-white/70 rounded-md px-1"
                >
                  <svg
                    viewBox="0 0 24 24"
                    width="18"
                    height="18"
                    fill="currentColor"
                    aria-hidden="true"
                  >
                    <path
                      d="M20 4H4a2 2 0 0 0-2 2v12a2
                      2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2
                      2 0 0 0-2-2Zm0 4-8 5L4 8V6l8
                      5 8-5v2Z"
                    />
                  </svg>
                  <span class="hidden sm:inline">kotaku20220424@gmail.com</span>
                </a>
              </div>
            </div>

            <!-- 悬浮音乐按钮（放在 header 内右下角） -->
            <button
              @click="togglePlay"
              :aria-pressed="isPlaying"
              aria-label="Toggle background music"
              class="group absolute bottom-4 right-4 inline-flex items-center justify-center h-12 w-12 rounded-full shadow-lg ring-1 ring-slate-200 bg-white/90 hover:bg-white text-slate-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white/70"
            >
              <!-- Play/Pause 图标 -->
              <span class="pointer-events-none">
                <svg
                  v-if="isPlaying"
                  xmlns="http://www.w3.org/2000/svg"
                  class="w-5 h-5"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                >
                  <rect x="6" y="5" width="4" height="14" rx="1" />
                  <rect x="14" y="5" width="4" height="14" rx="1" />
                </svg>
                <svg
                  v-else
                  xmlns="http://www.w3.org/2000/svg"
                  class="w-5 h-5"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                >
                  <path d="M5 3v18l15-9-15-9z" />
                </svg>
              </span>

              <!-- 迷你均衡器 -->
              <span class="ml-1 flex items-end gap-[2px] h-4">
                <i class="eqbar" :class="{ on: isPlaying }"></i>
                <i class="eqbar delay-1" :class="{ on: isPlaying }"></i>
                <i class="eqbar delay-2" :class="{ on: isPlaying }"></i>
              </span>
            </button>

            <!-- 背景音乐 -->
            <audio ref="audioRef" src="/audio/congcong.mp3" preload="none"></audio>
          </div>
        </div>
      </div>
    </header>

    <!-- 内容 -->
    <main class="container mx-auto px-6 py-10 max-w-4xl">
      <!-- 简介 -->
      <section class="rounded-2xl bg-white/80 backdrop-blur ring-1 ring-slate-200 p-6 shadow-sm">
        <h2 class="text-xl font-bold mb-3">关于我</h2>
        <p class="leading-7 text-slate-700">
          你好，我是 Kotaku，一名喜欢折腾的全栈工程师。长期使用 Laravel / Springboot / React / Vue /
          Flutter / Android 开发， 对所有编程项目都有浓厚兴趣。现在这个站点使用
          <span class="font-semibold">Laravel + Canvas</span> 搭建，前端基于
          <span class="font-semibold">Vue 3 + Inertia + TailwindCSS</span>。
        </p>
        <p class="mt-3 leading-7 text-slate-700">
          工作之外，我会记录一些技术心得、架构实践与工具清单，也会写写生活里的小发现。
          欢迎通过上面的社交链接联系我 🙂
        </p>
      </section>

      <!-- 技能 -->
      <section class="mt-8 rounded-2xl bg-white/70 ring-1 ring-slate-200 p-6">
        <h3 class="text-lg font-semibold mb-4">我在做 / 擅长</h3>
        <ul class="flex flex-wrap gap-2">
          <li class="tag">Laravel</li>
          <li class="tag">Vue 3</li>
          <li class="tag">TypeScript</li>
          <li class="tag">TailwindCSS</li>
          <li class="tag">Inertia</li>
          <li class="tag">Flutter</li>
          <li class="tag">MySQL</li>
          <li class="tag">Docker</li>
          <li class="tag">Android</li>
          <li class="tag">Springboot</li>
        </ul>
      </section>

      <!-- 联系 -->
      <section class="mt-8 rounded-2xl bg-white/70 ring-1 ring-slate-200 p-6">
        <h3 class="text-lg font-semibold mb-3">联系我</h3>
        <p class="text-slate-700">
          对本站或文章有任何建议？或者希望交流项目合作？邮件/Issue 都欢迎！
        </p>
      </section>
    </main>

    <footer class="py-10 text-center text-sm text-slate-500">
      © {{ new Date().getFullYear() }} Kotaku. All rights reserved.
    </footer>
  </div>
</template>

<style scoped>
/* 迷你均衡器动画（尊重减少动画设置） */
.eqbar {
  width: 3px;
  display: inline-block;
  background: currentColor;
  opacity: 0.85;
  height: 4px;
  border-radius: 1px;
  transform-origin: bottom;
  transition: height 0.2s ease;
}
.eqbar.on {
  animation: bounce 0.8s infinite ease-in-out;
}
.eqbar.delay-1.on {
  animation-delay: 0.12s;
}
.eqbar.delay-2.on {
  animation-delay: 0.24s;
}

@keyframes bounce {
  0%,
  100% {
    height: 4px;
  }
  25% {
    height: 12px;
  }
  50% {
    height: 18px;
  }
  75% {
    height: 10px;
  }
}

/* 技能标签 */
.tag {
  @apply px-3 py-1 rounded-full text-sm bg-slate-100 text-slate-700 ring-1 ring-slate-200;
}

/* 关闭动效与视差（系统偏好：减少动态） */
@media (prefers-reduced-motion: reduce) {
  .eqbar.on {
    animation: none !important;
  }
  img[style] {
    transform: none !important;
    opacity: 1 !important;
  }
}
</style>
