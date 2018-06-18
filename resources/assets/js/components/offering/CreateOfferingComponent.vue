<template>

        <b-form @submit.prevent="onSubmit">
            <div class="row">
                <div class="col-md-6">
                    <b-form-group
                        label="Unit Code">
                        <b-form-select v-model="unit_code" :options="unit_codes" class="mb-3" />
                        </b-form-input>

                        <div v-if="errors.unit_code">
                            <p v-for="error in errors.unit_code" class="text-primary">{{error}}</p>
                        </div>
                    </b-form-group>

                    <b-form-group
                        label="Select Teaching Pattern">
                        <b-form-select v-model="pattern_code" :options="pattern_codes" class="mb-3" />
                        </b-form-input>

                        <div v-if="errors.pattern_code">
                            <p v-for="error in errors.pattern_code" class="text-primary">{{error}}</p>
                        </div>
                    </b-form-group>

                    <b-form-group
                        label="Select Staff">
                        <b-form-select v-model="staff_id" :options="staff_ids" class="mb-3" />
                        </b-form-input>

                        <div v-if="errors.staff_id">
                            <p v-for="error in errors.staff_id" class="text-primary">{{error}}</p>
                        </div>
                    </b-form-group>
                </div>  
                <div class="col-md-6">
                    <b-form-group
                        label="Select Teaching Period">
                        <b-form-select v-model="teaching_period" :options="teaching_periods" class="mb-3" />
                        </b-form-input>

                        <div v-if="errors.teaching_period">
                            <p v-for="error in errors.teaching_period" class="text-primary">{{error}}</p>
                        </div>
                    </b-form-group>

                    <b-form-group
                        label="Select Location">
                        <b-form-select v-model="location" :options="locations" class="mb-3" />
                        </b-form-input>

                        <div v-if="errors.location">
                            <p v-for="error in errors.location" class="text-primary">{{error}}</p>
                        </div>
                    </b-form-group>

                    <b-form-group
                        label="Select Mode">
                        <b-form-select v-model="mode" :options="modes" class="mb-3" />
                        </b-form-input>

                        <div v-if="errors.location">
                            <p v-for="error in errors.mode" class="text-primary">{{error}}</p>
                        </div>
                    </b-form-group>
                </div>
            </div>
            
            <b-form-group
                label="Projected Enrollments">
                <b-form-input v-model="projected_enrollment" :options="projected_enrollments" class="mb-3" />
                </b-form-input>

                <div v-if="errors.location">
                    <p v-for="error in errors.projected_enrollment" class="text-primary">{{error}}</p>
                </div>
            </b-form-group>
            

            <b-form-group
                label="Description">
                <b-form-textarea v-model="description"class="mb-3" rows="6"/>
                </b-form-textarea>

                <div v-if="errors.location">
                    <p v-for="error in errors.projected_enrollment" class="text-primary">{{error}}</p>
                </div>
            </b-form-group>

            <b-form-group>
                <b-form-checkbox
                    v-model="status"
                    value=0
                    unchecked-value=1>
                  Confirmed
                </b-form-checkbox>
            </b-form-group>
            

            <b-button type="submit" variant="gradient-primary">Submit</b-button>
        </b-form>

</template>

<script>

    export default {
        data : function(){
            return {
                first_name: '',
                last_name: '',
                errors : {}
            }
        },
        methods:{
            onSubmit: function(){
                axios.post('/api/data/post/staff', {
                    first_name: this.first_name,
                    last_name: this.last_name
                })
                .then( response => console.log(response))
                .catch( error =>
                    this.errors = (error.response.data.errors)
                );

            }
        }
    }
</script>