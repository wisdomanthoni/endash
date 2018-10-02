window.Vue = require("vue");

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

window.VueRouter = require("vue-router").default;

window.VueAxios = require("vue-axios").default;

window.Axios = require("axios").default;

axios.defaults.headers.common = {
    "X-Requested-With": "XMLHttpRequest",
    "X-CSRF-TOKEN": document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content")
};

let AppLayout = require("./components/App.vue");

import AddUser from "./components/Adduser.vue";
import ListUsers from "./components/Listusers.vue";
import SuspendedUsers from "./components/Suspendedusers.vue";

Vue.use(VueRouter, VueAxios, axios);

const routes = [
    {
        name: "Listusers",
        path: "/admin/users",
        component: ListUsers
    },
    {
        name: "Adduser",
        path: "/admin/users/add-user",
        component: AddUser
    },
    {
        name: "Suspendedusers",
        path: "/admin/users/suspended",
        component: SuspendedUsers
    }
];

const router = new VueRouter({ mode: "history", routes: routes });
let isAdmin = document.getElementById("admin");
if (isAdmin != undefined) {
    new Vue(Vue.util.extend({ router }, AppLayout)).$mount("#admin");
}

