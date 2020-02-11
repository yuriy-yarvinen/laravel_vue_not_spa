<template>
    <div class="container">
		<div v-for="(item, index) in data"
			:key="index" class="row">
			<div class="col-6">{{item.title}}</div>
			<div class="col-6">{{item.url}}</div>

		</div>
    </div>
</template>

<script>
    export default {
		data: function (){
			return {
				data: []
			}
		},
        mounted() {
			this.update();
		},
		methods: {
			update: function(){
				axios.get('/vue/get-json').then((responce)=>{
					this.data = responce.data
				});
			}
		}
    }
</script>
