<template>
  <div class="h-[1500px] w-full bg-green-200">
    <Nav />
    <div class="bg-white shadow-2xl rounded-3xl h-[1400px] container mx-auto mt-8 pt-9">
      <div class="mx-16 bg-black h-[1300px] pl-4 pt-2 ">
        <div class="grid grid-cols-4 ">
        <div class="card my-3" v-for="friend  in friendList" :key="friend.id">
          <div class="card__img px-2 pt-2">
           <div class=""  v-for="coverimg in friend.cover_photo" :key="coverimg.id">
             <img 
              class="w-full h-[192px]" 
              :src="coverimg.url"
              alt
            />
           </div>
          </div>
          <div class="card__avatar bg-black w-[100px] h-[100px] overflow-hidden rounded-3xl">
            <div class="" v-for="profileimg in friend.profile_image" :key="profileimg">
              <img :src="profileimg.url" alt="" class="  w-[100px] h-[100px]">
            </div>
          </div>
          <div class="card__title">{{friend.name}}</div>
          <div class="card__subtitle"></div>
          <div class="card__wrapper">
            <button class="card__btn">Follow</button>
            <button class="card__btn card__btn-solid">Button</button>
          </div>
        </div>
        </div>
      </div>
    </div>
    <!-- <pre class="bg-white text-black">{{cvimage}}</pre> -->
  </div>
</template>
<style scoped>
.card {
  --main-color: #000;
  --submain-color: #78858f;
  --bg-color: #fff;
  font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
    Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
  position: relative;
  width: 250px;
  height: 354px;
  display: flex;
  flex-direction: column;
  align-items: center;
  border-radius: 20px;
  background: var(--bg-color);
}

.card__img {
  height: 172px;
  width: 100%;
}

.card__img svg {
  height: 100%;
  border-radius: 20px 20px 0 0;
}

.card__avatar {
  position: absolute;
  background: var(--bg-color);
  border-radius: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  top: calc(50% - 57px);
}

.card__avatar svg {
  width: 100px;
  height: 100px;
}

.card__title {
  margin-top: 60px;
  font-weight: 500;
  font-size: 18px;
  color: var(--main-color);
}

.card__subtitle {
  margin-top: 10px;
  font-weight: 400;
  font-size: 15px;
  color: var(--submain-color);
}

.card__btn {
  margin-top: 15px;
  width: 76px;
  height: 31px;
  border: 2px solid var(--main-color);
  border-radius: 4px;
  font-weight: 700;
  font-size: 11px;
  color: var(--main-color);
  background: var(--bg-color);
  text-transform: uppercase;
  transition: all 0.3s;
}

.card__btn-solid {
  background: var(--main-color);
  color: var(--bg-color);
}

.card__btn:hover {
  background: var(--main-color);
  color: var(--bg-color);
}

.card__btn-solid:hover {
  background: var(--bg-color);
  color: var(--main-color);
}
</style>
<script setup>
import Nav from "@/components/layout/nav.vue";
import {onMounted,ref} from "vue";
import axios from "axios";

const friendList = ref([]);
const fetchFriendList = async() => 
{
  const $response = await axios.get("/api/friendall");
  console.log($response.data);
  friendList.value = $response.data?.data;
};
onMounted(fetchFriendList);

</script>