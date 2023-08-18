<script setup>
import Axios from "axios";
import {onMounted, reactive} from 'vue';

const todos = reactive({
    todos: [],
    newTodo: "",
    add: false
})

async function getAllTodos(){
    await Axios.get("http://127.0.0.1:8000/api/todos").then((res) => {
        todos.todos = res.data
    }).catch((error) => {
        console.log(error)
    })
}

 function saveTodos() {
     Axios.post("http://127.0.0.1:8000/api/todos", todos).then((res) => {
         todos.todos = res.data
         todos.newTodo = '';
     }).catch((error) => {
         console.log(error)
     })
 }

function deleteTodo(id) {
    console.log(id)
    Axios.delete("http://127.0.0.1:8000/api/todos/" + id, todos).then((res) => {
        todos.todos = res.data
        todos.newTodo = '';
    }).catch((error) => {
        console.log(error)
    })
}



    onMounted(() => {
        getAllTodos()
    })

</script>
<template>
    <div class="h-full grid place-items-center">
        <div>
        <header class="h-14 mb-4 w-96 bg-heading">
            <h1 class="grid place-items-center h-full font-bold text-xl text-white">Todo List</h1>
        </header>
        <section class="bg-white w-96 shadow-lg">
            <div class="pl-3">
                <ul class="  p-5 ">

                    <li v-for="(todo, index) in todos.todos" :key="todo.id"  class=" last:mb-0 text-xl mb-3 hover:cursor-pointer text-gray-500 capitalize  flex w-full justify-between "><span>{{index + 1}}. {{ todo.todos }}</span>
                        <i class="hover:text-red" @click.prevent="deleteTodo(todo.id)">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hover:stroke-red-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                        </i>
                    </li>
                    <li v-if="todos.todos.length === 0"  class=" text-lg text-gray-500">
                        Nothings to show
                    </li>


                </ul>
            </div>
        </section>
        <footer class=" mt-3 w-96 grid place-items-center h-full">
            <div v-if="!todos.add" class="w-32 h-10 ">
                <button class=" text-white w-full bg-heading p-3 rounded-3xl font-bold flex justify-center" @click="todos.add = !todos.add">
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-bold">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                    </i>
                    Add
                </button>
            </div>
            <div v-if="todos.add" class="w-full h-12">
                <input type="text" autofocus v-model="todos.newTodo" class="pl-5 w-3/4 h-full p-2 focus:outline-heading text-gray-500" placeholder="Type here..">
                <button @click.prevent="saveTodos" class="bg-heading w-1/4 h-full text-white text-lg font-semibold">Add</button>
            </div>

        </footer>
        </div>
    </div>
</template>

