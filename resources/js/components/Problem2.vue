<template>
    <div class="container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="d-flex justify-content-center">
                        <h1 class="display-3 center">Chest</h1>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <form @submit.prevent="sendProblem" class="m-3">
                            <div class="form-group">
                                <label for="input-2"></label>
                                <textarea id="input-2" class="form-control" rows="8" maxlength="" name="title" v-model="input2"></textarea>
                            </div>
                            <div class="float-right">
                                <input type="submit" class="btn btn-primary" value="Mostrar Resultados">
                            </div>
                        </form>

                        <div class="card-body">
                            <pre id="output-2">{{output2}}</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Problem2',
        data() {
            return {
              input2: '',
              output2: ''
            }
        },
        methods: {
            sendProblem() {
                axios.post('./problem2', {data: this.input2})
                .then((response) => {
                    this.output2 = response.data.result;
                })
            }
        }
    }
</script>