<template>
    <div>
        <app-layout>
            <div class="container">
                <div class="card card-custom">
                    <div class="card-header flex-wrap border-0 pt-6 pb-0">
                        <div class="card-title">
                            <h3 class="card-label">Edit</h3>
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
                            <button type="submit" class="btn btn-primary">Update</button>
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
        types: Array,
        score:Object
    },
    data(){
        return {
            form:{credit_score_type_id:'',amount_qualified:'',duration:'',points:''}
        }
    },
    created() {
     this.details();
    },
    methods:{
        submit(){
            this.$inertia.patch(route("credit-scores.update",this.score.id),this.form);
            console.log(this.errors);
            if (!this.errors)
            this.$toastr.success('Credit Score Successfully Updated', 'Updated', []);
        },
        details(){
         this.form.credit_score_type_id = this.score.credit_score_type_id;
         this.form.amount_qualified = this.score.amount_qualified;
         this.form.points = this.score.points;
         this.form.duration = this.score.duration;
        }
    },

}
</script>

<style scoped>

</style>
