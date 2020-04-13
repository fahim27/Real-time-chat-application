<template>
   <div>
   				  <li class="list-group-item"><slot></slot></li>

   </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
