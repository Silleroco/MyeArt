<template>
    <img
        :src="`${path ? path : '/avatars/default.jpg'}`" 
        alt="" 
        class="rounded-circle"
        style="width: 100%;"
    />
</template>

<script>
export default {
    props: ["path"]
}
</script>