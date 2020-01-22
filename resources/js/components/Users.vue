<template>
    <div id="users">
        <h4>{{ title }}</h4>
        <!-- <ul>
            <li v-for="(category, key) in users" :key="key">{{ category.title }}</li>
        </ul>
        <button class='btn btn-primary'>Hello</button> -->
        <table class='table table-bordered table-striped'>
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(user, key) in users" :key="key">
                    <td>{{ ++key }}</td>
                    <td>{{ user.name }}</td>
                    <td>{{ user.email }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<!--<style scoped lang="scss">

</style>-->
<script>
import axios from 'axios';

export default {
    data: () => ({
        title: "Our Users List",
        users: []
    }),
    mounted() {
        this.getUsers();
    },
    methods: {
        getUsers() {
            // request api to get users...
            axios.get('/dashboard/users')
                .then(response => {
                    this.users = response.data.data;
                })
                .catch(error => {
                    // TODO: handle error here...
                })
        }
    }
}
</script>