import Vue from 'vue'
import Vuex from 'vuex'

import player from './modules/player'
import playlists from './modules/playlists'

export default new Vuex.Store({
	modules: {
		player,
		playlists
	}
})
