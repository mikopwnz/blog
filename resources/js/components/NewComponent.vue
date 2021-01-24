<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Подпищики</div>
                    <div v-for="item in lala">
                        <div class="card-body">
                            {{item.id}}
                        </div>
                        <div class="card-body">
                            {{item.user.name}}
                        </div>
                        <div class="card-body">
                            {{item.category.title}}
                        </div>
                        <div class="card-body">
                            {{item.title}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'lala'
        ],
        mounted() {
            this.paginate()
            console.log('Component mounted.')
        },
        methods: {
            paginate: function () {
                console.log(this.paginator)
            }
        }

    }
</script>
