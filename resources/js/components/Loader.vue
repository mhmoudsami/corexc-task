<template>
    <!-- Loader -->
    <div class="Screen-shadow-layer" :class="{'is-visible' : isLoading}">
        <div class="Screen-loading" :class="{'is-visible' : isLoading}">
            <i class="fa fa-spinner fa-spin" aria-hidden="true"></i>
        </div>
    </div>
    <!-- End Loader -->
</template>

<script>

    export default {
        props: ['isLoading'],
        created() {
        },
        methods: {
        }
    }
</script>