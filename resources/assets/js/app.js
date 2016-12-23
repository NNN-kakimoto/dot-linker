import Vue from 'vue'

import roomChoice from './components/room-choice.vue'
import tagSelect from './components/tag-select.vue'
import searchForm from './components/search-form.vue'
import eventEntryTag from './components/event-entry-tag.vue'

const app = new Vue({
    el: 'body',
    data: {
        msg: 'hello'
    },
    components: {
        roomChoice,
        tagSelect,
        searchForm,
        eventEntryTag
    }
})