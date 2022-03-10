<template>
<div class="card card-custom">
            <div class="card-body p-0">
                <!--begin: Wizard-->
                <div
                    class="wizard wizard-1"
                    id="kt_wizard_v1"
                    data-wizard-state="step-first"
                    data-wizard-clickable="true"
                >
                    <!--begin: Wizard Nav-->
                    <div class="wizard-nav border-bottom">
                        <div class="wizard-steps p-8 p-lg-10">
                            <div
                                class="wizard-step"
                                data-wizard-type="step"
                                data-wizard-state="current"
                            >
                                <div class="wizard-label">
                                    <i class="wizard-icon flaticon-bus-stop"></i>
                                    <h3 class="wizard-title">1. Setup Location</h3>
                                </div>
                                <i class="wizard-arrow flaticon2-next"></i>
                            </div>
                            <div class="wizard-step" data-wizard-type="step">
                                <div class="wizard-label">
                                    <i class="wizard-icon flaticon-list"></i>
                                    <h3 class="wizard-title">2. Enter Details</h3>
                                </div>
                                <i class="wizard-arrow flaticon2-next"></i>
                            </div>
                            <div class="wizard-step" data-wizard-type="step">
                                <div class="wizard-label">
                                    <i class="wizard-icon flaticon-responsive"></i>
                                    <h3 class="wizard-title">3. Employment Details</h3>
                                </div>
                                <i class="wizard-arrow flaticon2-next"></i>
                            </div>
                            <div class="wizard-step" data-wizard-type="step">
                                <div class="wizard-label">
                                    <i class="wizard-icon flaticon-user"></i>
                                    <h3 class="wizard-title">4. Next Of Kin Details</h3>
                                </div>
                                <i class="wizard-arrow flaticon2-next"></i>
                            </div>
                            <div class="wizard-step" data-wizard-type="step">
                                <div class="wizard-label">
                                    <i class="wizard-icon flaticon-globe"></i>
                                    <h3 class="wizard-title">5. Review and Submit</h3>
                                </div>
                                <i class="wizard-arrow last flaticon2-next"></i>
                            </div>
                        </div>
                    </div>
                    <!--end: Wizard Nav-->

                    <!--begin: Wizard Body-->
                    <div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
                        <div class="col-xl-12 col-xxl-7">
                            <!--begin: Wizard Form-->
                            <form class="form" id="kt_form">
                                <!--begin: Wizard Step 1-->
                                <div
                                    class="pb-5"
                                    data-wizard-type="step-content"
                                    data-wizard-state="current"
                                >
                                    <h3 class="mb-10 font-weight-bold text-dark">
                                        Setup Your Current Location
                                    </h3>
                                    <div class="form-group">
                                        <label>Address Line 1</label>
                                        <input
                                            type="text"
                                            class="form-control form-control-solid form-control-lg"
                                            v-model="details.address1"
                                            placeholder="Address Line 1"
                                            required
                                        />
                                        <span class="form-text text-muted"
                                        >Please enter your Address 1.</span
                                        >
                                    </div>
                                    <div class="form-group">
                                        <label>Address Line 2</label>
                                        <input
                                            type="text"
                                            class="form-control form-control-solid form-control-lg"
                                            v-model="details.address2"
                                            placeholder="Address Line 2"
                                        />
                                        <span class="form-text text-muted"
                                        >Please enter your Address 2.</span
                                        >
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label>Postcode</label>
                                                <input
                                                    type="text"
                                                    class="form-control form-control-solid form-control-lg"
                                                    v-model="details.postcode"
                                                    placeholder="Postcode"
                                                />
                                                <span class="form-text text-muted"
                                                >Please enter your Postcode.</span
                                                >
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input
                                                    type="text"
                                                    class="form-control form-control-solid form-control-lg"
                                                    v-model="details.city"
                                                    placeholder="City"
                                                    required
                                                />
                                                <span class="form-text text-muted"
                                                >Please enter your City.</span
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end: Wizard Step 1-->

                                <!--begin: Wizard Step 2-->
                                <div class="pb-5" data-wizard-type="step-content">
                                    <h4 class="mb-10 font-weight-bold text-dark">
                                        Enter your Personal Details
                                    </h4>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>First Name</label>
                                            <input
                                                type="text"
                                                class="form-control form-control-solid form-control-lg"
                                                v-model="user.first_name"
                                                placeholder="First Name"
                                                required
                                            />
                                            <span class="form-text text-muted"
                                            >Please enter your First Name.</span
                                            >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Last Name</label>
                                            <input
                                                type="text"
                                                class="form-control form-control-solid form-control-lg"
                                                v-model="user.last_name"
                                                required
                                            />
                                            <span class="form-text text-muted"
                                            >Please enter your Last Name.</span
                                            >
                                        </div>
                                    </div>

                                 <div class="row">
                                     <div class="form-group col-md-6">
                                         <label>Phone Number</label>
                                         <input
                                             type="text"
                                             class="form-control form-control-solid form-control-lg"
                                             v-model="user.phone"
                                             required
                                         />
                                         <span class="form-text text-muted"
                                         >Please enter your Phone Number.</span
                                         >
                                     </div>
                                     <div class="form-group col-md-6">
                                         <label>Email</label>
                                         <input
                                             type="email"
                                             class="form-control form-control-solid form-control-lg"
                                             v-model="user.email"
                                             placeholder="Email"
                                             required
                                         />
                                         <span class="form-text text-muted"
                                         >Please enter your Email.</span
                                         >
                                     </div>
                                 </div>
                                    <div class="row">
                                        <div class="col-xl-4">
                                            <div class="form-group">
                                                <label>Date Of Birth</label>
                                                <input
                                                    type="date"
                                                    class="form-control form-control-solid form-control-lg"
                                                    v-model="user.dob"
                                                    placeholder="Date of Birth"
                                                    required
                                                />
                                                <span class="form-text text-muted"
                                                >Please enter your Date Of Birth.</span
                                                >
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <select v-model="user.gender" class="form-control form-control-solid form-control-lg" required>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                                <span class="form-text text-muted"
                                                >Please enter your Gender.</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="form-group">
                                                <label>ID Number</label>
                                                <input
                                                    type="text"
                                                    class="form-control form-control-solid form-control-lg"
                                                    v-model="user.id_number"
                                                    placeholder="ID NUmber"
                                                    required
                                                />
                                                <span class="form-text text-muted"
                                                >Please enter your ID Number.</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>Building Name</label>
                                                <input
                                                    type="text"
                                                    class="form-control form-control-solid form-control-lg"
                                                    v-model="details.building_name"
                                                    placeholder="Building Name"
                                                    required
                                                />
                                                <span class="form-text text-muted"
                                                >Please enter your Building Name</span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>House Number</label>
                                                <input
                                                    type="text"
                                                    class="form-control form-control-solid form-control-lg"
                                                    v-model="details.house_number"
                                                    placeholder="House No."
                                                    required
                                                />
                                                <span class="form-text text-muted"
                                                >Please enter your House No.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end: Wizard Step 2-->

                                <!--begin: Wizard Step 3-->
                                <div class="pb-5" data-wizard-type="step-content">
                                    <h4 class="mb-10 font-weight-bold text-dark">
                                        Employment Details
                                    </h4>
                                    <div class="form-group">
                                        <label>
                                            <input type="checkbox" v-model="details.is_employed" value="1">
                                            Are you currently employed?
                                        </label>
                                    </div>
                                    <div v-if="show">
                                        <div class="form-group">
                                            <label>Salary</label>
                                            <input type="number" class="form-control form-control-solid form-control-lg" placeholder="Salary" v-model="details.salary">
                                        </div>
                                        <div class="form-group">
                                            <label>Other Source of Income Earnings</label>
                                            <input type="number" class="form-control form-control-solid form-control-lg" v-model="details.other_income">
                                        </div>
                                        <div class="form-group">
                                            <label>Company Name</label>
                                            <input type="text" class="form-control form-control-solid form-control-lg" v-model="details.company_name">
                                        </div>
                                        <div class="form-group">
                                            <label>Company Phone</label>
                                            <input type="text" class="form-control form-control-solid form-control-lg" v-model="details.company_phone">
                                        </div>
                                        <div class="form-group">
                                            <label>Employer Name</label>
                                            <input type="text" class="form-control form-control-solid form-control-lg" v-model="details.employer_name">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label>Guarantor Name</label>
                                            <input type="text" class="form-control form-control-solid form-control-lg" v-model="details.guarantor_name" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Guarantor Phone</label>
                                            <input type="text" class="form-control form-control-solid form-control-lg" v-model="details.guarantor_phone" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Guarantor Residence</label>
                                            <input type="text" class="form-control form-control-solid form-control-lg" v-model="details.guarantor_residence" required>
                                        </div>
                                    </div>
                                </div>
                                <!--end: Wizard Step 3-->

                                <!--begin: Wizard Step 4-->
                                <div class="pb-5" data-wizard-type="step-content">
                                    <h4 class="mb-10 font-weight-bold text-dark">
                                        Next of Kin Details
                                    </h4>
                                    <div class="form-group">
                                        <label>First Next Of Kin Name</label>
                                        <input type="text" class="form-control form-control-solid form-control-lg" v-model="details.first_next_of_kin_name" required>

                                        <span class="form-text text-muted"
                                        >Please enter first of kin name.</span
                                        >
                                    </div>
                                    <div class="form-group">
                                        <label>First Next Of Kin Phone</label>
                                        <input type="text" class="form-control form-control-solid form-control-lg" v-model="details.first_next_of_kin_phone" required>

                                        <span class="form-text text-muted"
                                        >Please enter first of kin phone.</span
                                        >
                                    </div>
                                    <div class="form-group">
                                        <label>First Next Of Kin Relationship</label>
                                        <select v-model="details.first_next_of_kin_relationship" class="form-control form-control-solid form-control-lg" required>
                                            <option value="Parent">Parent</option>
                                            <option value="Spouse">Spouse</option>
                                            <option value="Sibling">Sibling</option>
                                            <option value="Aunt/Uncle">Aunt/Uncle</option>
                                            <option value="Colleague">Colleague</option>
                                            <option value="Friend">Friend</option>
                                            <option value="Business Partner">Business Partner</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <span class="form-text text-muted"
                                        >First Next Of Kin Relationship.</span
                                        >
                                    </div>

                                    <div class="form-group">
                                        <label>Second Next Of Kin Name</label>
                                        <input type="text" class="form-control form-control-solid form-control-lg" v-model="details.second_next_of_kin_name" required>
                                        <span class="form-text text-muted">Second Next Of Kin Name.</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Second Next Of Kin Phone</label>
                                        <input type="text" class="form-control form-control-solid form-control-lg" v-model="details.second_next_of_kin_phone" required>
                                        <span class="form-text text-muted">Second Next Of Kin Phone.</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Second Next Of Kin Relationship</label>
                                        <select v-model="details.second_next_of_kin_relationship" class="form-control form-control-solid form-control-lg" required>
                                            <option value="Parents">Parents</option>
                                            <option value="Couple">Couple</option>
                                            <option value="Relative">Relative</option>
                                            <option value="Friends">Friends</option>
                                        </select>
                                        <span class="form-text text-muted">Second Next Of Kin Relationship.</span>
                                    </div>
                                </div>
                                <!--end: Wizard Step 4-->

                                <!--begin: Wizard Step 5-->
                                <div class="pb-5" data-wizard-type="step-content">
                                    <h4 class="mb-10 font-weight-bold text-dark">
                                        Review your Details and Submit
                                    </h4>
                                    <div class="border-bottom mb-5 pb-5">
                                        <div class="font-weight-bold mb-3">
                                            Current Address:
                                        </div>
                                        <div class="line-height-md">
                                            Address 1: {{details.address1}}
                                            <br />
                                            Address 2: {{details.address2}} <br />
                                            Postcode: {{details.postcode}} <br />
                                            City: {{details.city}} <br />
                                        </div>
                                    </div>
                                    <div class="border-bottom mb-5 pb-5">
                                        <div class="font-weight-bold mb-3">
                                            Personal Details:
                                        </div>
                                        <div class="line-height-md">
                                            Name: {{user.first_name}} {{user.last_name}}
                                            <br />
                                            Phone: {{user.phone}}
                                            <br />
                                            Date Of Birth: {{user.dob}}  <br />
                                            Gender: {{user.gender}}  <br />
                                            ID Number: {{user.id_number}}  <br />
                                            Email: {{user.email}}  <br />
                                            Building Name: {{details.building_name}}  <br />
                                            House Number: {{details.house_number}}  <br />
                                        </div>
                                    </div>
                                    <div class="border-bottom mb-5 pb-5">
                                        <div class="font-weight-bold mb-3">
                                            Employment Details:
                                        </div>
                                        <div class="line-height-md" v-if="details.is_employed">
                                            Salary: {{details.salary}}
                                            <br />
                                            Other Source of Income Earnings: {{details.other_income}} <br />
                                            Company Phone: {{details.company_phone}} <br />
                                            Employer name: {{details.employer_name}} <br />

                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <div class="font-weight-bold mb-3">
                                            Next of Kin Details:
                                        </div>
                                        <div class="line-height-md">
                                            First Next Of Kin Name: {{details.first_next_of_kin_name}}
                                            <br />
                                            First Next Of Kin Phone: {{details.first_next_of_kin_phone}} <br />
                                            First Next Of Kin Relationship: {{details.first_next_of_kin_relationship}} <br />
                                            <br>
                                            Second Next Of Kin Name: {{details.second_next_of_kin_name}}
                                            <br />
                                            Second Next Of Kin Phone: {{details.second_next_of_kin_phone}} <br />
                                            Second Next Of Kin Relationship: {{details.second_next_of_kin_relationship}} <br />
                                        </div>
                                    </div>

                                    <div class="mb-5">
                                        <div class="font-weight-bold mb-3">
                                            Guarantor Details:
                                        </div>
                                        <div class="line-height-md">
                                            Guarantor Name: {{details.guarantor_name}}
                                            <br />
                                            Guarantor Phone: {{details.guarantor_phone}} <br />
                                            Guarantor Residence: {{details.guarantor_residence}} <br />
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <!--end: Wizard Step 5-->

                                <!--begin: Wizard Actions -->
                                <div class="d-flex justify-content-between border-top pt-10">
                                    <div class="mr-2">
                                        <button
                                            class="btn btn-light-primary font-weight-bold text-uppercase px-9 py-4"
                                            data-wizard-type="action-prev"
                                        >
                                            Previous
                                        </button>
                                    </div>
                                    <div>
                                        <button
                                            v-on:click="submit"
                                            class="btn btn-success font-weight-bold text-uppercase px-9 py-4"
                                            data-wizard-type="action-submit"
                                        >
                                            Submit
                                        </button>
                                        <button
                                            class="btn btn-primary font-weight-bold text-uppercase px-9 py-4"
                                            data-wizard-type="action-next"
                                        >
                                            Next Step
                                        </button>
                                    </div>
                                </div>
                                <!--end: Wizard Actions -->
                            </form>
                            <!--end: Wizard Form-->
                        </div>
                    </div>
                    <!--end: Wizard Body-->
                </div>
            </div>
            <!--end: Wizard-->
        </div>
</template>

<style lang="scss">

</style>

<script>
export default {
    name: "Wizard-1",
    props:{
        user_detail:Object
    },
    data(){
        return {
            user:{first_name:'',last_name:'',email:'',gender:'',phone:'',id_number:'',dob:''},
            details:{address1:'',address2:'',postcode:'',city:'',is_employed:1,salary:'',other_income:'',company_name:'',company_phone:'',employer_name:'',first_next_of_kin_name:'',first_next_of_kin_phone:'',first_next_of_kin_relationship:'',
                second_next_of_kin_name:'',second_next_of_kin_phone:'',second_next_of_kin_relationship:'',house_number:'',building_name:'',guarantor_name:'',guarantor_phone:'',guarantor_residence:''},
            show:true
        }
    },
    watch:{
        'details.is_employed'(){
            if (this.details.is_employed)
                return this.show = true;
            return this.show = false;
        },
        'user.dob'(){
          console.log(this.user.dob)
        }
    },
    mounted() {
        this.getDetails();
    },
    methods: {
        submit(e){
            if (this.checkAddress() !==true)
                return this.failMessage(this.checkAddress());
            if (this.checkGuarantor() !==true)
                return this.failMessage(this.checkGuarantor());

            if (this.checkPersonalDetails() !==true)
                return this.failMessage(this.checkPersonalDetails());

            if (this.validateSalo() !==true)
                return this.failMessage(this.validateSalo());

            if (this.validateEmployerDetails() !==true)
                return this.failMessage(this.validateEmployerDetails());

            if (this.checkEmployment() !==true)
                return this.failMessage(this.checkEmployment());

            if (this.checkNextOfKin() !==true)
                return this.failMessage(this.checkNextOfKin());
             console.log(this.user_detail)
            axios.post('/api/users/update/'+this.user_detail.id,{user:this.user,details:this.details})
            .then(res => {
                Swal.fire({
                    title: "",
                    text: "Account has been Successfully Created!",
                    icon: "success",
                    confirmButtonClass: "btn btn-secondary"
                });
            }).catch(e => {
                console.log(e)
                alert(e)
            })

            return  'jjjjj';



        },
        validateSalo(){
            if (this.show){
                if (this.details.salary ==='' || this.details.salary <=0)
                    return 'Salary field cannot be empty!';
            }
            return true;
        },
        validateEmployerDetails(){
            if (this.show){
                if (this.details.employer_name ==='')
                    return 'Employer name is required.';
                if (this.details.company_name ==='')
                    return 'Company name is required.';
                if (this.details.company_phone ==='')
                    return 'Company phone is required.';
            }
            return true;
        },
        checkAddress(){
            if (this.details.address1 ==='')
                return 'Address 1 is required';
            if (this.details.city === '')
                return 'City is required';
            return true;
        },
        checkGuarantor(){
            if (this.details.guarantor_name ==='')
                return 'Guarantor name is required';
            if (this.details.guarantor_phone === '')
                return 'Guarantor Phone is required';
            if (this.details.guarantor_residence === '')
                return 'Guarantor Residence is required';
            return true;
        },
        checkPersonalDetails(){
            if (this.user.first_name ==='')
                return 'First Name is required';
            if (this.user.last_name ==='')
                return 'Last Name is required';
            if (this.user.phone ==='')
                return 'Phone is required';
            if (this.user.dob === '')
                return 'Date of Birth Is required';
            if (this.user.gender === '')
                return 'Gender is required';
            if (this.user.id_number === '')
                return 'ID Number is required';
            if(this.user.email === '')
                return 'Email is required';
            return true;
        },
        checkEmployment(){
            if (this.details.is_employed !==''){
                if (this.details.salary ==='')
                    return 'Salary is required';
                if (this.details.company_name ==='')
                    return 'Company Name is required.';
                if(this.details.company_phone ==='')
                    return 'Company Phone is required';
                if (this.details.employer_name ==='')
                    return 'Employer Name is required';
            }
            return true;
        },

        checkNextOfKin(){
            if (this.details.first_next_of_kin_name ==='')
                return 'First Next of Kin name is required.';
            if (this.details.first_next_of_kin_phone ==='')
                return 'First Next of Kin Phone is required.'
            if (this.details.first_next_of_kin_relationship ==='')
                return 'First next of Kin relationship is required.'
            if (this.details.second_next_of_kin_name ==='')
                return 'Second Next of Kin name is required.';
            if (this.details.second_next_of_kin_phone ==='')
                return 'Second Next of Kin Phone is required';
            if (this.details.second_next_of_kin_relationship ==='')
                return 'Second next of Kin relationship is required.'
            return true;
        },
        failMessage(text){
            return Swal.fire({
                title: "Opps!",
                text: text,
                icon: "warning",
                confirmButtonClass: "btn btn-warning"
            });
        },

        getDetails(){
            this.user.first_name = this.user_detail.first_name;
            this.user.last_name = this.user_detail.last_name;
            this.user.email = this.user_detail.email;
            this.user.gender = this.user_detail.gender;
            this.user.phone = this.user_detail.phone;
            this.user.id_number = this.user_detail.id_number;
            this.user.dob = this.user_detail.dob;
            this.user.dob = this.user_detail.dob;

            if (this.user_detail.detail){
                this.details.address1 = this.user_detail.detail.address1;
                this.details.address2 = this.user_detail.detail.address2;
                this.details.postcode = this.user_detail.detail.postcode;
                this.details.city = this.user_detail.detail.city;
                this.details.building_name = this.user_detail.detail.building_name;
                this.details.house_number = this.user_detail.detail.house_number;
                this.details.is_employed = this.user_detail.detail.is_employed;
                this.details.salary = this.user_detail.detail.salary;
                this.details.other_income = this.user_detail.detail.other_income;
                this.details.company_name = this.user_detail.detail.company_name;
                this.details.company_phone = this.user_detail.detail.company_phone;
                this.details.employer_name = this.user_detail.detail.employer_name;
                this.details.first_next_of_kin_name = this.user_detail.detail.first_next_of_kin_name;
                this.details.first_next_of_kin_phone = this.user_detail.detail.first_next_of_kin_phone;
                this.details.first_next_of_kin_relationship = this.user_detail.detail.first_next_of_kin_relationship;
                this.details.second_next_of_kin_name = this.user_detail.detail.second_next_of_kin_name;
                this.details.second_next_of_kin_phone = this.user_detail.detail.second_next_of_kin_phone;
                this.details.second_next_of_kin_relationship = this.user_detail.detail.second_next_of_kin_relationship;
                this.details.guarantor_name = this.user_detail.detail.guarantor_name;
                this.details.guarantor_phone = this.user_detail.detail.guarantor_phone;
                this.details.guarantor_residence = this.user_detail.detail.guarantor_residence;
            }

        }
    }
};
</script>
