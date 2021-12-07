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
                                <label>Name</label>
                                <input type="text" class="form-control" v-model="form.name" min="0" required>
                                <div v-if="errors.name">{{ errors.name }}</div>
                            </div>
                            <div class="form-group">
                                <label>Range From</label>
                                <input type="number" class="form-control" v-model="form.range_from" min="0" required>
                            </div>
                            <div class="form-group">
                                <label>Range To</label>
                                <input type="number" class="form-control" v-model="form.range_to" min="1" required>
                            </div>
                            <div class="form-group">
                                <label>Rate</label>
                                <input type="number" class="form-control" v-model="form.interest_rate" min="0" step="0.001" required>
                            </div>
                            <div class="form-group">
                                <label>Type</label>
                                <select v-model="form.interest_type_id" class="form-control" required>
                                    <option :value="type.id" v-for="type in types" :key="type.id">{{type.name}}</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <inertia-link :href="$route('interests.index')" class="btn btn-danger">Back</inertia-link>
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
        interest:Object
    },
    data(){
        return {
            form:{name:'',range_from:'',range_to:'',interest_type_id:'',interest_rate:''}
        }
    },
    created() {
     this.details();
    },
    methods:{
        submit(){
            if (!this.validateRange())
                return this.$toastr.warning('Range from cannot be greater than Range to', 'Warning', []);

            this.$inertia.patch(route("interests.update",this.interest.id),this.form);
            this.$toastr.success('Interest Successfully Updated', 'Updated', []);
        },
        validateRange(){
            return  this.form.range_from < this.form.range_to;
        },
        details(){
         this.form.name = this.interest.name;
         this.form.range_from = this.interest.range_from;
         this.form.range_to = this.interest.range_to;
         this.form.interest_type_id = this.interest.interest_type_id;
         this.form.interest_rate = this.interest.interest_rate;
        }
    },

}
</script>

<style scoped>

</style>
