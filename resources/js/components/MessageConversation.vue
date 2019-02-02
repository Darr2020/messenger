<template>
    <b-media :right-align="writtenByMe" vertical-align="center" class="mb-2">
        <b-img slot="aside" rounded="circle" blank blank-color="#000" width="50" alt="perfil"/>
        <b-card>
            <slot></slot>
        </b-card>
    </b-media>

</template>
<script>
    export default {
        props: {
            writtenByMe: Boolean
        },
        mounted(){
            console.log('valor: ', this.writtenByMe)
        }
    }
</script>

