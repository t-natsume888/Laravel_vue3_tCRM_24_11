<script setup>

import { reactive } from 'vue';
import { Inertia } from '@inertiajs/inertia';

// リアクティブ オブジェクト
const form = reactive({
    title: null,
    content: null
})

// form で submit を押されたときの処理
const submitFunction = () => {
    Inertia.post('/inertia', form)
}

</script>

<template>
    <form @submit.prevent="submitFunction">
        <input type="text" name="title" v-model="form.title">
        <input type="text" name="content" v-model="form.content">
        <button>送信</button>
    </form>
</template>
 