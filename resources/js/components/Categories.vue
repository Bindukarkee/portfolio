<template>
    <div id="categories">
        <h4>{{ title }}</h4>
        <!-- <ul>
            <li v-for="(category, key) in categories" :key="key">{{ category.title }}</li>
        </ul>
        <button class='btn btn-primary'>Hello</button> -->
        <table class='table table-bordered table-striped'>
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Title</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(category, key) in categories" :key="key">
                    <td>{{ ++key }}</td>
                    <td>{{ category.title }}</td>
                    <td>{{ category.description }}</td>
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
        title: "Our Categories List",
        categories: []
    }),
    mounted() {
        this.getCategories();
    },
    methods: {
        getCategories() {
            // request api to get categories...
            axios.get('/dashboard/categories')
                .then(response => {
                    this.categories = response.data.data;
                })
                .catch(error => {
                    // TODO: handle error here...
                })
        }
    }
}
</script>