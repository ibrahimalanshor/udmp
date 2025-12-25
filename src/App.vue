<script setup>
import { ref } from 'vue';
import { Icon } from '@iconify/vue';

const todos = ref([
  { id: 1, name: 'Menyelesaikan desain UI', done: false },
  { id: 2, name: 'Beli kopi & susu', done: false },
  { id: 3, name: 'Meeting tim pagi', done: true },
  { id: 4, name: 'Bayar tagihan internet', done: true },
]);
</script>

<template>
  <div
    class="bg-neutral-50 text-neutral-900 min-h-screen flex items-center p-4"
  >
    <div
      class="max-w-md w-full mx-auto bg-white border border-neutral-200 rounded-3xl"
    >
      <div
        class="p-6 border-b border-neutral-100 flex items-center justify-between"
      >
        <div class="space-y-1">
          <p
            class="text-xs text-neutral-400 font-semibold tracking-wider uppercase"
          >
            Activities
          </p>
          <h1 class="font-bold text-neutral-900 text-2xl tracking-tight">
            Today
          </h1>
        </div>
        <a
          href=""
          class="block w-10 h-10 border border-neutral-200 text-neutral-900 rounded-full flex items-center justify-center transition hover:bg-black hover:border-black hover:text-white"
        >
          <Icon icon="ri:github-fill" class="size-6" />
        </a>
      </div>
      <div class="p-4 space-y-1">
        <label
          v-for="(todo, index) of todos"
          :key="todo.id"
          :class="[
            'p-3 rounded-xl cursor-pointer transition flex items-center gap-3 transition',
            todo.done ? 'bg-neutral-50/50' : 'hover:bg-neutral-50',
          ]"
        >
          <div class="relative flex items-center">
            <input
              type="checkbox"
              class="appearance-none w-5 h-5 border border-neutral-300 rounded-full peer transition checked:bg-neutral-300"
              v-model="todos[index].done"
            />
            <Icon
              icon="ri:check-fill"
              class="hidden absolute top-1 left-1 size-3 text-white peer-checked:block"
            />
          </div>
          <p
            :class="[
              'font-medium',
              todo.done ? 'text-neutral-400 line-through' : 'text-neutral-700',
            ]"
          >
            {{ todo.name }}
          </p>
        </label>
      </div>
      <div class="p-6 border-t border-neutral-200">
        <input
          type="text"
          class="h-13 px-5 w-full border border-transparent rounded-2xl bg-neutral-50 transition placeholder:text-neutral-400 focus:bg-white focus:outline-none focus:border-neutral-300"
          placeholder="Add new activities"
        />
      </div>
    </div>
  </div>
</template>
