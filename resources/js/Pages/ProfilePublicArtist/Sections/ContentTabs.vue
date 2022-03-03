<template>
    <div class="author-info-tabs m-0">
        <ul class="nav nav-tabs mb-0 mt-5 border" id="author-tab" role="tablist">
            <li>
                <a class="active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">
                    Detalle del producto
                </a>
            </li>
            <li>
                <a id="items-tab" data-toggle="tab" href="#items" role="tab" aria-controls="items" aria-selected="false">
                    Comentarios
                </a>
            </li>
            <li>
                <a id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">
                    Autor
                </a>
            </li>
        </ul>
        <div class="tab-content border" id="author-tab-content">
            <div class="tab-pane fade show active p-0" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <DetailsTab />
            </div>
            <div class="tab-pane fade p-0" id="items" role="tabpanel" aria-labelledby="items-tab">
                <CommentsTab />
            </div>
            <div class="tab-pane fade p-0" id="reviews" role="tabpanel" aria-labelledby="items-tab">
                <AuthorTab />
            </div>
        </div>
    </div>
</template>

<script>
    // Tabs
    import DetailsTab from './Tabs/Details.vue'
    import CommentsTab from './Tabs/Comments.vue'
    import AuthorTab from './Tabs/Author.vue'

    export default {
        components: {
            DetailsTab,
            CommentsTab,
            AuthorTab
        }
    }
</script>