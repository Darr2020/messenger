<template>
    <div>
        <b-row>
                <b-col cols="2 mt-2">
                    <i class="fas fa-cog"></i>
                </b-col>
                <b-col cols="8">
                    <b-form class="my-2 mx-2">
                        <b-form-input type="text"
                                      class="text-center"
                                      placeholder="Buscar...">
                        </b-form-input>
                    </b-form>
                </b-col>
                <b-col cols="2 mt-2">
                    <i class="fas fa-edit"></i>
                </b-col>
            </b-row>
        <b-list-group>
            <contacts
                v-for="conversation in conversations"
                :key="conversation.id"
                :conversation="conversation"
                @click.native="selectConversation(conversation)">
            </contacts>
            <!--contacts variant="dark"></contacts>
            <contacts variant=""></contacts>
            <contacts variant="secondary"></contacts>
            <contacts variant=""></contacts>
            <contacts variant=""></contacts-->
        </b-list-group>
    </div>
</template>

<script>
    export default{
        data(){
            return{
                conversations: []
            };
        },
        methods: {
            getConversations(){
                axios.get('/api/conversations')
                .then((response) => {
                    this.conversations = response.data;
                });
            },
            selectConversation(conversation){
                console.log(conversation);
            }
        },
        mounted(){
            this.getConversations();
        }
    }
</script>