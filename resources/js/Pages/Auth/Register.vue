<template>
<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Register</div>
                    <div class="card-body">
                        <form @submit.prevent="submit">
                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" v-model="user.first_name" required>
                                 </div>
                                    <div class="form-group">
                                        <label>Last Name</label>
                                       <input type="text" class="form-control" v-model="user.last_name" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" v-model="user.email" required autocomplete="email">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" class="form-control" v-model="user.phone" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Age</label>
                                        <input type="number" class="form-control" v-model="user.age" min="10" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select v-model="user.gender" class="form-control" required>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>ID Number</label>
                                        <input type="number" class="form-control" v-model="user.id_number" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Date Of Birth</label>
                                        <input type="date" class="form-control" v-model="user.dob" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" v-model="user.address" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                         <input type="password" class="form-control" v-model="user.password" required autocomplete="new-password">
                                    </div>

                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input  type="password" class="form-control" v-model="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>
                                            <input type="checkbox" v-model="details.is_employed">
                                            Are you currently employed?
                                        </label>
                                    </div>
                                    <div v-if="show">
                                    <div class="form-group">
                                        <label>Salary</label>
                                        <input type="number" class="form-control" v-model="details.salary">
                                    </div>
                                    <div class="form-group">
                                        <label>Other Source of Income Earnings</label>
                                        <input type="number" class="form-control" v-model="details.other_income">
                                    </div>
                                    <div class="form-group">
                                        <label>Company Name</label>
                                        <input type="text" class="form-control" v-model="details.company_name">
                                    </div>
                                    <div class="form-group">
                                        <label>Company Phone</label>
                                        <input type="text" class="form-control" v-model="details.company_phone">
                                    </div>
                                    <div class="form-group">
                                        <label>Employer Name</label>
                                        <input type="text" class="form-control" v-model="details.employer_name">
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label>First Next Of Kin Name</label>
                                        <input type="text" class="form-control" v-model="details.first_next_of_kin_name" required>
                                    </div>
                                    <div class="form-group">
                                        <label>First Next Of Kin Phone</label>
                                        <input type="text" class="form-control" v-model="details.first_next_of_kin_phone" required>
                                    </div>
                                    <div class="form-group">
                                        <label>First Next Of Kin Relationship</label>
                                        <select v-model="details.first_next_of_kin_ralationship" class="form-control" required>
                                            <option value="Parents">Parents</option>
                                            <option value="Couple">Couple</option>
                                            <option value="Relative">Relative</option>
                                            <option value="Friends">Friends</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Second Next Of Kin Name</label>
                                        <input type="text" class="form-control" v-model="details.second_next_of_kin_name" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Second Next Of Kin Phone</label>
                                        <input type="text" class="form-control" v-model="details.second_next_of_kin_phone" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Second Next Of Kin Relationship</label>
                                        <select v-model="details.second_next_of_kin_ralationship" class="form-control" required>
                                            <option value="Parents">Parents</option>
                                            <option value="Couple">Couple</option>
                                            <option value="Relative">Relative</option>
                                            <option value="Friends">Friends</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</template>

<script>
export default {
    data(){
      return {
          user:{first_name:'',last_name:'',email:'',age:'',gender:'',phone:'',id_number:'',dob:'',address:'',password:''},
          password_confirmation:'',
          details:{is_employed:1,salary:'',other_income:'',company_name:'',company_phone:'',employer_name:'',first_next_of_kin_name:'',first_next_of_kin_phone:'',first_next_of_kin_ralationship:'',
              second_next_of_kin_name:'',second_next_of_kin_phone:'',second_next_of_kin_ralationship:''},
          show:true
      }
    },
    watch:{
      'details.is_employed'(){
          if (this.details.is_employed)
          return this.show = true;
          return this.show = false;
      }
    },
    methods:{
        submit(){
            if (!this.validateSalo())
               return  this.$toastr.warning('Salary field cannot be empty', 'Warning', []);
            if (!this.validateEmployerDetails())
             return this.$toastr.warning('All company details and Employer Name are required', 'Warning', []);
            if (!this.passwordMatch())
                return this.$toastr.warning('Password and confirmation password values does not match.', 'Warning', [])

          this.$inertia.post(route("register.user.new"),{user:this.user,details:this.details})
          this.$toastr.success('Your account has been Successfully Created.Please Login to apply the loan', 'Created', []);
        },
        validateSalo(){
          if (this.show){
              if (this.details.salary !=='' && this.details.salary > 0)
                  return true;
              return false;
          }
          return true;
        },
        validateEmployerDetails(){
            if (this.show){
                if (this.details.employer_name !=='' && this.details.company_name !=='' && this.details.company_phone !=='')
                    return true;
              return false;
            }
            return true;
        },
        passwordMatch(){
            if (this.user.password === this.password_confirmation)
                return true;
            return false;
        }
    }
}
</script>

<style scoped>

</style>
