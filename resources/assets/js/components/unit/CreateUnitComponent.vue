<template>

        <b-form @submit.prevent="onSubmit">

            <b-form-group
                label="Unit Code"
                description="e.g:ICT103"
            >
                <b-form-input
                    placeholder="Input the unit code."
                    v-model.trim="code"
                >
                </b-form-input>
                
                <div v-if="errors.code">
                    <p v-for="error in errors.code" class="text-primary">{{error}}</p>
                </div>

            </b-form-group>
            <b-form-group
                label="Unit Name"
            >
                <b-form-input
                    placeholder="Input the unit name."
                    v-model.trim="name"
                >
                </b-form-input>
                <div v-if="errors.name">
                    <p v-for="error in errors.name" class="text-primary">{{error}}</p>
                </div>
            </b-form-group>
            <b-button type="submit" variant="gradient-primary">Submit</b-button>
        </b-form>

</template>

<script>

    export default {
        data : function(){
            return {
                code: '',
                name: '',
                errors : {}
            }
        },
        methods:{
            onSubmit: function(){
                axios.post('/api/data/post/unit', {
                    code: this.code,
                    name: this.name
                })
                .then( response => console.log(response))
                .catch( error =>
                    this.errors = (error.response.data.errors)
                );

            }
        }
    }
</script>