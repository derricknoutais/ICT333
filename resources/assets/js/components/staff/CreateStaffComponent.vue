<template>

        <b-form @submit.prevent="onSubmit">

            <b-form-group
                label="First Name"
            >
                <b-form-input
                    placeholder="Input the staff member's first name."
                    v-model.trim="first_name"
                >
                </b-form-input>
                
                <div v-if="errors.first_name">
                    <p v-for="error in errors.first_name" class="text-primary">{{error}}</p>
                </div>

            </b-form-group>
            <b-form-group
                label="Last Name"
            >
                <b-form-input
                    placeholder="Input the staff member's last name."
                    v-model.trim="last_name"
                >
                </b-form-input>
                <div v-if="errors.last_name">
                    <p v-for="error in errors.last_name" class="text-primary">{{error}}</p>
                </div>
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