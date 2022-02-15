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
                            <label>Type</label>
                            <select v-model="form.credit_score_type_id" class="form-control" required>
                                <option :value="type.id" v-for="type in types" :key="type.id">{{type.name}}</option>
                            </select>
                            <div v-if="errors.credit_score_type_id">{{ errors.credit_score_type_id }}</div>
                        </div>
                        <div class="form-group">
                            <label>Amount Qualified</label>
                            <input type="number" class="form-control" v-model="form.amount_qualified" required>
                        </div>
                        <div class="form-group">
                            <label>Number of days to unlock the next credit score</label>
                            <input type="number" class="form-control" v-model="form.duration" min="1" required>
                        </div>
                        <div class="form-group">
                            <label>Number of Points</label>
                            <input type="number" class="form-control" v-model="form.points" min="1" required>
                            <div v-if="errors.points">{{ errors.points }}</div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <inertia-link :href="$route('credit-scores.index')" class="btn btn-danger">Back</inertia-link>
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
      errors:Object,
      types: Array
    },
    data(){
      return {
          form:{credit_score_type_id:'',amount_qualified:'',duration:'',points:''}
      }
    },
    methods:{
        submit(){
        this.$inertia.post(route("credit-scores.store"),this.form);
        console.log(this.errors);
        if (!this.errors)
        this.$toastr.success('Credit Score Successfully Created', 'Created', []);
        }
    }
}
</script>

<style scoped>

</style>
