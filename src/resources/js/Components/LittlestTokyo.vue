<!-- LittlestTokyo.vue -->
<template>
  <div
    ref="wrap"
    :style="{
      width: '100%',
      // 用 CSS 变量覆盖高度；没有变量时用 prop 的像素值
      height: `var(--lt-height, ${height}px)`,
      background: '#bfe3dd',
      overflow: 'hidden',
    }"
  />
</template>

<script setup>
import * as THREE from 'three';
import { OrbitControls } from 'three/examples/jsm/controls/OrbitControls.js';
import { RoomEnvironment } from 'three/examples/jsm/environments/RoomEnvironment.js';
import { DRACOLoader } from 'three/examples/jsm/loaders/DRACOLoader.js';
import { GLTFLoader } from 'three/examples/jsm/loaders/GLTFLoader.js';
import { onBeforeUnmount, onMounted, ref } from 'vue';

const props = defineProps({
  height: { type: Number, default: 280 },
  modelUrl: { type: String, default: '/models/LittlestTokyo.glb' }, // 放到 public/models 下
  dracoPath: { type: String, default: '/js/draco/' }, // 你放到 public/js/draco/
});

const wrap = ref(null);

let renderer, scene, camera, controls, mixer, pmremGenerator, stopId;

onMounted(() => {
  const container = wrap.value;
  if (!container) return;

  const clock = new THREE.Clock();

  // renderer
  renderer = new THREE.WebGLRenderer({ antialias: true });
  renderer.setPixelRatio(window.devicePixelRatio);
  renderer.setSize(container.clientWidth, container.clientHeight);
  container.appendChild(renderer.domElement);

  // scene & env
  scene = new THREE.Scene();
  scene.background = new THREE.Color(0xbfe3dd);
  pmremGenerator = new THREE.PMREMGenerator(renderer);
  scene.environment = pmremGenerator.fromScene(new RoomEnvironment(), 0.04).texture;

  // camera
  camera = new THREE.PerspectiveCamera(40, container.clientWidth / container.clientHeight, 1, 100);
  camera.position.set(5, 2, 8);

  // controls
  controls = new OrbitControls(camera, renderer.domElement);
  controls.target.set(0, 0.5, 0);
  controls.enablePan = false;
  controls.enableDamping = true;
  controls.update();

  // loader + draco
  const dracoLoader = new DRACOLoader();
  dracoLoader.setDecoderPath(props.dracoPath); // e.g. /js/draco/
  const loader = new GLTFLoader();
  loader.setDRACOLoader(dracoLoader);

  loader.load(
    props.modelUrl,
    gltf => {
      const model = gltf.scene;
      model.position.set(1, 1, 0);
      model.scale.set(0.01, 0.01, 0.01);
      scene.add(model);

      mixer = new THREE.AnimationMixer(model);
      gltf.animations?.[0] && mixer.clipAction(gltf.animations[0]).play();

      const loop = () => {
        const dt = clock.getDelta();
        mixer?.update(dt);
        controls.update();
        renderer.render(scene, camera);
        stopId = requestAnimationFrame(loop);
      };
      loop();
    },
    undefined,
    e => console.error(e)
  );

  const onResize = () => {
    camera.aspect = container.clientWidth / container.clientHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(container.clientWidth, container.clientHeight);
  };
  window.addEventListener('resize', onResize);

  onBeforeUnmount(() => {
    window.removeEventListener('resize', onResize);
    stopId && cancelAnimationFrame(stopId);
    controls?.dispose();
    pmremGenerator?.dispose();
    renderer?.dispose();
    renderer?.domElement?.parentNode?.removeChild(renderer.domElement);
  });
});
</script>
