<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                       My Tasks
                    </div>

                    <div class="panel-body">
                        <table class="table table-bordered table-striped table-responsive">
                            <tbody>
                            <tr>
                                <th>
                                    No.
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Description
                                </th>
                                <th>
                                    Status
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                            <tr v-for="(measurement, index) in measurements">
                                <td>{{ index + 1 }}</td>
                                <td>
                                    {{ measurement.name }}
                                </td>
                                <td>
                                    {{ measurement.description }}
                                </td>
                                <td>
                                    {{ measurement.status }}
                                </td>

                            </tr>
                            </tbody>
                        </table>
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
                task: {
                    name: '',
                    description: ''
                },
                errors: [],
                measurements: [],
                update_task: {}
            }
        },
        mounted()
        {
            this.readTasks();
        },
        methods: {
           
            readTasks()
            {
                axios.get('/measurement')
                    .then(response => {

                        this.measurements = response.data.measurements;

                    });
            },

        }
    }
</script>