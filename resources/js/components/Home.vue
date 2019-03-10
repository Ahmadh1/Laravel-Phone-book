<template>
	<nav class="panel column is-offset-2 is-8">
  <p class="panel-heading">
    Home 
    <button class="button is-link is-outlined media-right">
     Add new
    </button>
  </p>
  <div class="panel-block">
    <p class="control has-icons-left">
      <input class="input is-small" type="text" placeholder="search">
    </p>
  </div>
  <a class="panel-block">
    <span class="column is-9">
      bulma
    </span>
    <span class="panel-icon column is-1">
      <i class="has-text-danger fa fa-trash-o" aria-hidden="true"></i>
    </span>
    <span class="panel-icon column is-1">
      <i class="has-text-warning fa fa-pencil" aria-hidden="true"></i>
    </span>
    <span class="panel-icon column is-1">
      <i class="has-text-primary fa fa-eye" aria-hidden="true"></i>
    </span>
  </a>
</nav>
</template>

<script>
	export default {
		mounted() {
			console.log('Home Mounted')
		}
	}
</script>

<style></style>