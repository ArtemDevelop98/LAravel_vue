//state(свойства)->'state',
// actions(методы)->'dispatch',
// getters(гетеры)->'getters',
// mutation(сЭтеры)->"commit"

import axios from "axios";

const state = {
    person: null
}

const getters = {
    person: () => state.person
}

const actions = {
    getPerson({commit, state, dispatch},id) {
        axios.get(`/api/people/${id}`)
            .then(res => {
                commit('setPerson',res.data.data)
            })
    }
}

const mutations = {
    setPerson(state, person) {
        state.person = person
    }
}
export default {
    state,getters,actions,mutations
}
