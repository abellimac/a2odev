<template>
    <div class="container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="d-flex justify-content-center">
                        <h1 class="display-3 center">Problem 1: Liga de Padel</h1>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <form @submit.prevent="sendProblem" class="m-3">
                            <div class="form-group">
                                <label for="input-1"></label>
                                <textarea id="input-1" class="form-control" rows="8" maxlength="" name="title" v-model="input1"></textarea>
                            </div>
                            <div class="float-right">
                                <input type="submit" class="btn btn-primary" value="Show results">
                            </div>
                        </form>

                        <div class="card-body">
                            <pre id="output-1">{{output1}}</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Problem1',
        data() {
            return {
              input1: '',
              output1: ''
            }
        },
        methods: {
            sendProblem() {
                axios.post('./problem1', {gamesPlayed: this.input1})
                .then((response) => {
                    let htmlResult = ""
                    response.data.result.forEach(function(item, index) {
                        htmlResult += item + "\n";
                    })
                    this.output1 = htmlResult;
                })
            }
        }
    }
</script>