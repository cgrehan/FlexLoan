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
                                <input type="number" class="form-control" v-model="form.rate" min="0" step="0.001" required>
                            </div>
                            <div class="form-group">
                                <label>Type</label>
                                <select v-model="form.penality_type_id" class="form-control" required>
                                    <option :value="type.id" v-for="type in types" :key="type.id">{{type.name}}</option>
                                </select>
                                <div v-if="errors.penality_type_id">{{ errors.penality_type_id }}</div>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <inertia-link :href="$route('penalities.index')" class="btn btn-danger">Back</inertia-link>
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
        penality:Object
    },
    data(){
        return {
            form:{name:'',range_from:'',range_to:'',penality_type_id:'',rate:''}
        }
    },
    created() {
     this.details();
    },
    methods:{
        submit(){
            if (!this.validateRange())
                return this.$toastr.warning('Range from cannot be greater than Range to', 'Warning', []);

            this.$inertia.patch(route("penalities.update",this.penality.id),this.form);
            this.$toastr.success('Penality Successfully Updated', 'Updated', []);
        },
        validateRange(){
            return  this.form.range_from < this.form.range_to;
        },
        details(){
         this.form.name = this.penality.name;
         this.form.range_from = this.penality.range_from;
         this.form.range_to = this.penality.range_to;
         this.form.penality_type_id = this.penality.penality_type_id;
         this.form.rate = this.penality.rate;
        }
    },

}
</script>

<style scoped>

</style>
