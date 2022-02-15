<template>
<div>
    <app-layout>
        <div class="container">
            <div class="card card-custom">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">New</h3>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" @submit.prevent="submit">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" v-model="form.name">
                            <div v-if="errors.name">{{ errors.name }}</div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <inertia-link :href="$route('penality-types.index')" class="btn btn-danger">Back</inertia-link>
                    </form>
                </div>
            </div>
        </div>
    </app-layout>
</div>
</template>

<script>
export default {
    props:{
      errors:Object
    },
    data(){
      return {
          form:{name:''}
      }
    },
    methods:{
        submit(){
        this.$inertia.post(route("penality-types.store"),this.form);
            this.$toastr.success('Penality Type Successfully Created', 'Created', []);
        }
    }
}
</script>

<style scoped>

</style>
