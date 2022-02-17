<template>
    <div id="postacards-comp">
        <table border="1" class="m-auto">
            <tr>
                <th><b>id</b></th>
                <th><b>Sender</b></th>
                <th><b>Addres</b></th>
                <th><b>Text</b></th>
                <th><b>Image</b></th>
            </tr>
            <tr v-for="postcard in postcards" :key="postcard.id">

                 <td>{{postcard.id}}</td>
                <td>{{postcard.sender}}</td>
                <td>{{postcard.addres}}</td>
                <td>{{postcard.text}}</td>
                <td>
                    <img v-if="postcard.image" :src="'/storage/postcards/' + postcard.image" width="100px">
                    <p v-else>N.immagine</p>
                </td>
               

            </tr>
        </table>
    </div>
    

</template>

<script>
export default {
    data(){

        return{
            postcards:[]
        };
    },
    mounted() {
       axios.get('/api/postcards/list')
            .then(r => this.postcards=r.data)
           . catch(e =>console.error(e));
    }
}
</script>