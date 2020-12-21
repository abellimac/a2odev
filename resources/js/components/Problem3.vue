<template>
    <div class="container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="d-flex justify-content-center">
                        <h1 class="display-3 center">String value</h1>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <form @submit.prevent="sentProblem" class="m-3">
                            <div class="form-group">
                                <label for="input-3"></label>
                                <textarea id="input-3" class="form-control" rows="8" maxlength="" name="title" v-model="input3"></textarea>
                            </div>
                            <div class="float-right">
                                <input type="submit" class="btn btn-primary" value="Mostrar Resultados">
                            </div>
                        </form>

                        <div class="card-body">
                            <pre id="output-2">{{output3}}</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Problem3',
        data() {
            return {
              input3: '',
              output3: ''
            }
        },
        methods: {
            sentProblem() {
                axios.post('./problem3', {data: this.input3})
                .then((response) => {
                    this.output3 = response.data.result;
                })
            }
        }
    }
</script>