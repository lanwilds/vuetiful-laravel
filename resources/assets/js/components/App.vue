<template>
	<v-app>
		<Navbar/>
		<router-view></router-view>
	</v-app>
</template>
<script>
import Navbar from './Navbar.vue';
export default{
	name:'App',
	components:{
		Navbar
	}
}
</script>