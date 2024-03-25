<template>
    <div class="my-9 flex justify-center">
        <div class="leftcard h-[1200px] ml-1 w-[20%]">
            <p></p>
            </div>
            <svg class="filter">
            <filter id="wavy2">
                <feTurbulence x="0" y="0" baseFrequency="0.02" numOctaves="5" seed="1"></feTurbulence>
                <feDisplacementMap in="SourceGraphic" scale="20"></feDisplacementMap>
            </filter>
            </svg>
        <div class="grid grid-cols-4 gap-2 mx-auto w-[75%]">
        <div v-for="book in booklist" :key="book.id" class="w-25%">
        <div class="card ml-2">
        <div class="image container flex justify-item-center overflow-hidden">
        <img src="https://c4.wallpaperflare.com/wallpaper/569/784/53/macro-table-books-blur-wallpaper-preview.jpg" alt="">
        </div>
            <div class="productTitle">
                {{book.title}}
            </div>
            <div class="cost">
                {{book.description}}
            </div>
            <button class="addtocart">Add to Cart</button>
        </div>
        </div>
    </div>
    </div>
</template>

<style scoped>
.leftcard {
  display: flex;
  padding: 2em;
  box-shadow: 2px 3px 20px black, 0 0 60px #8a4d0f inset;
  background: #fffef0;
  filter: url(#wavy2);
}

.filter {
  display: none;
  position: absolute;
}
.card {
  width: 100%;
  height: 376px;
  background: #131313;
  border: 2px solid #C72464;
  border-radius: 40px;
}

.image {
  background-color: #21151a;
  border-radius: 2.5em 2.5em 0em 0em;
  width: 100%;
  height: 43%;
  padding: 2px;
}

.image svg {
  width: 75%;
  margin-top: -322px;
  margin-left: 30px;
}

.productTitle {
  text-align: center;
  font-size: 22px;
  font-weight: bold;
  color: #C72464;
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  margin-top: 10px;
}

.cost {
  text-align: center;
  margin-top: 10px;
  font-weight: bold;
  color: #FF6D00;
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}


.addtocart {
  width: 100%;
  margin-top: 19px;
  padding: 15px;
  border: none;
  border-top: 2px solid #C72464;
  background-color: #131313;
  color: #C72464;
  font-weight: bold;
  font-size: 15px;
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  border-radius: 0px 0px 38px 38px;
  transition: 0.2s;
}

.addtocart:hover {
  background-color: #C72464;
  border-top: 2px solid transparent;
  color: #111111;
}
</style>
<script setup>
import { onMounted,ref } from 'vue';
import axios from 'axios';

const booklist = ref([]);
const fetchUserList = async () => {
    try {
        const response = await axios.get('/api/book/index');
        console.log(response);
        booklist.value = response.data;
    } catch (error) {``
        console.error('Error fetching user list:', error);
    }
};
onMounted(fetchUserList);
</script>
