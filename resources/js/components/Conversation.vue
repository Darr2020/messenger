<template>
    <div class="h-100">
        <b-row class="h-100">
            <b-col cols="9">
                <b-card title="Title" class="h-100">
                    <MessageConversation
                            v-for="message in messages"
                            :key="message.id"
                            :written-by-me="message.written_by_me">
                        {{ message.content }}
                    </MessageConversation>

                    <div slot="footer">
                        <b-form @submit.prevent="postMessage" autocomplete="off">
                            <b-input-group>
                                <b-form-input type="text" v-model="newMessage"></b-form-input>
                                <b-input-group-append>
                                    <b-button type="submit" variant="primary">Enviar <i class="fas fa-chevron-right"></i></b-button>
                                </b-input-group-append>
                            </b-input-group>
                        </b-form>
                    </div>
                </b-card>
            </b-col>
            <b-col cols="3">
                <b-img rounded="circle" blank width="60" height="60" blank-color="#000" alt="img" class="m-1" title="Perfil"/>
                <p class="text-muted small mb-10">Usuario seleccionado</p>
                <hr>

                <i class="fas fa-search"></i><span class="pointer"> Buscar en la conversación</span>
                <br><br>

                <i class="fas fa-user-edit"></i><span class="pointer"> Editar apodos</span>
                <br><br>

                <i class="fas fa-palette"></i><span class="pointer"> Cambiar color</span>
                <br><br>

                <i class="far fa-thumbs-up"></i><span class="pointer"> Cambiar emoji</span>
                <br><br>

                <i @click="notifications=true" class="far fa-bell" variant="primary">
                    <span class="pointer"> Notificaciones</span>
                </i>
                    <b-modal v-model="notifications"
                             title="Notificaciones de user"
                             :header-bg-variant="headerBgVariant"
                             :header-text-variant="headerTextVariant">
                        <b-container >
                            <b-row class="mb-2 text-center">
                                <b-form-checkbox>
                                    Desactivar notificacionespa
                                </b-form-checkbox>
                            </b-row>
                        </b-container>
                       <div slot="modal-footer" class="w-100">
                         <b-btn class="float-right" variant="dark" @click="notifications=false">
                           Ok
                         </b-btn>
                       </div>
                    </b-modal>
            </b-col>
        </b-row>
    </div>
</template>
<script>
    export default {
        data () {
            return {
                //Modal
                notifications: false,
                headerBgVariant: 'primary',
                headerTextVariant: 'light',
                footerBgVariant: 'light',

                //Messages
                messages: [],
                newMessage: '',
                contactId: 2
            }
        },
        mounted() {
            this.getMessages();
        },
        methods: {
            getMessages(){
                axios.get(`/api/messages?contact_id=${this.contactId}`)
                .then((response) => {
                    this.messages = response.data;
                });
            },
            postMessage(){
                const params = {
                    to_id: this.contactId,
                    content: this.newMessage
                };
                axios.post('/api/messages', params)
                .then((response) => {
                    if(response.data.success){
                        this.newMessage = '';
                        this.getMessages();
                    }
                });
            }
        }
    }
</script>

<style>
    .fa-search, .fa-user-edit, .fa-thumbs-up, .fa-palette, .fa-bell{
        color: #007BFF;
    }
    .pointer{cursor: pointer; color: #000;}
</style>
