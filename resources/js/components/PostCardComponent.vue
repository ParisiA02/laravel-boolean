<template>
    <div id="postcards">
        <div>
            <table border="1">
                <tr>
                    <th>
                        id 
                    </th>
                    <th>
                        sender
                    </th>
                    <th>
                        address
                    </th>
                    <th>
                        text 
                    </th>
                    <th>
                        image 
                    </th>
                </tr>
                <tr v-for="postcard,i in postcards" :key="i">
                    <td>
                        {{postcard.id}}
                    </td>
                    <td>
                        {{postcard.sender}}
                    </td>   
                    <td>
                        {{postcard.address}}
                    </td>   
                    <td>
                        {{postcard.text}}
                    </td>   
                    <td>
                        <img v-if="postcard.image" :src="'storage/postcards/' + postcard.image" width="100px">
                    </td>       
                </tr>    
            </table>

        </div>
    </div>
</template>
<script>
export default {
    data:function(){
        return{
            postcards: []
        }
    },
    mounted(){
        axios.get('/api/postcards/list')
             .then(r => this.postcards = r.data)
             .catch(e => console.error(e));
    }
}
</script>