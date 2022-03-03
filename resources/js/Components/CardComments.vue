<template>
    <div class="thread">
        <ul class="media-list thread-list list-comments">
            <li 
                class="single-thread"
                    v-for="item in commentsFormat"
                    :key="item.comment.id"
                >
                <div class="media m-0 p-3">
                    <div class="media-left">
                        <div style="width: 40px; height: 40px;">
                            <Avatar 
                                :path="item.comment.user.profile.avatar"
                            />
                        </div>
                    </div>
                    <div class="media-body">
                        <div>
                            <div class="media-heading d-flex justify-content-between">
                                <!-- <a href="author.html"> -->
                                <h4>{{ item.comment.user.name }}</h4>
                                <!-- </a> -->
                                <span>{{ item.comment.time }}</span>
                            </div>
                            <!-- <span class="comment-tag buyer">Purchased</span> -->
                            <!-- <a href="#" class="reply-link">Reply</a> -->
                        </div>
                        <div style="width: 85%;">
                            <!-- border-light rounded-pill -->
                            <div class="">
                            {{ item.comment.content }} 
                            </div>
                        </div>
                        <div>
                            <div class="d-flex justify-content-end">
                                <span 
                                    :class="`badge rounded-pill ${reply === item.comment.id ? 'bg-primary text-light': 'bg-light text-dark'}`" 
                                    style="cursor: pointer;"
                                    @click="comentar(item.comment.id)">
                                    Responder
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <ul class="children list-comments-children">
                    <li 
                        class="single-thread depth-2"
                        v-for="question in item.subcomments"
                        :key="question.id"
                    >
                        <div class="media py-3">
                            <div class="media-left">
                                <div  style="width: 40px; height: 40px;">
                                    <Avatar 
                                        :path="question.user.profile.avatar"
                                    />
                                    <!-- <span class="badge rounded-pill bg-light text-dark">Autor</span> -->
                                </div>
                            </div>
                            <div class="media-body">
                                <div class="media-heading d-flex justify-content-between">
                                    <h4>{{ question.user.name }}</h4>
                                    <span>{{ question.time }}</span>
                                </div>
                                <!-- <span class="comment-tag author">Autor</span> -->
                                <div style="width: 85%;">
                                    <div class="">
                                    {{ question.content }} 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- <li class="single-thread depth-2">
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="/img/m1.png" alt="Commentator Avatar">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <h4>Themexylum</h4>
                                    <span>9 Hours Ago</span>
                                </div>
                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra,
                                    justo ut sceleris que the mattis, leo quam aliquet congue
                                    placerat mi id nisi interdum mollis. </p>
                            </div>
                        </div>
                    </li> -->
                </ul>

                <div class="media p-3 d-flex justify-content-center" v-if="user">
                    <div  class="d-flex" style="width: 90%;" v-if="reply === item.comment.id">
                            <div style="width: 40px; height: 40px;">
                                <Avatar 
                                    :path="user.profile.avatar"
                                />
                            </div>
                            <input 
                                type="text" 
                                :class="`border-light rounded-pill`" 
                                placeholder="Escribe aqui..."
                                v-model="textReply"
                            >
                            <div class="d-flex align-items-center btn-send">
                                <span class="material-icons" 
                                    @click="sendComment(item.comment.id)"
                                    >
                                    send
                                </span>
                            </div>
                    </div>
                </div>
                
            </li>
        </ul>
    
        <div class="comment-form-area" v-if="user">
            <h4>Enviar un Comentario</h4>
            <div class="media comment-form">
                <div class="media-left">
                    <div style="width: 50px; height: 50px;">
                        <Avatar 
                            :path="user.profile.avatar"
                        />
                    </div>
                </div>
                <div class="media-body">
                    <form @submit.prevent="sendComment(null)" class="form-group">
                        <textarea 
                            name="reply-comment" 
                            placeholder="Escribe tu comentario..." 
                            v-model="textComment"
                            class="form-control"
                        />
                        <button class="btn btn--sm btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Avatar from '@/Components/Avatar.vue'
import moment from 'moment';

export default ({
    props: ['comments', 'artwork'],
    components: {
        Avatar
    },
    computed: {
        user(){
            return this.$page.props.auth.user;
        }
    },
    data() {
        return {
            reply: null,
            textReply: "",

            commentsFormat: [],
            textComment: ""
        }
    },
    created(){
        console.log('this comment', this)
        this.init();
    },
    methods: {
        init(){
            let newComments = [];
            let mapComments = {};
            let subcommentsPendientes = [];

            newComments = this.comments.reduce((acc, value)=>{
                // Get comments Root
                let time = moment(value.created_at).fromNow();
                let newValue = {
                    id: value.id,
                    comment_id: value.comment_id,
                    content: value.content,
                    user: value.user,
                    time,
                    created_at: value.created_at
                }

                if (!value.comment_id){
                    mapComments[value.id] =  acc.length;
                    
                    acc.push({
                        comment: newValue,
                        subcomments: []
                    });  
                }else {
                    subcommentsPendientes.push(value);
                }
                

                return acc;
            }, [])

            subcommentsPendientes.forEach(subcomment => {
                let index = mapComments[subcomment.comment_id];
                let newComment = newComments[index];

                let time = moment(subcomment.created_at).fromNow();
                let newValue = {
                    id: subcomment.id,
                    comment_id: subcomment.comment_id,
                    content: subcomment.content,
                    user: subcomment.user,
                    time,
                    created_at: subcomment.created_at
                }

                newComment.subcomments = [
                    newValue,
                    ...newComment.subcomments,
                ]

                // console.log('newComment', newComment)
            })

            

        //     this.comments.forEach(value => {
        //         let time = moment(value.created_at).fromNow();
        //         let newValue = {
        //             id: value.id,
        //             comment_id: value.comment_id,
        //             content: value.content,
        //             user: value.user,
        //             time,
        //             created_at: value.created_at
        //         }

        //         if (!value.comment_id){
        //             mapComments[value.id] = newComments.length;
                    
        //             newComments.push({
        //                 comment: newValue,
        //                 subcomments: []
        //             });
        //             //Es root
                    
        //         }else {
        //             let commentRoot = [...newComments].splice(mapComments[value.comment_id], 1)[0];

        //             if (commentRoot){
    
        //                 let newCommentRoot = {
        //                         ...commentRoot,
        //                         subcomments: [
        //                             ...commentRoot.subcomments,
        //                             newValue
        //                         ]
        //                     }
    
        //                 newComments = newComments.map(c => value.comment_id !== c.comment.id ? 
        //                     c
        //                     :
        //                     newCommentRoot    
        //                 )
        //             }
                    
        //             // console.log('commentRoot', commentRoot)
        //             // return newComments;
        //         }
        //         // console.log(newComments, value)
        // });

        this.commentsFormat = newComments;

        console.log('newComments', newComments)
        },
        sendComment(comment_id){
            let form = {};

            if (comment_id){
                form = {
                    artwork_id: this.artwork.id,
                    content: this.textReply,
                    comment_id: comment_id
                }

            }else {
                form = {
                    artwork_id: this.artwork.id,
                    content: this.textComment
                }
            }

            this.$inertia.post(
                route('comments.store'),
                form,
                {
                    preserveScroll: true,
                    onSuccess: (res) => {
                    //     // this.artwork = res.props.artwork;
                        // console.log('res', res.props)
                         this.init();
                    //     // console.log('textComment', this.textComment);
                        this.textComment = "";
                        this.textReply = "";
                        this.reply = null;
                    }
                },
            );

        },
        comentar(commentId){
            this.reply = commentId;
            this.textReply = "";
        }
    }
})
</script>


<style scoped>
    .list-comments-children {
       /*max-height: 160px;
       overflow: auto; */
    }

    .list-comments {
        max-height: 500px;
        overflow: auto;
        border: 1px solid #ddd;
    }
    textarea {
        min-height: 50px !important;
        resize: vertical !important;
    }

    .btn-send {
        cursor: pointer;
    }

    .btn-send:hover {
        opacity: .6;
    }
</style>