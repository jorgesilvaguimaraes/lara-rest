<template>
     <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Publicado em 17/07/2018</div>
                <div class="card-body">
                    <form action="">
                        <div class="form-group"> 
                            <label for="inputThought" class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
Someone famous in Source Title</label>
                            
                        </div>
                        <button type="submit" class="btn btn-primary" >Editar</button>
                        <button type="submit" class="btn btn-danger" >Excluir</button>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
